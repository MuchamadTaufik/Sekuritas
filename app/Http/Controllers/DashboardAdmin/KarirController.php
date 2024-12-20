<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Karir;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKarirRequest;
use App\Http\Requests\UpdateKarirRequest;
use App\Models\Jurusan;
use Cviebrock\EloquentSluggable\Services\SlugService;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karir = Karir::latest()->get();
        return view('dashboard-admin.karir.index', compact('karir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        return  view('dashboard-admin.karir.create', compact('jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKarirRequest $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'type' => 'required|in:Fresh Graduate,Berpengalaman',
            'tentang_pekerjaan' => 'required',
            'tanggal_mulai' => 'required|date_format:Y-m-d',
            'tanggal_berakhir' => 'required|date_format:Y-m-d',
            'batas_usia' => 'required|numeric',
            'ipk' => 'required|numeric|min:0|max:4',
            'kuota' => 'required|numeric',
            'persyaratan' => 'required',
            'lokasi_test' => 'required|max:255',
            'informasi_tambahan' => 'nullable'
        ]);

        $validateData['slug'] = SlugService::createSlug(Karir::class, 'slug', $validateData['title']);

        $validateData['available'] = $validateData['kuota'];

        Karir::create($validateData);

        // Menampilkan notifikasi sukses dan redirect
        toast()->success('Berhasil', 'Info Karir Berhasil ditambahkan');
        return redirect('/dashboard/karir')->withInput();
    }
    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $karir = Karir::where('slug', $slug)->firstOrFail();

        return view('dashboard-admin.karir.show', compact('karir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $karir = Karir::where('slug', $slug)->firstOrFail();

        return view('dashboard-admin.karir.edit', compact('karir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKarirRequest $request, $slug)
    {
        $karir = Karir::where('slug', $slug)->firstOrFail();
        try {
            $rules = [
                'title' => 'required|max:255',
                'type' => 'required|in:Fresh Graduate,Berpengalaman',
                'tentang_pekerjaan' => 'required',
                'tanggal_mulai' => 'required|date_format:Y-m-d',
                'tanggal_berakhir' => 'required|date_format:Y-m-d',
                'batas_usia' => 'required|numeric',
                'ipk' => 'required|numeric|min:0|max:4',
                'kuota' => 'required|numeric',
                'persyaratan' => 'required',
                'lokasi_test' => 'required|max:255',
                'informasi_tambahan' => 'nullable'
            ];

            $validateData = $request->validate($rules);
            
            // Get current available and applied positions
            $currentAvailable = $karir->available;
            $currentApplied = $karir->kuota - $currentAvailable;
            
            // Calculate new available based on new quota
            $newQuota = $validateData['kuota'];
            $newAvailable = max(0, $newQuota - $currentApplied);
            
            // Add available to validated data
            $validateData['available'] = $newAvailable;
            
            // Create slug
            $validateData['slug'] = SlugService::createSlug(Karir::class, 'slug', $validateData['title']);
            
            // Update karir with new data
            $karir->update($validateData);

            alert()->success('Berhasil', 'Info Karir Berhasil diubah');
            return redirect('/dashboard/karir')->withInput();
            
        } catch (\Exception $e) {
            alert()->error('Gagal', 'Terjadi kesalahan: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $karir = Karir::where('slug', $slug)->firstOrFail();
        
        Karir::destroy($karir->id);

        alert()->success('Success', 'Info Karir berhasil dihapus');
        return redirect('/dashboard/karir')->withInput();
    }
}
