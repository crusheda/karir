<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Services\BpjsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

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
        // print_r($getDecryption);
        // die();

        $data = [
            'response' => json_decode($getDecryption),
        ];

        return response()->json($data, 200);
    }

    public function jadwalMingguan($poli)
    {
        return Cache::remember("jadwal_mingguan_$poli", 300, function() use ($poli) {
            $start = Carbon::now()->startOfWeek(Carbon::MONDAY);
            $end   = Carbon::now()->endOfWeek(Carbon::SUNDAY);

            $allData = [];

            for ($date = $start; $date->lte($end); $date->addDay()) {

                $tgl = $date->format('Y-m-d');

                $url = 'jadwaldokter/kodepoli/' . $poli . '/tanggal/' . $tgl;

                $result = $this->bpjs->serviceGet($url);

                if (!empty($result->response)) {
                    $decrypt = $this->bpjs->stringDecrypt($result->response);
                    $json = json_decode($decrypt, true);

                    if (is_array($json)) {
                        foreach ($json as $row) {
                            // tambahkan tanggal asli
                            $row['tanggal'] = $tgl;
                            $allData[] = $row;
                        }
                    }
                }
            }

            return response()->json([
                'response' => $allData
            ]);
        });
    }

    public function jadwalMingguanAllPoli(Request $request)
    {
        $week = $request->week ?? now()->format('Y-\WW');

        [$year,$weekNum] = explode('-W',$week);

        $start = Carbon::now()
            ->setISODate($year, $weekNum)
            ->startOfWeek();

        $end = $start->copy()->endOfWeek();

        $cacheKey = "jadwal_mingguan_{$year}_{$weekNum}";

        return Cache::remember($cacheKey, 300, function() use ($start,$end){

            $polis = [
                'IGD','ANA','BED','GIG','INT','IRM','JAN','JIW','KLT',
                'MAT','THT','OBG','ORT','PAR','SAR','URO','ANT','KON'
            ];

            $allData = [];

            foreach ($polis as $poli) {

                for ($date = $start->copy(); $date->lte($end); $date->addDay()) {

                    $tgl = $date->format('Y-m-d');

                    $url = "jadwaldokter/kodepoli/$poli/tanggal/$tgl";

                    $result = $this->bpjs->serviceGet($url);

                    if (!empty($result->response)) {

                        $decrypt = $this->bpjs->stringDecrypt($result->response);
                        $json = json_decode($decrypt, true);

                        if (is_array($json)) {
                            foreach ($json as $row) {
                                $row['tanggal'] = $tgl;
                                $allData[] = $row;
                            }
                        }
                    }
                }
            }

            usort($allData, function($a,$b){

                $x = strcmp($a['namasubspesialis'],$b['namasubspesialis']);

                return $x === 0
                    ? strcmp($a['namadokter'],$b['namadokter'])
                    : $x;
            });

            return response()->json([
                'response'=>$allData
            ]);
        });
    }

}
