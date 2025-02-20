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
                        <h2 class="mb-3 text-start">Registrasi Peserta Rekrutmen</h2>
                        <p class="lead mb-6 text-start">Calon Pelamar diwajibkan melakukan registrasi sebagai syarat mengajukan lowongan</p>
                        <form class="text-start mb-3" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" placeholder="Tuliskan Email Aktif Anda" id="email" autofocus required>
                                    <label for="email">Email Aktif</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" placeholder="Tuliskan Nama Lengkap Sesuai KTP" id="nama" required>
                                    <label for="nama">Nama Lengkap (Sesuai KTP)</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select mb-4" aria-label="Tempat Lahir Anda" id="tl" required>
                                    <option selected>Pilih Kota Lahir</option>
                                    @if ($list['alamat'])
                                        @foreach ($list['alamat'] as $item)
                                            <option value="{{ $item->nama_kabkota }}">{{ $item->nama_kabkota }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-4">
                                    <input type="date" class="form-control" placeholder="YYYY/MM/DD" id="ttl" required>
                                    <label for="ttl">Tanggal Lahir</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" placeholder="e.g. D3 Keperawatan" id="pt" required>
                                    <label for="pt">Pendidikan Terakhir</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" placeholder="e.g. 08xxxxxx" id="hp" required>
                                    <label for="hp">No. Handphone Aktif</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" placeholder="Tuliskan Sosmed Anda (IG/TT/FB/dll)" id="sm" required>
                                    <label for="sm">Sosial Media (IG/FB/dll)</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-1">
                                    <textarea id="alamat" class="form-control" placeholder="Tuliskan Alamat Lengkap Anda" style="height: 90px" required></textarea>
                                    <label for="alamat">Alamat Lengkap</label>
                                </div>
                            </div>
                            <div class="divider-icon my-4"></div>
                            <div class="alert alert-secondary">
                                <h6>Keterangan</h6>
                                Batas maksimal file upload <b>1 mb</b>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-1">Ijazah Terakhir</label>
                                <div class="form-floating mb-4">
                                    <input type="file" class="form-control" id="up-ijazah" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-1">Transkip Nilai</label>
                                <div class="form-floating mb-4">
                                    <input type="file" class="form-control" id="up-transkip" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-1">Surat Lamaran</label>
                                <div class="form-floating mb-4">
                                    <input type="file" class="form-control" id="up-lamaran" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-1">Curriculum Vitae</label>
                                <div class="form-floating mb-4">
                                    <input type="file" class="form-control" id="up-cv" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-1">Pas Photo</label>
                                <div class="form-floating mb-4">
                                    <input type="file" class="form-control" id="up-foto" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-1">Sertifikat Pelatihan</label>
                                <div class="form-floating mb-4">
                                    <input type="file" class="form-control" id="up-sertif" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label fs-13" for="flexCheckDefault"> Anda sudah mengerti persyaratan rekrutmen dan ingin melanjutkan registrasi data yang telah diisi dengan sebenar-benarnya </label>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2" disabled><i class="uil uil-telegram-alt me-1"></i> Ajukan Lamaran</button>
                        </form>
                        <!-- /form -->
                        <p class="mb-0">Sudah registrasi? <a href="{{ route('hasil.index') }}" class="hover">Lihat Hasil Seleksi</a></p>
                        {{-- <div class="divider-icon my-4"></div>
                        <nav class="nav social justify-content-center text-center">
                            <a href="#" class="btn btn-circle btn-sm btn-google"><i
                                    class="uil uil-google"></i></a>
                            <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i
                                    class="uil uil-facebook-f"></i></a>
                            <a href="#" class="btn btn-circle btn-sm btn-twitter"><i
                                    class="uil uil-twitter"></i></a>
                        </nav> --}}
                        <!--/.social -->
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
@endsection
