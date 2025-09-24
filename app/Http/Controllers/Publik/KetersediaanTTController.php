<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class KetersediaanTTController extends Controller
{
    public function index()
    {
        return view('pages.publik.tt.index');
    }
    
    function getTT()
    {
        $url = 'informasi/ruangan';

        $response = Http::withBasicAuth(
            config('services.rs.username'),
            config('services.rs.password')
        )->get(config('services.rs.base_url') . $url);

        // Ambil JSON sebagai array
        $data = $response->json();

        return response()->json($data, 200);

        // Pastikan ada key 'response'
        // if (isset($data['response'])) {
        //     foreach ($data['response'] as $row) {
        //         echo "ID: {$row['ID']} | KAMAR: {$row['KAMAR']} | TEMPAT TIDUR: {$row['TEMPAT_TIDUR']}<br>";
        //     }

        //     // Kalau mau filter ICU
        //     $icu = collect($data['response'])->where('KAMAR', 'ICU')->all();
        //     dd($icu); // debug
        // } else {
        //     dd($data); // untuk cek struktur kalau tidak sesuai
        // }
    }
}
