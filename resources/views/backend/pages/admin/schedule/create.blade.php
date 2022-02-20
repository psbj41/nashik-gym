@can('schedule action access')

@extends('backend.layouts.master')

@section('title')
Schedule Create
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
                            <form action="{{route('schedule.store')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="time" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="time"
                                            id="time" required>
                                    </div>
                                </div>

                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "monday",
                                "title" => "Monday",
                                "type" => "text"
                                ])
                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "tuesday",
                                "title" => "Tuesday",
                                "type" => "text"
                                ])
                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "wednesday",
                                "title" => "Wednesday",
                                "type" => "text"
                                ])
                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "thursday",
                                "title" => "Thursday",
                                "type" => "text"
                                ])
                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "friday",
                                "title" => "Friday",
                                "type" => "text"
                                ])
                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "saturday",
                                "title" => "Saturday",
                                "type" => "text"
                                ])
                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "sunday",
                                "title" => "Sunday",
                                "type" => "text"
                                ])
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
@endsection
@endcan
