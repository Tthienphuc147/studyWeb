<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="public/img/favicon.ico" rel="shortcut icon"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="{{ asset('public/css/mmenu.css') }}" rel="stylesheet" type="text/css" />
        <link href={{ asset('public/css/mmenu.positioning.css') }} rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css" />
   
</head>
<body>
@include('block.header')

@yield('content')

@include('block.footer')


   <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="{{ asset('public/js/jquery-1.12.4.min.js') }}"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="{{ asset('public/js/jquery-ui.min.js') }}"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="{{ asset('public/js/jquery.easing.1.3.js') }}"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="{{ asset('public/js/mmenu.min.js') }}"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="{{ asset('public/js/harvey.min.js') }}"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="{{ asset('public/js/waypoints.min.js') }}"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="{{ asset('public/js/facts.counter.min.js') }}"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="{{ asset('public/js/mixitup.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="{{ asset('public/js/accordion.min.js') }}"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="{{ asset('public/js/responsive.tabs.min.js') }}"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="{{ asset('public/js/responsive.table.min.js') }}"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="{{ asset('public/js/masonry.min.js') }}"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="{{ asset('public/js/carousel.swipe.min.js') }}"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="{{ asset('public/js/bxslider.min.js') }}"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="{{ asset('public/js/main.js') }}"></script>



</body>
</html>
