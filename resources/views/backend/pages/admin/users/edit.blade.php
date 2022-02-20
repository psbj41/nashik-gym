@can('authentication access')
@extends('backend.layouts.master')

@section('title')
Total Registration Edit
@endsection

@section('css')

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
                            <li class="breadcrumb-item active">Total Registration Edit Form</li>
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
                            <form action="{{route('user.update',[$user->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $user->name }}" name="name"
                                            id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="contact" class="col-sm-2 col-form-label">Contact Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" value="{{ $user->contact }}" id="contact" name="contact">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" value="{{ $user->age }}" id="age" name="age">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" value="{{ $user->dob }}" id="dob" name="dob">
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
                                        <input class="form-control" type="email" value="{{ $user->email }}"
                                            id="email" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="roles">Select Role</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="role_id" id="roles">
                                            @foreach ($roles as $item)
                                            <option value="{{ $item->id }}" @if ($item->id === $user->role_id) selected @endif>{{ strtoupper($item->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="avatar">Profile Picture</label>
                                    <div class="col-sm-10 d-flex">
                                        @if ($user->avatar)
                                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}" height="100px" width="100px" >
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="package">Package</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="package" id="package">
                                            <option value="0">Select Package</option>
                                            @foreach ($package as $item)
                                            <option value="{{ $item->span }} = {{$item->price}}" @if ($item->id == $user->id) selected @endif>{{ $item->span }} = {{$item->price}} /- Rs</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="form-control btn btn-danger waves-effect waves-light">Edit the User</button>
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

@endsection

@endcan
