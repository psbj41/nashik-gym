@can('authentication access')

@extends('backend.layouts.master')

@section('title')
Daywise Table
@endsection


@section('css')
<!-- DataTables -->
<link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
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
                            <li class="breadcrumb-item active">Daywise Tables</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('daywise.create') }}" class="btn btn-success">Add New Daywise</a>
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
                                        <th>User Name</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wedesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daywise as $item)
                                    <tr>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            @if ($item->mon == 'null')
                                            <a class="btn btn-primary">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->mon) as $mon)
                                            <a class="btn btn-primary">{{strtoupper($mon)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->tue == 'null')
                                            <a class="btn btn-primary">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->tue) as $tue)
                                            <a class="btn btn-primary">{{strtoupper($tue)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->wed == 'null')
                                            <a class="btn btn-primary">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->wed) as $wed)
                                            <a class="btn btn-primary">{{strtoupper($wed)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->thu == 'null')
                                            <a class="btn btn-primary">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->thu) as $thu)
                                            <a class="btn btn-primary">{{strtoupper($thu)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->fri == 'null')
                                            <a class="btn btn-primary">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->fri) as $fri)
                                            <a class="btn btn-primary">{{strtoupper($fri)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->sat == 'null')
                                            <a class="btn btn-primary">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->sat) as $sat)
                                            <a class="btn btn-primary">{{strtoupper($sat)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td id="tooltip-container0" class="d-flex">
                                                <a href="{{ route('daywise.edit',[$item->id]) }}" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                <form action="{{ route('daywise.destroy',[$item->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <button style="padding: 0; border:none; background:none; " type="submit" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></button>
                                                </form>
                                        </td>
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
@endsection

@endcan
