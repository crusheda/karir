<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portal Resmi Rumah Sakit PKU Muhammadiyah Sukoharjo" />
    <meta name="keywords"
        content="rumah sakit, rspkuskh, pkuskh, pkusukoharjo, pku sukoharjo, rs pku, rs pku skh, rs pku sukoharjo, rawat jalan, rawat inap, rs bpjs, pku muhammadiyah sukoharjo, rs pku muhammadiyah sukoharjo, sistem rumah sakit">
    <meta content="Yussuf Faisal" name="author" />
    <title>Portal | RS PKU Muhammadiyah Sukoharjo</title>
    @include('inc.css')
</head>

<body>
    <div class="content-wrapper">

        @include('inc.header.headermain')

        @yield('content')

    </div>

    @include('inc.footer.footermain')

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @include('inc.js')
</body>

</html>
