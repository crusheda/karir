@extends('layouts.sub')

@section('content')
    <section class="wrapper bg-pale-green">
        <div class="container pt-17 pb-19 pt-md-19 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <h1 class="display-1 mb-5">Ketersediaan Tempat Tidur</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('portal.index') }}" class="text-primary"><i class="uil uil-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Publik</li>
                                <li class="breadcrumb-item active" aria-current="page">Ketersediaan Tempat Tidur</li>
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
                                <div class="row">
                                    <div class="col-xl-10 mx-auto">
                                        <div class="card image-wrapper bg-full gradient-6 bg-overlay bg-overlay-400 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top">
                                            <div class="row align-items-center counter-wrapper gy-4 text-center card-body p-xl-10">
                                                <div class="col-md-3">
                                                    <h3 class="counter counter-lg text-white" style="visibility: visible;" id="count-tt"><i class="fa fa-spinner fa-spin fa-fw"></i></h3>
                                                    <p>Total TT</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3 class="counter counter-lg text-white" style="visibility: visible;" id="count-tersedia"><i class="fa fa-spinner fa-spin fa-fw"></i></h3>
                                                    <p>Tersedia</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3 class="counter counter-lg text-white" style="visibility: visible;" id="count-terpesan"><i class="fa fa-spinner fa-spin fa-fw"></i></h3>
                                                    <p>Terpesan</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3 class="counter counter-lg text-white" style="visibility: visible;" id="count-terisi"><i class="fa fa-spinner fa-spin fa-fw"></i></h3>
                                                    <p>Terpakai</p>
                                                </div>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.card -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <div class="table-responsive" id="tablett">
                                    <div class="alert alert-info">
                                        Refresh otomatis dalam <span id="countdown">300</span> detik
                                    </div>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-leaf">
                                                <th class="text-white text-center">No</th>
                                                <th class="text-white">Ruangan</th>
                                                <th class="text-white">Kamar</th>
                                                <th class="text-white">Tempat Tidur</th>
                                                <th class="text-white text-end">Status</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tampil-tbody"><tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr></tbody>
                                    </table>
                                    <div id="pagination" class="mt-3"></div>
                                    {{-- <p class="mb-0">Konfirmasi jadwal pada Bagian Informasi RS : <a href="https://wa.me/6285150763480" target="_blank"><u>+6285150763480</u> (Whatsapp)</a></p> --}}
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
        let interval = 300; // 5 menit = 300 detik
        let countdown = interval;

        $(document).ready(function() {
            refresh();
            startCountdown();
        });

        // function-function
        function startCountdown() {
            setInterval(function() {
                countdown--;

                let minutes = Math.floor(countdown / 60);
                let seconds = countdown % 60;
                let formatted = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                document.getElementById('countdown').textContent = formatted;

                if (countdown <= 0) {
                    refresh();
                    countdown = interval; // reset countdown tanpa clearInterval
                }
            }, 1000);
        }

        function refresh() {
            $("#tampil-tbody").empty();
            $("#tampil-tbody").append(`<tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr>`);
            
            $('#count-tt').empty().html(`<i class="fa fa-spinner fa-spin fa-fw"></i>`);
            $('#count-tersedia').empty().html(`<i class="fa fa-spinner fa-spin fa-fw"></i>`);
            $('#count-terpesan').empty().html(`<i class="fa fa-spinner fa-spin fa-fw"></i>`);
            $('#count-terisi').empty().html(`<i class="fa fa-spinner fa-spin fa-fw"></i>`);

            $.ajax({
                url: "/api/informasi/tt",
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    let tbody = '';
                    let no = 1;

                    // Counter status
                    let countTersedia = 0;
                    let countTerpesan = 0;
                    let countTerisi = 0;
                    let totalTT = 0;

                    // group by RUANGAN
                    let groupRuangan = {};
                    res.forEach(item => {
                        let ruang = item.DESKRIPSI;
                        let kamar = item.KAMAR;

                        // hitung status
                        totalTT++;
                        if (item.STATUS == 1) countTersedia++;
                        if (item.STATUS == 2) countTerpesan++;
                        if (item.STATUS == 3) countTerisi++;

                        if (!groupRuangan[ruang]) {
                            groupRuangan[ruang] = {};
                        }
                        if (!groupRuangan[ruang][kamar]) {
                            groupRuangan[ruang][kamar] = [];
                        }
                        groupRuangan[ruang][kamar].push(item);
                    });

                    // Render tabel dengan rowspan
                    for (let ruang in groupRuangan) {
                        let kamarGroup = groupRuangan[ruang];
                        let totalRuanganRowspan = Object.values(kamarGroup).reduce((sum, arr) => sum + arr.length, 0);
                        let ruangPrinted = false;

                        for (let kamar in kamarGroup) {
                            let tempatTidurList = kamarGroup[kamar];
                            let totalKamarRowspan = tempatTidurList.length;
                            let kamarPrinted = false;

                            tempatTidurList.forEach((item, idx) => {
                                tbody += `<tr>`;

                                // kolom No
                                tbody += `<td class="text-center">${no++}</td>`;

                                // kolom Ruangan pakai rowspan
                                if (!ruangPrinted) {
                                    tbody += `<td rowspan="${totalRuanganRowspan}">${ruang}</td>`;
                                    ruangPrinted = true;
                                }

                                // kolom Kamar pakai rowspan
                                if (!kamarPrinted) {
                                    tbody += `<td rowspan="${totalKamarRowspan}">${kamar}</td>`;
                                    kamarPrinted = true;
                                }

                                // kolom Tempat Tidur
                                tbody += `<td>${item.TEMPAT_TIDUR}</td>`;

                                // kolom Status
                                let status = '';
                                if (item.STATUS == 1) status = "<b class='text-green'>Kamar Tersedia</b>";
                                else if (item.STATUS == 2) status = "<b class='text-sky'>Kamar Terpesan</b>";
                                else if (item.STATUS == 3) status = "<b class='text-red'>Kamar Terisi</b>";

                                tbody += `<td class="text-end">${status}</td>`;

                                tbody += `</tr>`;
                            });
                        }
                    }

                    $("#tampil-tbody").html(tbody);
                    
                    // let itemsPerPage = 20;
                    // let items = $("#tampil-tbody tr"); // ambil semua tr hasil render
                    // let numItems = items.length;

                    // $('#pagination').pagination({
                    //     items: numItems,
                    //     itemsOnPage: itemsPerPage,
                    //     cssStyle: 'light-theme',
                    //     onPageClick: function(pageNumber) {
                    //         let start = (pageNumber - 1) * itemsPerPage;
                    //         let end = start + itemsPerPage;
                    //         items.hide().slice(start, end).show();
                    //     }
                    // });

                    // items.hide().slice(0, itemsPerPage).show();

                    // tampilkan hasil count
                    $('#count-tt').text(totalTT);
                    $('#count-tersedia').text(countTersedia);
                    $('#count-terpesan').text(countTerpesan);
                    $('#count-terisi').text(countTerisi);

                    // Notifikasi
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                    })
                    Toast.fire({
                        icon: 'success',
                        title: 'Data Ketersediaan Tempat Tidur berhasil ditampilkan'
                    })
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
            // IF ERROR
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
            //     title: 'Silakan memilih Poliklinik terlebih dahulul'
            // })
        }
    </script>
@endsection
