@extends('frontend.layouts.master')

@section('title')
Blog
@endsection

@section('css')
<style>
    a.previous-link,
    a.next-link {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
        background: white;
        color: black;
    }

    span.next-link-disabled,
    span.previous-link-disabled {
        text-decoration: none;
        display: inline-block;
        padding: 8px 16px;
        background: white;
        color: black;

    }

    a.previous-link:hover,
    a.next-link:hover {
        background: #f23849;
        color: white;
    }

</style>
@endsection

@section('content')
<!-- =============== HEADER-TITLE =============== -->
<section class="s-header-title" style="background-image: url({{ asset('frontend/img/bg-1-min.png') }});">
    <div class="container">
        <h1 class="title">Blogs</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>Blogs</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<!--===================== S-NEWS =====================-->
<section class="s-news">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 blog-cover">


                @forelse ($category->posts as $item)

                <div class="post-item-cover">
                    <div class="post-header">
                        <div class="post-thumbnail">
                            <a href="{{ route('single-post',[$item->slug])}}">
                                <img src="{{ $item->url }}" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By
                                    {{ $item->user->name }}</a></span>
                            <span class="post-date"><i class="fa fa-calendar"
                                    aria-hidden="true"></i>{{ $item->created_at->diffForHumans()}}</span>
                            <span class="post-category"><i class="fa fa-tag" aria-hidden="true"></i><a
                                    href="#">{{ $item->category->name }}</a></span>
                        </div>
                        <h2 class="title"><a href="{{ route('single-post',[$item->slug])}}">{{ $item->title }}</a></h2>
                        <div class="text">
                            <p>{{ $item->excerpt }}</p>
                        </div>
                    </div>
                    <div class="post-footer" style="margin: 20px 0px 20px 0px;">
                        <a href="{{ route('single-post',[$item->slug])}}" class="btn"><span>read more</span></a>
                    </div>
                </div>
                @empty
                <p>No Post Found</p>
                @endforelse



            </div>
            @include('frontend.layouts.blog-sidebar')
        </div>
    </div>
</section>
<!--=================== S-NEWS END ===================-->
@endsection

@section('scripts')

@endsection
