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
use App\Models\rekrutmen\registrasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class HasilController extends Controller
{
    public function index()
    {
        return view('pages.rekrutmen.hasil.index');
    }

    function result(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'tl' => 'required',
        ]);

        // QUERY CEK HASIL DI TABEL REKRUTMEN_REGISTRASI

        return redirect()->back()->with('success', 'Data lamaran berhasil diajukan.
            Silakan periksa pengumuman Rekrutmen melalui website/sosial media RS Kami dan
            memeriksa hasil seleksi melalui halaman Hasil Seleksi Rekrutmen secara berkala.
            Terimakasih.');
    }
}
