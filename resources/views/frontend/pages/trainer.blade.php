@extends('frontend.layouts.master')

@section('title')
Trainer
@endsection

@section('css')

@endsection

@section('content')
@php
$sche = getHomeOption("schedule_day");

@endphp
<!-- =============== HEADER-TITLE =============== -->
<section class="s-header-title" style="background-image: url({{ asset('frontend/img/bg-1-min.png') }});">
    <div class="container">
        <h1 class="title">Trainers</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>Trainers</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->

<!-- ============== S-BEST-TRAINER ============== -->
<section class="s-best-trainer">
    <div class="container">
        <h2 class="title-decor">Best <span>Trainer</span></h2>
    </div>
    <div class="best-trainer-slider">
        @forelse ($trainer as $item)
        <a href="{{ route('single-trainer',[$item->slug])}}" class="best-trainer-slide">
            <div class="best-trainer-img" style="margin: 10px">
                <img src="{{ $item->tpimg }}" alt="img" >
            </div>
            <h3 class="name">{{$item->name}}</h3>
            <div class="prof">{{$item->type}}</div>
        </a>
        @empty
        <p>No Trainer Found</p>
        @endforelse
    </div>
</section>
<!-- ============ S-BEST-TRAINER END ============ -->

<!-- =========== S-TRAINING-SCHEDULE =========== -->
<section class="s-training-schedule" style="background-image: url(assets/img/bg-table-1.svg);">
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

@endsection

@section('scripts')

@endsection
