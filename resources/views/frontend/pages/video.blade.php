@extends('frontend.layouts.master')

@section('title')
Videos
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
        <h1 class="title">Videos</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>Videos</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<!--===================== S-NEWS =====================-->
<section class="s-news">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 blog-cover">
                <div class="row">
                    @forelse ($videos as $item)

                    <div class="col-6">
                        <div class="d-flex">

                        <div class="title" style="margin-bottom:10px">Video Title: {{$item->title}}</div>
                        <div class="category" style="margin-bottom:10px; margin-left:auto">{{$item->category->name}}</div>
                        </div>
                        <div class="video">
                            <iframe title="YouToube Video" style="width: 100%; height:350px" src="{{$item->link}}"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    @empty
                    <p>No Post Found</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================== S-NEWS END ===================-->
@endsection

@section('scripts')

@endsection
