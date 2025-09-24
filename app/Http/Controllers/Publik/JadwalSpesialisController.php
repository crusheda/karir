<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Services\BpjsService;
use Illuminate\Http\Request;

class JadwalSpesialisController extends Controller
{
    protected $BpjsService;

    public function __construct(BpjsService $BpjsService)
    {
        $this->bpjs = $BpjsService;
    }

    public function index()
    {
        return view('pages.publik.jadwal.index');
    }
    
    public function cariJadwal($poli, $tgl)
    {
        $url = 'jadwaldokter/kodepoli/' . $poli . '/tanggal/' . $tgl;

        $result = $this->bpjs->serviceGet($url);

        $getDecryption = $this->bpjs->stringDecrypt($result->response);

        $data = [
            'response' => json_decode($getDecryption),
        ];

        return response()->json($data, 200);
    }
}
