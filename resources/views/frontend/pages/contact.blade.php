@extends('frontend.layouts.master')

@section('title')
Contacts
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
@endphp


<!-- =============== HEADER-TITLE =============== -->
<section class="s-header-title" style="background-image: url({{ asset('frontend/img/bg-1-min.png') }});">
    <div class="container">
        <h1 class="title">Contacts</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>Contacts</li>
        </ul>
    </div>
</section>
<!-- ============= HEADER-TITLE END ============= -->


<style>
    @media(max-width: 320px) {
        .cont-map {
            text-align: center;
            margin: 50px 0px 50px 0px;
        }

        .cont-map iframe {
            width: 250px;
            height: 400px;
        }
    }

    @media(min-width: 375px) {
        .cont-map {
            text-align: center;
            margin: 50px 0px 50px 0px;
        }

        .cont-map iframe {
            width: 325px;
            height: 400px;
        }
    }

    @media(min-width: 425px) {
        .cont-map {
            text-align: center;
            margin: 50px 0px 50px 0px;
        }

        .cont-map iframe {
            width: 375px;
            height: 400px;
        }
    }

    @media(min-width: 768px) {
        .cont-map {
            text-align: center;
            margin: 50px 0px 50px 0px;
        }

        .cont-map iframe {
            width: 700px;
            height: 400px;
        }
    }


    @media(min-width: 1024px) {
        .cont-map {
            text-align: center;
            margin: 50px 0px 50px 0px;
        }

        .cont-map iframe {
            width: 925px;
            height: 400px;
        }
    }

    @media(min-width: 1440px) {
        .cont-map {
            text-align: center;
            margin: 50px 0px 0px 0px;
        }

        .cont-map iframe {
            width: 1325px;
            height: 500px;
        }
    }


    @media(min-width: 1600px) {
        .cont-map {
            text-align: center;
            margin: 50px 0px 0px 0px;
        }

        .cont-map iframe {

            width: 1350px;
            height: 400px;

        }
    }

</style>

<!-- ================== S-MAP ================== -->
<section class="s-map" style="margin-top: 20px 10px;">
    <div id="map" class="cont-map google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5326.112388992966!2d73.04942937481123!3d19.2767039189031!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bdc58b342cc7%3A0x1a8e76abd91feaab!2sONE%20MORE%20REP%20GYM%20AND%20FITNESS%20STUDIO!5e0!3m2!1sen!2sin!4v1627816845946!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</section>
<!-- ================ S-MAP END ================ -->







<!-- ================ S-CONTACTS ================ -->
<section class="s-contacts" style="background-image: url({{ asset('frontend/img/bg-contacts.svg') }});">
    <div class="container">
        <h2 class="title-decor">Contact <span>Us</span></h2>
        @if (session('success'))
        <div class="alert alert-primary" role="alert" style="text-align: center;">
            {{session('success')}}
        </div>
        @endif
        <div class="row">
            <div class="col-md-5 col-lg-4">
                <div class="contact-item">
                    <div class="contact-item-left">
                        <img src="{{ asset('frontend/img/icon-1.svg') }}" alt="img">
                        <h4>need help</h4>
                    </div>
                    <div class="contact-item-right">
                        <ul class="contact-item-list">
                            <li><a href="tel:{{ $phone }}">{{ $phone }}</a></li>
                            <li><a href="tel:{{ $phone2 }}">{{ $phone2 }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-left">
                        <img src="{{ asset('frontend/img/icon-2.svg') }}" alt="img">
                        <h4>Email Us</h4>
                    </div>
                    <div class="contact-item-right">
                        <ul class="contact-item-list">
                            <li><a href="mailto:{{ $email }}">{{ $email }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-left">
                        <img src="{{ asset('frontend/img/icon-3.svg') }}" alt="img">
                        <h4>address</h4>
                    </div>
                    <div class="contact-item-right">
                        <ul class="contact-item-list">
                            <li>{{ $address }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <form action="{{ route('contact.store2') }}" method="POST">
                    @csrf
                    <ul class="form-cover">
                        <li class="inp-name">
                            <label for="name">Name * (required)</label>
                            <input id="name" type="text" name="name" required>
                        </li>
                        <li class="inp-email">
                            <label for="email">E-mail * (required)</label>
                            <input id="email" type="email" name="email" >
                        </li>
                        <li class="inp-name">
                            <label for="number">Mobile Number * (required)</label>
                            <input id="number" type="text" name="number" required>
                        </li>
                        <li class="inp-text">
                            <label for="comments">Message * (required)</label>
                            <textarea id="comments" name="message" required></textarea>
                        </li>
                    </ul>
                    <div class="checkbox-wrap">
                        <div class="checkbox-cover">
                            <input type="checkbox">
                            <p>By using this form you agree with the storage and handling of your data by this website.
                            </p>
                        </div>
                    </div>
                    <div class="btn-form-cover">
                        <button type="submit" class="btn">send Message</button>
                    </div>
                </form>
                <div id="message"></div>
            </div>
        </div>
    </div>
</section>
<!-- ============== S-CONTACTS-END ============== -->

@endsection

@section('scripts')

@endsection
