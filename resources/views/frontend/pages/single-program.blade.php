@extends('frontend.layouts.master')

@section('title')
Program {{$program->name}}
@endsection

@section('css')

@endsection

@section('content')
@php
$phone = getSiteOption("site_phone");
$td = getSiteOption("site_td");
$logo = getSiteLogo();
$email = getSiteOption("site_email");
$address = getSiteOption("site_address");
$name = getSiteOption("site_name");
$ct = getSiteOption("copyright_text");
$dc = getSiteOption("site_description");
$fb = getSiteOption("site_social_links.facebook");
$insta = getSiteOption("site_social_links.instagram");
$tw = getSiteOption("site_social_links.twitter");
$linke = getSiteOption("site_social_links.linkedin");
@endphp
<!-- =============== HEADER-TITLE =============== -->
<section class="s-header-title" style="background-image: url({{ asset('frontend/img/bg-1-min.png') }});">
    <div class="container">
        <h1 class="title">{{ $program->name }}</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>{{ $program->name }}</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<!-- ============== S-ABOUT-PROGRAM ============== -->
<section class="s-about">
    <div class="container">
        <img class="about-effect-tringle" src="{{ asset('frontend/img/tringle-about-top.svg ') }}" alt="img">
        <div class="row about-row">
            <div class="col-md-5 about-img-col">
                <div class="about-img-cover">
                    <div class="about-img-1">
                        <img class="about-img-effect-1" src="{{ asset('frontend/img/square-yellow.svg') }}" alt="img">
                        <img class="about-img-effect-2" src="{{ asset('frontend/img/group-circle-2.svg') }}" alt="img">
                        <img src="{{$program->frontpimg}}" alt="img" width="422" height="423">
                    </div>
                    <div class="about-img-2">
                        <img src="{{$program->backpimg}}" alt="img" width="309" height="312">
                    </div>
                </div>
            </div>
            <div class="col-md-7 about-info-cover">
                <h2 class="title-decor">About <span>{{$program->name}}</span></h2>
                <div class="text">
                    <p>{!! $program->about !!}</p>
                </div>
                <ul class="about-cont">
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{$phone}}">{{$phone}}</a></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                            href="mailto:{{$email}}">{{$email}}</a></li>
                </ul>
                <ul class="social-list">
                    <li><a target="_blank" href="{{$fb}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{$tw}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{$linke}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{$insta}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ============ S-ABOUT-PROGRAM END ============ -->

<!-- ============== S-ABOUT-BOTTOM ============== -->
<section class="s-about-bottom" style="margin-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="about-bottom-item">
                    <div class="date-cover">
                        <div class="date">{{ $program->year }}</div>
                    </div>
                    <div class="about-bottom-info" style="font-size: 25px;">Program Year</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-bottom-item">
                    <div class="date-cover">
                        <div class="date">{{ $program->trainers }}</div>
                    </div>
                    <div class="about-bottom-info" style="font-size: 20px;">Tainers in Program</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-bottom-item">
                    <div class="date-cover">
                        <div class="date">{{ $program->clients }}</div>
                    </div>
                    <div class="about-bottom-info" style="font-size: 20px;">Clients in Program</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ S-ABOUT-BOTTOM END ============ -->

@endsection

@section('scripts')

@endsection
