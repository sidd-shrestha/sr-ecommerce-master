<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/custom.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
</head>
<body>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
@include('dashboard.user.layouts.inc.navbar')
<main>
    @include('dashboard.user.layouts.inc.sidebar')
    @yield('content')
</main>
<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>
@include('dashboard.user.layouts.inc.footer')

<script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('user/assets/js/tiny-slider.js')}}"></script>
<script src="{{asset('user/assets/js/glightbox.min.js')}}"></script>
<script src="{{asset('user/assets/js/main.js')}}"></script>
<script src="{{asset('user/assets/js/JQuery.min.js')}}"></script>
<script src="{{asset('user/assets/js/custom.js')}}"></script>
<script src="{{asset('user/assets/js/checkout.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status')){
    <script>
        swal("{{session('status')}}");
    </script>
}
@endif
<script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
@yield('scripts')


</body>
</html>
