<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// INITIALIZE PATH CONTROLLER
use App\Http\Controllers\Bpjs\AntreanController;
use App\Http\Controllers\Publik\JadwalSpesialisController;
use App\Http\Controllers\Rekrutmen\RegistrasiController;
use App\Http\Controllers\Publik\KetersediaanTTController;

use App\Http\Controllers\Admin\AntrianController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// -------------------------------------------  PUBLIC API  -------------------------------------------
// REKRUTMEN API
    Route::get('rekrutmen/registrasi/download/{dokumen}/{peserta}', [RegistrasiController::class, 'previewPdf'])->name('rekrutmen.registrasi.previewPdf');
// KETERSEDIAAN TT
    Route::get('informasi/tt', [KetersediaanTTController::class, 'getTT'])->name('ketersediaan.tt.getTT');
    Route::get('antrean/poli/display', [AntrianController::class, 'getAntreanPoli'])->name('antrean.poli.display');

// --------------------------------------------  API BPJS  --------------------------------------------
// PRODUCTION API
    // PUBLIC
    Route::get('bpjs/bridging/all', [AntreanController::class, 'showKey']);

    // ANTREAN
        // WS BPJS
            // REFERENSI JADWAL DOKTER
                Route::get('bpjs/bridging/antrean/poli/{poli}/{tgl}', [JadwalSpesialisController::class, 'cariJadwal']);
                Route::get('bpjs/bridging/antrean/poli', [JadwalSpesialisController::class, 'jadwalMingguanAllPoli']);
                Route::get('bpjs/bridging/antrean/poli/pdf', [JadwalSpesialisController::class,'exportJadwalPdf']);

    // SEP
        Route::get('bpjs/SEP/{NOSEP}', [AntreanController::class, 'cariSEP']);
        Route::get('bpjs/SEP/internal/{NOSEP}', [AntreanController::class, 'cariSEPInternal']);

    // RUJUKAN
        Route::get('bpjs/rujukan/{NORUJUKAN}', [AntreanController::class, 'cariRujukan']);

        // Route::get('bpjs/rujukan/list/{TGLAWAL}/{TGLAKHIR}/{JENISRUJUKAN}/{PESERTAKELAS}', [AntreanController::class, 'listRujukan']);
        // Route::get('bpjs/rujukan/peserta/{NOKARTU}/{TGLRUJUKAN}', [AntreanController::class, 'cariRujukanByNoKartu']);
        // Route::post('bpjs/rujukan/insert', [AntreanController::class, 'insertRujukan']);
        // Route::post('bpjs/rujukan/update', [AntreanController::class, 'updateRujukan']);
        // Route::post('bpjs/rujukan/delete', [AntreanController::class, 'deleteRujukan']);

// DEVELOPMENT API
// Route::get('bpjs-dev/SEP/{NOSEP}', [AntreanController::class, 'cariSEPDev']);

// --------------------------------------------  END BPJS  --------------------------------------------





// Route::get('rekrutmen/pengumuman/{id}', [RegistrasiController::class, 'getPengumuman']);

// Route::get('bpjs/bridging/test', [AntreanController::class, 'testerBpjs']);
// Route::get('bpjs/bridging/test', [AntreanController::class, 'testerBpjs']);

// GET DATA BPJS VCLAIM
// Route::get('bpjs/bridging/vclaim/getPesertaByNIK', [AntreanController::class, 'getPesertaByNIK']);
// Route::get('bpjs/peserta/{nik}/tglsep/{tgl}', [AntreanController::class, 'getPesertaByNIK']);
// Route::get('bpjs/rujukan/data/{nokartu}', [AntreanController::class, 'getRujukanByNoKartu']);
// Route::post('bpjs/rujukan/insert', [AntreanController::class, 'insertRujukan']);

// GET DATA BPJS ANTREAN
// Route::post('bpjs/bridging/createRujukan', [AntreanController::class, 'createRujukan']);
// Route::get('bpjs/bridging/jadwal', [AntreanController::class, 'jadwalBpjs']);
// Route::get('bpjs/bridging/kodebooking/{id}', [AntreanController::class, 'kdbook']);
// Route::get('bpjs/bridging/timestamp/{id}', [AntreanController::class, 'getTimestamp']);

// BPJS TEST
// Route::get('bpjs/bridging/antrean/poli', [AntreanController::class, 'refPoli']);
// Route::get('bpjs/bridging/tester/poli', [AntreanController::class, 'refPoliTest']);
// Route::get('bpjs/bridging/tester/jadwal/', [AntreanController::class, 'cariJadwalTest']);
// Route::get('bpjs/bridging/tester/decrypt/{string}', [AntreanController::class, 'decrypt']);

// --------------------------------------------  API BPJS  --------------------------------------------
// Route::get('bpjs/bridging/test', 'Bpjs\AntreanController@testerBpjs');

// // GET DATA BPJS
// Route::get('bpjs/bridging/jadwal', 'Bpjs\AntreanController@jadwalBpjs');
// Route::get('bpjs/bridging/all', 'Bpjs\AntreanController@sigtime');
// Route::get('bpjs/bridging/kodebooking/{id}', 'Bpjs\AntreanController@kdbook');
// Route::get('bpjs/bridging/timestamp/{id}', 'Bpjs\AntreanController@getTimestamp');

// // BPJS TEST
// Route::get('bpjs/bridging/antrean/poli', 'Bpjs\AntreanController@refPoli');
// Route::get('bpjs/bridging/tester/poli', 'Bpjs\AntreanController@refPoliTest');
// Route::get('bpjs/bridging/antrean/poli/{poli}/{tgl}', 'Bpjs\AntreanController@cariJadwal');
// Route::get('bpjs/bridging/tester/jadwal/', 'Bpjs\AntreanController@cariJadwalTest');
// Route::get('bpjs/bridging/tester/decrypt/{string}', 'Bpjs\AntreanController@decrypt');

//-----------------------------------------------------------------    A  U  T  H  -  A  P  I    -----------------------------------------------------------------
Route::group(['middleware' => ['web', 'auth']], function() {
});
