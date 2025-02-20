<?php

namespace App\Http\Controllers\Rekrutmen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Redirect;
use Auth;
use File;
use Validator;
use ZipArchive;
use Carbon\Carbon;
use App\Models\alamat;
use App\Models\rekrutmen\pengumuman;
use App\Models\rekrutmen\registrasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class RegistrasiController extends Controller
{
    public function index()
    {
        $alamat = alamat::select('nama_kabkota')->orderBy('nama_kabkota','ASC')->groupBy('nama_kabkota')->get();

        $data = [
            'alamat' => $alamat,
        ];

        return view('pages.rekrutmen.registrasi.index')->with('list', $data);
    }

    function registrasi(Request $request)
    {
        $this->validate($request,[
            'upload_sd' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_smp' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_sma' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_d2' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_d3' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_d4' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_s1' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_s1_profesi' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_s2' => 'nullable|file|max:5000', // MAX 5 Mb
            'upload_s3' => 'nullable|file|max:5000', // MAX 5 Mb
        ]);

        // $data = new registrasi;
        // $data->

        return redirect()->route('profil.index')->with('message','Ubah Data Profil Anda Berhasil Pada '.$tgl);
    }
}
