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
                                <li class="breadcrumb-item"><a href="{{ route('portal.index') }}"><i class="uil uil-home-alt"></i></a></li>
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
                                    <div class="col-lg-6 col-md-6 mb-3">
                                        <div class="form-group">
                                            <label>Poliklinik Spesialis</label>
                                            <select id="xpoli" class="form-select">
                                                <option value="" selected hidden>Pilih</option>
                                                <option value="IGD">Poli Umum</option>
                                                <option value="ANA">Poli Anak</option>
                                                <option value="BED">Poli Bedah</option>
                                                <option value="GIG">Poli Gigi</option>
                                                <option value="INT">Poli Penyakit Dalam</option>
                                                <option value="IRM">Poli Rehabilitasi Medik</option>
                                                <option value="JAN">Poli Jantung Dan Pembuluh Darah</option>
                                                <option value="JIW">Poli Jiwa</option>
                                                <option value="KLT">Poli Kulit Dan Kelamin</option>
                                                <option value="MAT">Poli Mata</option>
                                                <option value="THT">Poli THT-KL</option>
                                                <option value="OBG">Poli Obstetri Dan Ginekologi (OBGYN)</option>
                                                <option value="ORT">Poli Orthopedi Dan Traumatology</option>
                                                <option value="PAR">Poli Paru</option>
                                                <option value="SAR">Poli Saraf</option>
                                                <option value="URO">Poli Urologi</option>
                                                <option value="ANT">Anestesi</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal Pelayanan</label><br>
                                            <input type="date" class="form-select" id="xtgl" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between submit-btn">
                                    <button class="btn btn-primary" onclick="cariJadwal()"><i class="uil uil-search-alt me-2"></i>Tampilkan</button>
                                </div>

                                <div class="table-responsive pt-5" id="tablejadwal" hidden>
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

                                        <tbody id="tampil-tbody"><tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr></tbody>
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
            $('#xpoli').on('change', function() {
                if (this.value) {
                    $("#xtgl").prop('disabled', false);
                }
            });
        });

        // function-function
        function cariJadwal() {
            var xpoli = $("#xpoli").val();
            var xtgl = $("#xtgl").val();

            if (xpoli.length > 0) {
                $("#tampil-tbody").empty();
                $("#tampil-tbody").append(`<tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr>`);
                $("#tablejadwal").prop('hidden', false);
                // console.log(xpoli);

                $.ajax({
                    url: "/api/bpjs/bridging/antrean/poli/"+xpoli+"/"+xtgl,
                    type: 'GET',
                    dataType: 'json',
                    success: function(res) {
                        $("#tampil-tbody").empty();
                        // console.log(res);
                        if(res.response == null){
                            $("#tampil-tbody").append(`<tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr>`);
                            cariJadwal();
                            // $('#tampil-tbody').append("<tr style='padding-top: 0px'><td colspan='10'>Data gagal dimuat, silakan ulangi sekali lagi</td></tr>");
                            // NOTIFIKASI
                            // const Toast = Swal.mixin({
                            //     toast: true,
                            //     position: 'top-end',
                            //     showConfirmButton: false,
                            //     timer: 3000,
                            //     timerProgressBar: true,
                            //     didOpen: (toast) => {
                            //         toast.addEventListener('mouseenter', Swal.stopTimer)
                            //         toast.addEventListener('mouseleave', Swal.resumeTimer)
                            //     }
                            // })

                            // Toast.fire({
                            //     icon: 'error',
                            //     title: 'Silakan tekan tombol Tampilkan sekali lagi'
                            // })
                        } else {
                            // SHOWING TABLE
                            var i = 1;
                            var tampungdokter = null;
                            Object.values(res.response).forEach(item => {
                                if (tampungdokter != null) {
                                    if (item.kodedokter == tampungdokter) {
                                        // alert('angka i nya udah sampe = '+i);
                                        document.getElementById("no"+(i-2)).rowSpan = "2";
                                        document.getElementById("nama"+(i-2)).rowSpan = "2";
                                        document.getElementById("hari"+(i-2)).rowSpan = "2";
                                        content = "<tr id='data"+ (i-1) +"' style='padding-top: 0px'><td>" + item.jadwal + "</td><td>" + item.kapasitaspasien + " Pasien</td></tr>";
                                        $('#tampil-tbody').append(content);
                                    } else {
                                        content = "<tr id='data"+ (i-1) +"' style='padding-top: 0px'>"
                                                + "<td id='no"+ (i-1) +"'>"+ i +"</td>"
                                                + "<td id='nama"+ (i-1) +"' style='text-align:left'><h6>" + item.namadokter + "</h6><span>" + item.namasubspesialis + " ("+item.kodesubspesialis+")</span></td>"
                                                + "<td id='hari"+ (i-1) +"'>" + item.namahari + "</td>"
                                                + "<td>" + item.jadwal + "</td>"
                                                + "<td>" + item.kapasitaspasien + " Pasien</td>"
                                                + "</tr>";
                                        $('#tampil-tbody').append(content);
                                    }
                                } else {
                                    content = "<tr id='data"+ (i-1) +"' style='padding-top: 0px'>"
                                            + "<td id='no"+ (i-1) +"'>"+ i +"</td>"
                                            + "<td id='nama"+ (i-1) +"' style='text-align:left'><h6>" + item.namadokter + "</h6><span>" + item.namasubspesialis + " ("+item.kodesubspesialis+")</span></td>"
                                            + "<td id='hari"+ (i-1) +"'>" + item.namahari + "</td>"
                                            + "<td>" + item.jadwal + "</td>"
                                            + "<td>" + item.kapasitaspasien + " Pasien</td>"
                                            + "</tr>";
                                    $('#tampil-tbody').append(content);
                                }
                                i++;
                                tampungdokter = item.kodedokter;
                            });
                            // NOTIFIKASI
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

                            Toast.fire({
                                icon: 'success',
                                title: 'Jadwal Poliklinik berhasil ditampilkan'
                            })
                        }
                    },
                    error: function () {
                        $("#tampil-tbody").empty();
                        $('#tampil-tbody').append("<tr style='padding-top: 0px'><td colspan='10'>Pencarian gagal, pastikan anda telah memilih tanggal pelayanan dengan benar</td></tr>");
                        // NOTIFIKASI
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 7000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'error',
                            title: 'Pastikan Anda tidak mengosongi semua data yang dibutuhkan dalam pencarian'
                        })
                    }
                });
            } else {
                // IF ERROR
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

                Toast.fire({
                    icon: 'error',
                    title: 'Silakan memilih Poliklinik terlebih dahulul'
                })
            }
        }
    </script>
@endsection
