@can('testimonial access')

@extends('backend.layouts.master')

@section('title')
Testimonial Create
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
                            <li class="breadcrumb-item active">Testimonial Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('testimonial.index') }}" class="btn btn-success">All Testimonials</a>
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
                            <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Testimonial Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Pratik Jadhav" name="name"
                                            id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="type" class="col-sm-2 col-form-label">Testimonial Type</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Client" name="type"
                                            id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="content" class="col-sm-2 col-form-label">Testimonial Content (250 character only)*</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" type="text" name="content"
                                            id="content"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="testimg" class="col-sm-2 col-form-label">Testimonial Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file"  name="testimg"
                                            id="testimg" required>
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
