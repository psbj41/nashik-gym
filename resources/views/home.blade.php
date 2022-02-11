@extends('backend.layouts.master')

@section('title')
Dashboard
@endsection


@section('content')
<div class="page-content">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>Dashboard</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Warrior Fitness Gym</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="container-fluid">

        <div class="page-content-wrapper">

            @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                </button>
                <strong>Success!</strong> {{session('success')}}
            </div>

            @endif
            @can('authentication access')
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Total Registration</p>
                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                            <span class="avatar-title rounded-circle bg-soft-success">
                                                <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                            </span>
                                        </div>
                                        <h3 class="font-size-50">{{$userCount}}</h3>
                                        <div style="margin-top: 20px">
                                            <a href="{{route('user.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View User
                                                    Table</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Total Posts</p>
                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                            <span class="avatar-title rounded-circle bg-soft-success">
                                                <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                            </span>
                                        </div>
                                        <h3 class="font-size-50">{{$blogCount}}</h3>
                                        <div style="margin-top: 20px">
                                            <a href="{{route('post.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View Post
                                                    Table</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Total Enquiry</p>
                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                            <span class="avatar-title rounded-circle bg-soft-success">
                                                <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                            </span>
                                        </div>
                                        <h3 class="font-size-50">{{$contactCount}}</h3>
                                        <div style="margin-top: 20px">
                                            <a href="{{route('contact.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View Contacts
                                                    Table</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Client Birthday </p>
                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                            <span class="avatar-title rounded-circle bg-soft-success">
                                                <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                            </span>
                                        </div>
                                        <h3 class="font-size-50">{{$birthdayCount}}</h3>
                                        <div style="margin-top: 20px">
                                            <a href="{{route('birthday.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">Send Birthday Message                                                Table</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Subscription Table</p>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('subscription.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View Subscription
                                                    Table</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">All Money Table</p>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('moneytable.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View Money
                                                    Table</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Payment Message Sending</p>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('message.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View Message Sending Page</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Personal Training Subscription</p>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('tsub.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View PT Subscription Page</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Trainers Table</p>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('trainer.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View Trainers Table Page</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Personal Training All Money</p>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('ptmoney.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View PT All Money Page</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Website Main Settings</p>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('setting.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View Website Main Settings</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Home Page Setting</p>

                                        <div style="margin-top: 20px">
                                            <a href="{{route('homesetting.index')}}">
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">View Home Page Setting</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endcan

            @can('dashboard for user')


                <div class="container-fluid">

                    <div class="page-content-wrapper">




                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="p-4" style="height: 300px;">

                                               <h2 class="text-center"> Thank You For Joining Us </h2>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div> <!-- container-fluid -->

            @endcan

            @can('new user without payment access')


                <div class="container-fluid">

                    <div class="page-content-wrapper">




                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="p-4" style="height: 300px;">

                                                <h2 class="text-center">Please Contact Warrior Fitness Gym Gym Coordinators</h2>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div> <!-- container-fluid -->

            @endcan
        </div>


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
