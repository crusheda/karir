<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    function indexDisplay()
    {
        return view('pages.admin.antrian.display.index');
    }

    function getAntreanPoli()
    {
        $url = 'antrean/poli/display';

        $response = Http::withBasicAuth(
            config('services.rs.username'),
            config('services.rs.password')
        )->get(config('services.rs.base_url') . $url);

        // Ambil JSON sebagai array
        $data = $response->json();

        return response()->json($data, 200);
    }
}
