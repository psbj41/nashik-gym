@can('blogs access')

@extends('backend.layouts.master')

@section('title')
workout Create
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
                            <li class="breadcrumb-item active">workout Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('workout.index') }}" class="btn btn-success">All workouts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            @include('backend.layouts.errors')
                            <form action="{{route('workout.assign.store')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" type="text" placeholder="add form" name="user_id"
                                            id="name" required>
                                            <option value="">Select User</option>
                                            @foreach ($user as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @foreach ($workouts as $item)
                                <div class="form-check form-switch mb-3" dir="ltr" style="font-size: 20px">
                                    <input type="checkbox" class="form-check-input" id="permission[{{$item->id}}]"
                                        name="workout_id[]" value="{{$item->id}}">
                                    <label class="form-check"
                                        for="permission[{{$item->id}}]">{{ strtoupper($item->name) }}</label>
                                </div>
                                @endforeach

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
