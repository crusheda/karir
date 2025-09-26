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
    }
}
