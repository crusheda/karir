@extends('layouts.sub')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-17 pb-19 pt-md-19 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <h1 class="display-1 mb-5">Jadwal Dokter Spesialis</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('portal.index') }}" class="text-primary"><i class="uil uil-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Publik</li>
                                <li class="breadcrumb-item active" aria-current="page">Jadwal Dokter Spesialis</li>
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
                                <h2 class="h1 mb-3">Tabel Waktu</h2>
                                <p class="text-justify">Jadwal ini membantu pasien dalam merencanakan kunjungan sesuai dengan kebutuhan medis mereka.
                                    Biasanya, jadwal dapat berubah sewaktu-waktu tergantung pada kebijakan rumah sakit, kondisi dokter,
                                    atau keadaan darurat tertentu. Oleh karena itu, pasien disarankan untuk selalu memeriksa jadwal
                                    terbaru melalui website resmi, aplikasi rumah sakit, atau menghubungi layanan informasi terkait.
                                    Jadwal di bawah diambil dari <span class="underline blue"><b>Sistem Bridging dengan BPJS</span></b>.</p>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <input type="text" id="searchJadwal" class="form-control"
                                            placeholder="Cari dokter / poli / hari...">
                                    </div>
                                </div>
                                <div class="table-responsive pt-5" id="tablejadwal">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-navy">
                                                <th class="text-white">No</th>
                                                <th class="text-white">Poliklinik Dokter Spesialis</th>
                                                <th class="text-white">Hari</th>
                                                <th class="text-white">Waktu</th>
                                                <th class="text-white">Kuota +/-</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tampil-tbody"><tr><td colspan="9"><center><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</center></td></tr></tbody>
                                    </table>
                                    <p class="mb-0">Konfirmasi jadwal pada Bagian Informasi RS : <a href="https://wa.me/6285150763480" target="_blank"><u>+6285150763480</u> (Whatsapp)</a></p>
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

    <script>
        $(document).ready(function() {
            // $('#xpoli').on('change', function() {
            //     if (this.value) {
            //         $("#xtgl").prop('disabled', false);
            //     }
            // });

            cariJadwal();

            $('#searchJadwal').on('keyup', function () {

                let value = $(this).val().toLowerCase();

                $("#tampil-tbody tr").each(function(){

                    let row = $(this);

                    if(row.text().toLowerCase().indexOf(value) > -1){
                        row.show();
                    } else {
                        row.hide();
                    }

                });
            });

        });

        // function-function
        function cariJadwal() {

            $("#tampil-tbody").html(`
                <tr><td colspan="9" class="text-center">
                    <i class="fa fa-spinner fa-spin"></i> Memuat jadwal...
                </td></tr>
            `);

            $.get('/api/bpjs/bridging/antrean/poli', function(res){

                $("#tampil-tbody").empty();

                let lastDokter = null;
                let rowIndex = 0;
                let nomor = 1;

                res.response.forEach(item => {

                    if (lastDokter === item.kodedokter) {

                        $(`#no${rowIndex}`).attr('rowspan', parseInt($(`#no${rowIndex}`).attr('rowspan')) + 1);
                        $(`#nama${rowIndex}`).attr('rowspan', parseInt($(`#nama${rowIndex}`).attr('rowspan')) + 1);

                        $('#tampil-tbody').append(`
                            <tr>
                                <td>${item.namahari}</td>
                                <td>${item.jadwal}</td>
                                <td>${item.kapasitaspasien}</td>
                            </tr>
                        `);

                    } else {

                        rowIndex++;

                        $('#tampil-tbody').append(`
                            <tr>
                                <td id="no${rowIndex}" rowspan="1">${nomor++}</td>
                                <td id="nama${rowIndex}" rowspan="1" style="text-align:left">
                                    <b>${item.namadokter}</b><br>
                                    <small>Poliklinik ${item.namasubspesialis}</small>
                                </td>
                                <td>${item.namahari}</td>
                                <td>${item.jadwal}</td>
                                <td>${item.kapasitaspasien}</td>
                            </tr>
                        `);
                    }

                    lastDokter = item.kodedokter;

                });
            });
        }
    </script>
@endsection
