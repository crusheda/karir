<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ route('portal.index') }}">
                    <img src="{{ asset('img/pku/logo_admin.png') }}" alt="logo" class="img-fluid" style="height: 1rem;width: auto;margin-top: -10px;">
                    {{-- <img src="img/logo.png" srcset="./img/logo@2x.png 2x" alt="" /> --}}
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Menu</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">

                    @include('inc.navbar')

                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="https://maps.app.goo.gl/dAXzJ6FPecvjkiXv7" class="link-inverse"><span class="">Jl. Mayor Sunaryo No. 37 Sukoharjo, JT (57512)</span></a><br />
                            <nav class="nav social social-white mt-4">
                                <a href="https://x.com/rspkusukoharjo" target="_blank"><i class="uil uil-twitter" style="font-size: 25px;color:black"></i></a>
                                <a href="https://www.facebook.com/rspkusukoharjo" target="_blank"><i class="uil uil-facebook-f" style="font-size: 25px"></i></a>
                                <a href="https://www.instagram.com/rspkusukoharjo" target="_blank"><i class="uil uil-instagram" style="font-size: 25px"></i></a>
                                <a href="https://www.youtube.com/channel/UC7KDgt-THy4y9tdso4YbDSw" target="_blank" class="ms-1"><i class="uil uil-youtube" style="font-size: 25px"></i></a>
                                <a href="https://www.tiktok.com/@rspkusukoharjo" target="_blank" class="ms-1" style="margin-top:5px"><i class="fi fi-brands-tik-tok" style="color: black"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    {{-- <li class="nav-item dropdown language-select text-uppercase">
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item d-none d-md-block">
                        <a href="tel:0271593979" class="btn btn-danger text-white btn-sm"><i class="fas fa-phone text-warning me-2"></i>IGD 24 JAM</a>
                        {{-- <a href="{{ route('rekrutmen.index') }}" class="btn btn-sm btn-primary rounded-pill"><i class="uil uil-users-alt me-2"></i> Rekrutmen Pegawai</a> --}}
                        {{-- <a href="{{ route('rekrutmen.index') }}" class="btn btn-sm btn-primary rounded-pill"><i class="uil uil-users-alt me-2"></i> Rekrutmen Pegawai</a> --}}
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
<!-- /header -->
