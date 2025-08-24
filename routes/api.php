<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// INITIALIZE PATH CONTROLLER
use App\Http\Controllers\Bpjs\AntreanController;
use App\Http\Controllers\Rekrutmen\RegistrasiController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// --------------------------------------------  API  --------------------------------------------

Route::get('rekrutmen/pengumuman/{id}', [RegistrasiController::class, 'getPengumuman']);

// Route::get('bpjs/bridging/test', [AntreanController::class, 'testerBpjs']);
// Route::get('bpjs/bridging/test', [AntreanController::class, 'testerBpjs']);

// GET DATA BPJS VCLAIM
// Route::get('bpjs/bridging/vclaim/getPesertaByNIK', [AntreanController::class, 'getPesertaByNIK']);
Route::get('bpjs/peserta/{nik}/tglsep/{tgl}', [AntreanController::class, 'getPesertaByNIK']);
Route::get('bpjs/rujukan/data/{nokartu}', [AntreanController::class, 'getRujukanByNoKartu']);
Route::post('bpjs/rujukan/insert', [AntreanController::class, 'insertRujukan']);

// GET DATA BPJS ANTREAN
// Route::get('bpjs/bridging/jadwal', [AntreanController::class, 'jadwalBpjs']);
Route::get('bpjs/bridging/all', [AntreanController::class, 'sigtime']);
Route::post('bpjs/bridging/createRujukan', [AntreanController::class, 'createRujukan']);
// Route::get('bpjs/bridging/kodebooking/{id}', [AntreanController::class, 'kdbook']);
// Route::get('bpjs/bridging/timestamp/{id}', [AntreanController::class, 'getTimestamp']);

// BPJS TEST
// Route::get('bpjs/bridging/antrean/poli', [AntreanController::class, 'refPoli']);
// Route::get('bpjs/bridging/tester/poli', [AntreanController::class, 'refPoliTest']);
Route::get('bpjs/bridging/antrean/poli/{poli}/{tgl}', [AntreanController::class, 'cariJadwal']);
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
