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
        $today = Carbon::now();

        $show = pengumuman::whereDate('mulai', '<=', $today)->whereDate('selesai', '>=', $today)->where('status',1)->whereNull('deleted_at')->orderBy('mulai','ASC')->get();

        $data = [
            'show' => $show,
        ];

        return view('pages.rekrutmen.pengumuman.index')->with('list', $data);
    }

    function detail($token)
    {
        $show = pengumuman::where('token',$token)->where('status',1)->whereNull('deleted_at')->first();

        // MENGAMBIL DATA KUALIFIKASI
            $kualifikasi_ids = json_decode($show->kualifikasi, true); // Decode JSON to array

            // Ambil nama dan kategori dari tabel referensi_jenjang_pendidikan
            $jenjangs = ref_pendidikan::whereIn('id', $kualifikasi_ids)->get(['nama', 'kategori']);
            $show->jenjang_pendidikan = $jenjangs;

        // MENGHITUNG KUOTA TERSISA
            if ($show->kuota) {
                // Hitung jumlah peserta yang sudah mendaftar untuk pengumuman ini
                $jumlah_pendaftar = registrasi::where('id_pengumuman', $show->id)->count();

                // Hitung sisa kuota
                $sisa_kuota = $show->kuota - $jumlah_pendaftar;
                $show->sisa_kuota = $sisa_kuota;
            } else {
                $show->sisa_kuota = null;
            }

        $buka = Carbon::parse($show->mulai);
        $tutup = Carbon::parse($show->selesai);
        $dibuka = $buka->isoFormat('dddd, D MMMM Y');
        // $ditutup = $tutup->isoFormat('dddd, D MMMM Y').' ('.$tutup->diffForHumans().')';
        $ditutup = $tutup->isoFormat('dddd, D MMMM Y');

        // dd($show);

        $data = [
            'show' => $show,
            'dibuka' => $dibuka,
            'ditutup' => $ditutup,
        ];

        return view('pages.rekrutmen.pengumuman.detail')->with('list', $data);
    }
}
