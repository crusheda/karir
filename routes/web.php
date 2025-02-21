<?php

use Illuminate\Support\Facades\Route;

// INITIALIZE PATH CONTROLLER
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\Tentang\ProfilController;
use App\Http\Controllers\Rekrutmen\PengumumanController;
use App\Http\Controllers\Rekrutmen\RegistrasiController;
use App\Http\Controllers\Rekrutmen\HasilController;
use App\Http\Controllers\Publik\JadwalSpesialisController;

// STARTING CREATIONS
// Auth::routes(['register' => false]); // SEMENTARA OFF DULU UNTUK LOGIN ADMIN

// Route::get('/', function () {
//     return view('pages.portal.index');
// });

Route::get('/', [PortalController::class, 'index'])->name('portal.index');

// TENTANG
Route::get('/tentang/profil', [ProfilController::class, 'index'])->name('tentang.profil.index');

// REKRUTMEN
Route::get('/rekrutmen/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/rekrutmen/registrasi', [RegistrasiController::class, 'index'])->name('registrasi.index');
Route::get('/rekrutmen/hasil', [HasilController::class, 'index'])->name('hasil.index');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// PUBLIK
    // JADWAL
    Route::get('/publik/jadwal', [JadwalSpesialisController::class, 'index'])->name('jadwal.index');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
