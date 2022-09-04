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
<script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('status'))
<script>
    swal("{{session('status')}}")
</script>
@endif
@yield('scripts')

<script type="text/javascript">
    //========= Hero Slider
    tns({
        container: '.hero-slider',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
    });

    //======== Brand Slider
    tns({
        container: '.brands-logo-carousel',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 3,
            },
            768: {
                items: 5,
            },
            992: {
                items: 6,
            }
        }
    });
</script>

</body>
</html>
