@can('settings access')
@extends('backend.layouts.master')

@section('title')
Site Info
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
                        <h4>Site Information Page</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Table</a></li>
                            <li class="breadcrumb-item active">Site Info</li>
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
                            <form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h3 style="margin: 40px 0px"> Site Info </h3>
                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_name",
                                "title" => "Site Name",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_phone",
                                "title" => "Site Phone",
                                "type" => "number"
                                ])

                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_phone2",
                                "title" => "Site Second Phone ",
                                "type" => "number"
                                ])

                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_email",
                                "title" => "Site Email",
                                "type" => "email"
                                ])


                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_td",
                                "title" => "Site Time And Date",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.partials.textarea-input',
                                [
                                "id" => "elm2",
                                "name" => "site_address",
                                "title" => "Site Address",
                                "type" => "text"
                                ])

                                @include('backend.pages.admin.partials.textarea-input',
                                [
                                "id" => "elm1",
                                "name" => "site_description",
                                "title" => "Site Description",
                                "type" => "text"
                                ])

                                <h3 style="margin: 40px 0px">Social Links</h3>
                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_facebook",
                                "title" => "Facebook link",
                                "type" => "text",
                                "name" => "site_social_links[facebook]",
                                "option" => "site_social_links.facebook."
                                ])


                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_instagram",
                                "title" => "Instagram link",
                                "type" => "text",
                                "name" => "site_social_links[instagram]",
                                "option" => "site_social_links.instagram."
                                ])


                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_twitter",
                                "title" => "Twitter link",
                                "type" => "text",
                                "name" => "site_social_links[twitter]",
                                "option" => "site_social_links.twitter."
                                ])


                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_linkedin",
                                "title" => "Linkedin link",
                                "type" => "text",
                                "name" => "site_social_links[linkedin]",
                                "option" => "site_social_links.linkedin."
                                ])

                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "site_justdial",
                                "title" => "JustDial link",
                                "type" => "text",
                                "name" => "site_social_links[justdial]",
                                "option" => "site_social_links.justdial."
                                ])

                                <h3 style="margin: 40px 0px">Copyright Text</h3>

                                @include('backend.pages.admin.partials.text-input',
                                [
                                "id" => "copyright_text",
                                "title" => "Copyright Text",
                                "type" => "text",
                                ])

                                <h3 style="margin: 40px 0px">Site Logo</h3>

                                @include('backend.pages.admin.partials.file-input',
                                [
                                "id" => "site_logo",
                                "title" => "Site Logo",
                                "type" => "file",
                                "logo" => getSiteLogo(),
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
