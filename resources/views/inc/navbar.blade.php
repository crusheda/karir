<ul class="navbar-nav">
    <li class="nav-item"><a class="nav-link {{ request()->routeIs('portal.index') ? 'active' : '' }}" href="{{ route('portal.index') }}">Beranda</a></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Tentang</a>
        <ul class="dropdown-menu">
            {{-- <li class="nav-item"><a class="dropdown-item" href="javascript:void(0);">Profil RS</a></li> --}}
            <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('tentang.profil.index') ? 'active' : '' }}" href="{{ route('tentang.profil.index') }}">Profil RS</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ request()->routeIs(['pengumuman.index','rekrutmen.index']) ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Rekrutmen</a>
        <ul class="dropdown-menu">
            <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('pengumuman.index') ? 'active' : '' }}" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
            <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('rekrutmen.index') ? 'active' : '' }}" href="{{ route('rekrutmen.index') }}">Registrasi</a></li>
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
