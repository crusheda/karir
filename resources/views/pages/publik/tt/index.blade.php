@extends('layouts.sub')

@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600" data-image-src="{{ asset('img/photos/bg24.png') }}">
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
        <div class="container pb-11">
            <div class="row text-center mb-14 mb-md-16">
                <div class="col-xl-10 mx-auto mt-n19">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card lift">
                                            <div class="card-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="#d3d1fb" d="M22.102 11.147v1.731H1.904V6.672H0v12.414h1.904v-2.837h20.198v3.074H24v-8.178z"/><path fill="#f3bede" d="M8.709 11.165v.001c0 .564-.457 1.022-1.022 1.022H3.793a1.022 1.022 0 0 1-1.022-1.022v-.002c0-.564.457-1.022 1.022-1.022h3.894c.564 0 1.022.457 1.022 1.022zm11.034-4.001h-2.37V4.8h-1.68v2.365h-2.365v1.68h2.364v2.365h1.68V8.845h2.37z"/></svg>
                                                <h4 class="counter counter-lg" id="count-tt"><i class="fa fa-spinner fa-spin fa-fw"></i></h4>
                                                <p class="mb-0">Total TT</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.card -->
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card lift">
                                            <div class="card-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g fill="none"><path stroke="#d3d1fb" stroke-linecap="round" stroke-linejoin="round" d="M21.5 18.5v-11a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v11m-3 0v-8h-7a1 1 0 0 0-1 1v7"/><path stroke="#e3cdfb" stroke-linecap="round" stroke-linejoin="round" d="M3.5 10.5h18v3h-19v-2a1 1 0 0 1 1-1"/><path fill="#e3cdfb" d="M10.5 12.5v-1a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-9a1 1 0 0 1-1-1"/></g></svg>
                                                <h4 class="counter counter-lg" id="count-tersedia"><i class="fa fa-spinner fa-spin fa-fw"></i></h4>
                                                <p class="mb-0">Tersedia</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.card -->
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card lift">
                                            <div class="card-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="#e3cdfb" d="M19.2 9.5L16 7.7V4h1.5v2.8l2.4 1.4l-.7 1.3m3 2.2c.5.7.8 1.5.8 2.3v9h-2v-3H3v3H1V8h2v9h8v-6.4c-.6-1.1-1-2.3-1-3.6c0-3.9 3.1-7 7-7s7 3.1 7 7c0 1.8-.7 3.4-1.8 4.7M12 7c0 2.8 2.2 5 5 5s5-2.2 5-5s-2.2-5-5-5s-5 2.2-5 5m-5 9c1.7 0 3-1.3 3-3s-1.3-3-3-3s-3 1.3-3 3s1.3 3 3 3Z"/></svg>
                                                <h4 class="counter counter-lg" id="count-terpesan"><i class="fa fa-spinner fa-spin fa-fw"></i></h4>
                                                <p class="mb-0">Terpesan</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.card -->
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card lift">
                                            <div class="card-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 2048 1280"><path fill="#d3d1fb" d="M256 768h1728q26 0 45 19t19 45v448h-256v-256H256v256H0V64q0-26 19-45T64 0h128q26 0 45 19t19 45v704zm576-320q0-106-75-181t-181-75t-181 75t-75 181t75 181t181 75t181-75t75-181zm1216 256v-64q0-159-112.5-271.5T1664 256H960q-26 0-45 19t-19 45v384h1152z"/></svg>
                                                <h4 class="counter counter-lg" id="count-terisi"><i class="fa fa-spinner fa-spin fa-fw"></i></h4>
                                                <p class="mb-0">Terpakai</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.card -->
                                    </div>
                                </div>
                                <div class="table-responsive" id="tablett">
                                    <div class="alert alert-info" id="countdown-info" hidden>
                                        Refresh otomatis dalam <span id="countdown">60</span> detik
                                    </div>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-violet">
                                                <th class="text-white text-center">No</th>
                                                <th class="text-white">Ruangan</th>
                                                <th class="text-white">Kamar</th>
                                                <th class="text-white">Tempat Tidur</th>
                                                <th class="text-white text-end">Status</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tampil-tbody"><tr><center><td colspan="9"><i class="fa fa-spinner fa-spin fa-fw"></i> Memproses data...</td></center></tr></tbody>
                                    </table>
                                    {{-- <div id="pagination" class="mt-3"></div> --}}
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
        <!-- /.container -->
    </section>

    <script>
        let interval = 60; // 5 menit = 300 detik
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
                let formatted = `${seconds < 10 ? '0' : ''}${seconds}`; // ${minutes}:${seconds < 10 ? '0' : ''}${seconds}

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
                                    tbody += `<td class="text-start" rowspan="${totalRuanganRowspan}">${ruang}</td>`;
                                    ruangPrinted = true;
                                }

                                // kolom Kamar pakai rowspan
                                if (!kamarPrinted) {
                                    tbody += `<td class="text-start" rowspan="${totalKamarRowspan}">${kamar}</td>`;
                                    kamarPrinted = true;
                                }

                                // kolom Tempat Tidur
                                tbody += `<td>${item.TEMPAT_TIDUR}</td>`;

                                // kolom Status
                                let status = '';
                                if (item.STATUS == 1) status = "<b class='text-green'>Bed Masih Tersedia</b>";
                                else if (item.STATUS == 2) status = "<b class='text-sky'>Bed Telah Terpesan</b>";
                                else if (item.STATUS == 3) status = "<b class='text-red'>Bed Telah Terisi</b>";

                                tbody += `<td class="text-end">${status}</td>`;

                                tbody += `</tr>`;
                            });
                        }
                    }

                    $("#tampil-tbody").html(tbody);

                    $("#countdown-info").prop('hidden', false);

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
                    $('#count-tt').text(totalTT+" Bed");
                    $('#count-tersedia').text(countTersedia+" Bed");
                    $('#count-terpesan').text(countTerpesan+" Bed");
                    $('#count-terisi').text(countTerisi+" Bed");

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
                    $("#countdown-info").prop('hidden', true);
                    $('#count-tt').text(`xx`);
                    $('#count-tersedia').text(`xx`);
                    $('#count-terpesan').text(`xx`);
                    $('#count-terisi').text(`xx`);

                    $("#tampil-tbody").empty();
                    $('#tampil-tbody').append("<tr style='padding-top: 0px'><td colspan='10'>Ketersediaan Tempat Tidur gagal ditampilkan. Silakan coba lagi.</td></tr>");
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
                        title: 'Data Ketersediaan Tempat Tidur gagal ditampilkan. Silakan coba lagi'
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
