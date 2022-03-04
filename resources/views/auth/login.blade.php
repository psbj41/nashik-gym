@php
$name = getSiteOption("site_name");
$logo = getSiteLogo();
$ct = getSiteOption("copyright_text");
@endphp
<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Warrior Fitness Gym Nashik" name="description" />
    <meta content="Warrior Fitness Gym Nashik" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ $logo }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/css/bootstrap-dark.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/css/app-dark.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body class="authentication-bg bg-primary" style="background-image: url({{getHomeBgLoginregImg()}})">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="home-btn"><a href="/" class="text-white router-link-active"><i
                            class="fas fa-home h2"></i></a></div>


                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="margin: 30px 0 0 0">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a href="/">
                                            <img src="{{ $logo }}" width="250px"
                                                alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Welcome Back !</h5>
                                        @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close">

                                            </button>
                                            <strong>Well done!</strong> {{session('success')}}
                                        </div>
                                        @endif
                                        <p class="text-muted">Sign in to continue to {{ $name }}.</p>
                                    </div>


                                    <form class="form-horizontal mt-4 pt-2" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email">Email Address</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                id="email" placeholder="Enter Email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                class="form-control  @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" id="password"
                                                placeholder="Enter password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="customControlInline">
                                                <label class="form-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>

                                        <div>
                                            <button class="btn btn-danger w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Don't have an account ?<a href="{{ route('register')}}" class="fw-bold text-white">
                                    Register</a> </p>
                            <p>{!!$ct!!}</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('backend/js/app.js') }}"></script>

</body>

</html>
