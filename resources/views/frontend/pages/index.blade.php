@php
$name = getSiteOption("site_name");
$dc = getSiteOption("site_description");
$slide1h = getHomeOption("slide1_header");
$slide1c = getHomeOption("slide1_content");
$slide1i = getHomeSlide1Img();
$slide2h = getHomeOption("slide2_header");
$slide2c = getHomeOption("slide2_content");
$slide2i = getHomeSlide2Img();
$slide3h = getHomeOption("slide3_header");
$slide3c = getHomeOption("slide3_content");
$slide3i = getHomeSlide3Img();
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
$bgtestimonialimg = getHomeBgTestimonialImg();
$sche = getHomeOption("schedule_day");

@endphp

@extends('frontend.layouts.master')

@section('title')
{{$name}}
@endsection


@section('content')


<!-- ============ S-CROSSFIT-SLIDER ============ -->
<section class="s-crossfit-slider">
    <div class="crossfit-slider">
        <div class="crossfit-slide">
            <div class="crossfit-slider-effect effect-1">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.2"
                        style="background-image: url({{ asset('frontend/img/effect-1.svg') }});"></span>
                </div>
            </div>
            <div class="crossfit-slider-effect effect-2">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4"
                        style="background-image: url({{ asset('frontend/img/effect-2.svg') }});"></span>
                </div>
            </div>
            <div class="crossfit-slide-bg" style="background-image: url({{ $slide1i }});">
            </div>
            <div class="container">
                <div class="crossfit-slide-cover">
                    <h2 class="title">{!! $slide1h !!}</h2>
                    <p>{{ $slide1c }}</p>
                </div>
            </div>
        </div>
        <div class="crossfit-slide">
            <div class="crossfit-slider-effect effect-1">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.2"
                        style="background-image: url({{ asset('frontend/img/effect-1.svg') }});"></span>
                </div>
            </div>
            <div class="crossfit-slider-effect effect-2">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4"
                        style="background-image: url({{ asset('frontend/img/effect-2.svg') }});"></span>
                </div>
            </div>
            <div class="crossfit-slide-bg" style="background-image: url({{ $slide2i }});">
            </div>
            <div class="container">
                <div class="crossfit-slide-cover">
                    <h2 class="title">{!! $slide2h !!}</h2>
                    <p>{{ $slide2c }}</p>
                </div>
            </div>
        </div>
        <div class="crossfit-slide">
            <div class="crossfit-slider-effect effect-1">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.2"
                        style="background-image: url({{ asset('frontend/img/effect-1.svg') }});"></span>
                </div>
            </div>
            <div class="crossfit-slider-effect effect-2">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4"
                        style="background-image: url({{ asset('frontend/img/effect-2.svg') }});"></span>
                </div>
            </div>
            <div class="crossfit-slide-bg" style="background-image: url({{ $slide3i }});">
            </div>
            <div class="container">
                <div class="crossfit-slide-cover">
                    <h2 class="title">{!! $slide3h !!}</h2>
                    <p>{{ $slide3c }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-navigation">
        <div class="container">
            <div class="slider-navigation-cover"></div>
        </div>
    </div>
</section>
<!-- ========== S-CROSSFIT-SLIDER END ========== -->

<!-- ================ S-CROSSFIT ================ -->
<section class="s-crossfit">
    <div class="container">
        <img src="{{ asset('frontend/img/placeholder-all.png') }}"
            data-src="{{ asset('frontend/img/group-circle-2.svg') }}" alt="img" class="crossfit-icon-1 rx-lazy">
        <img src="{{ asset('frontend/img/placeholder-all.png') }}" data-src="{{ asset('frontend/img/line-red-1.svg') }}"
            alt="img" class="crossfit-icon-2 rx-lazy">
        <img src="{{ asset('frontend/img/placeholder-all.png') }}"
            data-src="{{ asset('frontend/img/tringle-about-top.svg') }}" alt="img" class="crossfit-icon-3 rx-lazy">
        <h2 class="title-decor">Welcome To <span>{{$name}}</span></h2>
        <div class="row">
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img class="rx-lazy" src="{{ asset('frontend/img/placeholder-all.png') }}"
                        data-src="{{ $welcome1i }}" alt="img">
                    <h3>{{ $welcome1h }}</h3>
                    <p>{{ $welcome1c }}</p>
                </div>
            </div>
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img class="rx-lazy" src="{{ asset('frontend/img/placeholder-all.png') }}"
                        data-src="{{ $welcome2i }}" alt="img">
                    <h3>{{ $welcome2h }}</h3>
                    <p>{{ $welcome2c }}</p>
                </div>
            </div>
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img class="rx-lazy" src="{{ asset('frontend/img/placeholder-all.png') }}"
                        data-src="{{ $welcome3i }}" alt="img">
                    <h3>{{ $welcome3h }}</h3>
                    <p>{{ $welcome3c }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============== S-CROSSFIT END ============== -->

<!-- ============== S-OUR-PROGRAMS ============== -->
<section class="s-our-programs" style="background-image: url({{ $bgprogramimg  }});">
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
            <p>No programs Found </p>
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
            <div class="col-md-4 club-card-col" style="margin: 10px 0px 10px 0px">
                <div class="club-card-item" style="background-image: url({{asset('frontend/img/bg-price-1.svg')}});">
                    <div class="price-cover">
                        <div class="price">{!! $item->price !!}</div>
                        <div class="date"><span>RS</span>{!! $item->span !!}</div>
                    </div>
                    <ul class="list">
                        {!! $item->content !!}
                    </ul>
                    <a href="program.html" class="btn">order now</a>
                </div>
            </div>
            @empty
            <p>No Packages Found</p>
            @endforelse
        </div>
    </div>
</section>
<!-- ============ S-CLUB-CARDS END ============ -->

<!-- =========== S-TRAINING-SCHEDULE =========== -->
<section class="s-training-schedule" style="background-image: url({{ asset('frontend/img/bg-table-1.svg') }});">
    <div class="container">
        <h2 class="title-decor">Training <span>Schedule</span></h2>

        <div class="training-schedule-cover">
            <h3 class="training-schedule-top">{{ $sche }}</h3>
            <div class="training-schedule-table">
                <table>
                    <thead>
                        <th></th>
                        <th>monday</th>
                        <th>tuesday</th>
                        <th>wednesday</th>
                        <th>thursday</th>
                        <th>friday</th>
                        <th>saturday</th>
                        <th>sunday</th>
                    </thead>
                    <tbody>
                        @forelse ($schedule as $item)
                        <tr>
                            <td>{{ $item->time }}</td>
                            <td>{!! $item->monday !!}</td>
                            <td>{!! $item->tuesday !!}</td>
                            <td>{!! $item->wednesday !!}</td>
                            <td>{!! $item->thursday !!}</td>
                            <td>{!! $item->friday !!}</td>
                            <td>{!! $item->saturday !!}</td>
                            <td>{!! $item->sunday !!}</td>
                        </tr>
                        @empty
                        <p>No Schedule Found</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- ========= S-TRAINING-SCHEDULE END ========= -->

<!-- =============== S-OUT-TRAINER =============== -->
<section class="s-out-trainer" style="background-image: url({{ asset('frontend/img/bg-contacts.svg') }});">
    <div class="container">
        <h2 class="title-decor">Our <span>Trainer</span></h2>
        <p class="slogan">Our trainers are responsible for training individuals and developing a healthy workout regimen
            for all our clients.</p>
        <div class="row">
            @forelse ($trainers as $item)
            <div class="col-md-6 out-trainer-col">
                <div class="out-trainer-item">
                    <a href="{{ route('single-trainer',[$item->slug])}}" class="out-trainer-img"><img class="rx-lazy"
                            src="{{ $item->tpimg }}" data-src="{{ $item->tpimg }}" alt="img" width="196"
                            height="328"></a>
                    <div class="out-trainer-info">
                        <h3><a href="{{ route('single-trainer',[$item->slug])}}">{{ $item->name }}</a></h3>
                        <div class="prof">{{ $item->type }}</div>
                        <p>{!! $item->about !!}</p>
                        <ul class="social-list">
                            <li><a target="_blank" href="{{ $item->fb }}"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="{{ $item->twi }}"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="{{ $item->yt }}"><i class="fa fa-youtube"
                                        aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="{{ $item->insta }}"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty
            <p>No Trainers Found </p>
            @endforelse
        </div>
    </div>
</section>
<!-- ============= S-OUT-TRAINER END ============= -->


<!-- ============== S-TESTIMONIALS ============== -->
<section class="s-testimonials" style="background-image: url({{ $bgtestimonialimg }});">
    <div class="mask"></div>
    <img class="testimonials-effect" src="{{ asset('frontend/img/bg-testimonials.svg') }}" alt="effect">
    <div class="container">
        <div class="testimonials-slider">

            @forelse ($testimonial as $item)
            <div class="testimonial-slide">
                <p>{{ $item->content }}</p>
                <img src="{{ $item->testimg }}" alt="{{$item->name}}">
                <h3 class="name">{{$item->name}}</h3>
                <div class="prof">{{$item->type}}</div>
            </div>
            @empty
            <p>No Testimonials Found</p>
            @endforelse
        </div>
    </div>
</section>
<!-- ============ S-TESTIMONIALS END ============ -->


<!--================ RELATED POSTS ================-->
<section class="s-related-posts home-related-posts" style="margin-bottom: 50px;">
    <div class="container">
        <h2 class="title-decor">Latest <span>Blogs</span></h2>
        <p class="slogan">Here you will find many informative blogs will help to understand what you should do and no to
            do.</p>
        <div class="row">

            @forelse ($homeBlog as $item)

            <div class="col-md-6 related-post-col">
                <div class="post-item-cover">
                    <div class="post-header">
                        <div class="related-post-categ">{{ $item->category->name }}</div>
                        <div class="post-thumbnail">
                            <a href="{{route('single-post',[$item->slug])}}"><img class="rx-lazy" src="{{ $item->url }}"
                                    data-src="{{ $item->url }}" alt="img"></a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="meta">
                            <span class="post-date"><i class="fa fa-calendar"
                                    aria-hidden="true"></i>{{ $item->created_at->diffForHumans()}}</span>
                        </div>
                        <h3 class="title"><a href="{{route('single-post',[$item->slug])}}">{{ $item->title }}</a></h3>
                        <div class="text">
                            <p>{{ $item->excerpt }}</p>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By
                                    {{ $item->user->name }}</a></span>
                        </div>
                        <a href="{{route('single-post',[$item->slug])}}" class="btn"><span>read more</span></a>
                    </div>
                </div>
            </div>
            @empty
            <p>No Post Found</p>
            @endforelse

        </div>
    </div>
</section>
<!--============== RELATED POSTS END ==============-->


@endsection
