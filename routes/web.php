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

//Halaman Pedoman Kerja Direksi & Dewan Komisaris
Route::get('/pedoman-kerja-direksi-&-dewan-komisari', [DashboardUserController::class, 'indexPedoman'])->name('pedoman.dashuser');

//Halaman Kebijakan-Kebijakan
Route::get('/kebijakan-kebijakan', [DashboardUserController::class, 'indexKebijakan'])->name('kebijakan.dashuser');

//Halaman Kode Etik
Route::get('/kode-etik', [DashboardUserController::class, 'indexEtik'])->name('etik.dashuser');