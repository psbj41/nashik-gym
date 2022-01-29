@can('blogs access')

@extends('backend.layouts.master')

@section('title')
Post Table
@endsection


@section('css')
<!-- DataTables -->
<link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

    <!-- Lightbox css -->
<link href="{{ asset('backend/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

@endsection


@section('content')
<div class="page-content">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>Data Tables</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">One More Rep</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Post Tables</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('post.create') }}" class="btn btn-success">Add New Post</a>
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
                            @if (session('success'))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                                <strong>Success!</strong> {{session('success')}}
                            </div>

                            @endif
                            <table id="datatable-buttons"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Image</th>
                                        <th>Post Title</th>
                                        <th>Post Slug</th>
                                        <th>Category</th>
                                        <th>Post User</th>
                                        <th>Status</th>
                                        <th>Excerpt</th>
                                        <th>Content</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                    <tr>
                                        <td id="tooltip-container0" class="d-flex">
                                            <a href="{{ route('single-post',[$item->slug])}}" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="View Post"><i class="mdi mdi-eye font-size-18"></i></a>
                                            @can('update', $item)
                                            <a href="{{ route('post.edit',[$item->id])}}" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                            @endcan
                                            @can('delete', $item)
                                            <form action="{{ route('post.destroy',[$item->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button style="padding: 0; border:none; background:none; " type="submit" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></button>
                                            </form>
                                            @endcan
                                        </td>
                                        <td>
                                            <a class="image-popup-no-margins" href="{{ $item->url }}">
                                                <img class="img-fluid rounded-circle header-profile-user" alt=""
                                                    src="{{ $item->url }}" width="50" height="50">
                                            </a>
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->excerpt }}</td>
                                        <td>{!! $item->content !!}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

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
<!-- Magnific Popup-->
<script src="{{ asset('backend/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Tour init js-->
<script src="{{ asset('backend/js/pages/lightbox.init.js') }}"></script>

@endsection

@endcan
