<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardAdmin\RupsController;
use App\Http\Controllers\DashboardAdmin\KegiatanController;
use App\Http\Controllers\DashboardUser\DashboardUserController;
use App\Http\Controllers\DashboardAdmin\DashboardAdminController;

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

   //Kegiatan
   Route::get('/dashboard/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
   Route::get('/dashboard/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
   Route::post('/dashboard/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');
   Route::get('/dashboard/kegiatan/edit/{slug}', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
   Route::put('/dashboard/kegiatan/update/{slug}', [KegiatanController::class, 'update'])->name('kegiatan.update');
   Route::delete('/dashboard/kegiatan/delete/{slug}', [KegiatanController::class, 'destroy'])->name('kegiatan.delete');

   //Rups
   Route::get('/dashboard/rups', [RupsController::class, 'index'])->name('rups');
   Route::get('/dashboard/rups/create', [RupsController::class, 'create'])->name('rups.create');
   Route::post('/dashboard/rups/store', [RupsController::class, 'store'])->name('rups.store');
   Route::get('/dashboard/rups/edit/{slug}', [RupsController::class, 'edit'])->name('rups.edit');
   Route::put('/dashboard/rups/update/{slug}', [RupsController::class, 'update'])->name('rups.update');
   Route::delete('/dashboard/rups/delete/{slug}', [RupsController::class, 'destroy'])->name('rups.delete');
});

// errors
Route::any('{catchall}', [ErrorController::class, 'notfound'])->where('catchall', '.*');