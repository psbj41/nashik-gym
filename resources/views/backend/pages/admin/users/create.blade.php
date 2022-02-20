@can('authentication access')
@extends('backend.layouts.master')

@section('title')
Total Registration Create
@endsection

@section('css')
<!-- Plugins css -->
<link href="{{asset('backend/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>Form Elements</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Warrior Fitness Gym</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Total Registration Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('user.index') }}" class="btn btn-success">All Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('backend.layouts.errors')
                            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Artisanal kale" name="name"
                                            id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="contact" class="col-sm-2 col-form-label">Contact Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" placeholder="1234567890" id="contact" name="contact">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" placeholder="25" id="age" name="age">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" id="dob" name="dob">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="gender">Select Gender</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="gender" id="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" id="email" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" name="password"
                                            id="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" name="password_confirmation"
                                            id="password-confirm">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="roles">Select Role</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="role_id" id="roles">
                                            @foreach ($roles as $item)
                                            <option value="{{ $item->id }}">{{ strtoupper($item->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="avatar">Profile Picture</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="avatar" name="avatar" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="package">Package</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="package" id="package">
                                            <option value="0">Select Package</option>
                                            <option value="Value Other than listed">Other</option>
                                            @foreach ($package as $item)
                                            <option value="{{ $item->span }} = {{$item->price}}">{{ $item->span }} = {{$item->price}} /- Rs</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="form-control btn btn-danger waves-effect waves-light">Submit the Form</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div>


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')
<!-- Plugins js -->
<script src="{{asset('backend/libs/dropzone/min/dropzone.min.js')}}"></script>
@endsection

@endcan
