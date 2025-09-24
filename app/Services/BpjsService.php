<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class BpjsService
{
    protected $consid;
    protected $secretkey;
    protected $userkey;
    protected $client;

    public function __construct()
    {
        $this->consid    = env('BPJS_CONSID');
        $this->secretkey = env('BPJS_SECRETKEY');
        $this->userkey   = env('BPJS_USERKEY');

        // Ambil dari config/services.php
        $baseUrl = config('services.bpjs.base_url');

        $this->client = new Client([
            'base_uri' => $baseUrl,
            'timeout'  => 30,
            'verify'   => false,
        ]);
    }

    // ------------------------------------------------------------  SERVICE BPJS  --------------------------------------------------------------
    public function serviceGet($url)
    {
        $res = $this->client->get(config('services.bpjs.services_name_antrean').'/'.$url, [
            'headers' => [
                'X-cons-id'   => $this->consid,
                'X-Timestamp' => $this->bpjsTimestamp(),
                'X-Signature' => $this->generateSignature(),
                'user_key'    => $this->userkey,
            ]
        ]);

        return json_decode($res->getBody());
    }

    // ------------------------------------------------------------  TOOLS BPJS  --------------------------------------------------------------
	public function generateSignature()
	{
        // Computes the signature by hashing the salt with the secret key as the key
        $signature = hash_hmac('sha256', $this->consid."&".$this->bpjsTimestamp(), $this->secretkey, true);

        // base64 encode�
        $encodedSignature = base64_encode($signature);

		return $encodedSignature;
	}

	public function bpjsTimestamp() // DEFAULT
	{
        return (string) gmdate('U');
        // date_default_timezone_set('UTC');
        // $result = strval(time()-strtotime('1970-01-01 00:00:00'));
		// return $result;
	}
    
	public function stringDecrypt($string)
	{
        $key = $this->consid.$this->secretkey.$this->bpjsTimestamp();

		$encrtyp_method = 'AES-256-CBC';

        $key_hash = hex2bin(hash('sha256', $key));

        $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);

        $dekripsi = openssl_decrypt(base64_decode($string), $encrtyp_method, $key_hash, OPENSSL_RAW_DATA, $iv);

        $decompress = \LZCompressor\LZString::decompressFromEncodedURIComponent($dekripsi);

        return $decompress;
	}
}
