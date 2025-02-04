<?php

use Illuminate\Support\Facades\Route;

// INITIALIZE PATH CONTROLLER
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\Tentang\ProfilController;
use App\Http\Controllers\Rekrutmen\RekrutmenController;
use App\Http\Controllers\Pengumuman\PengumumanController;

// STARTING CREATIONS
// Auth::routes(['register' => false]); // SEMENTARA OFF DULU UNTUK LOGIN ADMIN

// Route::get('/', function () {
//     return view('pages.portal.index');
// });

Route::get('/', [PortalController::class, 'index'])->name('portal.index');
Route::get('/tentang/profil', [ProfilController::class, 'index'])->name('tentang.profil.index');
Route::get('/rekrutmen/registrasi', [RekrutmenController::class, 'index'])->name('rekrutmen.index');
Route::get('/rekrutmen/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
