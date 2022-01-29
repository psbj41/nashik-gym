@can('trainers access')

@extends('backend.layouts.master')

@section('title')
Trainer Edit
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">One More Rep</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Trainer Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('trainer.index') }}" class="btn btn-success">All Trainers</a>
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
                            <form action="{{route('trainer.update',[$trainer->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Trainer Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $trainer->name }}" name="name"
                                            id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="type" class="col-sm-2 col-form-label">Trainer Type</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $trainer->type }}" name="type"
                                            id="type">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="elm1" class="col-sm-2 col-form-label">About Trainer</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" type="text" name="about"
                                            id="elm1">{{ $trainer->about }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fb" class="col-sm-2 col-form-label">Facebook ID</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $trainer->fb }}" name="fb"
                                            id="fb">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="insta" class="col-sm-2 col-form-label">Instagram ID</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $trainer->insta }}" name="insta"
                                            id="insta">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="twi" class="col-sm-2 col-form-label">Twitter ID</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $trainer->twi }}" name="twi"
                                            id="twi">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="yt" class="col-sm-2 col-form-label">YouTube ID</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $trainer->yt }}" name="yt"
                                            id="yt">
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
