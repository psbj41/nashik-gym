@can('client access')
@extends('backend.layouts.master')

@section('title')
User Profile
@endsection


@section('css')

@endsection


@section('content')
@if (Auth::user()->id == $user->id)
<div class="page-content">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>User Profile</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">One More Rep</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-md-6 col-xl-3">

                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{$user->avatar}}" alt="Card image cap">
                    </div>

                </div><!-- end col -->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">


                            <h4>User Details</h4>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">User Name</label>
                                <div class="col-sm-10">
                                    <h4 class="form-control" type="text" placeholder="25" id="name" name="name">{{$user->name}}</h4>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                                <div class="col-sm-10">
                                    <h4 class="form-control" type="email" id="email" name="email">{{$user->email}}</h4>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="dob" class="col-sm-2 col-form-label">Date Of Birth</label>
                                <div class="col-sm-10">
                                    <h4 class="form-control" type="date" placeholder="25" id="dob" name="dob">{{$user->dob}}</h4>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="contact" class="col-sm-2 col-form-label">User Contact</label>
                                <div class="col-sm-10">
                                    <h4 class="form-control" type="number" placeholder="25" id="contact" name="contact">{{$user->contact}}</h4>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gender" class="col-sm-2 col-form-label">User Gender</label>
                                <div class="col-sm-10">
                                    <h4 class="form-control" type="number" placeholder="25" id="gender" name="gender">{{$user->gender}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endif
@endsection


@section('scripts')

@endsection


@endcan
