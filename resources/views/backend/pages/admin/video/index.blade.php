@can('video access')

@extends('backend.layouts.master')

@section('title')
Video Table
@endsection


@section('css')
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
                        <h4>Data Tables</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Warrior Fitness Gym</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Video Tables</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('video.create') }}" class="btn btn-success">Add New Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                @foreach ($video as $item)
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="header-title">Video Title: {{$item->title}}</h3>
                            <div class="d-flex">
                                <h4 class="header-title">Category Name:
                                    {{$item->category->name}}</h4>
                                <div style="margin-left: auto;" id="tooltip-container0" class="d-flex">
                                    <a href="{{ route('video.edit',[$item->id]) }}" class="me-3 text-primary"
                                        data-bs-container="#tooltip-container0" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <form action="{{ route('video.destroy',[$item->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="padding: 0; border:none; background:none; " type="submit"
                                            class="text-danger" data-bs-container="#tooltip-container0"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i
                                                class="mdi mdi-trash-can font-size-18"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9">
                                <iframe title="YouToube Video" src="{{$item->link}}" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div> <!-- end col -->
                @endforeach
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
