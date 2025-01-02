<?php

namespace App\Http\Controllers\DashboardUser;

use App\Models\Rups;
use App\Models\Karir;
use App\Models\Dokumen;
use App\Models\Category;
use App\Models\Kegiatan;
use App\Models\Pengaduan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\VisitorTrackingService;

class DashboardUserController extends Controller
{
    protected $visitorService;

    public function __construct(
        VisitorTrackingService $visitorService,
    ) {
        $this->visitorService = $visitorService;
    }

    public function index(Request $request)
    {
        $this->visitorService->trackVisitor($request);

        $kegiatan = Kegiatan::latest()->take(5)->get();

        foreach ($kegiatan as $data) {
            $data->title = Str::limit($data->title, 25);
            $data->deskripsi = Str::limit($data->deskripsi, 150);
        }

        return view('dashboard-user.index', compact('kegiatan'));
    }

    public function indexSekilas()
    {
        return view('dashboard-user.tentang-kami.sekilas-sekuritas.index');
    }

    public function indexStruktur()
    {
        return view('dashboard-user.tentang-kami.struktur.index');
    }

    public function indexKepatuhan()
    {
        return view('dashboard-user.tentang-kami.kepatuhan.index');
    }

    public function indexKelola()
    {
        return view('dashboard-user.tentang-kami.kelola.index');
    }

    public function indexPerantara()
    {
        return view('dashboard-user.produk-layanan.perantara.index');
    }

    public function indexRups()
    {   
        $rups = Rups::latest()->get();
        return view('dashboard-user.hubungan-investor.rups.index', compact('rups'));
    }

    public function indexDownload()
    {
        $dokumen = Dokumen::latest()->get();
        return view('dashboard-user.hubungan-investor.download.index', compact('dokumen'));
    }
    
    public function download($dokumenId)
    {
       // Temukan dokumen berdasarkan ID
        $dokumen = Dokumen::find($dokumenId);

        if ($dokumen) {
            // Increment jumlah hits
            $dokumen->hits = $dokumen->hits + 1;
            $dokumen->save();
            
            // Download file
            return response()->download(storage_path('app/public/' . $dokumen->pdf));
        }
        
        return redirect()->route('dokumen')->with('error', 'Dokumen tidak ditemukan');
    }

    public function indexKarir()
    {
        $karir = Karir::latest()->get();
        return view('dashboard-user.karir.index', compact('karir'));
    }

    public function karirDetail($slug)
    {
        $karir = Karir::where('slug', $slug)->firstOrFail();

        $typeCount = Karir::select('type')
        ->selectRaw('count(*) as count')
        ->groupBy('type')
        ->get();

        $karirData = Karir::latest()->take(5)->get();

        $user = Auth::user();

        // Check if the user has already registered for this karir
        $alreadyRegistered = $karir->lamaran()->where('user_id', $user->id)->exists();

        return view('dashboard-user.karir.detail', compact('karir','typeCount','karirData','alreadyRegistered'));
    }

    public function indexFaq()
    {
        return view('dashboard-user.bantuan.faq.index');
    }

    public function indexKebijakan()
    {
        return view('dashboard-user.bantuan.kebijakan-privasi.index');
    }

    public function showKegiatan($slug)
    {
        // Mengambil data kegiatan berdasarkan slug
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();

        // Increment jumlah views
        $kegiatan->increment('views');

        // Mengambil data kegiatan terbaru
        $kegiatanData = Kegiatan::latest()->take(4)->get();

        $category = Category::all();
        // Mengambil kategori yang digunakan dalam kegiatan
        $categories = Category::whereHas('kegiatan')->get();

        // Menghitung total kategori yang digunakan dalam kegiatan
        $totalCategories = $categories->count();

        return view('dashboard-user.kegiatan.index', compact('kegiatan', 'kegiatanData', 'category', 'totalCategories'));
    }

    public function allKegiatan()
    {
        // Get paginated main kegiatan with category relationship
        $kegiatans = Kegiatan::with('category')
            ->latest()
            ->paginate(5);

        // Apply description limit
        foreach ($kegiatans as $item) {
            $item->deskripsi = Str::limit($item->deskripsi, 150);
        }

        // Get recent kegiatan for sidebar
        $kegiatanData = Kegiatan::latest()
            ->take(5)  // Limit to reasonable number
            ->get();

        // Get categories with kegiatan count
        $category = Category::withCount('kegiatan')
            ->having('kegiatan_count', '>', 0)
            ->get();

        $totalCategories = $category->count();

        return view('dashboard-user.kegiatan.kegiatans', compact(
            'kegiatans',
            'kegiatanData', 
            'category',
            'totalCategories'
        ));
    }

    public function indexPengaduan()
    {
        return view('dashboard-user.pengaduan.index');
    }

    public function indexForm()
    {
        return view('dashboard-user.pengaduan.form');
    }

     public function storeForm(Request $request, Pengaduan $pengaduan)
     {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'lokasi' => 'required|max:255',
            'tanggal' => 'required|date_format:Y-m-d',
            'waktu' => 'required|date_format:H:i',
            'nama_pelaku' => 'required|max:255',
            'uraian_kejadian' => 'required',
            'pdf' => 'required|file|mimes:pdf|max:4096'
        ]);

        // Menyimpan file buku PDF ke storage
        if ($request->hasFile('pdf')) {
            $pdfFileName = $request->file('pdf')->store('file-pengaduan');
            $validateData['pdf'] = $pdfFileName;
        }

        Pengaduan::create($validateData);

        // Menampilkan notifikasi sukses dan redirect
        toast()->success('Berhasil', 'Pengaduan Berhasil dikirim');
        return redirect('/fakta-kepatuhan/whistleblowing-system')->withInput();
     }
}
