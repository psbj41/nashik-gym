@can('blogs access')

@extends('backend.layouts.master')

@section('title')
Post Create
@endsection

@section('css')
<!-- Summernote css -->
<link href="{{ asset('backend/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item active">Post Create Form</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ route('post.index') }}" class="btn btn-success">All Posts</a>
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
                            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Post Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Title Of Post" name="title"
                                            id="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="excerpt" class="col-sm-2 col-form-label">Post Excerpt (200 Characters only)*</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" type="text" name="excerpt"
                                            id="excerpt"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="elm1" class="col-sm-2 col-form-label">Post Content </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" type="text" name="post_content"
                                        id="elm1"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="category_id" class="col-sm-2 col-form-label">Select Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" type="text" name="category_id" id="category_id">
                                            <option value="0">Select Category</option>
                                            @forelse ($category as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @empty
                                            <p>Nothing Found</p>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="feature_img" class="col-sm-2 col-form-label">Upload Feature Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="feature_img"
                                            id="feature_img" required>
                                    </div>
                                </div>

                                <div class="col-sm-12 d-flex">
                                    <button style="margin: 0px 10px 0px 0px" type="submit"
                                        class="form-control btn btn-success waves-effect waves-light" value="draft" name="status">Save Post</button>
                                    <button style="margin: 0px 0px 0px 10px" type="submit"
                                        class="form-control btn btn-primary waves-effect waves-light" value="publish" name="status">Publish
                                        Post</button>
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
<!--tinymce js-->
<script src="{{ asset('backend/libs/tinymce/tinymce.min.js') }}"></script>

<!-- Summernote js -->
<script src="{{ asset('backend/libs/summernote/summernote-bs4.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('backend/js/pages/form-editor.init.js') }}"></script>

@endsection
@endcan
