@can('blogs access')

@extends('backend.layouts.master')

@section('title')
subworkout Create
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
                            <li class="breadcrumb-item active">subworkout Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('subworkout.index') }}" class="btn btn-success">All workouts</a>
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
                            <form action="{{route('subworkout.store')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">subworkout Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="add form" name="name"
                                            id="name" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Select Workout</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" type="text" placeholder="add form" name="workout_id"
                                            id="name" required>
                                            <option value="">Select Workout</option>
                                            @foreach ($workout as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
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
