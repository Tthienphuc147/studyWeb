<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="public/img/favicon.ico" rel="shortcut icon"/>

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('public/css/themify-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }} ">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('public/css/loginStyle/loginStyle.css') }} ">
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">

</head>
<body>
@include('block.header')


@yield('content')

@include('block.footer')

<script type='text/javascript' src='{{ asset('public/js/jquery-3.2.1.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('public/js/owl.carousel.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('public/js/jquery.countdown.js') }}'></script>
<script type='text/javascript' src='{{ asset('public/js/masonry.pkgd.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('public/js/magnific-popup.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('public/js/main.js') }}'></script>
<script type='text/javascript' src='{{ asset('public/js/countdown.js') }}'></script>




</body>
</html>
