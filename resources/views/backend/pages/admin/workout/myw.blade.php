@can('pay option access')

@extends('backend.layouts.master')

@section('title')
Workout Table
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
                            <li class="breadcrumb-item active">Workout Tables</li>
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
                            <div>
                                <h4 class="text-center">{{Auth::user()->name}} Daily Workout Chart</h4>
                            </div>
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
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workouts as $item)
                                    <tr>
                                        <td>
                                            @if ($item->mon == 'null')
                                            <a class="btn btn-success">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->mon) as $mon)
                                            <a class="btn btn-success" style="margin: 5px 0px">{{strtoupper($mon)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->tue == 'null')
                                            <a class="btn btn-success">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->tue) as $tue)
                                            <a class="btn btn-success" style="margin: 5px 0px">{{strtoupper($tue)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->wed == 'null')
                                            <a class="btn btn-success">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->wed) as $wed)
                                            <a class="btn btn-success" style="margin: 5px 0px">{{strtoupper($wed)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->thu == 'null')
                                            <a class="btn btn-success">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->thu) as $thu)
                                            <a class="btn btn-success" style="margin: 5px 0px">{{strtoupper($thu)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->fri == 'null')
                                            <a class="btn btn-success">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->fri) as $fri)
                                            <a class="btn btn-success" style="margin: 5px 0px">{{strtoupper($fri)}}</a><br>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->sat == 'null')
                                            <a class="btn btn-success">No Workout</a>
                                            @else
                                            @foreach (json_decode($item->sat) as $sat)
                                            <a class="btn btn-success" style="margin: 5px 0px">{{strtoupper($sat)}}</a><br>
                                            @endforeach
                                            @endif
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
