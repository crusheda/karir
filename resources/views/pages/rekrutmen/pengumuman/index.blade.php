@extends('layouts.sub')

@section('content')
    <div class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white"
        data-image-src="{{ asset('img/photos/bg18.png') }}">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3">Pengumuman</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('portal.index') }}"><i class="uil uil-home-alt"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Rekrutmen</li>
                            <li class="breadcrumb-item active" aria-current="page">Pengumuman Peserta</li>
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
                <div class="col-lg-7 col-xl-6 col-xxl-7 mx-auto mt-n20">
                    <div class="card">
                        <div class="card-body p-11 text-center">
                            <h2 class="mb-3 text-start">Verifikasi Penerimaan Pegawai</h2>
                            <p class="lead mb-6 text-start">Apabila calon pelamar sudah berhasil melakukan pengisian Registrasi pada menu Rekrutmen Pegawai,
                                maka pengumuman dapat Anda lihat di halaman ini. Silakan melengkapi data isian wajib di bawah ini.</p>
                            <form class="text-start mb-3">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" placeholder="Email" id="loginEmail" required>
                                    <label for="loginEmail">Email</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="date" class="form-control" placeholder="YYYY/MM/DD" id="ttl" required>
                                    <label for="ttl">Tanggal Lahir</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" placeholder="e.g. 08xxxxxx" id="hp" required>
                                    <label for="hp">No. Handphone Aktif</label>
                                </div>
                                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Lihat Hasil Pengumuman</a>
                            </form>
                            {{-- <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                            <p class="mb-0">Don't have an account? <a href="signup.html" class="hover">Sign up</a></p>
                            <div class="divider-icon my-4">or</div>
                            <nav class="nav social justify-content-center text-center">
                                <a href="#" class="btn btn-circle btn-sm btn-google"><i
                                        class="uil uil-google"></i></a>
                                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i
                                        class="uil uil-facebook-f"></i></a>
                                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i
                                        class="uil uil-twitter"></i></a>
                            </nav> --}}
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
