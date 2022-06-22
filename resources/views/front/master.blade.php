<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title',env('APP_NAME'))</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('webasset/assets/images/favicon.png') }}">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('webasset/assets/css/plugins/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('webasset/assets/css/plugins/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('webasset/assets/css/plugins/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('webasset/assets/css/plugins/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('webasset/assets/css/plugins/simple-line-icons.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('webasset/assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('webasset/assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('webasset/assets/css/plugins/odometer.min.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('webasset/assets/css/style.css')}}">



</head>


<body>

    <div class="main-wrapper">

        <!-- Header Start  -->
        <div class="header fixed-top">
            <div class="container custom-container">
                <div class="header-wrapper">

                    <!-- header Logo Start -->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('webasset/assets/images/logo.png') }}" alt="" title=""></a></div>
                    </div>
                    <!-- header Logo end -->

                    <!-- header Menu Toggler Start -->
                    <div class="header-menu-toggler">
                        <a href="javascript:;" class="menu-toggler"><i class="las la-bars"></i></a>
                    </div>
                    <!-- header Menu Toggler end -->

                </div>
            </div>
        </div>
        <!-- Header End -->

        @yield('content')




        </div>

    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{asset('webasset/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('webasset/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('webasset/assets/js/plugins/popper.min.js')}}"></script>
    <script src="{{asset('webasset/assets/js/plugins/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('webasset/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('webasset/assets/js/plugins/appear.js')}}"></script>
    <script src="{{asset('webasset/assets/js/plugins/validate.js')}}"></script>
    <script src="{{asset('webasset/assets/js/plugins/odometer.min.js')}}"></script>
    <script src="{{asset('webasset/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('webasset/assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('webasset/assets/js/plugins/wow.js')}}"></script>
    <script src="{{asset('webasset/assets/js/plugins/ajax-contact.js')}}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="{{asset('webasset/assets/js/plugins.min.js')}}"></script> -->


    <!-- Main JS -->
    <script src="{{asset('webasset/assets/js/main.js')}}"></script>

</body>

</html>
