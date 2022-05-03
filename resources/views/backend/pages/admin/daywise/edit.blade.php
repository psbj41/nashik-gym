@can('authentication access')

@extends('backend.layouts.master')

@section('title')
Daywise Create
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Warrior Fitness Gym</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Daywise Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('daywise.index') }}" class="btn btn-success">All Daywise</a>
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
                            <form action="{{route('daywise.update',[$daywise->id])}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Daywise Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" type="text" placeholder="add form" name="user_id"
                                            id="name">
                                            <option value="">Select User</option>
                                            @foreach ($users as $item)
                                            <option value="{{$item->id}}"@if ($item->id == $daywise->user_id) selected @endif>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Monday</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ..." name="mon[]">
                                        @foreach($data as $item2)
                                        <option value="{{ $item2->name }}">{{ $item2->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Monday</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ..." name="tue[]">
                                        @foreach($data as $item2)
                                        <option value="{{ $item2->name }}">{{ $item2->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Monday</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ..." name="wed[]">
                                        @foreach($data as $item2)
                                        <option value="{{ $item2->name }}">{{ $item2->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Monday</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ..." name="thu[]">
                                        @foreach($data as $item2)
                                        <option value="{{ $item2->name }}">{{ $item2->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Monday</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ..." name="fri[]">
                                        @foreach($data as $item2)
                                        <option value="{{ $item2->name }}">{{ $item2->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Monday</label>
                                    <div class="col-sm-10">
                                        <select class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ..." name="sat[]">
                                        @foreach($data as $item2)
                                        <option value="{{ $item2->name }}">{{ $item2->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit"
                                        class="form-control btn btn-danger waves-effect waves-light">Submit the
                                        Form</button>
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
