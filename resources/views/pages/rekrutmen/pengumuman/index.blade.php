@extends('layouts.sub')

@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600" data-image-src="{{ asset('img/photos/bg18.png') }}">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto mb-5">
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('portal.index') }}"><i class="uil uil-home-alt"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Rekrutmen</li>
                            <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                        </ol>
                    </nav>
                    {{-- <div data-cues="fadeIn" data-duration="3000">
                        <h1 class="fs-15 text-uppercase mb-3">Pengumuman</h1>
                    </div> --}}
                    <h3 class="display-1 mb-4">
                        <span class="typer text-primary"
                            data-loop="false"
                            data-delay="200"
                            data-words="Loker ,Lowongan Pekerjaan ">
                        </span><span class="cursor text-primary" data-owner="typer"></span>
                    </h3>
                    <h4 class="fs-20 mb-6">Mari bergabung bersama Kami.</h4>
                    <a href="{{ route('registrasi.index') }}" class="btn btn-lg rounded-pill btn-gradient gradient-7">Daftar Sekarang</a>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>
    <section class="wrapper bg-light">
        <div class="container pb-15 pb-md-17">
            <div class="row gx-md-5 gy-5 mt-n18 mt-md-n19">
                <div class="col-md-6 col-xl-3">
                    <div class="card lift">
                        <div class="card-body">
                            <img src="{{ asset('/img/icons/solid/target.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-purple mb-3" alt="" />
                            <h4>Kualifikasi dan Kompetensi</h4>
                            <p class="mb-0">Pendidikan, pengalaman kerja, dan sertifikasi yang relevan.</p>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-xl-3">
                    <div class="card lift">
                        <div class="card-body">
                            <img src="{{ asset('/img/icons/solid/videocall.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-pink mb-3" alt="" />
                            <h4>Kemampuan Teknis dan Profesional</h4>
                            <p class="mb-0">Keahlian spesifik sesuai dengan bidang pekerjaan dan dilakukan secara profesional.</p>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-xl-3">
                    <div class="card lift">
                        <div class="card-body">
                            <img src="{{ asset('/img/icons/solid/bulb.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-blue mb-3" alt="" />
                            <h4>Soft Skills dan Kepribadian</h4>
                            <p class="mb-0">Komunikasi, kerja sama tim, kepemimpinan, dan pemecahan masalah.</p>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-xl-3">
                    <div class="card lift">
                        <div class="card-body">
                            <img src="{{ asset('/img/icons/solid/deal.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-aqua mb-3" alt="" />
                            <h4>Kesesuaian dengan Budaya Perusahaan</h4>
                            <p class="mb-0">Nilai, visi, serta kemampuan beradaptasi dengan lingkungan kerja.</p>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            {{-- <hr class="my-14 my-md-17" /> --}}
            <div class="row text-center my-10 pt-10">
                <div class="col-xl-10 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Tentukan Posisi Pekerjaan</h2>
                    <h3 class="display-4 mb-10 px-xxl-15">Daftar lowongan kerja kami saat ini.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <form class="filter-form mb-10">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="form-select-wrapper">
                                    <select class="form-select" aria-label="">
                                        <option selected>Position</option>
                                        <option value="position1">Business</option>
                                        <option value="position2">Design</option>
                                        <option value="position3">Development</option>
                                        <option value="position4">Engineering</option>
                                        <option value="position5">Finance</option>
                                        <option value="position6">Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-select-wrapper">
                                    <select class="form-select" aria-label="">
                                        <option selected>Type</option>
                                        <option value="type1">Full-time</option>
                                        <option value="type3">Part-time</option>
                                        <option value="type4">Remote</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-select-wrapper">
                                    <select class="form-select" aria-label="">
                                        <option selected>Location</option>
                                        <option value="location1">Chicago, US</option>
                                        <option value="location3">Michigan, US</option>
                                        <option value="location2">New York, US</option>
                                        <option value="location4">Los Angles, US</option>
                                        <option value="location5">Moscow, Russia</option>
                                        <option value="location6">Sydney, Australia</option>
                                        <option value="location7">Birmingham, UK</option>
                                        <option value="location8">Manchester, UK</option>
                                        <option value="location9">Beijing, China</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="job-list mb-10">
                        <h3 class="mb-4">Daftar Lowongan</h3>
                        <a href="#" class="card mb-4 lift">
                            <div class="card-body p-5">
                                <span class="row justify-content-between align-items-center">
                                    <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                        <span class="avatar bg-red text-white w-9 h-9 fs-17 me-3">GD</span> Senior
                                        Graphic Designer </span>
                                    <span class="col-5 col-md-3 text-body d-flex align-items-center">
                                        <i class="uil uil-clock me-1"></i> Full time </span>
                                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                                        <i class="uil uil-location-arrow me-1"></i> San Francisco, US </span>
                                    <span class="d-none d-lg-block col-1 text-center text-body">
                                        <i class="uil uil-angle-right-b"></i>
                                    </span>
                                </span>
                            </div>
                            <!-- /.card-body -->
                        </a>
                        <!-- /.card -->
                        <a href="#" class="card mb-4 lift">
                            <div class="card-body p-5">
                                <span class="row justify-content-between align-items-center">
                                    <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                        <span class="avatar bg-green text-white w-9 h-9 fs-17 me-3">UX</span> UI/UX
                                        Designer </span>
                                    <span class="col-5 col-md-3 text-body d-flex align-items-center">
                                        <i class="uil uil-clock me-1"></i> Remote </span>
                                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                                        <i class="uil uil-location-arrow me-1"></i> Anywhere </span>
                                    <span class="d-none d-lg-block col-1 text-center text-body">
                                        <i class="uil uil-angle-right-b"></i>
                                    </span>
                                </span>
                            </div>
                            <!-- /.card-body -->
                        </a>
                        <!-- /.card -->
                        <a href="#" class="card mb-4 lift">
                            <div class="card-body p-5">
                                <span class="row justify-content-between align-items-center">
                                    <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                        <span class="avatar bg-yellow text-white w-9 h-9 fs-17 me-3">AN</span>
                                        Multimedia Artist &amp; Animator </span>
                                    <span class="col-5 col-md-3 text-body d-flex align-items-center">
                                        <i class="uil uil-clock me-1"></i> Full time </span>
                                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                                        <i class="uil uil-location-arrow me-1"></i> Birmingham, UK </span>
                                    <span class="d-none d-lg-block col-1 text-center text-body">
                                        <i class="uil uil-angle-right-b"></i>
                                    </span>
                                </span>
                            </div>
                            <!-- /.card-body -->
                        </a>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
