<?php

namespace App\Http\Controllers\DashboardAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function __construct()
    {
        // Middleware auth memastikan hanya pengguna yang sudah login yang dapat mengakses
        $this->middleware('auth');

        // Cek apakah pengguna yang terautentikasi adalah admin
        $this->middleware(function ($request, $next) {
            $user = Auth::user();

            // Jika pengguna bukan admin, kembalikan ke halaman home
            if ($user->role !== 'admin') {
                return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini');
            }

            // Jika admin, lanjutkan ke halaman yang diminta
            return $next($request);
        });
    }

    public function index()
    {
        return view('dashboard-admin.index');
    }
}
