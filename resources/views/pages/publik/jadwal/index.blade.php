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
                                    Jadwal di bawah diambil dari <span class="underline blue"><b>Sistem Bridging dengan BPJS</span></b>
                                    dengan pencarian jadwal berdasarkan pilihan Minggu ke - <b class="text-danger">XX</b>. <br><br>Sesuaikan <span class="underline blue">Filter / Pilihan Minggu</span> di bawah ini.
                                </p>
                                <div class="row mb-3">
                                    <div class="col-md-4 mb-3">
                                        <input type="week" id="weekPicker" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3" id="inpSearchJadwal" hidden>
                                        <input type="text" id="searchJadwal" class="form-control"
                                            placeholder="Cari nama dokter / poli ...">
                                    </div>
                                    <div class="col-md-4">
                                        <button id="btnExportExcel" class="btn btn-expand btn-soft-green rounded-pill w-100" hidden>
                                            <i class="fa fa-file-excel"></i>
                                            <span>Export Excel</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive pt-2" id="tablejadwal">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-navy">
                                                <th class="text-white">No</th>
                                                <th class="text-white">Dokter Spesialis - Poliklinik</th>
                                                <th class="text-white">Hari</th>
                                                <th class="text-white">Waktu</th>
                                                <th class="text-white">Kuota +/-</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tampil-tbody"><tr><td colspan="9"><center><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</center></td></tr></tbody>
                                    </table>
                                    <p class="mb-0">Konfirmasi jadwal pada Bagian Informasi RS : <br><a href="https://wa.me/6285150763480" target="_blank">Whatsapp: <u>+6285150763480</u></a> - (<span class="underline blue"><b>Jam Kerja Kantor</b></span>)</p>
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

    let currentWeek = $('#weekPicker');

    // default minggu sekarang
    let now = new Date();
    let week = getWeekNumber(now);
    currentWeek.val(`${now.getFullYear()}-W${week}`);

    cariJadwal(currentWeek.val());

    $('#weekPicker').on('change', function(){
        cariJadwal(this.value);
    });

    $('#searchJadwal').on('keyup', function () {

        let value = $(this).val().toLowerCase();

        let showGroup = false;

        $("#tampil-tbody tr").each(function(){

            let row = $(this);

            if(row.find('[rowspan]').length){

                showGroup = row.text().toLowerCase().includes(value);

                row.toggle(showGroup);

            } else {

                row.toggle(showGroup);
            }

        });
    });

    $('#btnExportExcel').on('click', function(){

        let table = document.querySelector("table");

        if(!table){
            alert('Data belum tersedia');
            return;
        }

        let wb = XLSX.utils.book_new();

        let ws = XLSX.utils.table_to_sheet(table, {
            raw:true
        });

        XLSX.utils.book_append_sheet(wb, ws, "Jadwal Dokter");

        let tanggal = new Date().toISOString().slice(0,10);

        XLSX.writeFile(wb, `jadwal_dokter_${tanggal}.xlsx`);
        Toast.fire({
            icon: 'success',
            title: 'Jadwal Poliklinik berhasil diexport ke Excell'
        })
    });
});

function cariJadwal(week){

    $('#inpSearchJadwal').attr('hidden',true);

    let btn = $('#weekPicker');
    let btnEx = $('#btnExportExcel');

    $("#tampil-tbody").html(`
        <tr>
            <td colspan="9" class="text-center">
                <i class="fa fa-spinner fa-spin"></i> Memuat jadwal...
            </td>
        </tr>
    `);

    $.ajax({
        url: '/api/bpjs/bridging/antrean/poli',
        method: 'GET',
        data: {
            week: week
        },
        timeout: 20000, // 20 detik,
        beforeSend:function(){
            btn.prop('disabled',true);
            btnEx.attr('hidden',true);
        },
        success: function(res){

            $("#tampil-tbody").empty();

            if(!res || !res.response || res.response.length === 0){

                $("#tampil-tbody").html(`
                    <tr>
                        <td colspan="9" class="text-center text-danger">
                            Jadwal tidak ditemukan pada minggu ini
                        </td>
                    </tr>
                `);

                btn.prop('disabled',false);
                return;
            }

            let lastDokter = null;
            let rowIndex = 0;
            let nomor = 1;

            res.response.forEach(item => {

                if (lastDokter === item.kodedokter) {

                    $(`#no${rowIndex}`).attr('rowspan',
                        parseInt($(`#no${rowIndex}`).attr('rowspan')) + 1
                    );

                    $(`#nama${rowIndex}`).attr('rowspan',
                        parseInt($(`#nama${rowIndex}`).attr('rowspan')) + 1
                    );

                    $('#tampil-tbody').append(`
                        <tr>
                            <td>${item.namahari ?? '-'}</td>
                            <td>${item.jadwal ?? '-'}</td>
                            <td>${item.kapasitaspasien ?? '-'}</td>
                        </tr>
                    `);

                } else {

                    rowIndex++;

                    $('#tampil-tbody').append(`
                        <tr>
                            <td id="no${rowIndex}" rowspan="1">${nomor++}</td>
                            <td id="nama${rowIndex}" rowspan="1">
                                <b>${item.namadokter ?? '-'}</b><br>
                                <small>Poliklinik ${item.namasubspesialis ?? '-'}</small>
                            </td>
                            <td>${item.namahari ?? '-'}</td>
                            <td>${item.jadwal ?? '-'}</td>
                            <td>${item.kapasitaspasien ?? '-'}</td>
                        </tr>
                    `);
                }

                lastDokter = item.kodedokter;
            });

            $('#inpSearchJadwal').attr('hidden',false);
            btn.prop('disabled',false);
            btnEx.attr('hidden',false);
            Toast.fire({
                icon: 'success',
                title: 'Jadwal Poliklinik berhasil ditampilkan'
            })
        },

        error: function(xhr, status){

            let pesan = 'Gagal memuat jadwal';

            if(status === 'timeout'){
                pesan = 'Koneksi ke server terlalu lama';
            }

            $("#tampil-tbody").html(`
                <tr>
                    <td colspan="9" class="text-center text-danger">
                        ${pesan}. Silakan refresh halaman.
                    </td>
                </tr>
            `);

            $('#inpSearchJadwal').attr('hidden',true);
            btn.prop('disabled',false);
            btnEx.attr('hidden',true);
            Toast.fire({
                icon: 'error',
                title: 'Jadwal Poliklinik gagal ditampilkan'
            })
        },
        complete:function(){
            btn.prop('disabled',false);
        }
    });
}

function getWeekNumber(d) {

    d = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate()));
    d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay()||7));
    var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
    var weekNo = Math.ceil((((d - yearStart) / 86400000) + 1)/7);

    return weekNo.toString().padStart(2,'0');
}
</script>

@endsection
