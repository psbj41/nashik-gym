@can('program access')

@extends('backend.layouts.master')

@section('title')
Program Create
@endsection

@section('css')
<!-- Summernote css -->
<link href="{{ asset('backend/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item active">Program Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('program.index') }}" class="btn btn-success">All Programs</a>
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
                            <form action="{{route('program.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Program Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Personal Trainer" name="name"
                                            id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="year" class="col-sm-2 col-form-label">Program Year</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="2021-2022" name="year"
                                            id="year">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="trainers" class="col-sm-2 col-form-label">Program Total Trainers</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="5" name="trainers"
                                            id="trainers">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="clients" class="col-sm-2 col-form-label">Program Total Clients</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="50" name="clients"
                                            id="clients">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="elm1" class="col-sm-2 col-form-label">About Program</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" type="text"  name="about"
                                            id="elm1"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="frontpimg" class="col-sm-2 col-form-label">Home Page Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="frontpimg"
                                            id="frontpimg" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="backpimg" class="col-sm-2 col-form-label">Single Page Second Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="backpimg"
                                            id="backpimg" required>
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
<!--tinymce js-->
<script src="{{ asset('backend/libs/tinymce/tinymce.min.js') }}"></script>

<!-- Summernote js -->
<script src="{{ asset('backend/libs/summernote/summernote-bs4.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('backend/js/pages/form-editor.init.js') }}"></script>
@endsection
@endcan
