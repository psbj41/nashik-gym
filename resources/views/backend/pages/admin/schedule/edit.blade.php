@can('schedule action access')

@extends('backend.layouts.master')

@section('title')
Schedule Edit
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
                            <li class="breadcrumb-item active">Schedule Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('schedule.index') }}" class="btn btn-success">All Schedules</a>
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
                            <h2 class="header-title">Add < /br> to break the line </h2>
                            @include('backend.layouts.errors')
                            <form action="{{route('schedule.update',[$schedule->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="time" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="time"
                                            id="time" value="{{$schedule->time}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="monday" class="col-sm-2 col-form-label">Monday</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="monday"
                                            id="monday" value="{{$schedule->monday}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tuesday" class="col-sm-2 col-form-label">Tuesday</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="tuesday"
                                            id="tuesday" value="{{$schedule->tuesday}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="wednesday" class="col-sm-2 col-form-label">Wednesday</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="wednesday"
                                            id="wednesday" value="{{$schedule->wednesday}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="thursday" class="col-sm-2 col-form-label">Thursday</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="thursday"
                                            id="thursday" value="{{$schedule->thursday}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="friday" class="col-sm-2 col-form-label">Friday</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="friday"
                                            id="friday" value="{{$schedule->friday}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="saturday" class="col-sm-2 col-form-label">Saturday</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="saturday"
                                            id="saturday" value="{{$schedule->saturday}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="sunday" class="col-sm-2 col-form-label">sunday</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="sunday"
                                            id="sunday" value="{{$schedule->sunday}}">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="form-control btn btn-danger waves-effect waves-light">Update</button>
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
