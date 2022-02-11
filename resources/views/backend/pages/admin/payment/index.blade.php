@can('pay option access')

@extends('backend.layouts.master')

@section('title')
Payment Table
@endsection


@section('css')
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
                        <h4>Payment Option</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Warrior Fitness Gym</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                            <li class="breadcrumb-item active">Payment Option</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('payment.create') }}" class="btn btn-success">Add Payment Option</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">

                @forelse ($payments as $item)
                <div class="col-lg-6" style="text-align: center">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">{{ $item->name }}</h4>

                            <div class="row">
                                <div class="col-sm-6"
                                    style="display: block; margin-left: auto; margin-right: auto; width: 100%;">
                                    <div class="mt-4 mt-sm-0">
                                        <a class="image-popup-no-margins"
                                            href="{{ $item->qrimg }}">
                                            <img class="img-fluid" alt=""
                                                src="{{ $item->qrimg }}" width="1000">
                                        </a>
                                        <p class="mt-2 mb-0 text-muted">{{ $item->account_holder_name }}</p>
                                        @can('authentication access')
                                        <p>
                                            <form action="{{ route('payment.destroy',[$item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button style="padding: 0; border:none; background:none; " type="submit"
                                                    class="text-danger" data-bs-container="#tooltip-container0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></button>
                                            </form>
                                        </p>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p>No Payment Option Found</p>
                @endforelse

            </div> <!-- end row -->


        </div>


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection


@section('scripts')
<!-- Magnific Popup-->
<script src="{{ asset('backend/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Tour init js-->
<script src="{{ asset('backend/js/pages/lightbox.init.js') }}"></script>


@endsection

@endcan
