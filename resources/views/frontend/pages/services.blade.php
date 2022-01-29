@extends('frontend.layouts.master')

@section('title')
Services
@endsection

@section('css')

@endsection

@section('content')
@php
$name = getSiteOption("site_name");
$welcome1h = getHomeOption("welcome1_header");
$welcome1c = getHomeOption("welcome1_content");
$welcome1i = getHomeWelcome1Img();
$welcome2h = getHomeOption("welcome2_header");
$welcome2c = getHomeOption("welcome2_content");
$welcome2i = getHomeWelcome2Img();
$welcome3h = getHomeOption("welcome3_header");
$welcome3c = getHomeOption("welcome3_content");
$welcome3i = getHomeWelcome3Img();
$bgprogramimg = getHomeBgProgramImg();
@endphp


<!-- =============== HEADER-TITLE =============== -->
<section class="s-header-title" style="background-image: url({{ asset('frontend/img/bg-1-min.png') }});">
    <div class="container">
        <h1 class="title">Services</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<!-- ================ S-CROSSFIT ================ -->
<section class="s-crossfit">
    <div class="container">
        <img src="{{ asset('frontend/img/group-circle-2.svg') }}" alt="img" class="crossfit-icon-1">
        <img src="{{ asset('frontend/img/line-red-1.svg') }}" alt="img" class="crossfit-icon-2">
        <img src="{{ asset('frontend/img/tringle-about-top.svg') }}" alt="img" class="crossfit-icon-3">
        <h2 class="title-decor">Welcome To <span>{{ $name }}</span></h2>
        <div class="row">
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img src="{{ $welcome1i }}" alt="img">
                    <h3>{{ $welcome1h }}</h3>
                    <p>{{ $welcome1c }}</p>

                </div>
            </div>
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img src="{{ $welcome2i }}" alt="img">
                    <h3>{{ $welcome2h }}</h3>
                    <p>{{ $welcome2c }}</p>

                </div>
            </div>
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img src="{{ $welcome3i }}" alt="img">
                    <h3>{{ $welcome3h }}</h3>
                    <p>{{ $welcome3c }}</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============== S-CROSSFIT END ============== -->

<!-- ============== S-OUR-PROGRAMS ============== -->
<section class="s-our-programs" style="background-image: url({{ $bgprogramimg }});">
    <div class="mask"></div>
    <div class="our-programs-effect" style="background-image: url({{ asset('frontend/img/bg-programs.svg') }});"></div>
    <div class="container">
        <h2 class="title-decor">Our <span>Programs</span></h2>
        <div class="row">
            @forelse ($program as $item)
            <div class="col-sm-6 col-md-3 program-col">
                <div class="program-item">
                    <div class="program-item-front" style="background-image: url({{ $item->frontpimg }});">
                        <div class="program-item-inner">
                            <h3>{{ $item->name }}</h3>
                        </div>
                    </div>
                    <div class="program-item-back" style="background-image: url({{ $item->backpimg }});">
                        <div class="program-item-inner">
                            <h3>{{ $item->name }}</h3>
                            <a href="{{ route('single-program',[$item->slug])}}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>No Programs Found</p>
            @endforelse
        </div>
    </div>
</section>
<!-- ============ S-OUR-PROGRAMS END ============ -->

<!-- ============== S-CLUB-CARDS ============== -->
<section class="s-club-cards">
    <div class="container">
        <h2 class="title-decor">Gym <span>Packages</span></h2>
        <div class="row">
            @forelse ($package as $item)
            <div class="col-md-4 club-card-col" style="margin-bottom: 20px;">
                <div class="club-card-item">
                    <div class="price-cover">
                        <div class="price">{{ $item->price }}</div>
                        <div class="date"><span>RS</span>{{ $item->span }}</div>
                    </div>
                    <ul class="list">
                        {!! $item->content !!}
                    </ul>
                    <a href="{{ route('register')}}" class="btn">Register Now</a>
                </div>
            </div>
            @empty
            <p> No Package Found</p>
            @endforelse
        </div>
    </div>
</section>
<!-- ============ S-CLUB-CARDS END ============ -->


@endsection

@section('scripts')

@endsection
