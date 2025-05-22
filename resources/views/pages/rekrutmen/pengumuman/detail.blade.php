@extends('layouts.sub')

@section('content')
    <section class="wrapper bg-pale-aqua">
        <div class="container pt-17 pb-19 pt-md-19 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <h1 class="display-1 mb-5">Deskripsi Lowongan Kerja</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('portal.index') }}" class="text-primary">
                                    <i class="uil uil-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Rekrutmen</li>
                                <li class="breadcrumb-item"><a href="{{ route('pengumuman.index') }}" class="text-primary">Pengumuman</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail</li>
                            </ol>
                        </nav>
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n17">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h2 class="h1 mb-5 text-gradient gradient-1">{{ $list['show']->nama }}</h2>
                                    <h6 class="h5 mb-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Total Kuota = {{ $list['show']->kuota }} Peserta"><i>(Tersisa <b class="text-red">xxx</b> Kuota Peserta)</i></h6>
                                </div>
                                <hr class="mt-0 mb-4">
                                {!! $list['show']->unit ? '<h5 class="h4 mb-4 text-center">Penempatan di <b class="text-primary">Unit '.$list['show']->unit.'</b></h5><hr class="mt-0 mb-4">' : '' !!}
                                <h5 class="h4 mb-3">Kualifikasi Pendidikan</h5>
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li>
                                        <span><i class="uil uil-check"></i></span>
                                        <span>asdsad</span>
                                    </li>
                                </ul>
                                <p>
                                    {{ $list['show']->jenjang_pendidikan }}
                                </p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="h4 mb-3">Jumlah Kebutuhan</h5>
                                        <p>{{ $list['show']->jumlah }} Orang</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="h4 mb-3">Umur Maksimal</h5>
                                        <p>{{ $list['show']->umur_max }} Tahun</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="h4 mb-3">Umur Maksimal</h5>
                                        <p>{{ $list['show']->umur_max }} Tahun</p>
                                    </div>
                                </div>
                                <h5 class="h4 mb-3">Persyaratan</h5>
                                <p>{{ $list['show']->persyaratan }}</p>
                                <h5 class="h4 mb-3">Keahlian Tambahan</h5>
                                <p>{{ $list['show']->keahlian }}</p>
                                <h5 class="h4 mb-3">Uraian Tugas</h5>
                                <p>{{ $list['show']->tugas }}</p>
                                <h5 class="h4 mb-3">Keterangan</h5>
                                <p>{{ $list['show']->keterangan }}</p>
                                <div class="d-flex justify-content-between mt-9">
                                    <!-- Tombol kiri -->
                                    <a href="{{ route('pengumuman.index') }}" class="btn btn-navy rounded-pill"><i class="uil uil-angle-left me-1"></i> Kembali</a>

                                    <!-- Tombol kanan -->
                                    <a href="{{ route('registrasi.index') }}" class="btn btn-blue rounded-pill">Daftar Sekarang <i class="uil uil-user-md ms-1"></i></a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
