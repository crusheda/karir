<?php

namespace App\Http\Controllers\Tentang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Redirect;
use Auth;
use Carbon\Carbon;

class ProfilController extends Controller
{
    public function index()
    {
        // $alamat = alamat::select('nama_kabkota')->orderBy('nama_kabkota','ASC')->groupBy('nama_kabkota')->get();

        // $data = [
        //     'alamat' => $alamat,
        // ];

        return view('pages.tentang.profil');
    }
}
