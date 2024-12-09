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

    public function indexSejarah()
    {
        return view('dashboard-user.tentang-kami.sejarah.index');
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
        return view('dashboard-user.tata-kelola.kelola.index');
    }

    public function indexPedoman()
    {
        return view('dashboard-user.tata-kelola.pedoman.index');
    }

    public function indexKebijakan()
    {
        return view('dashboard-user.tata-kelola.kebijakan.index');
    }

    public function indexEtik()
    {
        return view('dashboard-user.tata-kelola.etik.index');
    }
}
