<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700" rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/font-lotusicon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/helper.css') }}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('layout.nav')
@yield('content')

<!-- LOAD JQUERY -->
<script data-cfasync="false" src="{{asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script type="text/javascript" src="{{asset('js/lib/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/bootstrap-select.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAb2lfsiytHD7rMhBaAvJz2CKhk05uiIuE"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
<script type="text/javascript" src="{{ asset('js/lib/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery.appear.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery.countTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery.parallax-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/SmoothScroll.js') }}"></script>
<!-- validate -->
<script type="text/javascript" src="{{ asset('js/lib/jquery.form.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/jquery.validate.min.js') }}"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>


    
</body>
</html>


