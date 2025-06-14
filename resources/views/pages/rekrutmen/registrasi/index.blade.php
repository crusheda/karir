@extends('layouts.sub')

@section('content')
<div class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white" data-image-src="{{ asset('img/photos/bg18.png') }}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-1 mb-3">Registrasi</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('portal.index') }}"><i class="uil uil-home-alt"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Rekrutmen</li>
                        <li class="breadcrumb-item active" aria-current="page">Registrasi Peserta</li>
                    </ol>
                </nav>
                <!-- /nav -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /section -->
<div class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-3 col-xl-6 col-xxl-12 mx-auto mt-n20">
                <div class="card">
                    <div class="card-body p-11 text-center">

                        @include('inc.message')

                        <h2 class="mb-3 text-start">Formulir Registrasi Peserta</h2>
                        <p class="lead mb-6 text-start">Calon Pelamar diwajibkan melakukan registrasi sebagai syarat mengajukan lowongan</p>
                        <form class="text-start mb-3" enctype="multipart/form-data" method="POST" action="{{ route('registrasi.daftar') }}" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-secondary">
                                        <h6>Tata Cara Pengisian</h6>
                                        <i class="uil uil-arrow-right align-middle me-1"></i> Isian wajib bertanda <b class="text-danger">*</b> tidak boleh dikosongi <br>
                                        <i class="uil uil-arrow-right align-middle me-1"></i> Setiap peserta hanya diperbolehkan mengisi formulir satu kali <br>
                                        <i class="uil uil-arrow-right align-middle me-1"></i> Silakan memilih daftar Lowongan Kerja Aktif pada isian di bawah apabila kuota pendaftar masih tersedia <br>
                                        <i class="uil uil-arrow-right align-middle me-1"></i> Klik tombol <b>Ajukan Lamaran</b> setelah selesai melakukan pengisian dengan lengkap <br>
                                        <i class="uil uil-arrow-right align-middle me-1"></i> Hasil seleksi dapat dipantau secara berkala melalui halaman <b>Hasil Seleksi</b>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        @if (count($list['pengumuman']) > 0)
                                            <select class="form-select mb-4" aria-label="Pilihan Lowongan Kerja" name="id_pengumuman" onchange="pilihPengumuman(this.value)" required>
                                                <option value="" disabled selected hidden>Pilih Lowongan Kerja</option>
                                                @if (count($list['pengumuman']) > 0)
                                                    @foreach ($list['pengumuman'] as $item)
                                                        <option value="{{ $item->id }}" {{ old('id_pengumuman') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->nama }} ({{ $item->jumlah_pendaftar.' / '.$item->kuota }})
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <label for="id_pengumuman">(Jumlah Pendaftar / Total Kuota) <b class="text-danger">*</b></label>
                                        @else
                                            <select class="form-select mb-4" aria-label="Pilihan Lowongan Kerja" disabled>
                                                <option value="0">Tidak ada lowongan yang dibuka</option>
                                            </select>
                                            <label for="id_pengumuman">(Jumlah Pendaftar / Total Kuota) <b class="text-danger">*</b></label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" placeholder="Tuliskan Email Aktif Anda" name="email" value="{{ old('email') }}" autofocus required>
                                        <label for="email">Email Aktif <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" placeholder="Tuliskan Nama Lengkap Sesuai KTP" name="nama" value="{{ old('nama') }}" required>
                                        <label for="nama">Nama Lengkap (Sesuai KTP) <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-4">
                                        <select class="form-select mb-4" aria-label="Tempat Lahir Anda" name="tl" required>
                                            <option value="" disabled selected hidden>Pilih Kota</option>
                                            @if ($list['alamat'])
                                                @foreach ($list['alamat'] as $item)
                                                    <option value="{{ $item->nama_kabkota }}" {{ old('tl') == $item->nama_kabkota ? 'selected' : '' }}>{{ $item->nama_kabkota }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <label for="tl">Tempat Kelahiran <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-4">
                                        <input type="date" class="form-control" placeholder="YYYY/MM/DD" name="ttl" value="{{ old('ttl') }}" required>
                                        <label for="ttl">Tanggal Lahir <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" placeholder="e.g. D3 Keperawatan" name="pt" value="{{ old('pt') }}" required>
                                        <label for="pt">Pendidikan Terakhir <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" placeholder="e.g. 08xxxxxx" name="hp" value="{{ old('hp') }}" required>
                                        <label for="hp">No. Handphone Aktif <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" placeholder="Tuliskan Sosmed Anda (IG/TT/FB/dll)" name="sm" value="{{ old('sm') }}" required>
                                        <label for="sm">Sosial Media (IG/FB/dll) <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-1">
                                        <textarea class="form-control" placeholder="Tuliskan Alamat Lengkap Anda" name="alamat" style="height: 90px" required>{{ old('alamat') }}</textarea>
                                        <label for="alamat">Alamat Lengkap <b class="text-danger">*</b></label>
                                    </div>
                                </div>
                                <div class="divider-icon my-4"><i class="uil uil-file-upload-alt"></i></div>
                                <div class="col-md-12">
                                    <div class="alert alert-secondary">
                                        <h6>Keterangan Upload File</h6>
                                        Batas maksimal file upload <b>1 mb</b>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Ijazah Terakhir (<b>PDF</b>) <b class="text-danger">*</b></label>
                                    <div class="form-floating mb-4">
                                        <input type="file" class="form-control" name="up-ijazah" accept=".pdf" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Transkip Nilai (<b>PDF</b>) <b class="text-danger">*</b></label>
                                    <div class="form-floating mb-4">
                                        <input type="file" class="form-control" name="up-transkip" accept=".pdf" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Surat Lamaran (<b>PDF</b>) <b class="text-danger">*</b></label>
                                    <div class="form-floating mb-4">
                                        <input type="file" class="form-control" name="up-lamaran" accept=".pdf" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Curriculum Vitae (<b>PDF</b>) <b class="text-danger">*</b></label>
                                    <div class="form-floating mb-4">
                                        <input type="file" class="form-control" name="up-cv" accept=".pdf" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Pas Photo (<b>JPG/PNG</b>) <b class="text-danger">*</b></label>
                                    <div class="form-floating mb-4">
                                        <input type="file" class="form-control" name="up-foto" accept=".jpg,.jpeg,.png" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Sertifikat Pelatihan (<b>PDF</b>)</label>
                                    <div class="form-floating mb-4">
                                        <input type="file" class="form-control" name="up-sertif" accept=".pdf">
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" name="konfirmasi" id="flexCheckDefault" required>
                                <label class="form-check-label fs-13" for="flexCheckDefault"> Anda sudah mengerti persyaratan rekrutmen dan ingin melanjutkan registrasi data yang telah diisi dengan sebenar-benarnya </label>
                            </div>
                            <button type="submit" class="btn btn-secondary rounded-pill btn-login w-100 mb-2" id="submitBtn" required disabled><i class="uil uil-telegram-alt me-1"></i> Ajukan Lamaran</button>
                        </form>
                        <!-- /form -->
                        <p class="mb-0">Sudah registrasi? <a href="{{ route('hasil.index') }}" class="hover">Lihat Hasil Seleksi</a></p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Untuk semua input/textarea/select yang punya required
    const fields = document.querySelectorAll('[required]');

    fields.forEach(function(field) {
        field.addEventListener('input', function () {
            if (field.classList.contains('is-invalid') && field.value.trim() !== '') {
                field.classList.remove('is-invalid');
            }
        });

        // Khusus untuk <select>, pakai 'change' event
        if (field.tagName === 'SELECT') {
            field.addEventListener('change', function () {
                if (field.classList.contains('is-invalid') && field.value !== '') {
                    field.classList.remove('is-invalid');
                }
            });
        }
    });
});

