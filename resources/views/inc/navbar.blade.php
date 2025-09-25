<ul class="navbar-nav">
    <li class="nav-item"><a class="nav-link {{ request()->routeIs('portal.index') ? 'active' : '' }}" href="{{ route('portal.index') }}">Beranda</a></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">Tentang</a>
        <ul class="dropdown-menu">
            <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('tentang.profil.index') ? 'active' : '' }}" href="{{ route('tentang.profil.index') }}">Profil RS</a></li>
            {{-- <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('tentang.profil.index') ? 'active' : '' }}" href="javascript:void(0);">Profil RS</a></li> --}}
        </ul>
    </li>
    <li class="nav-item dropdown dropdown-mega">
        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
            data-bs-toggle="dropdown">Publik</a>
        <ul class="dropdown-menu mega-menu">
            <li class="mega-menu-content">
                <div class="row gx-0 gx-lg-3">
                    <div class="col-lg-4">
                        <h6 class="dropdown-header">Informasi</h6>
                        <ul class="list-unstyled cc-2 pb-lg-1">
                            <li><a class="dropdown-item {{ request()->routeIs('jadwal.index') ? 'active' : '' }}" href="{{ route('jadwal.index') }}">Jadwal Dokter Spesialis</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('tt.index') ? 'active' : '' }}" href="{{ route('tt.index') }}">Ketersediaan Tempat Tidur</a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Pendaftaran Online</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Alur Pelayanan</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Fasilitas Umum</s></a></li>
                        </ul>
                        {{-- <h6 class="dropdown-header mt-lg-6">Tools</h6>
                        <ul class="list-unstyled cc-2">
                            <li><a class="dropdown-item" href="javascript:void(0);">#</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">#</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">#</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">#</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">#</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">#</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">#</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">#</a></li>
                        </ul> --}}
                    </div>
                    <!--/column -->
                    <div class="col-lg-8">
                        <h6 class="dropdown-header">Pelayanan</h6>
                        <ul class="list-unstyled cc-3">
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Rawat Darurat</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Rawat Jalan</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Rawat Inap</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Rawat Intensif</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Rehabilitasi Medik</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Instalasi Bedah Sentral</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Radiology</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Laboratorium</s></a></li>
                            <li><a class="dropdown-item text-muted" href="javascript:void(0);"><s>Farmasi</s></a></li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </li>
            <!--/.mega-menu-content-->
        </ul>
        <!--/.dropdown-menu -->
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ request()->routeIs(['pengumuman.index','rekrutmen.index']) ? 'active' : '' }}" href="javascript:void(0);" data-bs-toggle="dropdown">Rekrutmen</a>
        <ul class="dropdown-menu">
            <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('pengumuman.index') ? 'active' : '' }}" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
            <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('registrasi.index') ? 'active' : '' }}" href="{{ route('registrasi.index') }}">Registrasi</a></li>
            <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('hasil.index') ? 'active' : '' }}" href="{{ route('hasil.index') }}">Hasil Seleksi</a></li>
        </ul>
    </li>
    {{-- <li class="nav-item"><a class="nav-link {{ request()->routeIs('rekrutmen.index') ? 'active' : '' }}" href="{{ route('rekrutmen.index') }}">Rekrutmen</a></li> --}}
</ul>

{{-- <a href="javascript:void(0);"></a>
<a href="javascript:void(0);"></a>
<a href="javascript:void(0);"></a>
<a href="javascript:void(0);"></a>
<a href="javascript:void(0);"></a>
<a href="javascript:void(0);"></a>
<a href="javascript:void(0);"></a>
<a href="javascript:void(0);"></a> --}}
