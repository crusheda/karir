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
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class RekrutmenController extends Controller
{
    public function index()
    {
        $alamat = alamat::select('nama_kabkota')->orderBy('nama_kabkota','ASC')->groupBy('nama_kabkota')->get();

        $data = [
            'alamat' => $alamat,
        ];

        return view('pages.rekrutmen.registrasi.index')->with('list', $data);
    }
}
