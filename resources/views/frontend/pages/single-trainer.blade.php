@extends('frontend.layouts.master')

@section('title')
Trainer {{$trainer->name}}
@endsection

@section('css')

@endsection

@section('content')
<!-- =============== HEADER-TITLE =============== -->
<section class="s-header-title" style="background-image: url({{ asset('frontend/img/bg-1-min.png') }});">
    <div class="container">
        <h1 class="title">{{ $trainer->name }}</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>{{ $trainer->name }}</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<!-- ============= HEADER-TITLE END ============= -->
<section class="s-our-trainer">
    <div class="container">
        <img class="about-effect-tringle" src="{{ asset('frontend/img/tringle-about-top.svg') }}" alt="img">
        <h2 class="title-decor"><span>{{ $trainer->name }}</span></h2>
        <div class="row our-trainer-row">
            <div class="col-md-5 trainer-img-col">
                <div class="trainer-img-cover">
                    <img class="our-trainer-effect-1" src="{{ asset('frontend/img/line-red-1.svg') }}" alt="img">
                    <img class="our-trainer-effect-2" src="{{ asset('frontend/img/line-red-2.svg') }}" alt="img">
                    <img class="our-trainer-effect-3" src="{{ asset('frontend/img/square-yellow.svg') }}" alt="img">
                    <img class="our-trainer-img" src="{{ $trainer->tsimg }}" alt="img" width="422" height="400">
                </div>
            </div>
            <div class="col-md-7">
                <div class="our-trainer-info">
                    <div class="prof">{{ $trainer->type }}</div>
                    <p>{!! $trainer->about !!}</p>
                    <ul class="social-list">
                        @if ($trainer->fb !== null)
                        <li><a target="_blank" href="http://www.facebook.com/{{ $trainer->fb }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        @endif
                        @if ($trainer->twi !== null)
                        <li><a target="_blank" href="https://twitter.com/{{ $trainer->twi }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        @endif
                        @if ($trainer->yt !== null)
                        <li><a target="_blank" href="https://www.youtube.com/{{ $trainer->yt }}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        @endif
                        @if ($trainer->insta !== null)
                        <li><a target="_blank" href="https://www.instagram.com/{{ $trainer->insta }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<section class="s-testimonials">
    <div class="mask"></div>
    <img class="testimonials-effect" src="{{ asset('frontend/img/bg-testimonials.svg') }}" alt="effect">
    <div class="container">
        <div class="testimonials-slider">
            <div>
                <h1 class="name" style="margin-bottom: 50px;">Trainer Certificate</h1>
                <img src="{{ $trainer->tcertimg }}" alt="{{$trainer->name}}" >
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection
