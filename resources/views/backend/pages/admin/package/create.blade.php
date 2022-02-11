@can('payment access')

@extends('backend.layouts.master')

@section('title')
Package Create
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
                            <li class="breadcrumb-item active">Package Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('package.index') }}" class="btn btn-success">All Packages</a>
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
                            <form action="{{route('package.store')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="price" class="col-sm-2 col-form-label">Package Price</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="999" name="price"
                                            id="price" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="span" class="col-sm-2 col-form-label">Package Span</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="2 Months" name="span"
                                            id="span" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="elm1" class="col-sm-2 col-form-label">Package Content</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" type="text"  name="content"
                                            id="elm1"></textarea>
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
