<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/styles/assets/images/logo-color.png') }}">
    
    
    @yield('seo')


    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/plugins/fontawesome-6.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/vendor/animate.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/vendor/bootstrap.min.css') }}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('public/styles/assets/css/style.css') }}">
    @yield('style')
</head>

<body class="index-two">


<!-- header style two -->
@include('blocks.navbar')
<!-- header style two End -->


@yield('content')

<!-- Footer style two -->
<!-- rts footer two area start -->
@include('blocks.footer')
<!-- rts footer area one end -->
<!-- Footer style two End -->

<!-- header style two -->



<!-- pre loader start -->
{{--<div id="elevate-load">--}}
{{--    <div class="loader-wrapper">--}}
{{--        <div class="lds-ellipsis">--}}
{{--            <div></div>--}}
{{--            <div></div>--}}
{{--            <div></div>--}}
{{--            <div></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- pre loader end -->



<!-- jquery js -->
<script src="{{ asset('public/styles/assets/js/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/vendor/jqueryui.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/plugins/counter-up.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/plugins/swiper.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/plugins/metismenu.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/vendor/waypoint.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/vendor/waw.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/plugins/gsap.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/plugins/scrolltigger.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/vendor/split-text.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/vendor/contact.form.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/vendor/split-type.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/plugins/jquery-timepicker.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/styles/assets/js/main.js') }}"></script>
@yield('script')
<!-- header style two End -->
</body>

</html>
