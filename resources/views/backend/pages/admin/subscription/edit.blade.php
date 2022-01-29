@can('payment access')

@extends('backend.layouts.master')

@section('title')
Subscription Edit
@endsection

@section('css')
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
                            <li class="breadcrumb-item active">Subscription Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('subscription.index') }}" class="btn btn-success">All Subscriptions</a>
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
                            <form action="{{route('subscription.update',[$subscription->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="user_id">User Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2" name="user_id" id="user_id">
                                            <option >User Select</option>
                                            @foreach ($user as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == $subscription->user_id) selected @endif>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="package_id">Package</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="package_id" id="package_id">
                                            <option value="Value Other than listed">Other</option>
                                            @foreach ($package as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == $subscription->package_id) selected  @endif>{{ $item->span }} = {{$item->price}} /- Rs</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="payment_price" class="col-sm-2 col-form-label">Subscription Price</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $subscription->payment_price }}" name="payment_price"
                                            id="payment_price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="advance" class="col-sm-2 col-form-label">Adavance Payment</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $subscription->advance }}" name="advance"
                                            id="advance">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="balance" class="col-sm-2 col-form-label">Balance Payment</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $subscription->balance }}" name="balance"
                                            id="balance">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="option" class="col-sm-2 col-form-label">Payment Option Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="option" id="option">
                                            <option value="PhonePe">PhonePe</option>
                                            <option value="Google Pay">Google Pay</option>
                                            <option value="Other UPI Platform">Other UPI Platform</option>
                                            <option value="Cash">Cash</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="transaction" class="col-sm-2 col-form-label">Transaction Id</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  name="transaction" value="{{ $subscription->transaction }}"
                                            id="transaction">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="start" class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="start" value="{{ $subscription->start }}"
                                            id="start">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="end" class="col-sm-2 col-form-label">End Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="end" value="{{ $subscription->end }}"
                                            id="end">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="status_sub" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" type="text" name="status_sub"
                                            id="status_sub">
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
@endsection
@endcan
