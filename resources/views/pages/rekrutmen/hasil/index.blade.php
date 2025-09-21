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

                        @include('inc.message')

                        @if (session()->exists('kehadiran'))
                            @switch(session('kehadiran'))
                                @case(null)
                                    <form id="formKehadiran" class="text-start mb-3" enctype="multipart/form-data" method="POST" action="{{ route('push.kehadiran') }}" novalidate>
                                        @csrf
                                        <input type="text" class="form-control" name="iden" value="{{ session('iden') }}" hidden>
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" name="kehadiran" value="0" class="btn btn-danger rounded-pill btn-login w-100 me-1">
                                                <i class="fas fa-thumbs-down me-2"></i> Tidak Hadir
                                            </button>
                                            <button type="submit" name="kehadiran" value="1" class="btn btn-success text-white rounded-pill btn-login w-100 ms-1">
                                                Hadir <i class="fas fa-thumbs-up ms-2"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <hr class="mt-5 mb-3">
                                    @break

                                @case(0)
                                    <div class="alert alert-info">Anda telah mengonfirmasi <b class="text-primary">HADIR</b> pada tahapan seleksi Rekrutmen. Silakan menunggu Informasi Kami Selanjutnya.</div>
                                    <hr class="mt-5 mb-3">
                                    @break

                                @case(1)
                                    <div class="alert alert-warning">Anda telah mengonfirmasi <b class="text-danger">TIDAK HADIR</b> pada tahapan seleksi Rekrutmen. Silakan menghubungi bagian SDI di RS Kami untuk informasi lebih lanjut.</div>
                                    <hr class="mt-5 mb-3">
                                    @break
                            @endswitch
                        @endif

                        <h2 class="mb-3 text-start"><i class="uil uil-shield-check align-middle text-blue me-1"></i> Verifikasi</h2>
                        <p class="lead mb-6 text-start">Apabila calon pelamar sudah berhasil melakukan pengisian Registrasi pada menu Rekrutmen Pegawai,
                            maka pengumuman hasil seleksi dapat dilihat melalui halaman ini. Silakan melengkapi data isian wajib di bawah ini.</p>
                        <form id="formHasil" class="text-start mb-3" enctype="multipart/form-data" method="POST" action="{{ route('hasil.result') }}" novalidate>
                            @csrf
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="Email Peserta" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autofocus required>
                                <label for="loginEmail">Email Peserta <b class="text-danger">*</b></label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="date" class="form-control" placeholder="YYYY/MM/DD" id="tl" name="tl" required>
                                <label for="tl">Tanggal Lahir <b class="text-danger">*</b></label>
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
<script>
    document.querySelector("#formHasil").addEventListener("submit", function(e) {
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

        let email = document.getElementById("email").value.trim();
        let tl = document.getElementById("tl").value.trim();

        if (email == "" && tl == "") {
            e.preventDefault(); // stop submit
            Toast.fire({
                icon: 'error',
                title: 'Email dan Tanggal Lahir wajib diisi!'
            })
        } else {
            if (email === "") {
                e.preventDefault(); // stop submit
                Toast.fire({
                    icon: 'warning',
                    title: 'Email wajib diisi!'
                })
            } else {
                if (tl === "") {
                    e.preventDefault(); // stop submit
                    Toast.fire({
                        icon: 'warning',
                        title: 'Tanggal Lahir wajib diisi!'
                    })
                }
            }
        }
    });
</script>
@endsection