document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault(); // Cegah submit langsung
    let valid = true;

    // Ambil semua input yang wajib diisi
    const requiredFields = this.querySelectorAll('[required]');

    requiredFields.forEach(function(field) {
        // Bersihkan error sebelumnya
        field.classList.remove('is-invalid');

        // Cek jika checkbox
        if (field.type === 'checkbox') {
            if (!field.checked) {
                valid = false;
                field.classList.add('is-invalid');
            }
        }
        // Cek field biasa (text, email, select, dll)
        else if (!field.value.trim()) {
            valid = false;
            field.classList.add('is-invalid');
        }
    });

    if (valid) {
        // Disable tombol agar tidak bisa diklik ganda
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> Mengirim...';

        // Submit form setelah validasi manual berhasil
        e.target.submit();
    }
});

function pilihPengumuman(id) {
    $.ajax({
        url: "/api/rekrutmen/pengumuman/"+id,
        type: 'GET',
        dataType: 'json',
        success: function(res) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            console.log('Kuota Lowongan Kerja = '+res.pengumuman.kuota);
            console.log('Jumlah Pendaftar Saat Ini = '+res.registrasi);

            if (res.pengumuman.kuota) {
                if (res.registrasi < res.pengumuman.kuota) {
                    Toast.fire({
                        icon: 'success',
                        title: 'Kuota Lowongan masih tersedia.'
                    })
                    $('#submitBtn').prop('disabled',false).removeClass('btn-secondary').addClass('btn-primary');
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: 'Kuota Lowongan sudah penuh!'
                    })
                    $('#submitBtn').prop('disabled',true).removeClass('btn-primary').addClass('btn-secondary');
                }
            } else {
                Toast.fire({
                    icon: 'success',
                    title: 'Kuota Pendaftaran Lowongan Kerja tidak terbatas.'
                })
                $('#submitBtn').prop('disabled',false).removeClass('btn-secondary').addClass('btn-primary');
            }
        },
        error: function(res) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'Terjadi kesalahan saat memperoleh data lowongan kerja!'
            })
            $('#submitBtn').prop('disabled',true).removeClass('btn-primary').addClass('btn-secondary');
        }
    })

}
</script>
@endsection
