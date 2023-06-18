<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=2" />

<meta name="robots" content="index,follow">
<meta name="googlebot" content="index,follow"><!-- Google Specific -->
<meta name="subject" content="Interior Designer in Kenya | Creation Office Fitouts">
<meta name="rating" content="General">

<!-- SEO -->
<title>Interior Designer in Kenya | Creation Office Fitouts</title>
<meta name="description" content="Best Office Fitouts Contractor in Kenya  - We are an Interior fitting contractor in Nairobi - We are professionals in Construction, Refurbishments, Ceiling, Flooring">
<link rel="canonical" href="{{url('/')}}"/>

{{--  --}}
<meta property="og:url" content="{{url('/')}}">
<meta property="og:type" content="website">
<meta property="og:title" content="Interior Designer in Kenya | Creation Office Fitouts">
<meta property="og:image" content="{{url('/')}}/favicon/android-icon-192x192.png">
<meta property="og:description" content="Best Office Fitouts Contractor in Kenya  - We are an Interior fitting contractor in Nairobi - We are professionals in Construction, Refurbishments, Ceiling, Flooring">
<meta property="og:site_name" content="Creation Office Fitouts">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@creationoffice1">
<meta name="twitter:url" content="{{url('/')}}">
<meta name="twitter:title" content="Interior Designer in Kenya | Creation Office Fitouts">
<meta name="twitter:description" content="Best Office Fitouts Contractor in Kenya  - We are an Interior fitting contractor in Nairobi - We are professionals in Construction, Refurbishments, Ceiling, Flooring">
<meta name="twitter:image" content="{{url('/')}}/favicon/android-icon-192x192.png">
{{--  --}}

@include('favicon')
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/animate.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/flaticon.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/font-awesome.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/CerebriSans.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/themify-icons.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/prettyPhoto.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/twentytwenty.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/shortcodes.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/main.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/megamenu.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/responsive.css')}}"/>
<link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('theme/revolution/css/rs6.css')}}">

</head>

<body class="ttm-one-page-site">

    <!--page start-->
    <div class="page ttm-bgcolor-grey">

       @include('front.header')


        @yield('content')


        <!--footer start-->
        @include('front.footer')
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="{{asset('theme/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-migrate-1.4.1.min.js')}}"></script>
    <script src="{{asset('theme/js/tether.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.easing.js')}}"></script>
    <script src="{{asset('theme/js/jquery-waypoints.js')}}"></script>
    <script src="{{asset('theme/js/jquery-validate.js')}}"></script>
    <script src="{{asset('theme/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('theme/js/slick.min.js')}}"></script>
    <script src="{{asset('theme/js/numinate.min.js')}}"></script>
    <script src="{{asset('theme/js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-isotope.js')}}"></script>
    <script src="{{asset('theme/js/jquery.event.move.js')}}"></script>
    <script src="{{asset('theme/js/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('theme/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('theme/revolution/js/slider.js')}}"></script>
    <script src="{{asset('theme/revolution/js/revolution.tools.min.js')}}"></script>
    <script src="{{asset('theme/revolution/js/rs6.min.js')}}"></script>
    <!-- Javascript end-->

    <script>
        $("form").each(function() {
            $(this).find(':input[type="submit"]').prop('disabled', true);
        });
        function correctCaptcha() {
            $("form").each(function() {
                $(this).find(':input[type="submit"]').prop('disabled', false);
            });
        }
    </script>

</body>

</html>
