@extends('frontend.layouts.master')

@section('title')
About Us
@endsection

@section('css')

@endsection

@section('content')
@php
$phone = getSiteOption("site_phone");
$phone2 = getSiteOption("site_phone2");
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
$just = getSiteOption("site_social_links.justdial");
@endphp

<!-- =============== HEADER-TITLE =============== -->
<section class="s-header-title" style="background-image: url({{ asset('frontend/img/bg-1-min.png') }});">
    <div class="container">
        <h1 class="title">About</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>About</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<!-- ============== S-ABOUT-PROGRAM ============== -->
<section class="s-about">
    <div class="container">
        <img class="about-effect-tringle" src="{{ asset('frontend/img/tringle-about-top.svg') }}" alt="img">
        <div class="row about-row">
            <div class="col-md-5 about-img-col">
                <div class="about-img-cover">
                    <div class="about-img-1">
                        <img src="{{$logo}}" alt="img" width="700px">
                    </div>

                </div>
            </div>
            <div class="col-md-7 about-info-cover">
                <h2 class="title-decor">About <span>{{ $name }}</span></h2>
                <div class="text">
                    <p>{!!$dc!!}</p>
                </div>
                <ul class="about-cont">
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{ $phone }}">{{ $phone }}</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{ $phone2 }}">{{ $phone2 }}</a></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                            href="mailto:{{ $email }}">{{ $email }}</a></li>
                </ul>
                <ul class="social-list">
                    @if ($fb !== null)
                    <li><a target="_blank" href="{{$fb}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($tw !== null)
                    <li><a target="_blank" href="{{$tw}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($linke !== null)
                    <li><a target="_blank" href="{{$linke}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($insta !== null)
                    <li><a target="_blank" href="{{$insta}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    @endif
                    @if ($just !== null)
                    <li><a target="_blank" href="{{$just}}"><img src="{{asset('frontend/img/justdial.jpg')}}" width="30px" style="margin-top: 8px;"></a></li>
                    @endif
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
                        <div class="date">2021</div>
                        <h4>Started</h4>
                    </div>
                    <div class="about-bottom-info">Facilis voluptas harum natus enim dolorum dolores</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-bottom-item">
                    <div class="date-cover">
                        <div class="date">{{$trainerCount}}</div>
                        <h4>trainer</h4>
                    </div>
                    <div class="about-bottom-info">But I must explain to you all this mistaken idea of</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-bottom-item">
                    <div class="date-cover">
                        <div class="date">{{ $userCount}}</div>
                        <h4>Users</h4>
                    </div>
                    <div class="about-bottom-info">Nor again is there anyone who loves or pursues or</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ S-ABOUT-BOTTOM END ============ -->

@endsection

@section('scripts')

@endsection
