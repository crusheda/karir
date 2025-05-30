@extends('layouts.sub')

@section('content')
<div class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white"
    data-image-src="{{ asset('img/photos/bg18.png') }}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-1 mb-3">Hasil Seleksi Peserta</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('portal.index') }}"><i class="uil uil-home-alt"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Rekrutmen</li>
                        <li class="breadcrumb-item active" aria-current="page">Hasil Seleksi</li>
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
            <div class="col-xxl-8 mx-auto mt-n20">
                <div class="card">
                    <div class="card-body p-11 text-center">
                        <h2 class="mb-3 text-start"><i class="uil uil-shield-check align-middle text-blue me-1"></i> Verifikasi</h2>
                        <p class="lead mb-6 text-start">Apabila calon pelamar sudah berhasil melakukan pengisian Registrasi pada menu Rekrutmen Pegawai,
                            maka pengumuman hasil seleksi dapat dilihat melalui halaman ini. Silakan melengkapi data isian wajib di bawah ini.</p>
                        <form class="text-start mb-3" enctype="multipart/form-data" method="POST" action="{{ route('hasil.result') }}" novalidate>
                            @csrf
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="Email Peserta" id="loginEmail" name="email" autofocus required>
                                <label for="loginEmail">Email Peserta</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="date" class="form-control" placeholder="YYYY/MM/DD" id="tl" name="tl" required>
                                <label for="tl">Tanggal Lahir</label>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2"><i class="uil uil-newspaper me-1"></i> Lihat Hasil Pengumuman</button>
                        </form>
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
