@can('authentication access')
@extends('backend.layouts.master')

@section('title')
Assign Permission
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
                            <li class="breadcrumb-item active">Assign Permission Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('role.index') }}" class="btn btn-success">All roles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="card ">
                        <div class="card-body">
                            @include('backend.layouts.errors')
                            <form action="{{ route('assign.permission.store',[$role->id])}}" method="post">
                                @csrf
                                @foreach ($permissions as $item)
                                <div class="form-check form-switch mb-3" dir="ltr" style="font-size: 20px">
                                    <input type="checkbox" class="form-check-input" id="permission[{{$item->id}}]"
                                        name="permission[]" value="{{$item->id}}"
                                        @if($role->hasPermissionTo($item->id)) checked @endif>
                                    <label class="form-check"
                                        for="permission[{{$item->id}}]">{{ strtoupper($item->name) }}</label>
                                </div>
                                @endforeach
                                <div class="col-sm-12">
                                    <button type="submit"
                                        class="form-control btn btn-danger waves-effect waves-light">Assign Permission
                                        To {{ strtoupper($role->name) }}</button>
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
