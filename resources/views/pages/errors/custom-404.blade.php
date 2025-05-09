@extends('layouts.sub')

@section('content')
<section class="wrapper bg-light">
    <div class="container pt-18 pt-md-20 pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-9 col-xl-8 mx-auto">
                <figure class="mb-10"><img class="img-fluid" src="{{ asset('/img/illustrations/404.png') }}"
                        srcset="{{ asset('/img/illustrations/404.png') }}" alt=""></figure>
            </div>
            <!-- /column -->
            <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h1 class="mb-3">Oops! Terjadi Kesalahan.</h1>
                <p class="lead mb-7 px-md-12 px-lg-5 px-xl-7">Kami tidak dapat menemukan halaman yang Anda cari. Silakan kembali ke beranda.</p>
                <a href="{{ route('portal.index') }}" class="btn btn-primary rounded-pill"><i class="fas fa-home me-2"></i> Kembali ke Beranda</a>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection
