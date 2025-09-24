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
use App\Http\Controllers\Publik\KetersediaanTTController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AntrianController;

// STARTING CREATIONS
Auth::routes(['register' => false]); // SEMENTARA OFF DULU UNTUK LOGIN ADMIN

// Route::get('/', function () {
//     return view('pages.portal.index');
// });

Route::get('/', [PortalController::class, 'index'])->name('portal.index');

// TENTANG
Route::get('/tentang/profil', [ProfilController::class, 'index'])->name('tentang.profil.index');

// REKRUTMEN
Route::get('/rekrutmen/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/rekrutmen/pengumuman/{token}', [PengumumanController::class, 'detail'])->name('pengumuman.detail');

Route::get('/rekrutmen/registrasi', [RegistrasiController::class, 'index'])->name('registrasi.index');
Route::post('/rekrutmen/registrasi', [RegistrasiController::class, 'daftar'])->name('registrasi.daftar');

Route::get('/rekrutmen/hasil', [HasilController::class, 'index'])->name('hasil.index');
Route::post('/rekrutmen/hasil', [HasilController::class, 'result'])->name('hasil.result');
Route::post('/rekrutmen/kehadiran', [HasilController::class, 'kehadiran'])->name('push.kehadiran');

// ENDPOINT
Route::get('/rekrutmen/registrasi/{tokenId}/foto', [RegistrasiController::class, 'downloadfoto'])->name('registrasi.download.foto');
Route::get('/rekrutmen/registrasi/{tokenId}/cv', [RegistrasiController::class, 'downloadcv'])->name('registrasi.download.cv');
Route::get('/rekrutmen/registrasi/{tokenId}/ijazah', [RegistrasiController::class, 'downloadijazah'])->name('registrasi.download.ijazah');
Route::get('/rekrutmen/registrasi/{tokenId}/transkip', [RegistrasiController::class, 'downloadtranskip'])->name('registrasi.download.transkip');
Route::get('/rekrutmen/registrasi/{tokenId}/lamaran', [RegistrasiController::class, 'downloadlamaran'])->name('registrasi.download.lamaran');
Route::get('/rekrutmen/registrasi/{tokenId}/sertifikat', [RegistrasiController::class, 'downloadsertifikat'])->name('registrasi.download.sertifikat');
// Route::get('/rekrutmen/registrasi/{id}/getToken', function ($id) { return Crypt::encryptString($id); });

// PUBLIK
    // JADWAL
    Route::get('/publik/jadwal', [JadwalSpesialisController::class, 'index'])->name('jadwal.index');
    // KETERSEDIAAN TT
    Route::get('/publik/tt', [KetersediaanTTController::class, 'index'])->name('tt.index');

Route::group(['middleware' => ['web', 'auth']], function() {
    // SYSTEM
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('products', ProductController::class);

    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // ANTRIAN
        // DISPLAY
        Route::get('/antrian/display', [AntrianController::class, 'indexDisplay'])->name('antrian.display.index');
});


// FALLBACK ROUTE
Route::fallback(function () {
    return response()->view('pages.errors.custom-404', [], 404);
});

