<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="transparent"
    data-width="fullwidth" data-menu-styles="light" data-toggled="close">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('inc.admin.header')
</head>
<body>

    @include('inc.admin.switcher')

    <!-- LOADER -->
    <div id="loader">
        <img src="https://php.spruko.com/mamix/mamix/assets/images/media/loader.svg" alt="">
    </div>
    <!-- END LOADER -->

    <!-- PAGE -->
    <div class="page">

        @include('inc.admin.navbar')

        @include('inc.admin.sidebar')

        <!-- MAIN-CONTENT -->
        @yield('content')
        <!-- END MAIN-CONTENT -->

        @include('inc.admin.footer')

    </div>
    <!-- END PAGE-->

    <script>
        function openFullscreen() {
            let elem = document.documentElement; // seluruh halaman

            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) { // Firefox
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) { // Chrome, Safari, Opera
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { // IE/Edge
                elem.msRequestFullscreen();
            }
        }
    </script>

    <!-- SCROLL-TO-TOP -->
    <div class="scrollToTop">
        <span class="arrow lh-1"><i class="ti ti-caret-up fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    @include('inc.admin.js')

</body>
</html>
