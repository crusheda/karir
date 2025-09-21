<?php

namespace App\Http\Controllers\Rekrutmen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
            'email' => 'required|email',
            'tl' => 'required|date',
        ], [
            'email.required' => 'Email tidak boleh kosong.',
            'email.email'    => 'Format email tidak valid, silakan masukkan email yang benar.',
            'tl.required'    => 'Tanggal lahir wajib diisi.',
            'tl.date'        => 'Format tanggal lahir tidak valid.',
        ]);

        // QUERY CEK HASIL DI TABEL REKRUTMEN_REGISTRASI
        // print_r($request->tl);
        // die();
        $data = registrasi::where('email',$request->email)
                        ->where('tgl_lahir',$request->tl)
                        ->whereNull('deleted_at')
                        ->orderBy('id','DESC')
                        ->first();

        if ($data) {
            if ($data->hasil == 1) {
                return redirect()->back()->with('success', 'Data lamaran berhasil diajukan.
                    Silakan periksa pengumuman Rekrutmen melalui website/sosial media RS Kami dan
                    memeriksa hasil seleksi melalui halaman Hasil Seleksi Rekrutmen secara berkala.
                    Terimakasih.')
                    ->with('kehadiran', $data->kehadiran)
                    ->with('iden',Crypt::encryptString($data->id));
            } elseif ($data->hasil == 2) {
                return redirect()->back()->with('success', 'Selamat! Anda dinyatakan berhak mengikuti tahap seleksi berikutnya.
                    Silakan periksa jadwal dan ketentuan seleksi melalui website/sosial media resmi RS Kami,
                    serta pantau informasi terbaru pada halaman Hasil Seleksi Rekrutmen secara berkala.')
                    ->with('keterangan', $data->keterangan_seleksi)
                    ->with('tgl_seleksi', $data->tgl_seleksi)
                    ->with('ruang_seleksi', $data->ruang_seleksi)
                    ->with('kehadiran', $data->kehadiran)
                    ->with('iden',Crypt::encryptString($data->id));
            } elseif ($data->hasil == 3) {
                return redirect()->back()->with('success', 'Selamat! Anda dinyatakan <b class="text-info">LOLOS</b> dalam proses seleksi Rekrutmen RS Kami.
                    Informasi lebih lanjut mengenai tahapan berikutnya akan diumumkan melalui website/sosial media resmi serta
                    dapat dilihat pada halaman Hasil Seleksi Rekrutmen.')
                    ->with('keterangan', $data->keterangan_lolos)
                    ->with('iden',Crypt::encryptString($data->id));
            } else {
                return redirect()->back()->with('success', 'Terimakasih atas partisipasi Anda dalam proses Rekrutmen RS Kami.
                    Berdasarkan hasil seleksi, Anda dinyatakan <b class="text-danger">BELUM LOLOS</b> pada tahap ini. Kami menghargai minat Anda untuk
                    bergabung, dan silakan mengikuti kesempatan rekrutmen berikutnya di masa mendatang.')
                    ->with('keterangan', $data->keterangan_tidak_lolos)
                    ->with('iden',Crypt::encryptString($data->id));
                }
        } else {
            return redirect()->back()->with('error', 'Maaf, sepertinya ada kesalahan dengan Identitas yang Anda Masukkan.
                    Silakan periksa kembali Email beserta Tanggal Lahir yang Anda masukkan dan pastikan Anda sudah berhasil melakukan Registrasi
                    Calon Pegawai Baru sebelumnya.');
        }
    }

    function kehadiran(Request $request)
    {
        $kehadiran = $request->input('kehadiran'); // hasilnya 0 atau 1 sesuai tombol
        $id = Crypt::decryptString($request->iden); // hasil decrypt dari id reg

        $data = registrasi::find($id);
        $data->kehadiran = $kehadiran;
        $data->save();

        return redirect()->back()->with('success', 'Terimakasih, konfirmasi kehadiran Anda telah berhasil disimpan.
                Silakan mengikuti instruksi lebih lanjut pada tahapan seleksi berikutnya. Tetap selalu periksa jadwal dan ketentuan seleksi melalui
                website/sosial media resmi RS Kami, serta pantau informasi terbaru pada halaman Hasil Seleksi Rekrutmen secara berkala');
    }
}
