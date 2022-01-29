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

<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('css')
    @include('frontend.layouts.css')

</head>

<body id="home">
	<!--================ PRELOADER ================-->
	<div class="preloader-cover">
		<div id="cube-loader">
			<div class="caption">
				<div class="cube-loader">
					<div class="cube loader-1"></div>
					<div class="cube loader-2"></div>
					<div class="cube loader-4"></div>
					<div class="cube loader-3"></div>
				</div>
			</div>
		</div>
	</div>
	<!--============== PRELOADER END ==============-->

	<!-- ================= HEADER ================= -->
    @include('frontend.layouts.header')
	<!-- =============== HEADER END =============== -->

	@yield('content')

	<!-- ================== FOOTER ================== -->
	@include('frontend.layouts.footer')
	<!-- ================ FOOTER END ================ -->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->

    @include('frontend.layouts.scripts')
    @yield('scripts')
</body>

</html>
