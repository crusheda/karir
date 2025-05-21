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
use App\Models\rekrutmen\ref_pendidikan;
use App\Models\rekrutmen\pengumuman;
use App\Models\rekrutmen\registrasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class PengumumanController extends Controller
{
    public function index()
    {
        $show = pengumuman::orderBy('mulai','ASC')->get();

        foreach ($show as $item) {
            $kualifikasi_ids = json_decode($item->kualifikasi, true); // Decode JSON to array

            // Ambil nama dan kategori dari tabel referensi_jenjang_pendidikan
            $jenjangs = ref_pendidikan::whereIn('id', $kualifikasi_ids)->get(['nama', 'kategori']);

            $item->jenjang_pendidikan = $jenjangs;
        }

        $data = [
            'show' => $show,
        ];

        return view('pages.rekrutmen.pengumuman.index')->with('list', $data);
    }
}
