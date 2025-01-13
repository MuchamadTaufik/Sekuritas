<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardAdmin\CategoryController;
use App\Http\Controllers\DashboardAdmin\RupsController;
use App\Http\Controllers\DashboardAdmin\KegiatanController;
use App\Http\Controllers\DashboardUser\DashboardUserController;
use App\Http\Controllers\DashboardAdmin\DashboardAdminController;
use App\Http\Controllers\DashboardAdmin\DokumenController;
use App\Http\Controllers\DashboardAdmin\JurusanController;
use App\Http\Controllers\DashboardAdmin\KarirController;
use App\Http\Controllers\DashboardAdmin\PengaduanController;
use App\Http\Controllers\DashboardAdmin\TradingController;
use App\Http\Controllers\DashboardUser\BiodataController;
use App\Http\Controllers\DashboardUser\LamaranController;
use App\Http\Middleware\Role;

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
Route::get('/fakta-kepatuhan/whistleblowing-system', [DashboardUserController::class, 'indexPengaduan'])->name('pengaduan.dashuser');
Route::get('/fakta-kepatuhan/whistleblowing-system/form', [DashboardUserController::class, 'indexForm'])->name('pengaduan.dashuser.form');
Route::post('/fakta-kepatuhan/whistleblowing-system/form/store', [DashboardUserController::class, 'storeForm'])->name('pengaduan.dashuser.store');

//Halaman Tata Kelola Perusahaan
Route::get('/tata-kelola-perusahaan', [DashboardUserController::class, 'indexKelola'])->name('kelola.dashuser');

//Halaman Perantara Pedagang Efek
Route::get('/perantara-pedagang-efek', [DashboardUserController::class, 'indexPerantara'])->name('perantara.dashuser');

//Halaman RUPS
Route::get('/rups', [DashboardUserController::class, 'indexRups'])->name('rups.dashuser');

//Halaman Download
Route::get('/download', [DashboardUserController::class, 'indexDownload'])->name('download.dashuser');
Route::get('/dashboard/dokumen/download/{dokumenId}', [DashboardUserController::class, 'download'])->name('dokumen.download');


//Halaman Karir
Route::get('/karir', [DashboardUserController::class, 'indexKarir'])->name('karir.dashuser');

//Halaman FAQ
Route::get('/faq', [DashboardUserController::class, 'indexFaq'])->name('faq.dashuser');

//Halaman Kebijakan - Kebijakan
Route::get('/kebijakan-kebijakan', [DashboardUserController::class, 'indexKebijakan'])->name('kebijakan.dashuser');

//Halaman Show Kegiatan
Route::get('/kegiatan/detail/{slug}', [DashboardUserController::class, 'showKegiatan'])->name('kegiatan.dashuser.show');
Route::get('/kegiatan', [DashboardUserController::class, 'allKegiatan'])->name('kegiatan.dashuser.all');

Route::group(['middleware' => 'guest'], function(){
   Route::get('/login-account-sekuritas', [AuthController::class, 'index'])->name('login');
   Route::post('/login-account-sekuritas/login', [AuthController::class, 'authenticate'])->name('login.auth');
});

