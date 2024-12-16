<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardAdmin\DashboardAdminController;
use App\Http\Controllers\DashboardUser\DashboardUserController;
use App\Http\Controllers\DashboardAdmin\KegiatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Halaman Awal
Route::get('/', [DashboardUserController::class, 'index'])->name('/');

//Halaman Sekilas BJB Sekuritas
Route::get('/sekilas-bjb-sekuritas', [DashboardUserController::class, 'indexSekilas'])->name('sekilas.dashuser');

//Halaman Struktur Organisasi
Route::get('/struktur-organisasi', [DashboardUserController::class, 'indexStruktur'])->name('struktur.dashuser');

//Halaman Fakta Kepatuhan & Audit Internal
Route::get('/fakta-kepatuhan', [DashboardUserController::class, 'indexKepatuhan'])->name('kepatuhan.dashuser');

//Halaman Tata Kelola Perusahaan
Route::get('/tata-kelola-perusahaan', [DashboardUserController::class, 'indexKelola'])->name('kelola.dashuser');

//Halaman Perantara Pedagang Efek
Route::get('/perantara-pedagang-efek', [DashboardUserController::class, 'indexPerantara'])->name('perantara.dashuser');

//Halaman RUPS
Route::get('/rups', [DashboardUserController::class, 'indexRups'])->name('rups.dashuser');

//Halaman Download
Route::get('/download', [DashboardUserController::class, 'indexDownload'])->name('download.dashuser');

//Halaman Karir
Route::get('/karir', [DashboardUserController::class, 'indexKarir'])->name('karir.dashuser');

//Halaman FAQ
Route::get('/faq', [DashboardUserController::class, 'indexFaq'])->name('faq.dashuser');

//Halaman Kebijakan - Kebijakan
Route::get('/kebijakan-kebijakan', [DashboardUserController::class, 'indexKebijakan'])->name('kebijakan.dashuser');

Route::group(['middleware' => 'guest'], function(){
   Route::get('/login-account-sekuritas', [AuthController::class, 'index'])->name('login');
   Route::post('/login-account-sekuritas/login', [AuthController::class, 'authenticate'])->name('login.auth');
});

Route::group(['middleware' => 'auth'], function(){
   Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth', 'role:admin,superadmin']], function(){
   Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
<<<<<<< HEAD

   //Kegiatan
   Route::get('/dashboard/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
   Route::get('/dashboard/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
   Route::post('/dashboard/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');
});
=======
});



>>>>>>> 90eafc81e6cbe62337da91b99777f5a4d3849efd
