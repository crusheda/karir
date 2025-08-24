<?php

namespace App\Http\Controllers\Bpjs;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Contracts\Encryption\DecryptException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class AntreanController extends Controller
{
    // API
    function testerBpjs() {
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY'); //  6e5c8afbf6be0a6d9c794edad8006ad2
        // $url = 'ref/poli';
        $url = 'jadwaldokter/kodepoli/INT/tanggal/2023-09-11';

        $client = new Client();
        $res = $client->get('https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/'.$url, [
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignatureTester(),
                'user_key' => $userkey,
            ]
        ]); // url_live : https://apijkn.bpjs-kesehatan.go.id/antreanrs/

        // RESULT API INTO DECODED JSON
        $result = json_decode($res->getBody());

        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            'response' => json_decode($getDecryption)
        ];

        return response()->json($data, 200);
    }

    function jadwalBpjs() {
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');

        $client = new Client();
        $res = $client->get('https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/jadwaldokter/kodepoli/INT/tanggal/2023-10-04', [
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignatureTester(),
                'user_key' => $userkey,
            ]
        ]); // url_live : https://apijkn.bpjs-kesehatan.go.id/antreanrs/

        // RESULT API INTO DECODED JSON
        $result = json_decode($res->getBody());

        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            'response' => json_decode($getDecryption)
        ];

        return response()->json($data, 200);
    }

    function kdbook($kd) {
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');

        $client = new Client();
        $res = $client->get('https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/antrean/pendaftaran/kodebooking/'.$kd, [
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignatureTester(),
                'user_key' => $userkey,
            ]
        ]); // url_live : https://apijkn.bpjs-kesehatan.go.id/antreanrs/

        // RESULT API INTO DECODED JSON
        $result = json_decode($res->getBody());
        // dd($result);

        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            'response' => json_decode($getDecryption)
        ];

        dd(json_decode($getDecryption)[0]);

        return response()->json($data, 200);
    }

    function sigtime() {
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');

        // Get Timestamp
        date_default_timezone_set('UTC');
        $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));

        // Computes the signature by hashing the salt with the secret key as the key
        $signature = hash_hmac('sha256', $consid."&".$tStamp, $secretkey, true);

        // base64 encode�
        $encodedSignature = base64_encode($signature);

        $data = [
            'consid' => $consid,
            'secretkey' => $secretkey,
            'userkey' => $userkey,
            'signature' => $encodedSignature,
            'timestamp' => $tStamp,
        ];

        // dd($data);

        return response()->json($data, 200);
    }

    public function getPesertaByNIK($nik, $tglsep)
    {
        $consid    = env('BPJS_CONSID_DEV');
        $secretkey = env('BPJS_SECRETKEY_DEV');
        $userkey   = env('BPJS_USERKEY_DEV');
        $timestamp = $this->bpjsTimestamp();

        $url    = 'https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest-dev/';
        $action = "Peserta/nik/{$nik}/tglSEP/{$tglsep}";

        $headers = [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json',
            'X-cons-id'    => $consid,
            'X-Timestamp'  => $timestamp,
            'X-Signature'  => $this->generateSignatureDev($consid, $secretkey, $timestamp),
            'user_key'     => $userkey,
        ];

        $client = new \GuzzleHttp\Client([
            'base_uri' => $url,
            'headers'  => $headers,
            'verify'   => false, // disable SSL verify kalau di dev
        ]);

        try {
            $res = $client->request("GET", $action);
            $result = json_decode($res->getBody());
        } catch (\Exception $e) {
            return response()->json([
                "metadata" => [
                    "code" => 500,
                    "message" => "Request failed: ".$e->getMessage()
                ],
                "response" => null
            ], 500);
        }

        // decrypt jika ada response terenkripsi
        $string = $result->response ?? null;
        if ($string) {
            $key = $consid.$secretkey.$timestamp;
            $getDecryption = $this->stringDecrypt($key, $string);
            $result->response = json_decode($getDecryption);
        }

        return response()->json($result, 200);
    }

    public function getRujukanByNoKartu($nokartu)
    {
        $consid    = env('BPJS_CONSID_DEV');
        $secretkey = env('BPJS_SECRETKEY_DEV');
        $userkey   = env('BPJS_USERKEY_DEV');
        $timestamp = $this->bpjsTimestamp();

        $url    = 'https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest-dev/';
        $action = "Rujukan/RS/Peserta/{$nokartu}";

        $headers = [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json; charset=utf-8',
            'X-cons-id'    => $consid,
            'X-Timestamp'  => $timestamp,
            'X-Signature'  => $this->generateSignatureDev($consid, $secretkey, $timestamp),
            'user_key'     => $userkey,
        ];

        $client = new \GuzzleHttp\Client([
            'base_uri' => $url,
            'headers'  => $headers,
            'verify'   => false, // disable SSL verify kalau di dev
        ]);

        try {
            $res = $client->request("GET", $action);
            $result = json_decode($res->getBody());
        } catch (\Exception $e) {
            return response()->json([
                "metadata" => [
                    "code" => 500,
                    "message" => "Request failed: ".$e->getMessage()
                ],
                "response" => null
            ], 500);
        }

        // decrypt jika ada response terenkripsi
        $string = $result->response ?? null;
        if ($string) {
            $key = $consid.$secretkey.$timestamp;
            $getDecryption = $this->stringDecrypt($key, $string);
            $result->response = json_decode($getDecryption);
        }

        return response()->json($result, 200);
    }

    public function insertRujukan(Request $request)
    {
        $consid    = env('BPJS_CONSID_DEV');
        $secretkey = env('BPJS_SECRETKEY_DEV');
        $userkey   = env('BPJS_USERKEY_DEV');
        $timestamp = $this->bpjsTimestamp();

        $client = new Client([
            'base_uri' => 'https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest-dev/',
            'timeout'  => 30,
            'verify'   => false, // kalau di dev, matikan SSL verify
        ]);

        // Payload harus dibungkus ke dalam "request"
        $payload = [
            'noSep'        => '0151R0130824V001316',
            'tglRujukan'   => '2025-08-24',
            'tglRencanaKunjungan' => '2025-08-24',
            'ppkDirujuk'   => '0151R013',
            'jnsPelayanan' => '2',
            'catatan'      => 'Perlu penanganan lebih lanjut',
            'diagRujukan'  => 'A09',
            'tipeRujukan'  => '0',
            'poliRujukan'  => 'SAR',
            'user'         => 'adminRS',
        ];

        try {
            $response = $client->post('Rujukan/2.0/insert', [
                'headers' => [
                    'Content-Type'  => 'application/json', // HARUS JSON
                    'X-cons-id'     => $consid,
                    'X-Timestamp'   => $timestamp,
                    'X-Signature'   => $this->generateSignatureDev($consid, $secretkey, $timestamp),
                    'user_key'      => $userkey,
                ],
                'body' => json_encode($payload) // kirim JSON
                // 'json' => [  // langsung pakai json
                //     // 'request' => [
                //         'noSep'        => '0151R0130824V001316',
                //         'tglRujukan'   => '2025-08-24',
                //         'tglRencanaKunjungan' => '2025-08-24',
                //         'ppkDirujuk'   => '0151R013',
                //         'jnsPelayanan' => '2',
                //         'catatan'      => 'Perlu penanganan lebih lanjut',
                //         'diagRujukan'  => 'A09',
                //         'tipeRujukan'  => '0',
                //         'poliRujukan'  => 'SAR',
                //         'user'         => 'adminRS',
                //     // ]
                // ]
            ]);
            // print_r($response);
            // die();

            $body = json_decode($response->getBody()->getContents(), true);
            return $body;

        } catch (RequestException $e) {
            return [
                'error' => true,
                'message' => $e->getMessage(),
                'response' => $e->hasResponse() ? $e->getResponse()->getBody()->getContents() : null,
            ];
        }
    }


    // public function getPesertaByNIK()
    // {
    //     // DEFINE SECRET VAR
    //     $consid = env('BPJS_CONSID');
    //     $secretkey = env('BPJS_SECRETKEY');
    //     $userkey = env('BPJS_USERKEY');
    //     $url = '';
    //     // $url = 'Peserta/peserta/nik/3311072207970001';

    //     // API to BPJS
    //     // $result = $this->vclaimGet($url);

    //     // print_r($this->generateSignature());
    //     // die();
    //     $client = new Client();
    //     $res = $client->get('https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest/Peserta/nik/3311072207970001/tglSEP/2025-08-01', [
    //         'headers' => [
    //             'Accept' => 'application/Json',
    //             'X-cons-id' => $consid,
    //             'X-Timestamp' => $this->bpjsTimestamp(),
    //             'X-Signature' => $this->generateSignature(),
    //             'user_key' => $userkey,
    //         ]
    //     ]);
    //     $result = json_decode($res->getBody());
    //     // print_r($res);
    //     // die();

    //     // DEFINE VAR INTO DECRYPTION PROGRESS
    //     $string = $result->response;
    //     $key = $consid.$secretkey.$this->bpjsTimestamp();

    //     // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
    //     $getDecryption = $this->stringDecrypt($key, $string);

    //     $data = [
    //         // 'metacode' => $result->metaData->code,
    //         // 'metamessage' => $result->metaData->message,
    //         'response' => json_decode($getDecryption)
    //     ];
    //     // print_r(json_decode($getDecryption));
    //     // die();

    //     return response()->json($data, 200);
    // }

    public function refPoli()
    {
        // DEFINE SECRET VAR
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');
        $url = 'ref/poli';

        // API to BPJS
        $result = $this->antreanGet($url);

        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            // 'metacode' => $result->metaData->code,
            // 'metamessage' => $result->metaData->message,
            'response' => json_decode($getDecryption)
        ];
        // print_r(json_decode($getDecryption));
        // die();

        return response()->json($data, 200);
    }

    public function refPoliTest()
    {
        // DEFINE SECRET VAR
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');
        $url = 'ref/poli';

        // API to BPJS
        $result = $this->antreanGetTester($url);
        dd($result);
        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            // 'metacode' => $result->metaData->code,
            // 'metamessage' => $result->metaData->message,
            'response' => json_decode($getDecryption)
        ];
        // print_r(json_decode($getDecryption));
        // die();

        return response()->json($data, 200);
    }

    function decrypt($string) {
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $key = $consid.$secretkey.$this->bpjsTimestamp();
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            'response' => json_decode($getDecryption)
        ];

        return response()->json($data, 200);
    }

    public function cariJadwalTest()
    {
        // DEFINE SECRET VAR
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');
        $url = 'jadwaldokter/kodepoli/INT/tanggal/2023-09-12';

        // API to BPJS
        $result = $this->antreanGetTester($url);

        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            // 'consid' => $consid,
            // 'secretkey' => $secretkey,
            // 'userkey' => $userkey,
            // 'url' => $url,
            // 'metaData' => $result,
            'decryptResponse' => json_decode($getDecryption)
        ];

        // dd($data);

        return response()->json($data, 200);
    }

    public function cariJadwal($poli, $tgl)
    {
        // DEFINE SECRET VAR
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');
        $url = 'jadwaldokter/kodepoli/'.$poli.'/tanggal/'.$tgl;

        // API to BPJS
        $result = $this->antreanGet($url);

        // print_r($result);
        // die();
        // DEFINE VAR INTO DECRYPTION PROGRESS
        $string = $result->response;
        $key = $consid.$secretkey.$this->bpjsTimestamp();

        // RESULT DECRYPT WITH AES 256 (mode CBC) - SHA256 AND DECOMPRESSION WITH LZ-STRING
        $getDecryption = $this->stringDecrypt($key, $string);

        $data = [
            // 'metacode' => $result->metaData->code,
            // 'metamessage' => $result->metaData->message,
            'response' => json_decode($getDecryption)
        ];

        return response()->json($data, 200);
    }

    // TOOLS BPJS -------------------------------------------------------------------------------------------------------------------------------
    public function antreanGet($url)
    {
        $consid = env('BPJS_CONSID');
        $userkey = env('BPJS_USERKEY'); // 3531661b282c4997d496bf34de35871e

        $client = new Client();
        $res = $client->get('https://apijkn.bpjs-kesehatan.go.id/antreanrs/'.$url, [
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key' => $userkey,
            ]
        ]);
        // RESULT API INTO JSON DECODED
        return json_decode($res->getBody());
    }

    public function antreanGetTester($url)
    {
        $consid = env('BPJS_CONSID');
        $userkey = env('BPJS_USERKEY');

        $client = new Client();
        $res = $client->get('https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/'.$url, [
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key' => $userkey,
            ]
        ]);
        // RESULT API INTO JSON DECODED
        return json_decode($res->getBody());
    }

    // public function createRujukan()
    // {
    //     $consid = env('BPJS_CONSID');
    //     $userkey = env('BPJS_USERKEY');

    //     $client = new Client();

    //     $res = $client->post('https://apijkn.bpjs-kesehatan.go.id/antreanrs/'.$url, [
    //         'json' => [
    //             'kodebooking' => $kdbook
    //         ],
    //         'headers' => [
    //             'X-cons-id' => $consid,
    //             'X-Timestamp' => $this->bpjsTimestamp(),
    //             'X-Signature' => $this->generateSignature(),
    //             'user_key' => $userkey,
    //         ]
    //     ]);

    //     // RESULT API INTO JSON DECODED
    //     return json_decode($res->getBody());
    // }

    public function vclaimGet($url)
    {
        $consid = env('BPJS_CONSID');
        $userkey = env('BPJS_USERKEY');

        $client = new Client();
        $res = $client->get('https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest/'.$url, [
            'headers' => [
                'Accept' => 'application/Json',
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key' => $userkey,
            ]
        ]);
        // RESULT API INTO JSON DECODED
        return json_decode($res->getBody());
    }

    // public function vclaimPost($url, $kdbook)
    // {
    //     $consid = env('BPJS_CONSID_DEV');
    //     $userkey = env('BPJS_USERKEY_DEV');

    //     $client = new Client();

    //     $res = $client->post('https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest/'.$url, [
    //         'json' => [
    //             'kodebooking' => $kdbook
    //         ],
    //         'headers' => [
    //             'X-cons-id' => $consid,
    //             'X-Timestamp' => $this->bpjsTimestamp(),
    //             'X-Signature' => $this->generateSignature(),
    //             'user_key' => $userkey,
    //         ]
    //     ]);

    //     // RESULT API INTO JSON DECODED
    //     return json_decode($res->getBody());
    // }

    public function antreanPost($url, $kdbook)
    {
        $consid = env('BPJS_CONSID');
        $userkey = env('BPJS_USERKEY');

        $client = new Client();

        $res = $client->post('https://apijkn.bpjs-kesehatan.go.id/antreanrs/'.$url, [
            'json' => [
                'kodebooking' => $kdbook
            ],
            'headers' => [
                'X-cons-id' => $consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key' => $userkey,
            ]
        ]);

        // RESULT API INTO JSON DECODED
        return json_decode($res->getBody());
    }

	public function generateSignature()
	{
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');
        // $consid = env('BPJS_CONSID');
        // $secretkey = env('BPJS_SECRETKEY');
        // $userkey = env('BPJS_USERKEY');

        // Get Timestamp
        date_default_timezone_set('UTC');
        $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));

        // Computes the signature by hashing the salt with the secret key as the key
        $signature = hash_hmac('sha256', $consid."&".$tStamp, $secretkey, true);

        // base64 encode�
        $encodedSignature = base64_encode($signature);

		return $encodedSignature;
	}

	public function generateSignatureDev()
	{
        $consid = env('BPJS_CONSID_DEV');
        $secretkey = env('BPJS_SECRETKEY_DEV');
        $userkey = env('BPJS_USERKEY_DEV');
        // $consid = env('BPJS_CONSID');
        // $secretkey = env('BPJS_SECRETKEY');
        // $userkey = env('BPJS_USERKEY');

        // Get Timestamp
        date_default_timezone_set('UTC');
        $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));

        // Computes the signature by hashing the salt with the secret key as the key
        $signature = hash_hmac('sha256', $consid."&".$tStamp, $secretkey, true);

        // base64 encode�
        $encodedSignature = base64_encode($signature);

		return $encodedSignature;
	}

	public function generateSignatureTester()
	{
        $consid = env('BPJS_CONSID');
        $secretkey = env('BPJS_SECRETKEY');
        $userkey = env('BPJS_USERKEY');
        // $userkey = '6e5c8afbf6be0a6d9c794edad8006ad2';

        // Get Timestamp
        date_default_timezone_set('UTC');
        $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));

        // Computes the signature by hashing the salt with the secret key as the key
        $signature = hash_hmac('sha256', $consid."&".$tStamp, $secretkey, true);

        // base64 encode�
        $encodedSignature = base64_encode($signature);

		return $encodedSignature;
	}

	public function bpjsTimestamp()
	{
        // Computes the timestamp
        date_default_timezone_set('UTC');
        $result = strval(time()-strtotime('1970-01-01 00:00:00'));
		return $result;
	}

	public function getTimestamp($date)
	{
        // Computes the timestamp
        Carbon::setLocale('id');
        return $result = Carbon::parse($date / 1000)->format("d M Y, H:m:s");
        // return date("d/m/Y H:i:s", $seconds);
        // return Carbon::createFromFormat('Y-m-d H:i:s.v', $date);

        // date_default_timezone_set('UTC');
        // $result = strval(time($date)-strtotime('1970-01-01 00:00:00'));
		// return $result;
	}

	public static function stringDecrypt($key, $string)
	{
		$encrtyp_method = 'AES-256-CBC';

        $key_hash = hex2bin(hash('sha256', $key));

        $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);

        $dekripsi = openssl_decrypt(base64_decode($string), $encrtyp_method, $key_hash, OPENSSL_RAW_DATA, $iv);

        $decompress = \LZCompressor\LZString::decompressFromEncodedURIComponent($dekripsi);

        return $decompress;
	}
}
