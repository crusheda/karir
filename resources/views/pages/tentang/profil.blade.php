@extends('layouts.sub')

@section('content')

    <section class="br-fix overflow-hidden">
        <div class="wrapper image-wrapper bg-cover bg-image" data-image-src="{{ asset('/img/pku/gedung/bgsub.png') }}">
            <div class="container pt-15 pt-lg-18 text-center" style="padding-bottom: 25rem !important;">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <h1 class="display-1 mb-2">Profil <span class="underline-3 style-3 green">Rumah Sakit</span></h1>
                        <h2 class="display-3 mb-3">PKU Muhammadiyah Sukoharjo</h2>
                        <p class="lead fs-md mb-0">JL. Mayor Sunaryo No.37 Gawanan, Sukoharjo</p>
                    </div>
                    <!-- /column -->
                </div>
            <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="overflow-hidden">
                <div class="divider text-white mx-n2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z"/></svg>
                </div>
            </div>
            <!-- /.overflow-hidden -->
        </div>
        <!-- /.wrapper -->
    </section>
    {{-- <section class="wrapper bg-gray">
        <div class="container pt-15 pt-md-17 text-center">
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <h1 class="display-1 mb-2">Profil <span class="underline-3 style-3 green">Rumah Sakit</span></h1>
                    <h2 class="display-3 mb-3">PKU Muhammadiyah Sukoharjo</h2>
                    <p class="lead fs-md mb-0">JL. Mayor Sunaryo No.37 Gawanan, Sukoharjo</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{ asset('/img/pku/gedung/bgsub.png') }}" alt="" /></figure>
    </section> --}}
    <!-- /section -->
    <section class="wrapper bg-light angled upper">
        <div class="container py-10 py-md-10 mb-5">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-12 mb-md-16 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                        style="top: 2rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="{{ asset('/img/pku/gedung/baru_11.png') }}" srcset="{{ asset('/img/pku/gedung/baru_11.png') }} 2x"
                                    alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="{{ asset('/img/pku/gedung/baru_21.png') }}" srcset="{{ asset('/img/pku/gedung/baru_21.png') }} 2x"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-5 mb-3">RS PKU Muhammadiyah Sukoharjo?</h2>
                    <p class="lead fs-lg">Rumah Sakit Milik Pimpinan Daerah Muhammadiyah (<span class="underline-3 style-3 orange"><b>PDM</b></span>) Kabupaten Sukoharjo</p>
                    <p class="mb-3">Yang bertugas menyelenggarakan pelayanan kesehatan dengan upaya penyembuhan, pemulihan, peningkatan, pencegahan, dan pelayanan rujukan.</p>
                    <p class="mb-5">Rumah Sakit PKU Muhammadiyah Sukoharjo merupakan pelayanan publik yang senantiasa melakukan pemasaran atas peran, fungsi dan manajemen Rumah Sakit secara profesional.</p>
                    {{-- <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur
                                        blandit tempus.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget
                                        urna mollis ornare donec elit.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis
                                        euismod.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus
                                        faucibus amet euismod.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div> --}}
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    <img src="/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-4 px-lg-14">Sekilas tentang Kami.</h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-4 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="card me-lg-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="/img/illustrations/ni4.png" class="w-7 me-5" alt="" />
                                    {{-- <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">“22</span></span> --}}
                                </div>
                                <div>
                                    <h4 class="mb-1">Perizinan RS (10 Agustus 2022)</h4>
                                    <p class="mb-0">mendapatkan Perizinan Berusaha Berbasis Risiko oleh Sistem OSS (Online
                                        Single Submission) dan Penetapan Rumah Sakit Umum Kelas C Kedua dengan Nomor Izin
                                        <mark>91201142810850002</mark> sebagai Perpanjangan Izin Rumah Sakit Umum kelas C</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <div class="card ms-lg-13 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="/img/illustrations/ni3.png" class="w-7 me-5" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Akreditasi RS (27 Maret 2023)</h4>
                                    <p class="mb-0">telah terakreditasi dengan tingkat kelulusan Paripurna Bintang Lima oleh
                                        Lembaga Akreditasi Rumah Sakit Indonesia (LARSI) dengan Nomor <mark>LARSI/SERTIFIKAT/138/03/2023</mark>
                                        berlaku dari sampai 27 Maret 2023 sampai 25 Maret 2027</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    {{-- <div class="card mx-lg-6 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number"></span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1"></h4>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div> --}}
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-6 mb-3"><span class="underline-3 style-2 yellow">Gambaran Umum</span></h2>
                    <p class="lead fs-lg pe-lg-5">Rumah Sakit PKU Muhammadiyah Sukoharjo berada pada 110.815 0 BT,-7.69788450 LU, dengan kondisi topografi dataran yang landau ± 3060 M2.</p>
                    <p><span class="dropcap text-dark">R</span>umah Sakit PKU Muhammadiyah Sukoharjo yang terletak di daerah pemukiman padat penduduk tidak terlepas dari salah satu fungsinya
                        yaitu menyelenggarakan pelayanan pengobatan dan pemulihan kesehatan sesuai dengan standar pelayanan Rumah Sakit.</p>
                    <p>Rumah Sakit PKU Muhammadiyah Sukoharjo adalah salah satu Rumah Sakit swasta milik Persyarikatan Muhammadiyah yang ikut berperan dalam pelayanan kesehatan di Sukoharjo dan
                        berada di bawah naungan Pimpinan Daerah Muhammadiyah Kabupaten Sukoharjo. Berdasarkan klasifikasi Rumah Sakit, Rumah Sakit PKU Muhammadiyah Sukoharjo merupakan rumah sakit tipe C</p>
                    <p>Rumah sakit ini memiliki berbagai dokter spesialis yang siap melayani pasien. Untuk informasi jadwal praktik dokter, Anda dapat mengunjungi situs resmi rumah sakit atau
                        menghubungi langsung melalui kontak yang tersedia.</p>
                    <p class="mb-6"></p>
                    <a href="javascript:void(0);" class="btn btn-primary rounded-pill mb-0">Jadwal Dokter Spesialis</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-gray angled upper-end lower-end">
        <div class="container py-15 py-md-13">
            <div class="row d-flex align-items-start gy-10">
                <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Sejarah?</h2>
                    <h3 class="display-2 ls-xs mb-5">Tahun 2025 adalah tahun yang <span class="underline-3 style-2 yellow">Istimewa</span>.</h3>
                    <p>Insyaallah pada pertengahan tahun 2025 akan berdiri dan diresmikan gedung baru (4 Lantai) pada bagian utara Rumah Sakit yang diperuntukkan sebagai Bangsal dengan standar
                        <figure class="rounded"><img src="{{ asset('/img/pku/gedung/baru_3_cropped1.png') }}" class="float-end imgshadow" srcset="{{ asset('/img/pku/gedung/baru_3_cropped1.png') }} 2x" style="width: 250px;" alt=""></figure>
                        <span class="underline-3 style-2 sky"><span class="dropcap text-dark">KRIS</span></span> (Kelas Rawat Inap Standar) BPJS, yakni sistem kelas perawatan baru dalam program Jaminan Kesehatan Nasional (JKN) yang menggantikan kelas 1, 2, dan 3 di rumah sakit.</p>
                    <p class="mb-7"><span class="underline-3 style-2 sky">KRIS BPJS</span> bertujuan untuk memberikan standar fasilitas yang sama bagi semua peserta BPJS Kesehatan, tanpa membedakan kelas berdasarkan iuran.</p>
                    {{-- <a href="#" class="btn btn-primary"></a> --}}
                </div>
                <!-- /column -->
                <div class="col-lg-6 ms-auto">
                    <div class="card mb-6">
                        <div class="card-body d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“1.</span></span>
                            </div>
                            <div>
                                <h3 class="fs-21 ls-xs mb-2">Tahun 1992</h3>
                                <p class="mb-0">Tahun 1992 mendapat wakaf tanah dari keluarga ibu Hj. Sunarto Batik Putri Pantes seluas 1100 meter persegi.</p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card mb-6">
                        <div class="card-body d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“2.</span></span>
                            </div>
                            <div>
                                <h3 class="fs-21 ls-xs mb-2">Tahun 1993</h3>
                                <p class="mb-0">PDM Sukoharjo mendapat bantuan dari Hj. Khodijah Al Kubro (Emirat Arab) untuk membangun Rumah Bersalin PKU Muhammadiyah Sukoharjo.</p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card mb-6">
                        <div class="card-body d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“3.</span></span>
                            </div>
                            <div>
                                <h3 class="fs-21 ls-xs mb-2">Tahun 1995</h3>
                                <p class="mb-0">Diresmikan bangunan Rumah Bersalin PKU Muhammadiyah Sukoharjo oleh Bupati Sukoharjo (Bp. Ir. Tedjo Suminto) pada 4 Desember 1995.</p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card mb-6">
                        <div class="card-body d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“4.</span></span>
                            </div>
                            <div>
                                <h3 class="fs-21 ls-xs mb-2">Tahun 2009</h3>
                                <p class="mb-0">Berubah status menjadi Klinik Rawat Inap Pelayanan Medik Dasar PKU Muhammadiyah Sukoharjo dengan
                                    SK DINKES Kabupaten Sukoharjo Nomor : <mark>0/KRIPMD/III2009</mark>.</p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <h5 class="text-center" id="btn-show-sejarah" onclick="showSejarah()"><a href="javascript:void(0);">Tampilkan lebih banyak</a></h5>
                    <div id="show-sejarah" data-cues="fadeIn" hidden>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“5.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2010</h3>
                                    <p class="mb-0">Pimpinan Daerah Muhammadiyah Sukoharjo membentuk panitia pembangunan Rumah Sakit PKU Muhammadiyah Sukoharjo.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“6.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2011</h3>
                                    <p class="mb-0">Membeli tanah disebelah barat yang dimiliki saat ini menjadi 3.210 m2 dilanjutkan pembangunan Gedung 4 (Empat)
                                        lantai kapasitas 100 tempat tidur, 2 ruang Operasi, IGD, ruang Laboratorium, Radiologi, beserta peralatan dan sarana penunjangnya (20 Maret 2011).</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“7.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2011</h3>
                                    <p class="mb-0">Mendapatkan Surat Izin Operasional Sementara Rumah Sakit pada 18 November 20211 dengan Nomor : <mark>445/9855/XI/2011</mark>.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“8.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2014</h3>
                                    <p class="mb-0">Mendapatkan SK Dinas Kesehatan Sukoharjo Nomor : <mark>445/769/I/2014</mark> tentang izin mendirikan Rumah Sakit
                                        Umum PKU Muhammadiyah di Jl. Mayor Sunaryo No.37 Sukoharjo (18 Januari 2014).</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“9.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2016</h3>
                                    <p class="mb-0">Mendapatkan Surat Izin Operasional dan Penetapan Rumah Sakit Umum Kelas C dari Dinas Kesehatan Kabupaten Sukoharjo
                                        dengan SK Nomor : <mark>445/7936/VI/2016</mark> pada tanggal 14 Juni 2016.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“10.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2017</h3>
                                    <p class="mb-0">Mendapatkan Izin Pembuangan Air Limbah / IPLC oleh DPM PTSP Kab. Sukoharjo dengan Nomor : <mark>503/654/I/IPLC/003/XI/2017</mark> pada tanggal 7 November 2017.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“11.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2017</h3>
                                    <p class="mb-0">Air Bawah Tanah oleh DPMPTSP Nomor : <mark>503/10057/TAHUN 2017</mark> pada 13 November 2017.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“12.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2018</h3>
                                    <p class="mb-0">Mendapatkan Izin Penyimpanan Sementara Limbah B3 oleh DPM PTSP Kab. Sukoharjo dengan Nomor : <mark>503/654.1/001/LB3/I/2018</mark> pada tanggal 9 Januari 2018.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“13.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2019</h3>
                                    <p class="mb-0">Mendapatkan Izin Pemanfaatan Tenaga Nuklir oleh Badan Pengawas Tenaga Nuklir / BAPETAN dengan Nomor : <mark>061349.010.11.170619</mark>
                                        pada tanggal 17 Juni 2019.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“14.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2020</h3>
                                    <p class="mb-0">Mendapatkan Sertifikat Laik Fungsi oleh Dinas Pekerjaan Umum dan Penataan Ruang Kab.Sukoharjo dengan Nomor : <mark>045.2/7321/XII/2020</mark>
                                        pada tanggal 2 Desember 2020.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“15.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2021</h3>
                                    <p class="mb-0">Mendapatkan Sertifikat Laik Operasi Instalasi Listrik oleh Dinas Tenaga Kerja dan Transmigrasi Jateng dengan Nomor : <mark>876/PRT/XII/2021</mark>
                                        pada tanggal 23 Desember 2021.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“16.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2021</h3>
                                    <p class="mb-0">Mendapatkan Izin Proteksi Alarm Fire oleh Dinas Tenaga Kerja dan Transmigrasi Jateng dengan Nomor : <mark>936/SPK/XII/2021</mark>
                                        pada tanggal 25 Desember 2021.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“17.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2022</h3>
                                    <p class="mb-0">Mendapatkan Izin Lift oleh Dinas Tenaga Kerja dan Transmigrasi Jateng dengan Nomor : <mark>2674/E/II/2022</mark> pada tanggal 4 Februari 2022.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“18.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2021-2022</h3>
                                    <p class="mb-0">Mendapatkan Izin Operasi Genset Merk Perkins dan Maxtron oleh Dinas Tenaga Kerja dan Transmigrasi Jateng<br>
                                        <ul class="icon-list bullet-primary">
                                            <li><span><i class="uil uil-arrow-right"></i></span><span>Perkins (Seri X14K475419) Nomor : <mark>878/PRT/I/2022</mark> (23/12/2021)</span></li>
                                            <li><span><i class="uil uil-arrow-right"></i></span><span>Maxtron (Seri 201205038) Nomor : <mark>1248/PRT/I/2022</mark> (03/01/2022)</span></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“19.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2022</h3>
                                    <p class="mb-0">Pemeriksaan dan Pengujian Instalasi Penyalur Petir oleh Dinas Tenaga Kerja dan Transmigrasi Jateng dengan Nomor : <mark>1470/IPP/I/2022</mark>
                                        pada tanggal 8 Januari 2022.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card mb-6">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“20.</span></span>
                                </div>
                                <div>
                                    <h3 class="fs-21 ls-xs mb-2">Tahun 2022</h3>
                                    <p class="mb-0">Perjanjinan Pengangkutan dan Pengelolaan Limbah B3 bersama PT.Arah Environmental Indonesia dengan Nomor : <mark>009/PRJ/DIR/III.6.AU/PKUSKH/2022</mark>
                                        pada tanggal 2 Februari 2022.</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    {{-- <div class="card mb-6">
                        <div class="card-body d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">“20.</span></span>
                            </div>
                            <div>
                                <h3 class="fs-21 ls-xs mb-2"></h3>
                                <p class="mb-0">.</p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div> --}}
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-gray">
        <div class="container pt-13 pb-14 pb-md-0">
            <div class="row gx-lg-8 gx-xl-0 align-items-center">
                <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
                    {{-- <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block"
                        data-rellax-speed="1" style="top: 7rem; left: 1rem"></div> --}}
                    <figure><img src="/img/pejabat/dr.indarto_cropped.png" srcset="/img/pejabat/dr.indarto_cropped.png 2x" alt="">
                    </figure>
                </div>
                <!--/column -->
                <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
                    <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30"
                        data-dots="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <blockquote class="icon fs-lg">
                                        <p><center>“Kesembuhan Datangnya dari Allah, Kepuasan Anda adalah tanggungjawab kami.”</center></p>
                                        <h5 class="mb-1"><center>Motto Rumah Sakit</center></h5>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row mb-3">
                <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                    <img src="/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-3 px-lg-14">Jajaran Direksi</h2>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1"
                    style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1"
                    style="top: 0.5rem; left: -1.7rem;"></div>
                <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4"
                    data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card" style="height: 300px;max-height: 300px;">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="/img/pejabat/indarto.png"
                                                srcset="/img/pejabat/indarto.png 2x" alt="" />
                                            <h4 class="mb-1">dr. Indarto, M.Si.,M.M</h4>
                                            <div class="meta mb-2">Direktur Utama</div>
                                            {{-- <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a> --}}
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card" style="height: 300px;max-height: 300px;">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="/img/pejabat/ryan.png"
                                                srcset="/img/pejabat/ryan.png 2x" alt="" />
                                            <h4 class="mb-1">dr. Ryandika Aulia Oktorizal</h4>
                                            <div class="meta mb-2">Direktur Pelayanan Dan Pengembangan</div>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card" style="height: 300px;max-height: 300px;">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="/img/pejabat/resita.png"
                                                srcset="/img/pejabat/resita.png 2x" alt="" />
                                            <h4 class="mb-1">dr. Resita Lukitawati</h4>
                                            <div class="meta mb-2">Direktur Keuangan</div>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card" style="height: 300px;max-height: 300px;">
                                        <div class="card-body">
                                            <img class="rounded-circle w-16 mb-4" src="/img/pejabat/eko.png"
                                                srcset="/img/pejabat/eko.png 2x" alt="" />
                                            <h4 class="mb-1">KRT. Eko Pujiatmoko, SE., M.Ak</h4>
                                            <div class="meta mb-2">Direktur AIK Dan Sumber Daya</div>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-16">
            <div class="row mb-10">
                <div class="col-xl-10 mx-auto">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">
                        <div class="col-md-3">
                            <img src="/img/icons/lineal/check.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">xx</h3>
                            <p>Jumlah Tempat Tidur</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="/img/icons/lineal/user.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">xx</h3>
                            <p>Jumlah Dokter Umum</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="/img/icons/lineal/briefcase-2.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">xx</h3>
                            <p>Jumlah Dokter Spesialis</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="/img/icons/lineal/award-2.svg"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">xx</h3>
                            <p>Jumlah Karyawan</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray angled upper-end lower-end">
        <div class="container pt-10 pb-10 pt-md-10 pb-md-16">
            <center><img src="/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                alt="" />
            <h2 class="display-4 mb-8"><span class="rotator-fade text-warning">Visi,Misi,Tata Nilai,Tujuan</span> Rumah Sakit</h2></center>
            <div class="row gx-md-8 gx-xl-12 gy-10">
                <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i></div>
                        </div>
                        <div>
                            <h5 class="mb-1">Visi</h5>
                            <address>Menjadi Rumah Sakit Bernuansa Islami, Dengan Pelayanan Cepat Dan Ramah.</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Tujuan</h5>
                            <p class="mb-0">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Terwujudnya tata kelola rumah sakit yang islami</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span>Terwujudnya peningkatan mutu pelayanan rumah sakit</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span>Terwujudnya kualitas SDM yang professional, berakhlak mulia, dan sejahtera</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span>Terwujudnya budaya kerja yang produktif dan kondusif</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span>Terwujudnya ketersediaan sarana prasarana yang handal</span></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i></div>
                        </div>
                        <div>
                            <h5 class="mb-1">Tata Nilai</h5>
                            <p>Amanah, Santun, Ramah, Ikhlas (<span class="underline-3 style-2 fuchsia">ASRI</span>)</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Misi</h5>
                            <address class="mb-0">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Menyelenggarakan Rumah Sakit yang bernuansa Islami</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span>Menyelenggarakan Pelayanan Kesehatan yang bermutu dan dikelola secara berkesinambungan</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span>Mewujudkan SDM yang professional, berakhlak mulia, dan sejahtera</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span>Mewujudkan budaya kerja yang produktif dan kondusif</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span>Mewujudkan Sarana Prasarana yang handal</span></li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <script>
        function showSejarah() {
            $('#btn-show-sejarah').prop('hidden',true);
            $('#show-sejarah').prop('hidden',false);
        }
    </script>
@endsection
