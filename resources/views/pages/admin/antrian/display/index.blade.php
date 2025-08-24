@extends('layouts.admin.main')

@section('content')

    <div class="main-content app-content h-100">
        <div class="container-fluid">

            <!-- Start::page-header -->
            <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div>
                    <h1 class="page-title fw-medium fs-18 mb-2">Display Antrian</h1>
                    <div class="">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Antrian</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Display</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary-light btn-wave me-1 waves-effect waves-light">
                        <i class="ti ti-users align-middle"></i> Pendaftaran
                    </button>
                    <button class="btn btn-secondary-light btn-wave me-1 waves-effect waves-light">
                        <i class="ti ti-vaccine align-middle"></i> Poliklinik
                    </button>
                    <button class="btn btn-warning-light btn-wave me-1 waves-effect waves-light">
                        <i class="ti ti-pill align-middle"></i> Farmasi
                    </button>
                    <button id="openFullscreenBtn" class="btn btn-teal-light btn-wave waves-effect waves-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                        data-bs-placement="bottom" title="Terapkan Display Layar Penuh">
                        <i class="ti ti-arrows-maximize align-middle"></i>
                    </button>
                    {{-- <button id="closeFullscreenBtn" class="btn btn-teal-light btn-wave waves-effect waves-light" hidden>
                        <i class="ti ti-arrows-minimize align-middle"></i>
                    </button> --}}
                </div>
            </div>
            <!-- End::page-header -->

            <div class="row" id="myDiv">

                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-header bg-dark-gradient rounded">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <div id="poli" class="fs-3 fw-bold text-fixed-white text-start">Antrean Poli Syaraf</div>
                                <div id="antrian-jam" class="fs-3 fw-bold text-fixed-white text-end">. . .</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card custom-card" style="height: 100vh; max-height: calc(100vh - 100px);">
                        <div class="card-header bg-info-gradient">
                            <div class="align-items-center text-center w-100">
                                <div class="p-4">
                                    <div class="fs-1 text-fixed-white fw-bold">Belum Dipanggil</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card-bg-light overflow-auto">
                            <div class="card custom-card mb-3 shadow">
                                <div class="card-body card-bg-light d-flex align-items-center">
                                    <div class="me-3 border border-primary rounded d-flex justify-content-center align-items-center" style="height: auto; width: 100px;">
                                        <span class="fs-1 fw-bold p-2">14</span>
                                    </div>
                                    <div>
                                        <div class="fs-5 fw-medium">Dalam Proses</div>
                                        <p class="mb-0 text-muted fs-6">Finished by today</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card custom-card" style="height: 100vh; max-height: calc(100vh - 100px);">
                        <div class="card-header bg-danger-gradient">
                            <div class="align-items-center w-100 text-center">
                                <div class="p-4">
                                    <div class="fs-1 text-fixed-white fw-bold">Saat ini Dipanggil</div>
                                    {{-- <p class="mb-0 text-fixed-white op-7 fs-12">Finished by today</p> --}}
                                </div>
                                {{-- <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="text-fixed-white" data-bs-toggle="dropdown"><i class="bi bi-three-dots-vertical"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><button class="dropdown-item" type="button">Action</button></li>
                                            <li><button class="dropdown-item" type="button">Another action</button>
                                            </li>
                                            <li><button class="dropdown-item" type="button">Something else
                                                    here</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body card-bg-light d-flex flex-column justify-content-center align-items-center text-center" style="height: 100vh;">
                            <div class="mb-3">
                                <h2 class="fw-bold" style="font-size: 50px">NOMOR ANTRIAN</h2>
                                <h1 class="fw-bold text-danger" style="font-size: 250px">233</h1>
                            </div>
                            <div class="mb-3">
                                <div class="fs-1 fw-bold mb-3"><u>Poliklinik Syaraf</u></div>
                                <p class="mb-3 fs-2 fw-bold">RM. 000569</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card custom-card" style="height: 100vh; max-height: calc(100vh - 100px);">
                        <div class="card-header bg-success-gradient">
                            <div class="align-items-center text-center w-100">
                                <div class="p-4">
                                    <div class="fs-1 text-fixed-white fw-bold">Antrian Selesai</div>
                                    {{-- <p class="mb-0 text-fixed-white op-7 fs-12">Finished by today</p> --}}
                                </div>
                                {{-- <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="text-fixed-white" data-bs-toggle="dropdown"><i class="bi bi-three-dots-vertical"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><button class="dropdown-item" type="button">Action</button></li>
                                            <li><button class="dropdown-item" type="button">Another action</button>
                                            </li>
                                            <li><button class="dropdown-item" type="button">Something else
                                                    here</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body card-bg-light overflow-auto">
                            <div class="card custom-card mb-3 shadow">
                                <div class="card-body card-bg-light d-flex align-items-center">
                                    <div class="me-3 border border-primary rounded d-flex justify-content-center align-items-center" style="height: auto; width: 100px;">
                                        <span class="fs-1 fw-bold p-2">199</span>
                                    </div>
                                    <div>
                                        <div class="fs-5 fw-medium">Dalam Proses</div>
                                        <p class="mb-0 text-muted fs-6">Finished by today</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card mb-3 shadow">
                                <div class="card-body card-bg-light d-flex align-items-center">
                                    <div class="me-3 border border-primary rounded d-flex justify-content-center align-items-center" style="height: auto; width: 100px;">
                                        <span class="fs-1 fw-bold p-2">5</span>
                                    </div>
                                    <div>
                                        <div class="fs-5 fw-medium">Dalam Proses</div>
                                        <p class="mb-0 text-muted fs-6">Finished by today</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            updateJam(); // inisialisasi pertama
            setInterval(updateJam, 1000); // update tiap detik

            var elem = $("#myDiv")[0]; // ambil elemen DOM murni dari jQuery object

            $("#openFullscreenBtn").on("click", function() {
                if (elem.requestFullscreen) {
                elem.requestFullscreen();
                } else if (elem.mozRequestFullScreen) { // Firefox
                elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullscreen) { // Chrome, Safari, Opera
                elem.webkitRequestFullscreen();
                } else if (elem.msRequestFullscreen) { // IE/Edge
                elem.msRequestFullscreen();
                }
                // $("#openFullscreenBtn").prop('hidden',true);
                // $("#closeFullscreenBtn").prop('hidden',false);
            });

            // $("#closeFullscreenBtn").on("click", function() {
            //     if (document.exitFullscreen) {
            //     document.exitFullscreen();
            //     } else if (document.mozCancelFullScreen) { // Firefox
            //     document.mozCancelFullScreen();
            //     } else if (document.webkitExitFullscreen) { // Chrome, Safari, Opera
            //     document.webkitExitFullscreen();
            //     } else if (document.msExitFullscreen) { // IE/Edge
            //     document.msExitFullscreen();
            //     }
            //     $("#openFullscreenBtn").prop('hidden',false);
            //     $("#closeFullscreenBtn").prop('hidden',true);
            // });
        })

        function padZero(num) {
            return num < 10 ? '0' + num : num;
        }

        function updateJam() {
            const now = new Date();

            const hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const bulan = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];

            const namaHari = hari[now.getDay()];
            const tanggal = now.getDate();
            const namaBulan = bulan[now.getMonth()];
            const tahun = now.getFullYear();

            const jam = padZero(now.getHours());
            const menit = padZero(now.getMinutes());
            const detik = padZero(now.getSeconds());

            const waktuFormat = `${namaHari}, ${tanggal} ${namaBulan} ${tahun} - Pukul ${jam}:${menit}:${detik} WIB`;

            $('#antrian-jam').text(waktuFormat);
        }
    </script>
@endsection
