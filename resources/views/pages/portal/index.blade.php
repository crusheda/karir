@extends('layouts.main')

@section('content')
    <section class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray"
        data-image-src="{{ asset('img/pku/gedung/bg-gedung-very-small.png') }}">
        <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
            <div class="row">
                <div class="col-sm-9 col-xxl-5 text-center text-sm-start" data-cues="slideInDown" data-group="page-title"
                    data-interval="-200" data-delay="500">
                    <h6 class="display-1 fs-30 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0"><span
                            class="underline-3 style-3 yellow">Portal Resmi</span></h6>
                    <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0">Rumah Sakit PKU Muhammadiyah
                        Sukoharjo</h2>
                    <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0">(<b style="color:#45c4a0">ASRI</b>) <span
                            class="typer text-black" data-delay="100" data-words="Amanah.,Santun.,Ramah.,Ikhlas.">
                        </span>
                        <span class="cursor" style="color:#45c4a0" data-owner="typer"></span>
                    </p>

                    <div>
                        <a href="https://simgos.rspkusukoharjo.com:1111/apps/RegOnline/" target="_blank"
                            class="btn btn-lg btn-dark rounded me-2 mb-3"><i class="fas fa-user me-2"></i> Reservasi
                            Online</a>
                        <a href="javascript:void(0);" class="btn btn-lg btn-success text-white rounded mb-3"><i
                                class="fas fa-calendar me-2"></i> Jadwal Dokter</a>
                    </div>
                    <div style="display: flex; align-items: center" class="mt-2">
                        <a style=”text-align:justify;” href="javascript:void(0)" class="text-dark me-3"><span
                                class="underline-2 yellow">Radio</span> : </a>
                        <audio class="" controls>
                            <source src="https://b3.stri.my.id:4320/radio" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light">
        <div class="px-lg-5">
            <div class=" pt-5 pb-3">
                {{-- <h2 class="fs-16 text-uppercase text-muted mb-8 text-center">Mitra Kami</h2> --}}
                <div class="swiper-container clients" data-margin="30" data-dots="false" data-loop="true"
                    data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="5000" data-items-xxl="10"
                    data-items-xl="9" data-items-lg="8" data-items-md="5" data-items-sm="4" data-items-xs="3">
                    <div class="swiper pe-none">
                        <div class="swiper-wrapper ticker">
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/bpjskes.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/bpjsnaker.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/taspen.png') }}"
                                    style="" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/admedika.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/alodokter.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/arah.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/bjs.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/iforte.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/indihome.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/jr.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/lazismu.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/mdmc.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/pmi.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/pos.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/suryamedika.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/telkom.jpg') }}"
                                    style="width:100px" alt="" /></div>
                            <div class="swiper-slide px-5"><img src="{{ asset('img/mitra/turbonet.jpg') }}"
                                    style="width:100px" alt="" /></div>
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
            </div>
            <!--/.row -->
        </div>
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
        <div class="container py-5 py-md-10">
            <div class="row text-center">
                <div class="col-md-10 col-lg-9 col-xxl-8 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">LEBIH DEKAT</h2>
                    <h3 class="display-3 ls-sm mb-9 px-xl-11">Tentang Kami</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-8">
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/lineal/loyalty.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Fasilitas Kesehatan Terintegrasi</h4>
                            <p class="mb-0">Rumah sakit kami menawarkan layanan kesehatan yang terintegrasi, yang berarti
                                pasien dapat menerima perawatan dari
                                berbagai disiplin ilmu medis dalam satu tempat, memudahkan koordinasi antar dokter dan tim
                                medis, serta mempercepat proses penyembuhan.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/lineal/award-2.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-yellow me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Pelayanan Paripurna</h4>
                            <p class="mb-0">Kami terus berinovasi dan mengembangkan diri untuk terus memberikan layanan
                                yang paripurna bagi Pasien. Dengan mengikuti
                                perkembangan teknologi medis terkini, serta meningkatkan kualitas SDM melalui pelatihan dan
                                sertifikasi, </p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div><img src="{{ asset('img/icons/lineal/balance.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-orange me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Berbasis Islami</h4>
                            <p class="mb-0">Kami mempunyai komitmen untuk pelayanan yang lengkap dan ramah pada setiap
                                pengunjung dengan tetap mengutamakan kaidah islami.
                                Kami berusaha untuk menjaga etika dan nilai-nilai Islam dalam setiap aspek pelayanan maupun
                                perawatan yang penuh perhatian dan kasih sayang.
                            </p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/lineal/user.svg') }}"
                                class="svg-inject icon-svg icon-svg-sm text-pink me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Tenaga Medis Profesional</h4>
                            <p class="mb-0">Kami memiliki tim medis yang terdiri dari dokter spesialis, perawat, dan
                                tenaga kesehatan lainnya yang berkompeten dan
                                berpengalaman di bidangnya. Setiap tenaga medis kami dilatih untuk memberikan pelayanan yang
                                terbaik dengan perhatian penuh
                                terhadap pasien.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/lineal/computer.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-green me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Fasilitas Modern dan Canggih</h4>
                            <p class="mb-0">Rumah sakit kami dilengkapi dengan fasilitas medis terkini, termasuk ruang
                                operasi, laboratorium, radiology, ruang perawatan intensif,
                                dan peralatan berteknologi tinggi lainnya guna mendukung pelayanan medis yang akurat dan
                                optimal untuk mencapai hasil yang terbaik.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="{{ asset('img/icons/lineal/megaphone.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Inovasi dan Pengembangan</h4>
                            <p class="mb-0">Kami selalu berusaha untuk berinovasi dan mengembangkan layanan kami, baik
                                dalam hal teknologi medis maupun dalam prosedur
                                perawatan, guna memastikan bahwa kami memberikan pelayanan yang tidak hanya memenuhi harapan
                                pasien, tetapi juga mengikuti perkembangan
                                medis terkini.</p>
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
    <section class="wrapper bg-gray align-items-center mt">
        <div class="container py-0 pb-5">
            <div class="row">
                <div class="col-md-6 mb-10">
                    <img src="{{ asset('/img/penunjang/ambulance1.png') }}" width="600" style="max-width: 100%"
                        alt="">
                </div>
                <div class="col-md-6">
                    {{-- <h2 class="fs-15 text-uppercase text-muted mb-3">Instalasi Gawat Darurat</h2> --}}
                    <div class="d-flex flex-row mb-5">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 507 512"
                                data-inject-url="https://sandbox.elemisthemes.com/assets/img/icons/lineal/telephone-3.svg"
                                class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1">
                                <path class="lineal-fill"
                                    d="M402.4 437.9c0-10.5-4.4-20.4-12.6-28.7-5.1-5.6-10.6-11-16-16.1-2.7-2.6-5.5-5.3-8.1-8l-23.4-23.4c-18-18-41.3-18-59.4 0-2.4 2.4-4.9 4.8-7.3 7.2-6.4 6.4-13.1 12.9-19.6 19.9-11.6-5.2-23-12.4-36.5-23.2-13.4-10.9-62.2-59.7-73.2-73.2-10.7-13.5-17.9-25-23.2-36.5 7-6.4 13.5-13.1 19.9-19.6 2.4-2.4 4.8-4.9 7.2-7.3 18-18 18-41.3 0-59.4l-23.4-23.4c-2.7-2.7-5.4-5.4-8-8.1-5.2-5.3-10.6-10.8-16.1-16-8.3-8.2-18.3-12.6-28.7-12.6s-20.5 4.5-29.1 12.7l-.2.2L33.4 134c-10.8 10.6-17.4 24.8-18.6 39.9-2.1 25 5.3 48.4 11 63.6C39.6 275 60.4 309.7 91.3 347c11.2 13.3 23.2 26 35.9 37.8 11.8 12.7 24.4 24.7 37.8 35.8 37.2 31 72 51.7 109.5 65.6 15.3 5.7 38.6 13 63.6 11 15.1-1.2 29.3-7.8 39.9-18.6l11.6-11.4.2-.2c8.2-8.5 12.6-18.6 12.6-29.1z">
                                </path>
                                <path class="lineal-stroke"
                                    d="M507 237.1C507 106.4 400.7 0 270 0c-54.9 0-108.2 19.1-150.6 54-6.1 5.1-7 14.2-1.9 20.3 5.1 6.1 14.1 7 20.2 2 37.3-30.6 84-47.4 132.3-47.4 114.9 0 208.3 93.4 208.3 208.3-.1 63.1-28.7 122.8-77.8 162.4l-.2-.2c-5.4-5.8-11.1-11.4-16.4-16.5l-.2-.1c-2.5-2.3-5-4.8-7.4-7.3l-23.8-23.8c-11.6-11.6-25.4-17.7-39.9-17.7s-28.3 6.1-39.9 17.7l-3.4 3.4c-1.1 1.1-2.6 2.5-3.8 3.7l-1.8 1.7c-3.5 3.5-7.1 7-10.8 10.7-8.6-4.9-16.8-10.5-24.4-16.7-12.9-10.5-60.4-58.1-71-71-6.2-7.7-11.8-15.8-16.8-24.4 3.7-3.6 7.2-7.2 10.7-10.7l1.7-1.8c1.3-1.3 2.6-2.6 3.8-3.9 1.1-1.1 2.2-2.3 3.4-3.4 23.5-23.5 23.5-56.2 0-79.7L149 148.3c4.5-6.1 9.4-11.8 14.8-17.1 58.5-58.5 153.6-58.5 212 0 44.9 45 56.6 113.4 29.3 170.8-3.4 7.2-.4 15.8 6.8 19.2s15.8.4 19.2-6.8c32.6-68.4 18.7-149.9-34.9-203.5-69.7-69.7-183.1-69.7-252.7 0-5.3 5.3-10.3 10.9-14.9 16.8-5-5.2-10.3-10.6-16-15.8-10.9-11-24.3-16.7-38.6-16.7s-27.8 5.7-39.1 16.6l-.2.2-.2.2-.1.1-11.3 11.6C9.9 136.9 1.8 154.2.4 172.7c-2.3 27.8 5.7 53.2 11.8 69.8 14.5 39.2 36.1 75.3 68.1 113.7C91.7 369.9 104 382.8 117 395c12.2 13 25.1 25.3 38.8 36.8 38.4 31.9 74.5 53.5 113.6 68 14.2 5.2 35.8 12.2 60 12.2 3.3 0 6.7-.1 10-.4 18.5-1.5 35.8-9.5 48.7-22.7l11.6-11.3.1-.1.2-.2.2-.2c10.9-11.3 16.6-24.9 16.6-39.1 0-4.5-.6-9-1.8-13.4 58-45 91.9-114.2 92-187.5zM379.5 457L368 468.4l-.1.1c-8.2 8.4-19.2 13.6-30.9 14.4-2.5.2-5 .3-7.5.3-19.5 0-37.8-6-49.9-10.4-36-13.4-69.5-33.4-105.2-63.1-12.9-10.8-25.1-22.3-36.6-34.6-.2-.3-.5-.5-.7-.7-12.3-11.4-23.8-23.6-34.6-36.5-29.8-35.9-49.9-69.4-63.3-105.4-5.2-14.1-11.9-35.3-10.1-57.4.9-11.8 6-22.8 14.5-31l.1-.1L55 132.5c5.8-5.6 12.4-8.5 19.1-8.5s13 2.9 18.6 8.4l.4.4c5.3 4.9 10.6 10.3 15.5 15.3 2.6 2.7 5.2 5.4 7.8 8l23.8 23.8c12.4 12.4 12.4 26.6 0 39l-3.6 3.6c-1.2 1.2-2.4 2.5-3.7 3.8l-1.9 1.8c-5.6 5.7-11.5 11.6-17.6 17.2-4.6 4.2-6 10.9-3.4 16.5 5.7 12.7 13.7 25.2 25 39.5l.1.2c11.7 14.4 60.9 63.6 75.3 75.3l.1.1c14.3 11.3 26.9 19.3 39.5 25 5.7 2.6 12.3 1.2 16.5-3.4 5.6-6.1 11.5-12 17.3-17.6l1.9-1.8c1.2-1.2 2.4-2.4 3.7-3.6s2.4-2.4 3.6-3.6c6.1-6.1 12.8-9.3 19.5-9.3s13.4 3.2 19.5 9.3l23.8 23.8c2.6 2.6 5.3 5.2 8 7.8 5 4.9 10.4 10.1 15.3 15.5l.4.4c3.9 3.9 8.4 10.3 8.4 18.6.1 6.6-2.8 13.2-8.4 19z">
                                </path>
                                <path class="lineal-stroke"
                                    d="M274.8 258.4h-36.5c.1-4.4 6.9-9 14.7-14.3 13.4-9.2 30-20.6 30-40.4 0-20.4-18.1-31.4-35.1-31.4-16.6 0-34.1 10.2-34.1 29.2 0 8.7 3.9 13.2 11.6 13.2 8.6 0 13.3-5 13.3-9.7 0-7.8 5.1-9.4 9.4-9.4 7.1 0 9.6 4.8 9.6 8.8 0 8-9.9 15.2-20.4 22.9-12.4 9.1-25.2 18.5-25.2 31.2v14c0 5.2 6.6 8.4 11.3 8.4h51.5c4.4 0 8.2-5.3 8.2-11.4s-3.8-11.1-8.3-11.1z">
                                </path>
                                <path class="lineal-stroke"
                                    d="M351.9 234.9h-4.8v-8.7c0-5-5-8.2-12.7-8.2s-12.7 3.2-12.7 8.2v8.7H313l24.6-49.3c.5-1 .8-2.2.8-3.3 0-6.2-8.2-10-12.7-10-4.6-.1-8.8 2.5-10.7 6.6l-33.4 65.5c-.8 1.5-1.3 3.2-1.3 5 0 5.5 3.6 9.3 9 9.3h32.4v13.9c0 5.8 6.6 8.4 12.7 8.4s12.7-2.6 12.7-8.4v-13.9h4.8c4.3 0 8.4-5.8 8.4-11.9 0-5.7-2.6-11.9-8.4-11.9z">
                                </path>
                            </svg>
                            {{-- <img src="{{ asset('img/icons/lineal/megaphone.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="" /> --}}
                        </div>
                        <div>
                            <h4 class="">Pelayanan Gawat Darurat</h4>
                            <h3 class="display-3 ls-sm mb-3"><b class="text-danger">IGD 24 Jam</b></h3>
                            <p class="mb-0">Rumah Sakit PKU Muhammadiyah Sukoharjo siap menghadapi kondisi apapun dalam
                                waktu kapan saja.
                                Rumah Sakit PKU Muhammadiyah Sukoharjo memiliki <strong>Tim Code Blue</strong> yang
                                merupakan tim gawat darurat
                                intra hospital dan merupakan pelayanan emergency yang diberikan Rumah Sakit PKU Muhammadiyah
                                Sukoharjo.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="divider text-gray divider-v-end d-none d-lg-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
                    <g />
                    <g>
                        <g>
                            <polygon fill="currentColor" points="48 0 0 0 48 1200 54 1200 54 0 48 0" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!--/column -->
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 ms-auto">
                    <div class="pt-13 pb-15 pb-md-17 py-lg-16 ps-lg-15">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Instalasi Gawat Darurat</h2>
                        <h3 class="display-3 ls-sm mb-7">Pelayanan Gawat Darurat<br><b class="text-danger">24 Jam</b></h3>
                        <div class="d-flex flex-row mb-5">
                            <p class="mb-0">Rumah Sakit PKU Muhammadiyah Sukoharjo siap menghadapi kondisi apapun dalam waktu kapan saja.
                                Rumah Sakit PKU Muhammadiyah Sukoharjo memiliki <strong>Tim Code Blue</strong> yang merupakan tim gawat darurat
                                intra hospital dan merupakan pelayanan emergency yang diberikan Rumah Sakit PKU Muhammadiyah Sukoharjo.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div> --}}
            <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-white">
        <div class="container py-14 pt-md-16 pt-lg-16 pb-md-16 py-md-10">
            <div class="row text-center">
                <div class="col-lg-10 col-xl-7 col-xxl-6 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">E-Poster</h2>
                    <h3 class="display-3 ls-sm mb-10">Poster Kesehatan</h3>
                </div>
                <!-- /column -->
            </div>
            {{-- <div class="col-md-4">
                <div class="single-blog-post">
                </div>
            </div> --}}
            <div class="swiper-container mb-10" data-margin="30" data-nav="true" data-dots="true" data-items-xl="5"
                data-items-md="5" data-items-xs="4">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-doctor-box" style="padding: 5px">
                                <a data-fancybox="gallery" class="primary-btn" href="/img/eposter/1.jpg">
                                    <img class="img-fluid" src="/img/eposter/1.jpg" alt="asdsasda">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-doctor-box" style="padding: 5px">
                                <a data-fancybox="gallery" class="primary-btn" href="/img/eposter/2.jpg">
                                    <img class="img-fluid" src="/img/eposter/2.jpg" alt="asdsasda">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-doctor-box" style="padding: 5px">
                                <a data-fancybox="gallery" class="primary-btn" href="/img/eposter/3.jpg">
                                    <img class="img-fluid" src="/img/eposter/3.jpg" alt="asdsasda">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-doctor-box" style="padding: 5px">
                                <a data-fancybox="gallery" class="primary-btn" href="/img/eposter/4.jpg">
                                    <img class="img-fluid" src="/img/eposter/4.jpg" alt="asdsasda">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-doctor-box" style="padding: 5px">
                                <a data-fancybox="gallery" class="primary-btn" href="/img/eposter/5.jpg">
                                    <img class="img-fluid" src="/img/eposter/5.jpg" alt="asdsasda">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-doctor-box" style="padding: 5px">
                                <a data-fancybox="gallery" class="primary-btn" href="/img/eposter/6.jpg">
                                    <img class="img-fluid" src="/img/eposter/6.jpg" alt="asdsasda">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-doctor-box" style="padding: 5px">
                                <a data-fancybox="gallery" class="primary-btn" href="/img/eposter/7.jpg">
                                    <img class="img-fluid" src="/img/eposter/7.jpg" alt="asdsasda">
                                </a>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="more-services-btn">
                                <a href="#" class="btn btn-light">Selengkapnya <i class="flaticon-right-chevron"></i></a>
                            </div>
                        </div> --}}
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
        <div class="col-lg-6 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100"
            data-image-src="{{ asset('img/pku/gedung/slider1.png') }}" style="opacity: 50%">
            <div class="divider text-gray divider-v-start d-none d-lg-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
                    <g />
                    <g>
                        <g>
                            <polygon fill="currentColor" points="6 0 0 0 0 1200 6 1200 54 0 6 0" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <!--/column -->
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6">
                    <div class="pt-10 pb-10">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Rekapitulasi Data</h2>
                        <h3 class="display-3 ls-sm mb-5">Kunjungan</h3>
                        <p class="mb-6">Rumah Sakit PKU Muhammadiyah Sukoharjo terus berbenah diri untuk mengembangkan
                            kualitas Manajemen Rumah Sakit, melaksanakan tugas dan fungsi rumah sakit secara profesional.
                        </p>
                        <div class="row align-items-center counter-wrapper gy-6">
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">9x %</h3>
                                <h6 class="fs-17 ls-sm mb-1">Kepuasan Pelanggan</h6>
                                <span class="ratings five"></span>
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <h3 class="counter counter-lg mb-1">± 15xxx</h3>
                                <h6 class="fs-17 ls-sm mb-1">Total Pengunjung</h6>
                                <h6 class="fs-13 ls-sm mb-1">Per Bulan (RJ,RI,RD)</h6>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-white">
        <div class="container py-14 pt-md-16 pt-lg-16 pb-md-16 py-md-10">
            <div class="row text-center">
                <div class="col-lg-10 col-xl-7 col-xxl-6 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Lini Masa</h2>
                    <h3 class="display-3 ls-sm mb-10">Berita Terkini RS</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3"
                data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="javascript:void(0);">
                                        <img src="{{ asset('img/noimg.jpg') }}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Buka Berita</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark" href="javascript:void(0);">belum tersedia</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Jan 2025</span></li>
                                        <li class="post-comments"><a href="javascript:void(0)"><i class="uil uil-file-alt fs-15"></i>Umum</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="javascript:void(0)">
                                        <img src="{{ asset('img/noimg.jpg') }}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Buka Berita</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark" href="javascript:void(0);">belum tersedia</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Jan 2025</span></li>
                                        <li class="post-comments"><a href="javascript:void(0)"><i class="uil uil-file-alt fs-15"></i>Umum</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="javascript:void(0)">
                                        <img src="{{ asset('img/noimg.jpg') }}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Buka Berita</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark" href="javascript:void(0);">belum tersedia</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Jan 2025</span></li>
                                        <li class="post-comments"><a href="javascript:void(0)"><i class="uil uil-file-alt fs-15"></i>Umum</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="javascript:void(0)">
                                        <img src="{{ asset('img/noimg.jpg') }}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Buka Berita</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark" href="javascript:void(0);">belum tersedia</a></h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Jan 2025</span></li>
                                        <li class="post-comments"><a href="javascript:void(0)"><i class="uil uil-file-alt fs-15"></i>Umum</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-14 mb-lg-18 mb-xl-18">
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-14">
                <div class="col-lg-6 position-relative">
                    <div class="shape rounded bg-pale-green rellax d-block" data-rellax-speed="0"
                        style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                    </div>
                    <div class="row gx-md-5 gy-5 position-relative">
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="300"
                                src="{{ asset('img/pelayanan/poli2.jpg') }}"
                                srcset="{{ asset('img/pelayanan/poli2.jpg') }} 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn"
                                data-delay="600" src="{{ asset('img/pelayanan/poli4.jpg') }}"
                                srcset="{{ asset('img/pelayanan/poli4.jpg') }} 2x" alt="" />
                        </div>
                        <!-- /column -->
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg my-5" data-cue="fadeIn" data-delay="900"
                                src="{{ asset('img/pelayanan/icu.jpg') }}"
                                srcset="{{ asset('img/pelayanan/icu.jpg') }} 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"
                                src="{{ asset('img/pelayanan/igd2.jpg') }}"
                                srcset="{{ asset('img/pelayanan/igd2.jpg') }} 2x" alt="" />
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Inovasi</h2>
                    <h3 class="display-4 mb-5">Kami selalu Hadir untuk Kesehatan Tubuh Anda.</h3>
                    <p class="mb-5">Dapatkan pelayanan kesehatan terbaik di RS PKU Muhammadiyah Sukoharjo tanpa biaya
                        tambahan! Kami melayani dengan sepenuh hati melalui program BPJS, memastikan Anda dan keluarga
                        mendapatkan perawatan yang layak dan berkualitas.</p>
                    <div class="row gy-3">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-green mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Melayani Pasien BPJS dengan
                                        Profesionalisme.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Pelayanan Cepat,
                                        Nyaman, dan Ramah.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-green mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Ditangani oleh Tim Medis
                                        Berkompeten.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Layanan Kesehatan yang
                                        Preventif.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-14">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape rounded bg-pale-yellow rellax d-block" data-rellax-speed="0"
                        style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0">
                    </div>
                    <div class="row gx-md-5 gy-5 position-relative">
                        <div class="col-5">
                            <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" data-cue="fadeIn"
                                data-delay="300" src="{{ asset('img/pelayanan/ranapkls3_2.jpg') }}"
                                srcset="{{ asset('img/pelayanan/ranapkls3_2.jpg') }} 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn"
                                data-delay="600" src="{{ asset('img/pelayanan/ranapkls3.jpg') }}"
                                srcset="{{ asset('img/pelayanan/ranapkls3.jpg') }} 2x" alt="" />
                        </div>
                        <!-- /column -->
                        <div class="col-7">
                            <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="900"
                                src="{{ asset('img/pelayanan/ranapvip.jpg') }}"
                                srcset="{{ asset('img/pelayanan/ranapvip.jpg') }} 2x" alt="" />
                            <img class="img-fluid rounded shadow-lg d-flex col-11" data-cue="fadeIn" data-delay="1200"
                                src="{{ asset('img/pelayanan/ranapkls1_2.jpg') }}"
                                srcset="{{ asset('img/pelayanan/ranapkls1_2.jpg') }} 2x" alt="" />
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Rawat Inap</h2>
                    <h3 class="display-4 mb-5">Kamar Rawat Inap yang bersih, nyaman, dan lengkap.</h3>
                    <p class="mb-5">Bangsal kami dirancang dengan perhatian khusus untuk menciptakan lingkungan yang
                        tenang,
                        bersih, dan mendukung proses pemulihan Anda. Kami menyediakan berbagai pilihan bangsal dengan
                        fasilitas
                        yang sesuai dengan kebutuhan dan preferensi Anda.</p>
                    <div class="row gy-3">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Bangsal Kebidanan.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Bangsal Anak.</span>
                                </li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Bangsal Dewasa.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Bangsal Isolasi.</span>
                                </li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
                <div class="col-lg-6">
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded"><img src="{{ asset('img/pelayanan/lab2.jpg') }}"
                                    srcset="{{ asset('img/pelayanan/lab2.jpg') }} 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 align-self-end">
                            <figure class="rounded"><img src="{{ asset('img/pelayanan/poli33.jpg') }}"
                                    srcset="{{ asset('img/pelayanan/poli33.jpg') }} 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-12">
                            <figure class="rounded mx-md-5"><img src="{{ asset('img/pelayanan/radiologi.jpg') }}"
                                    srcset="{{ asset('img/pelayanan/radiologi.jpg') }} 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Pelayanan</h2>
                    <h3 class="display-3 ls-sm mb-5">Berbagai Layanan yang disediakan untuk Anda</h3>
                    <p class="mb-6">Dengan fasilitas yang modern dan dilengkapi peralatan medis mutakhir, kami
                        menyediakan berbagai layanan medis mulai
                        dari pemeriksaan kesehatan rutin, perawatan intensif, hingga penanganan kondisi medis yang kompleks.
                        Kami senantiasa berupaya
                        memberikan pelayanan yang tepat, cepat, dan responsif terhadap kebutuhan setiap pasien.</p>
                    <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-dark mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Layanan Medis Umum</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Layanan Poliklinik
                                        Spesialis</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Layanan
                                        Laboratorium</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Layanan
                                        Radiology</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-dark mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Layanan Rawat Inap dan Intensif</span>
                                </li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Layanan Gawat Darurat
                                        (IGD)</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Layanan Kamar Operasi
                                        dan Bedah</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-soft-primary">
        <div class="container py-14 pt-md-12 pt-lg-0 pb-md-12">
            <div class="row text-center" data-cue="slideInUp">
                <div class="col-lg-10 mx-auto">
                    <div class="mt-lg-n20 mt-xl-n22 position-relative">
                        <div class="shape bg-dot red rellax w-16 h-18" data-rellax-speed="1"
                            style="top: 1rem; left: -3.9rem;"></div>
                        <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1"
                            style="bottom: 2rem; right: -3rem;"></div>
                        <video poster="{{ asset('media/thumbnail.jpg') }}" class="player" playsinline controls
                            preload="none">
                            <source src="{{ asset('media/profil.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row text-center mt-12">
                <div class="col-lg-9 mx-auto">
                    <h5 class="display-7 mb-0 text-center">Sebagai rumah sakit yang mengutamakan profesionalisme,
                        keselamatan, dan kenyamanan pasien,
                        kami terus berinovasi dalam menyediakan fasilitas modern dan layanan medis berkualitas</h5>
                    {{-- <div class="row gx-lg-8 gx-xl-12 process-wrapper text-center mt-9" data-cues="slideInUp"
                        data-group="process">
                        <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/shield.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                            <h4 class="mb-1">1. Amanah</h4>
                            <p>Etiam porta malesuada magna mollis euismod sem.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/shield.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                            <h4 class="mb-1">2. Santun</h4>
                            <p>Etiam porta malesuada magna mollis euismod sem.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/shield.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">3. Ramah</h4>
                            <p>Etiam porta malesuada magna mollis euismod sem.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <img src="{{ asset('img/icons/lineal/shield.svg') }}"
                                class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                            <h4 class="mb-1">4. Islami</h4>
                            <p>Etiam porta malesuada magna mollis euismod sem.</p>
                        </div>
                        <!--/column -->
                    </div> --}}
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-white">
        <div class="container py-5 py-md-10">
            <!--/.row -->
            {{-- <div class="row gx-lg-8 gx-xl-12 gy-6 mb-15 mb-md-18">
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="img/icons/lineal/target.svg"
                                class="svg-inject icon-svg icon-svg-md text-blue me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Our Vision</h4>
                            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta
                                gravida at eget. Fusce dapibus tellus.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="img/icons/lineal/award-2.svg"
                                class="svg-inject icon-svg icon-svg-md text-green me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Our Mission</h4>
                            <p class="mb-2">Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue
                                laoreet. Sed posuere consectetur.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row">
                        <div>
                            <img src="img/icons/lineal/loyalty.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow me-5" alt="" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Our Values</h4>
                            <p class="mb-2">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent
                                commodo cursus magna scelerisque.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div> --}}
            <!--/.row -->
            <div class="row position-relative">
                <figure class="rounded position-absolute d-none d-lg-block"
                    style="top: 50%; right:0; width: 45%; height: auto; transform: translateY(-50%); z-index:2">
                    <img src="{{ asset('img/pku/gedung/drone-pku.jpg') }}"
                        srcset="{{ asset('img/pku/gedung/drone-pku.jpg') }} 2x" alt="">
                </figure>
                <div class="col-lg-9 text-center">
                    <div class="card bg-gray">
                        <div class="card-body p-md-10 py-xxl-16">
                            <div class="row gx-0">
                                <div class="col-lg-8 ps-xl-10">
                                    <span class="ratings five fs-20 mb-3"></span>
                                    <blockquote class="border-0 fs-lg mb-0">
                                        <p>“Kesembuhan Datangnya dari Allah, <br>
                                            Kepuasan Anda adalah tanggungjawab kami”</p>
                                        <div class="blockquote-details justify-content-center text-center">
                                            <div class="info p-0">
                                                <h4 class="ls-sm mb-1">Motto Kami</h4>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
            </div>

            <!-- /.row -->
            {{-- <div class="row text-center">
                <div class="col-md-10 col-lg-8 col-xl-9 col-xxl-8 mx-auto">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Our Pricing</h2>
                    <h3 class="display-3 ls-sm mb-10 px-xl-15">We offer great prices and quality service for your
                        business.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="pricing-wrapper mb-10 mb-md-14">
                <div class="row gx-0 gy-6">
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing card shadow-none">
                            <div class="card-body">
                                <h4 class="card-title ls-sm">Basic Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price justify-content-start"><span class="price-currency">$</span><span
                                            class="price-value">9</span>
                                        <span class="price-duration">mo</span>
                                    </div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span>
                                    </li>
                                    <li><i class="uil uil-times text-red"></i><span> Weekly
                                            <strong>Reports</strong> </span></li>
                                    <li><i class="uil uil-times text-red"></i><span> 7/24
                                            <strong>Support</strong></span></li>
                                </ul>
                                <a href="#" class="btn btn-soft-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing card shadow-none">
                            <div class="card-body">
                                <h4 class="card-title ls-sm">Premium Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price justify-content-start"><span class="price-currency">$</span><span
                                            class="price-value">19</span>
                                        <span class="price-duration">mo</span>
                                    </div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span>
                                    </li>
                                    <li><i class="uil uil-times text-red"></i><span> 7/24
                                            <strong>Support</strong></span></li>
                                </ul>
                                <a href="#" class="btn btn-soft-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing card bg-gray">
                            <div class="card-body">
                                <h4 class="card-title ls-sm">Corporate Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price justify-content-start"><span class="price-currency">$</span><span
                                            class="price-value">29</span>
                                        <span class="price-duration">mo</span>
                                    </div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing card shadow-none">
                            <div class="card-body">
                                <h4 class="card-title ls-sm">Community Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price justify-content-start"><span class="price-currency">$</span><span
                                            class="price-value">49</span>
                                        <span class="price-duration">mo</span>
                                    </div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>90</strong> Projects </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span><strong>900K</strong> API Access </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span><strong>900MB</strong> Storage </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong> </span>
                                    </li>
                                    <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-soft-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                </div>
                <!--/.row -->
            </div>
            <!--/.pricing-wrapper -->
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <div class="row gx-md-8 gx-xl-12 gy-10 px-lg-5">
                        <div class="col-lg-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="img/icons/lineal/check-list.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-blue me-5 mt-1" alt="" />
                                </div>
                                <div>
                                    <h4 class="fs-20 ls-sm">Can I cancel my subscription?</h4>
                                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                        condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                                        malesuada magna mollis euismod.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="img/icons/lineal/wallet.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-yellow me-5 mt-1" alt="" />
                                </div>
                                <div>
                                    <h4 class="fs-20 ls-sm">Which payment methods do you accept?</h4>
                                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                        condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                                        malesuada magna mollis euismod.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="img/icons/lineal/insurance.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-pink me-5 mt-1" alt="" />
                                </div>
                                <div>
                                    <h4 class="fs-20 ls-sm">How can I manage my Account?</h4>
                                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                        condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                                        malesuada magna mollis euismod.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="img/icons/lineal/padlock.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-green me-5 mt-1" alt="" />
                                </div>
                                <div>
                                    <h4 class="fs-20 ls-sm">Is my credit card information secure?</h4>
                                    <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                        condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                                        malesuada magna mollis euismod.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div> --}}
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- <div class='sk-ww-google-reviews sk-view-sample' data-embed-id='25518679'></div> --}}

    <script>
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type : 'image',
                gallery : {
                    enabled : true
                }
            });
            $('.portfolio-menu ul li').click(function(){
                $('.portfolio-menu ul li').removeClass('active');
                $(this).addClass('active');

                var selector = $(this).attr('data-filter');
                $('.portfolio-item').isotope({
                    filter:selector
                });
                return  false;
            });
        })
    </script>
@endsection
