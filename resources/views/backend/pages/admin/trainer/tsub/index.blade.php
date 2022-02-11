@can('payment access')

@extends('backend.layouts.master')

@section('title')
PT Subscriptions Table
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Warrior Fitness Gym</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">PT Subscriptions Tables</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('tsub.create') }}" class="btn btn-success">Add New PT Subscription</a>
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
                                        <th>User Profile</th>
                                        <th>User Name</th>
                                        <th>Trainer Profile</th>
                                        <th>Trainer Name</th>
                                        <th>Subscription Price</th>
                                        <th>Advance</th>
                                        <th>Balances</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Remaining Days</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tsubs as $item)
                                    <tr>
                                        <td id="tooltip-container0" class="d-flex">
                                            @if( $item->status_tsub == 'paid')
                                            <a href="{{ route('tsub.invoice.index',[$item->id]) }}" class="me-3 text-primary"
                                                data-bs-container="#tooltip-container0" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Generate Invoice"><i
                                                    class="mdi mdi-book-edit font-size-18"></i></a>
                                            @endif
                                            <a href="{{ route('tsub.edit',[$item->id]) }}"
                                                class="me-3 text-primary" data-bs-container="#tooltip-container0"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                            <form action="{{ route('tsub.destroy',[$item->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button style="padding: 0; border:none; background:none; " type="submit"
                                                    class="text-danger" data-bs-container="#tooltip-container0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <a class="image-popup-no-margins" href="{{ $item->user->avatar }}">
                                                <img class="img-fluid rounded-circle header-profile-user" alt=""
                                                    src="{{ $item->user->avatar }}" width="50" height="50">
                                            </a>
                                        </td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            <a class="image-popup-no-margins" href="{{ $item->trainer->tpimg }}">
                                                <img class="img-fluid rounded-circle header-profile-user" alt=""
                                                    src="{{ $item->trainer->tpimg }}" width="50" height="50">
                                            </a>
                                        </td>
                                        <td>{{ $item->trainer->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->advance }}</td>
                                        <td>{{ $item->balance }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->start)->isoFormat('Do MMM YYYY') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->end)->isoFormat('Do MMM YYYY') }}</td>
                                        <td>{{ $item->tsub_days }}</td>
                                        <td>{{ $item->status_tsub }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Total Trainers Subscription Price</p>

                                        <h3 class="font-size-50">{{$totalPtMoney}}</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Total Trainers Advance Paid</p>

                                        <h3 class="font-size-50">{{$totalPtadvance}}</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">Total Trainers Balance Remain</p>

                                        <h3 class="font-size-50">{{$totalPtbalance}}</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
