<!DOCTYPE HTML>
<html>

<head>
    <title>Couponia - Index coupon layout 1</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Koupon HTML5 Template" />
    <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="/css/boostrap.css">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="/css/font_awesome.css">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="/css/ie.css" />
    <![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="/css/mystyles.css">
    <script src="/js/jquery.js"></script>

    @yield('styles')
</head>

<body >


<div class="global-wrap">


    @include('viewport.navbar')

    <!-- TOP AREA -->
    @yield('top-area')
    <!-- END TOP AREA -->

    @include('viewport.search-panel')

    <div class="gap"></div>

    <div class="container">
        @yield('content')
        <div class="gap"></div>
    </div>


    @include('viewport.footer')

    <!-- Scripts queries -->

    <script src="/js/boostrap.min.js"></script>
    <script src="/js/countdown.min.js"></script>
    <script src="/js/flexnav.min.js"></script>
    <script src="/js/magnific.js"></script>
    <script src="/js/tweet.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="/js/fitvids.min.js"></script>
    <script src="/js/mail.min.js"></script>
    <script src="/js/ionrangeslider.js"></script>
    <script src="/js/icheck.js"></script>
    <script src="/js/fotorama.js"></script>
    <script src="/js/card-payment.js"></script>
    <script src="/js/owl-carousel.js"></script>
    <script src="/js/masonry.js"></script>
    <script src="/js/nicescroll.js"></script>
    <script src="/js/pubsub.min.js"></script>

    <script src="/js/app.js"></script>


    <!-- Custom scripts -->
    <script src="/js/custom.js"></script>
</div>
</body>

</html>
