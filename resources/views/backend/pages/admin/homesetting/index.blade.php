@can('settings access')
@extends('backend.layouts.master')

@section('title')
Home Settings
@endsection


@section('css')
<!-- Summernote css -->
<link href="{{ asset('backend/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- DataTables -->
<link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('backend/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
@endsection


@section('content')
<div class="page-content">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>Home Settings Page</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">One More Rep</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Table</a></li>
                            <li class="breadcrumb-item active">Home Settings</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('backend.layouts.errors')
                            <form action="{{route('homesetting.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h3 style="margin: 40px 0px"> Home Page Slides </h3>

                                @include('backend.pages.admin.homepartials.text-input',
                                [
                                "id" => "slide1_header",
                                "title" => "Slide1 Header",
                                "type" => "text"
                                ])


                                @include('backend.pages.admin.homepartials.textarea-input',
                                [
                                "id" => "slide1_content",
                                "name" => "slide1_content",
                                "title" => "slide1 Content",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "slide1_img",
                                "title" => "Slide1 Image",
                                "type" => "file",
                                "img" => getHomeSlide1Img(),
                                ])

                                @include('backend.pages.admin.homepartials.text-input',
                                [
                                "id" => "slide2_header",
                                "title" => "Slide2 Header",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.textarea-input',
                                [
                                "id" => "slide2_content",
                                "name" => "slide2_content",
                                "title" => "slide2 Content",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "slide2_img",
                                "title" => "Slide2 Image",
                                "type" => "file",
                                "img" => getHomeSlide2Img(),
                                ])

                                @include('backend.pages.admin.homepartials.text-input',
                                [
                                "id" => "slide3_header",
                                "title" => "Slide3 Header",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.textarea-input',
                                [
                                "id" => "slide3_content",
                                "name" => "slide3_content",
                                "title" => "slide3 Content",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "slide3_img",
                                "title" => "Slide3 Image",
                                "type" => "file",
                                "img" => getHomeSlide3Img(),
                                ])

                                <h3 style="margin: 40px 0px"> Welcome Section </h3>

                                @include('backend.pages.admin.homepartials.text-input',
                                [
                                "id" => "welcome1_header",
                                "title" => "Welcome1 Header",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.textarea-input',
                                [
                                "id" => "welcome1_content",
                                "name" => "welcome1_content",
                                "title" => "Welcome1 Content",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "welcome1_img",
                                "title" => "Welcome1 Image",
                                "type" => "file",
                                "img" => getHomeWelcome1Img(),
                                ])

                                @include('backend.pages.admin.homepartials.text-input',
                                [
                                "id" => "welcome2_header",
                                "title" => "Welcome2 Header",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.textarea-input',
                                [
                                "id" => "welcome2_content",
                                "name" => "welcome2_content",
                                "title" => "Welcome2 Content",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "welcome2_img",
                                "title" => "Welcome2 Image",
                                "type" => "file",
                                "img" => getHomeWelcome2Img(),
                                ])

                                @include('backend.pages.admin.homepartials.text-input',
                                [
                                "id" => "welcome3_header",
                                "title" => "Welcome3 Header",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.textarea-input',
                                [
                                "id" => "welcome3_content",
                                "name" => "welcome3_content",
                                "title" => "Welcome3 Content",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "welcome3_img",
                                "title" => "Welcome3 Image",
                                "type" => "file",
                                "img" => getHomeWelcome3Img(),
                                ])

                                <h3 style="margin: 40px 0px"> Home Page Backgrounds </h3>

                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "bgprogram_img",
                                "title" => "Programs Background Image",
                                "type" => "file",
                                "img" => getHomeBgProgramImg(),
                                ])
                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "bgtestimonial_img",
                                "title" => "Testimoials Background Image",
                                "type" => "file",
                                "img" => getHomeBgTestimonialImg(),
                                ])

                                @include('backend.pages.admin.homepartials.text-input',
                                [
                                "id" => "schedule_day",
                                "title" => "Schedule days Span",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.homepartials.homefile-input',
                                [
                                "id" => "bgloginreg_img",
                                "title" => "Login And Registration Image",
                                "type" => "file",
                                "img" => getHomeBgLoginregImg(),
                                ])
                                <div class="col-sm-12">
                                    <button type="submit"
                                        class="form-control btn btn-danger waves-effect waves-light">Change
                                        Data</button>
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
<!-- Required datatable js -->
<script src="{{ asset('backend/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('backend/js/pages/datatables.init.js') }}"></script>
<!--tinymce js-->
<script src="{{ asset('backend/libs/tinymce/tinymce.min.js') }}"></script>

<!-- Summernote js -->
<script src="{{ asset('backend/libs/summernote/summernote-bs4.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('backend/js/pages/form-editor.init.js') }}"></script>
@endsection

@endcan
