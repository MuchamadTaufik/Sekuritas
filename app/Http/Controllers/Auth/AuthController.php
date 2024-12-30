<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function authenticate(Request $request) {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6'
        ]);

        // Coba autentikasi
        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Regenerasi session ID untuk mencegah session fixation
            $request->session()->regenerate();

            $user = Auth::user();

            // Cek role user
            if ($user->role === 'admin') {
                toast()->success('Hallo', 'Selamat Datang Admin Kami' . $user->name);
                return redirect()->intended('/dashboard');
            } elseif ($user->role === 'hrd') {
                toast()->success('Hallo', 'Selamat Datang HRD Kami' . $user->name);
                return redirect()->intended('/dashboard');
            } elseif ($user->role === 'superadmin') {
                toast()->success('Hallo', 'Selamat Datang Super Admin Kami' . $user->name);
                return redirect()->intended('/dashboard');
            } elseif ($user->role === 'audit') {
                toast()->success('Hallo', 'Selamat Datang Audit Kami' . $user->name);
                return redirect()->intended('/dashboard');
            } elseif ($user->role === 'pelamar') {
                toast()->success('Hallo', 'Selamat Datang' . $user->name);
                return redirect()->intended('/');
            } 
            // Role tidak sesuai
            Auth::logout();
            toast()->error('Akses Ditolak', 'Anda tidak memiliki akses ke halaman ini.');
            return back();
        }

        // Autentikasi gagal
        toast()->error('Gagal', 'Email atau password salah.');
        return back()->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        toast()->success('Berhasil', 'Berhasil anda telah logout');
        return redirect('/');
    }
}
