<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardUser\DashboardUserController;

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