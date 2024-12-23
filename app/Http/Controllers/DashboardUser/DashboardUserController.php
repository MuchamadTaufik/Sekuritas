<?php

namespace App\Http\Controllers\DashboardUser;

use App\Models\Rups;
use App\Models\Dokumen;
use App\Models\Kegiatan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        $kegiatan = Kegiatan::latest()->take(10)->get();

        foreach ($kegiatan as $data) {
            $data->title = Str::limit($data->title, 50);
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
        return view('dashboard-user.karir.index');
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
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();
        $kegiatanData = Kegiatan::latest()->get();
        return view('dashboard-user.kegiatan.index', compact('kegiatan','kegiatanData'));
    }
}
