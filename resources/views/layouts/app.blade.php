<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ url('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="body">
    @include('layouts.navigation')
    <!-- Page Content -->
    @yield('content')
    <!-- Footer Start -->
    <footer class="footer text-center text-sm-start">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script> {{ config('app.name') }} <span
            class="text-muted d-none d-sm-inline-block float-end">Crafted with <i class="mdi mdi-heart text-danger"></i>
            by Narendra Khandwe</span>
    </footer>
    <!-- end Footer -->
    <!--end footer-->

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="{{ url('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('backend/assets/js/pages/analytics-index.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ url('backend/assets/js/app.js') }}"></script>
</body>

</html>
