@extends('layouts.sub')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600" data-image-src="{{ asset('img/photos/bg18.png') }}">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-1 mb-3">Sign In</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                    </ol>
                </nav>
                <!-- /nav -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</section>
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
                <div class="card">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body p-11 text-center">
                            <p class="lead mb-4 text-center"><small>Masukkan Username dan Password Anda</small></p>
                            <form class="text-start mb-3">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label for="name">Username</label>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-floating password-field mb-4">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    <label for="password">Password</label>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="btn btn-primary rounded-pill btn-login" type="submit"><i class="uil uil-signin me-1"></i> Masuk</button>
                            </form>
                            <!-- /form -->
                            {{-- <p class="mb-1"><a href="#" class="hover">Lupa Password?</a></p> --}}
                            <!--/.social -->
                        </div>
                        <!--/.card-body -->
                    </form>
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection
