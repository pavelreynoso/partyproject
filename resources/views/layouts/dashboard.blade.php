<!DOCTYPE html>
<html lang=en>

<head>
    <!--Meta-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','Feval') }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP">
    <meta name="Description" content="Feval main page">

    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--Meta-->
    <title>{{ config('app.name','Feval') }}</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!-- Owl Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('../vendors/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../vendors/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../vendors/OwlCarousel2-2.2.1/owl.theme.default.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <link href="{{asset('../vendors/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('dashboard.NavBars.navbar')
    <br>
    @yield('content')
    @include('dashboard.NavBars.footer')
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>

