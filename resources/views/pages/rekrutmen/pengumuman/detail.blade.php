@extends('layouts.sub')

@section('content')
    <style>
        .two-column-list {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .two-column-list li {
            width: 50%; /* dua kolom */
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.5rem;
        }
    </style>

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
                                    @if ($list['show']->kuota)
                                        <h6 class="h5 mb-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Batasan Kuota Pendaftar = {{ $list['show']->kuota }} Peserta"><i>(Tersisa <b class="text-red">{{ $list['show']->sisa_kuota }}</b> Kuota Peserta)</i></h6>
                                    @else
                                        <h6 class="h5 mb-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tidak ada batasan Jumlah Pendaftar sampai lowongan ditutup"><i>Total Kuota = <b class="text-red">∞</b></i></h6>
                                    @endif
                                </div>
                                <hr class="mt-0 mb-4">
                                {!! $list['show']->unit ? '<h5 class="h4 mb-4 text-center">Penempatan di <b class="text-primary">Unit '.$list['show']->unit.'</b></h5><hr class="mt-0 mb-4">' : '' !!}
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="h4">Lowongan <b class="text-blue">Dibuka</b></h5>
                                        <p>{{ $list['dibuka'] }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="h4">Lowongan <b class="text-danger">Ditutup</b></h5>
                                        <p>{{ $list['ditutup'] }}</p>
                                    </div>
                                </div>
                                <h5 class="h4 mb-3">Kualifikasi Pendidikan</h5>
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-3 two-column-list">
                                    @foreach ($list['show']->jenjang_pendidikan as $item)
                                        <li>
                                            <span><i class="uil uil-check"></i></span>
                                            <span>{{ $item->nama }} (<b class="text-primary">{{ $item->kategori }}</b>)</span>
                                        </li>
                                    @endforeach
                                </ul>
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
                                <p style="text-align: justify;">{!! nl2br(e($list['show']->persyaratan)) !!}</p>
                                <h5 class="h4 mb-3">Keahlian Tambahan</h5>
                                <p style="text-align: justify;">{!! nl2br(e($list['show']->keahlian)) !!}</p>
                                <h5 class="h4 mb-3">Uraian Tugas</h5>
                                <p style="text-align: justify;">{!! nl2br(e($list['show']->tugas)) !!}</p>
                                <h5 class="h4 mb-3">Keterangan</h5>
                                <p style="text-align: justify;">{!! nl2br(e($list['show']->keterangan)) !!}</p>
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
