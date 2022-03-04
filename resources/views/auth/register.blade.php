@php
    $name = getSiteOption("site_name");
    $logo = getSiteLogo();
    $ct = getSiteOption("copyright_text");
@endphp

<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Warrior Fitness Gym Nashik" name="description" />
    <meta content="Warrior Fitness Gym Nashik" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ $logo }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/css/bootstrap-dark.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/css/app-dark.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body class="authentication-bg bg-primary"  style="background-image: url({{getHomeBgLoginregImg()}}); background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="home-btn"><a href="/" class="text-white router-link-active"><i
                            class="fas fa-home h2"></i></a></div>


                <div class="row justify-content-center" style="margin-top: 100px">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a href="/">
                                            <img src="{{$logo}}" width="250"
                                                alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Register Here</h5>
                                        <p class="text-muted">Get your {{ $name }} account now.</p>

                                        @include('backend.layouts.errors')

                                    </div>


                                    <form class="form-horizontal" method="POST" action="{{ route('store2') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" autocomplete="name"
                                                autofocus id="name" placeholder="Enter Your Name">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="contact">Contact Number</label>
                                            <input type="number" class="form-control @error('contact') is-invalid @enderror"
                                                name="contact" value="{{ old('contact') }}" autocomplete="contact"
                                                autofocus id="contact" placeholder="Enter Your Contact Number">

                                            @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="age">Your Age</label>
                                            <input type="number" class="form-control @error('age') is-invalid @enderror"
                                                name="age" value="{{ old('age') }}" autocomplete="age"
                                                autofocus id="age" placeholder="Enter Your Age" required>

                                            @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="dob">Date Of Birth</label>
                                            <input type="date" class="form-control @error('age') is-invalid @enderror"
                                                name="dob" value="{{ old('dob') }}" autocomplete="dob"
                                                autofocus id="dob" required>

                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="gender">Select Your Gender </label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email">Email Address</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" autocomplete="email"
                                                id="email" placeholder="Enter Email Address">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="mb-3">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" autocomplete="new-password" id="password"
                                                placeholder="Enter password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="mb-3">
                                            <label for="password-confirm">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" autocomplete="new-password" placeholder="Enter Confirm password">
                                        </div>

                                        <div class="mb-3">
                                            <label for="roles">Role</label>
                                            <select name="role_id" id="roles" class="form-control">
                                                <option value="4">New User Registration</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="avatar">Profile Picture</label>
                                            <input type="file" id="avatar" name="avatar" class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="package">Package </label>
                                            <select name="package" id="package" class="form-control">
                                                <option value="0">Select Your Package </option>
                                                <option value="Value Other than listed">Other</option>
                                               @foreach ($package as $item)
                                                <option value="{{$item->price}}">{{ $item->span }} = {{$item->price}} /- Rs</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-danger w-100 waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the {{ $name }} <a href="#"
                                                    class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Already have an account ? <a href="{{route('login')}}" class="fw-bold text-white"> Login
                                </a></p>
                            <p>{!!$ct!!}
                            </p>
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
