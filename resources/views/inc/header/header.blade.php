<header class="wrapper bg-gray">
    <nav class="navbar navbar-expand-lg center-logo transparent navbar-light">
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
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('portal.index') ? 'active' : '' }}" href="{{ route('portal.index') }}">Beranda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('pengumuman.index') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Informasi</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('pengumuman.index') ? 'active' : '' }}" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('rekrutmen.index') ? 'active' : '' }}" href="{{ route('rekrutmen.index') }}">Rekrutmen</a></li>
                            {{-- <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu dropend"><a
                                        class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="services.html">Services I</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="services2.html">Services II</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropend"><a
                                        class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">About</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="about.html">About
                                                I</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="about2.html">About
                                                II</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropend"><a
                                        class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="shop.html">Shop
                                                I</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="shop2.html">Shop
                                                II</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="shop-product.html">Product Page</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="shop-cart.html">Shopping Cart</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="shop-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropend"><a
                                        class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Contact</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="contact.html">Contact I</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="contact2.html">Contact II</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="contact3.html">Contact III</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropend"><a
                                        class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Career</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="career.html">Job
                                                Listing I</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="career2.html">Job
                                                Listing II</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="career-job.html">Job
                                                Description</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu dropend"><a
                                        class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Utility</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="404.html">404 Not
                                                Found</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="page-loader.html">Page Loader</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="signin.html">Sign In
                                                I</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="signin2.html">Sign
                                                In II</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="signup.html">Sign Up
                                                I</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="signup2.html">Sign
                                                Up II</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="terms.html">Terms</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="pricing.html">Pricing</a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Projects</a>
                            <div class="dropdown-menu dropdown-lg">
                                <div class="dropdown-lg-content">
                                    <div>
                                        <h6 class="dropdown-header">Project Pages</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="projects.html">Projects I</a>
                                            </li>
                                            <li><a class="dropdown-item" href="projects2.html">Projects II</a>
                                            </li>
                                            <li><a class="dropdown-item" href="projects3.html">Projects III</a>
                                            </li>
                                            <li><a class="dropdown-item" href="projects4.html">Projects IV</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.column -->
                                    <div>
                                        <h6 class="dropdown-header">Single Projects</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="single-project.html">Single
                                                    Project I</a></li>
                                            <li><a class="dropdown-item" href="single-project2.html">Single
                                                    Project II</a></li>
                                            <li><a class="dropdown-item" href="single-project3.html">Single
                                                    Project III</a></li>
                                            <li><a class="dropdown-item" href="single-project4.html">Single
                                                    Project IV</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.column -->
                                </div>
                                <!-- /auto-column -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="blog.html">Blog without
                                        Sidebar</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="blog2.html">Blog with
                                        Sidebar</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="blog3.html">Blog with Left
                                        Sidebar</a></li>
                                <li class="dropdown dropdown-submenu dropend"><a
                                        class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Blog Posts</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="blog-post.html">Post
                                                without Sidebar</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="blog-post2.html">Post with Sidebar</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="blog-post3.html">Post with Left Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blocks</a>
                            <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                <li class="mega-menu-content">
                                    <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/about.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block1.svg"
                                                        alt=""></div>
                                                <span>About</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/blog.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block2.svg"
                                                        alt=""></div>
                                                <span>Blog</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item"
                                                href="docs/blocks/call-to-action.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block3.svg"
                                                        alt=""></div>
                                                <span>Call to Action</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item"
                                                href="docs/blocks/clients.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block4.svg"
                                                        alt=""></div>
                                                <span>Clients</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item"
                                                href="docs/blocks/contact.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block5.svg"
                                                        alt=""></div>
                                                <span>Contact</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/facts.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block6.svg"
                                                        alt=""></div>
                                                <span>Facts</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/faq.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block7.svg"
                                                        alt=""></div>
                                                <span>FAQ</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item"
                                                href="docs/blocks/features.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block8.svg"
                                                        alt=""></div>
                                                <span>Features</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/footer.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block9.svg"
                                                        alt=""></div>
                                                <span>Footer</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/hero.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block10.svg"
                                                        alt=""></div>
                                                <span>Hero</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/misc.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block17.svg"
                                                        alt=""></div>
                                                <span>Misc</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/navbar.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block11.svg"
                                                        alt=""></div>
                                                <span>Navbar</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item"
                                                href="docs/blocks/portfolio.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block12.svg"
                                                        alt=""></div>
                                                <span>Portfolio</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item"
                                                href="docs/blocks/pricing.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block13.svg"
                                                        alt=""></div>
                                                <span>Pricing</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item"
                                                href="docs/blocks/process.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block14.svg"
                                                        alt=""></div>
                                                <span>Process</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item" href="docs/blocks/team.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block15.svg"
                                                        alt=""></div>
                                                <span>Team</span>
                                            </a>
                                        </li>
                                        <li class="col"><a class="dropdown-item"
                                                href="docs/blocks/testimonials.html">
                                                <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img
                                                        class="rounded-0" src="img/demos/block16.svg"
                                                        alt=""></div>
                                                <span>Testimonials</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--/.row -->
                                </li>
                                <!--/.mega-menu-content-->
                            </ul>
                            <!--/.dropdown-menu -->
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">Documentation</a>
                            <ul class="dropdown-menu mega-menu">
                                <li class="mega-menu-content">
                                    <div class="row gx-0 gx-lg-3">
                                        <div class="col-lg-4">
                                            <h6 class="dropdown-header">Usage</h6>
                                            <ul class="list-unstyled cc-2 pb-lg-1">
                                                <li><a class="dropdown-item" href="docs/index.html">Get
                                                        Started</a></li>
                                                <li><a class="dropdown-item" href="docs/forms.html">Forms</a>
                                                </li>
                                                <li><a class="dropdown-item" href="docs/faq.html">FAQ</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/changelog.html">Changelog</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/credits.html">Credits</a></li>
                                            </ul>
                                            <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                                            <ul class="list-unstyled cc-2">
                                                <li><a class="dropdown-item"
                                                        href="docs/styleguide/colors.html">Colors</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/styleguide/fonts.html">Fonts</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/styleguide/icons-svg.html">SVG Icons</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/styleguide/icons-font.html">Font Icons</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="docs/styleguide/illustrations.html">Illustrations</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="docs/styleguide/backgrounds.html">Backgrounds</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="docs/styleguide/misc.html">Misc</a></li>
                                            </ul>
                                        </div>
                                        <!--/column -->
                                        <div class="col-lg-8">
                                            <h6 class="dropdown-header">Elements</h6>
                                            <ul class="list-unstyled cc-3">
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/accordion.html">Accordion</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/alerts.html">Alerts</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/animations.html">Animations</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/avatars.html">Avatars</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/background.html">Background</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/badges.html">Badges</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/buttons.html">Buttons</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/card.html">Card</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/carousel.html">Carousel</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/dividers.html">Dividers</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/form-elements.html">Form
                                                        Elements</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/image-hover.html">Image Hover</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/image-mask.html">Image Mask</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/lightbox.html">Lightbox</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/player.html">Media Player</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/modal.html">Modal</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/pagination.html">Pagination</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/progressbar.html">Progressbar</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/shadows.html">Shadows</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/shapes.html">Shapes</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/tables.html">Tables</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/tabs.html">Tabs</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/text-animations.html">Text
                                                        Animations</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/text-highlight.html">Text
                                                        Highlight</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/tiles.html">Tiles</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/tooltips-popovers.html">Tooltips &
                                                        Popovers</a></li>
                                                <li><a class="dropdown-item"
                                                        href="docs/elements/typography.html">Typography</a></li>
                                            </ul>
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </li>
                                <!--/.mega-menu-content-->
                            </ul>
                            <!--/.dropdown-menu -->
                        </li> --}}
                    </ul>
                    <!-- /.navbar-nav -->
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
                        <a href="{{ route('rekrutmen.index') }}" class="btn btn-sm btn-primary rounded-pill"><i class="uil uil-users-alt me-2"></i> Rekrutmen Pegawai</a>
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
