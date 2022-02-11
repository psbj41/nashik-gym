@php
    $logo = getSiteLogo();
@endphp

<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />

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
