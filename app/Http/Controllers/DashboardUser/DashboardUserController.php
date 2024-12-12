<?php

namespace App\Http\Controllers\DashboardUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('dashboard-user.index');
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
        return view('dashboard-user.hubungan-investor.rups.index');
    }

    public function indexDownload()
    {
        return view('dashboard-user.hubungan-investor.download.index');
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
}
