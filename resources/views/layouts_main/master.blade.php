<!DOCTYPE html>
<html lang="zh_TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ $seoInfo->description ?? '好客沙發提供多款客製化高品質沙發，結合現代設計與極致舒適工藝，免費到府試坐體驗，快速配送，讓您坐享客廳美學。' }}" />
    <meta name="keywords" content="{{ $seoInfo->keywords ?? '好客沙發, 客製化沙發, 現代沙發, 高品質沙發, 客廳家具, 皮沙發, 布沙發, 舒適沙發, 家具設計' }}" />
    <meta property="og:locale" content="zh_TW" />
    <meta name="author" content="紀孟勳 Bryantchi.work@gmail.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seoInfo->og_title ?? '好客沙發｜客製化高品質舒適沙發 - 讓您坐享極致美好' }}" />
    <meta property="og:description" content="{{ $seoInfo->og_discription ?? '好客沙發 ─ 結合美學與舒適，提供多款客製化沙發選擇，免費試坐與快速配送，打造專屬您的客廳風格。' }}" />
    <meta property="og:image" content="{{ asset('assets/images/fimgs/fbimg.jpg') }}" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:site_name" content="{{ $seoInfo->og_site_name ?? '好客沙發' }}" />
    <title>{{ $seoInfo->title ?? '好客沙發｜客製化高品質舒適沙發 - 讓您坐享極致美好' }}</title>
    <meta name="title" content="{{ $seoInfo->title ?? '好客沙發｜客製化高品質舒適沙發 - 讓您坐享極致美好' }}" />
    <link rel="canonical" href="{{ url()->full() }}" />
    <meta name="google-site-verification" content="E8BIgeQg6EnvGIuGKq1PjNwcBzV00riw4Y-MJH8M4xo" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}?v={{time()}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}?v={{time()}}">
</head>

<body>


    @include('layouts_main.navbar')
    @include('layouts_main.hero')
    @yield('content')
    @include('layouts_main.footer')


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <div class="hFixFabFlex">
        <a href="javascript:void(0)">
            <div class="hFab scroll-to-top">
            <i class="fas fa-angle-up"></i>
            </div>
        </a>
        <a href="https://lin.ee/TIk7DIc" target="_blank">
            <div class="hFab hFabLine">
                <i class="fab fa-line"></i>
            </div>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100087392558874&mibextid=LQQJ4d" target="_blank">
            <div class="hFab hFabFacebook">
                <i class="fab fa-facebook-f"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/hulk_sofa/reels/" target="_blank">
            <div class="hFab hFabIg">
                <i class="fab fa-instagram"></i>
            </div>
        </a>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/aos.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
    <!-- <script src="js/google-map.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js "></script>


    <script src="{{asset('assets/js/main.js')}}?v={{time()}}"></script>
    <script src="{{asset('assets/js/custom.js')}}?v={{time()}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".heroSwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            centeredSlides: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
        });
    </script>

    @stack('page-scripts')

</body>

</html>
