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
        $today = Carbon::today();
        $alamat = alamat::select('nama_kabkota')->orderBy('nama_kabkota','ASC')->groupBy('nama_kabkota')->get();
        $pengumuman = DB::table('rekrutmen_pengumuman AS rp')
                        ->leftJoin('rekrutmen_registrasi AS rr', function($join) {
                            $join->on('rp.id', '=', 'rr.id_pengumuman')
                                ->where('rr.status',true)
                                ->whereNull('rr.deleted_at');
                        })
                        ->select(
                            'rp.id',
                            'rp.nama',
                            'rp.kuota',
                            DB::raw('count(rr.id) as jumlah_pendaftar')
                        )
                        ->whereDate('rp.mulai', '<=', $today)
                        ->whereDate('rp.selesai', '>=', $today)
                        ->whereNull('rp.deleted_at')
                        ->groupBy('rp.id', 'rp.nama', 'rp.kuota')
                        ->get()
                        ->map(function ($item) {
                            // Ubah array ke objek stdClass
                            return (object) [
                                'id' => $item->id,
                                'nama' => $item->nama,
                                'kuota' => $item->kuota ?? '∞',
                                'jumlah_pendaftar' => $item->jumlah_pendaftar,
                            ];
                        });

        // dd($pengumuman);
        $data = [
            'alamat' => $alamat,
            'pengumuman' => $pengumuman,
        ];

        return view('pages.rekrutmen.registrasi.index')->with('list', $data);
    }

    function daftar(Request $request)
    {
        $this->validate($request,[
            'id_pengumuman' => 'required',
            'email' => 'required',
            'nama' => 'required',
            'tl' => 'required',
            'ttl' => 'required',
            'pt' => 'required',
            'hp' => 'required',
            'sm' => 'required',
            'alamat' => 'required',
            'up-ijazah' => 'required|mimes:pdf|max:1024',
            'up-transkip' => 'required|mimes:pdf|max:1024',
            'up-lamaran' => 'required|mimes:pdf|max:1024',
            'up-cv' => 'required|mimes:pdf|max:1024',
            'up-foto' => 'required|mimes:jpg,jpeg,png|max:1024',
            'up-sertif' => 'mimes:pdf|max:1024',
        ]);

        $today = Carbon::today();
        $cekPengumuman = pengumuman::where('id',$request->id_pengumuman)
                        ->whereDate('rp.mulai', '<=', $today)
                        ->whereDate('rp.selesai', '>=', $today)
                        ->exist();

        if ($cekPengumuman) {
            $validasi = registrasi::where('email',$request->email)
                                    // ->where('tl',$request->tl)
                                    // ->where('ttl',$request->ttl)
                                    // ->where('hp',$request->hp)
                                    ->where('status',1)
                                    ->whereNull('deleted_at')
                                    ->first();

            if (!$validasi) {
                // INITIALIZE FILE
                    // 1 = ijazah
                    // 2 = transkip
                    // 3 = lamaran
                    // 4 = sertifikat
                    // 5 = cv
                    // 6 = foto

                    // TITLE
                    $title1 = $request->file('up-ijazah')->getClientOriginalName();
                    $title2 = $request->file('up-transkip')->getClientOriginalName();
                    $title3 = $request->file('up-lamaran')->getClientOriginalName();
                    if ($request->file('up-sertif')) {
                        $title4 = $request->file('up-sertif')->getClientOriginalName();
                    }
                    $title5 = $request->file('up-cv')->getClientOriginalName();
                    $title6 = $request->file('up-foto')->getClientOriginalName();

                    // PATH
                    $path1 = $request->file('up-ijazah')->store('files/rekrutmen/'.$request->id_pengumuman.'/ijazah', 'public');
                    $path2 = $request->file('up-transkip')->store('files/rekrutmen/'.$request->id_pengumuman.'/transkip', 'public');
                    $path3 = $request->file('up-lamaran')->store('files/rekrutmen/'.$request->id_pengumuman.'/lamaran', 'public');
                    if ($request->file('up-sertif')) {
                        $path4 = $request->file('up-sertif')->store('files/rekrutmen/'.$request->id_pengumuman.'/sertifikat', 'public');
                    }
                    $path5 = $request->file('up-cv')->store('files/rekrutmen/'.$request->id_pengumuman.'/cv', 'public');
                    $path6 = $request->file('up-foto')->store('files/rekrutmen/'.$request->id_pengumuman.'/foto', 'public');

                // SAVE TO DB
                $data = new registrasi;
                $data->id_pengumuman = $request->id_pengumuman;
                $data->email = $request->email;
                $data->nama = $request->nama;
                $data->tempat_lahir = $request->tl;
                $data->tgl_lahir = $request->ttl;
                $data->pendidikan = $request->pt;
                $data->hp = $request->hp;
                $data->sosmed = $request->sm;
                $data->alamat_lengkap = $request->alamat;
                $data->t_ijazah = $title1;
                $data->t_transkip = $title2;
                $data->t_lamaran = $title3;
                if ($request->file('up-sertif')) {
                    $data->t_sertifikat = $title4;
                }
                $data->t_cv = $title5;
                $data->t_foto = $title6;
                $data->p_ijazah = $path1;
                $data->p_transkip = $path2;
                $data->p_lamaran = $path3;
                if ($request->file('up-sertif')) {
                    $data->p_sertifikat = $path4;
                }
                $data->p_cv = $path5;
                $data->p_foto = $path6;
                $data->status = true;
                $data->save();

                return redirect()->back()->with('success', 'Data lamaran berhasil diajukan.
                    Silakan periksa pengumuman Rekrutmen melalui website/sosial media RS Kami dan
                    memeriksa hasil seleksi melalui halaman Hasil Seleksi Rekrutmen secara berkala.
                    Terimakasih.');
            } else {
                return redirect()->back()->withErrors('Data Lamaran yang Anda ajukan sudah ada/masuk pada daftar peserta seleksi.
                    Silakan periksa pengumuman Rekrutmen melalui website/sosial media RS Kami dan
                    memeriksa hasil seleksi melalui halaman Hasil Seleksi Rekrutmen secara berkala. Terimakasih.');
            }
        } else {
            return redirect()->back()->withErrors('Mohon Maaf, Data Pengumuman yang Anda masukkan Tidak Valid / Tidak ada di Database Kami!');
        }
    }
}
