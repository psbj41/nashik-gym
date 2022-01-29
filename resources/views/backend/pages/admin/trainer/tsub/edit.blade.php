@can('payment access')

@extends('backend.layouts.master')

@section('title')
Personal Trainer Subscription Edit
@endsection

@section('css')

<link href="{{ asset('backend/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
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
                            <li class="breadcrumb-item active"> Personal Trainer Subscription Edit Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('tsub.index') }}" class="btn btn-success">All Personal Trainer Subscriptions</a>
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
                            <form action="{{route('tsub.update',[$tsub->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="user_id">User Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2" name="user_id" id="user_id">
                                            <option >User Select</option>
                                            @foreach ($user as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == $tsub->user_id) selected @endif>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="trainer_id">Trainer Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="trainer_id" id="trainer_id">
                                            <option value="Value Other than listed">Other</option>
                                            @foreach ($trainer as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == $tsub->user_id) selected @endif>{{ $item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="price" class="col-sm-2 col-form-label">Trainer Subscription Price</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $tsub->price }}" name="price"
                                            id="price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="advance" class="col-sm-2 col-form-label">Adavance Payment</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $tsub->advance }}" name="advance"
                                            id="advance">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="balance" class="col-sm-2 col-form-label">Balance Payment</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $tsub->balance }}" name="balance"
                                            id="balance">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="paid_option" class="col-sm-2 col-form-label">Payment Option Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="paid_option" id="paid_option">
                                        <option value="PhonePe">PhonePe</option>
                                        <option value="Google Pay">Google Pay</option>
                                        <option value="Other UPI Platform">Other UPI Platform</option>
                                        <option value="Cash">Cash</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="txn" class="col-sm-2 col-form-label">Transaction Id</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $tsub->txn }}" name="txn"
                                            id="txn">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="start" class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="start" value="{{ $tsub->start }}"
                                            id="start">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="end" class="col-sm-2 col-form-label">End Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="end" value="{{ $tsub->end }}"
                                            id="end">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="status_tsub" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" type="text" name="status_tsub"
                                            id="status_tsub">
                                            <option value="unpaid">Unpaid</option>
                                            <option value="paid">Paid</option>
                                        </select>
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
<script src="{{ asset('backend/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('backend/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
<script src="{{ asset('backend/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('backend/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>


<script src="{{ asset('backend/js/pages/form-advanced.init.js') }}"></script>
@endsection
@endcan
