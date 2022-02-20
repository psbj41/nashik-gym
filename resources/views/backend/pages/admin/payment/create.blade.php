@can('pay option access')

@extends('backend.layouts.master')

@section('title')
Payment Create
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Warrior Fitness Gym</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Payment Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('payment.index') }}" class="btn btn-success">All Payments</a>
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
                            <form action="{{route('payment.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Payment Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="PhonePe | Google Pay | Bhim QR | Other" name="name"
                                            id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="account_holder_name" class="col-sm-2 col-form-label">Account Holder Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="account_holder_name"
                                            id="account_holder_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="qrimg" class="col-sm-2 col-form-label">Upload QR Code</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="qrimg"
                                            id="qrimg">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="form-control btn btn-danger waves-effect waves-light">Submit the Payment Option</button>
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
