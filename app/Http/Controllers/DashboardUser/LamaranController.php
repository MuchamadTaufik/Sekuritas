<?php

namespace App\Http\Controllers\DashboardUser;

use App\Models\Karir;
use App\Models\Jurusan;
use App\Models\Lamaran;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLamaranRequest;
use App\Http\Requests\UpdateLamaranRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lamaran = Lamaran::latest()->get();

        return view('dashboard-admin.lamaran.index', compact('lamaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        $karir = Karir::where('slug', $slug)->firstOrFail();
        $today = Carbon::now('Asia/Jakarta')->startOfDay();
        
        // Check if career is still active
        if ($today->gt(Carbon::parse($karir->tanggal_berakhir)) || $karir->available <= 0) {
            toast()->error('Error', 'Lowongan ini sudah tidak tersedia');
            return redirect()->back();
        }
        
        $user = Auth::user();
        $karirData = Karir::latest()->take(5)->get();
        $jurusans = Jurusan::all();

        return view('dashboard-user.karir.form', compact('karir', 'user', 'karirData', 'jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLamaranRequest $request)
    {
        try {
            DB::beginTransaction();
            
            $karir = Karir::findOrFail($request->karir_id);
            $today = Carbon::now('Asia/Jakarta');
            
            // Check if career is still active
            if ($today->gt(Carbon::parse($karir->tanggal_berakhir))) {
                toast()->error('Error', 'Periode lamaran sudah berakhir');
                return redirect()->back()->withInput();
            }

            // Check available positions
            if ($karir->available <= 0) {
                toast()->error('Error', 'Kuota lowongan sudah penuh');
                return redirect()->back()->withInput();
            }

            // Check if applicant's IPK meets the minimum requirement
            if ($request->ipk < $karir->ipk) {
                toast()->error('Error', 'IPK tidak sesuai dengan spesifikasi yang dibutuhkan');
                return redirect()->back()->withInput();
            }

            // Check if user has already applied for this position
            $existingApplication = Lamaran::where('user_id', $request->user_id)
                                        ->where('karir_id', $request->karir_id)
                                        ->exists();
            
            if ($existingApplication) {
                toast()->error('Error', 'Anda sudah pernah melamar untuk posisi ini');
                return redirect()->back()->withInput();
            }

            // Generate nomor_lamar
            $year = $today->format('Y');
            $count = Lamaran::whereYear('created_at', $year)->count() + 1;
            $nomor_lamar = sprintf('%03d-bjb%03d-sec-%d', $count, $request->karir_id, $year);

            $validateData = $request->validate([
                'user_id' => 'required|exists:users,id',
                'karir_id' => 'required|exists:karirs,id',
                'jurusan_id' => 'required|exists:jurusans,id',
                'cv' => 'required|file|mimes:pdf,jpeg,png,jpg,gif|max:4096',
                'pas_foto' => 'required|image|file|max:4096',
                'lamaran' => 'required|file|mimes:pdf,jpeg,png,jpg,gif|max:4096',
                'ipk' => 'required|numeric|min:0|max:4',
                'pendidikan_terakhir' => 'required|in:SMA/SMK,D1,D2,D3,S1,S2,S3',
                'universitas' => 'required|max:255',
            ]);

            // Add additional data
            $validateData['nomor_lamar'] = $nomor_lamar;
            $validateData['tanggal_lamar'] = $today->toDateString();
            $validateData['slug'] = SlugService::createSlug(Lamaran::class, 'slug', $nomor_lamar);

            // Handle file uploads
            if ($request->hasFile('cv')) {
                $cvFileName = $request->file('cv')->store('file-cv');
                $validateData['cv'] = $cvFileName;
            }

            if ($request->hasFile('pas_foto')) {
                $pas_fotoFileName = $request->file('pas_foto')->store('file-pas_foto');
                $validateData['pas_foto'] = $pas_fotoFileName;
            }

            if ($request->hasFile('lamaran')) {
                $lamaranFileName = $request->file('lamaran')->store('file-lamaran');
                $validateData['lamaran'] = $lamaranFileName;
            }

            // Create the application record
            $lamaran = Lamaran::create($validateData);

            // Update available positions in karir
            $karir->available = $karir->available - 1;
            $karir->save();

            DB::commit();

            toast()->success('Success', 'Lamaran berhasil dikirim, silahkan cek secara berkala pada profile anda.');
            return redirect()->back();

        } catch (\Exception $e) {
            DB::rollBack();
            toast()->error('Error', 'Terjadi kesalahan saat mengirim lamaran');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $lamaran = Lamaran::where('slug',$slug)->firstOrFail();

        return view('dashboard-admin.lamaran.show', compact('lamaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lamaran $lamaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLamaranRequest $request, Lamaran $lamaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lamaran $lamaran)
    {
        //
    }
}
