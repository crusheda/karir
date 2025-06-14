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

Route::get('bpjs/bridging/test', [AntreanController::class, 'testerBpjs']);
Route::get('bpjs/bridging/test', [AntreanController::class, 'testerBpjs']);

// GET DATA BPJS
Route::get('bpjs/bridging/jadwal', [AntreanController::class, 'jadwalBpjs']);
Route::get('bpjs/bridging/all', [AntreanController::class, 'sigtime']);
Route::get('bpjs/bridging/kodebooking/{id}', [AntreanController::class, 'kdbook']);
Route::get('bpjs/bridging/timestamp/{id}', [AntreanController::class, 'getTimestamp']);

// BPJS TEST
Route::get('bpjs/bridging/antrean/poli', [AntreanController::class, 'refPoli']);
Route::get('bpjs/bridging/tester/poli', [AntreanController::class, 'refPoliTest']);
Route::get('bpjs/bridging/antrean/poli/{poli}/{tgl}', [AntreanController::class, 'cariJadwal']);
Route::get('bpjs/bridging/tester/jadwal/', [AntreanController::class, 'cariJadwalTest']);
Route::get('bpjs/bridging/tester/decrypt/{string}', [AntreanController::class, 'decrypt']);