Route::group(['middleware' => 'auth'], function(){
   Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Role Admin dan Superadmin
Route::group(['middleware' => ['auth', 'role:admin,superadmin']], function(){
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

   //Dokumen Download
   Route::get('/dashboard/dokumen', [DokumenController::class, 'index'])->name('dokumen');
   Route::get('/dashboard/dokumen/create', [DokumenController::class, 'create'])->name('dokumen.create');
   Route::post('/dashboard/dokumen/store', [DokumenController::class, 'store'])->name('dokumen.store');
   Route::get('/dashboard/dokumen/edit/{slug}', [DokumenController::class, 'edit'])->name('dokumen.edit');
   Route::put('/dashboard/dokumen/update/{slug}', [DokumenController::class, 'update'])->name('dokumen.update');
   Route::delete('/dashboard/dokumen/delete/{slug}', [DokumenController::class, 'destroy'])->name('dokumen.delete');

   //Category
   Route::get('/dashboard/category', [CategoryController::class, 'index'])->name('category');
   Route::get('/dashboard/category/create', [CategoryController::class, 'create'])->name('category.create');
   Route::post('/dashboard/category/store', [CategoryController::class, 'store'])->name('category.store');
   Route::get('/dashboard/category/edit/{slug}', [CategoryController::class, 'edit'])->name('category.edit');
   Route::put('/dashboard/category/update/{slug}', [CategoryController::class, 'update'])->name('category.update');
   Route::delete('/dashboard/category/delete/{slug}', [CategoryController::class, 'destroy'])->name('category.delete');

   //Trading View
   Route::get('/dashboard/trading-view', [TradingController::class, 'index'])->name('trading');
   Route::post('/dashboard/trading-view/store', [TradingController::class, 'store'])->name('trading.store');
   Route::put('/dashboard/trading-view/update/{trading}', [TradingController::class, 'update'])->name('trading.update');
});

//Dashboard untuk seluruh Role Admin
Route::group(['middleware' => ['auth', 'role:admin,superadmin,hrd,audit']], function(){
   Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
});

//Dashboard untuk seluruh Role HRD
Route::group(['middleware' => ['auth', 'role:superadmin,hrd']], function(){

   //Karir
   Route::get('/dashboard/karir', [KarirController::class, 'index'])->name('karir');
   Route::get('/dashboard/karir/create', [KarirController::class, 'create'])->name('karir.create');
   Route::post('/dashboard/karir/store', [KarirController::class, 'store'])->name('karir.store');
   Route::get('/dashboard/karir/show/{slug}', [KarirController::class, 'show'])->name('karir.show');
   Route::get('/dashboard/karir/edit/{slug}', [KarirController::class, 'edit'])->name('karir.edit');
   Route::put('/dashboard/karir/update/{slug}', [KarirController::class, 'update'])->name('karir.update');
   Route::delete('/dashboard/karir/delete/{slug}',[KarirController::class, 'destroy'])->name('karir.delete');

   //Jurusan
   Route::get('/dashboard/jurusan', [JurusanController::class, 'index'])->name('jurusan');
   Route::get('/dashboard/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
   Route::post('/dashboard/jurusan/store', [JurusanController::class, 'store'])->name('jurusan.store');
   Route::get('/dashboard/jurusan/edit/{jurusan}', [JurusanController::class, 'edit'])->name('jurusan.edit');
   Route::put('/dashboard/jurusan/update/{jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');
   Route::delete('/dashboard/jurusan/delet/{jurusan}', [JurusanController::class, 'destroy'])->name('jurusan.delete');

   //Lamaran
   Route::get('/dashboard/lamaran', [LamaranController::class, 'index'])->name('lamaran');
   Route::get('/dashboard/lamaran/{slug}', [LamaranController::class, 'show'])->name('lamaran.show');
   Route::post('/dashboard/lamaran/approve/{slug}', [LamaranController::class, 'approve'])->name('lamaran.approve');
   Route::post('/dashboard/lamaran/reject/{slug}', [LamaranController::class, 'reject'])->name('lamaran.reject');
});

Route::group(['middleware' => ['auth', 'role:superadmin,audit']], function(){
   Route::get('/dashboard/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
});

//Dashboard untuk seluruh Role Pelamar
Route::group(['middleware' => ['auth', 'role:pelamar']], function(){
   Route::get('/profile/{name}', [BiodataController::class, 'index'])->name('profile');
   Route::post('/profile-user/{name}/update', [BiodataController::class, 'update'])->name('profile.update');

   Route::get('/profil/informasi-lamaran/{name}', [BiodataController::class, 'lamaran'])->name('profile.lamaran');

   Route::get('/karir/{slug}', [DashboardUserController::class, 'karirDetail'])->name('karir.dashuser.detail');
   Route::get('/karir/lamar/{slug}', [LamaranController::class, 'create'])->name('karir.dashuser.lamar');
   Route::post('/karir/lamar', [LamaranController::class, 'store'])->name('karir.dashuser.store');

});

// errors
Route::any('{catchall}', [ErrorController::class, 'notfound'])->where('catchall', '.*');