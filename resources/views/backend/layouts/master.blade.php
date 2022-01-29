@php
    $logo = getSiteLogo();
@endphp

<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ONE MORE REP GYM & FITNESS STUDIO in Bhiwandi, Mumbai is one of the leading businesses in the Fitness Centres. Also known for Gyms, Zumba Classes, Fitness Centres, Women Gyms, Personal Gym Trainers, Crossfit Gyms, Personal Gym Trainers At Home, Men Gyms and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of ONE MORE REP GYM & FITNESS STUDIO, Bhiwandi, Mumbai." name="description" />

    @yield('css')
    @include('backend.layouts.css')

</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('backend.layouts.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.layouts.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')

            @include('backend.layouts.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @include('backend.layouts.scripts')
    @yield('scripts')

</body>

</html>
