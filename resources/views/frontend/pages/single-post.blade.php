@extends('frontend.layouts.master')

@section('title')
Blog
@endsection

@section('css')

@endsection

@section('content')
<!-- =============== HEADER-TITLE =============== -->
<section class="s-header-title" style="background-image: url({{asset('frontend/img/bg-1-min.png')}});">
    <div class="container">
        <h1 class="title">{{ $post->category->name }}</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>{{ $post->category->name }}</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<!--===================== S-NEWS =====================-->
<section class="s-news">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 blog-cover">
                <div class="post-item-cover">
                    <div class="post-header">
                        <div class="post-thumbnail">
                            <img src="{{ $post->url }}" alt="img">
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By
                                    {{$post->user->name}}</a></span>
                            <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>{{ $post->created_at->diffForHumans()}}</span>
                            <span class="post-category"><i class="fa fa-tag" aria-hidden="true"></i><a
                                    href="#">{{ $post->category->name }}</a></span>
                        </div>
                        <h2 class="title">{{ $post->title }}</h2>
                        <div class="text">
                            <p>{!! $post->content !!}</p>
                        </div>
                    </div>
                </div>
                <!--=============== AUTOR-COVER ===============-->
                <div class="autor-cover" style="align-content: center;">
                    <img src="{{$post->user->avatar}}" alt="img">
                    <div class="autor-content">
                        <div class="name">{{$post->user->name}}</div>
                        <p>Created This Post</p>
                    </div>
                </div>
                <!--============= AUTOR-COVER END =============-->
            </div>
            @include('frontend.layouts.blog-sidebar')
        </div>
    </div>
</section>
<!--=================== S-NEWS END ===================-->

@endsection

@section('scripts')

@endsection
