@can('authentication access')

@extends('backend.layouts.master')

@section('title')
Timetable Create
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
                            <li class="breadcrumb-item active">Timetable Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end  d-sm-block">
                        <a href="{{ route('timetable.index') }}" class="btn btn-success">All Timetables</a>
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
                            <form action="{{route('timetable.store')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" type="text" name="user_id"
                                        id="name" required>
                                        <option value="">Select User</option>
                                        @foreach ($user as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Monday Workout Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <label for="name" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-2">
                                        <label for="name" class="col-form-label">Subworkout Name:</label>
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-7">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-1">
                                        <button for="name" class="btn btn-success">+</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Monday Workout Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <label for="name" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-2">
                                        <label for="name" class="col-form-label">Subworkout Name:</label>
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-7">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-1">
                                        <button for="name" class="btn btn-success">+</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Tuesday Workout Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <label for="name" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-2">
                                        <label for="name" class="col-form-label">Subworkout Name:</label>
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-7">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-1">
                                        <button for="name" class="btn btn-success">+</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Wednesday Workout Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <label for="name" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-2">
                                        <label for="name" class="col-form-label">Subworkout Name:</label>
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-7">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-1">
                                        <button for="name" class="btn btn-success">+</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Thursday Workout Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <label for="name" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-2">
                                        <label for="name" class="col-form-label">Subworkout Name:</label>
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-7">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-1">
                                        <button for="name" class="btn btn-success">+</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Friday Workout Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <label for="name" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-2">
                                        <label for="name" class="col-form-label">Subworkout Name:</label>
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-7">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-1">
                                        <button for="name" class="btn btn-success">+</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Saturday Workout Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <label for="name" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-2">
                                        <label for="name" class="col-form-label">Subworkout Name:</label>
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-7">
                                        <input class="form-control" type="text" name="monday"
                                            id="name">
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-1">
                                        <button for="name" class="btn btn-success">+</button>
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
