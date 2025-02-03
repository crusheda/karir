<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ route('portal.index') }}">
                    {{-- <img src="{{ asset('img/pku/logo_admin.png') }}" alt="logo" class="img-fluid" style="height: 1rem;width: auto;margin-top: -10px;"> --}}
                    <img src="{{ asset('img/pku/logo-1-sm-green.png') }}" alt="logo" class="img-fluid" style="height: 2.2rem;width: auto;">
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
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    {{-- <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li> --}}
                    <li class="nav-item"><a class="nav-link"><i class="uil uil-info-circle"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
            <div class="widget mb-8">
                <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your
                    business.</p>
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Contact Info</h4>
                <address> Moonshine St. 14/05 <br /> Light City, London </address>
                <a href="cdn-cgi/l/email-protection.html#1c7a756e6f6832707d6f685c79717d7570327f7371"><span
                        class="__cf_email__"
                        data-cfemail="1f767179705f7a727e7673317c7072">[email&#160;protected]</span></a><br /> 00 (123)
                456 78 90
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Learn More</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title text-white mb-3">Follow Us</h4>
                <nav class="nav social social-white">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
            </div>
            <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
    </div>
    <!-- /.offcanvas -->
    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            {{-- <form class="search-form w-100"> --}}
                <input id="search-form" type="text" class="form-control"
                    placeholder="Tuliskan sesuatu ...">
            {{-- </form> --}}
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" disabled></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
</header>
