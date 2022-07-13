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
    @yield('css')



</head>


<body>

    <div class="main-wrapper">

        <!-- Header Start  -->
        <div class="header fixed-top">
            <div class="container custom-container">
                <div class="header-wrapper">

                    <!-- header Logo Start -->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('website.index') }}"><img src="{{ asset('webasset/assets/images/logo.png') }}" alt="" title=""></a></div>
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
        <!-- Header Off Canvas Menu Start -->
        <div class="offcanvas-menu">
            <div class="offcanvas-wrapper">
                <div class="close-btn">
                    <a href="javascript:;" class="menu-close"><i class="ion-ios-close-outline"></i></a>
                </div>
                <div class="logo">
                    <a href="{{ route('website.index') }}"><img src="{{ asset('webasset/assets/images/logo-2.png') }}" alt="Logo"></a>
                </div>
                <div class="primary-menu">
                    <ul>
                        <li><a href="{{ route('website.index') }}">Home</a></li>
                        <li>
                            <a href="{{ route('login') }}">Login</a>


                        </li>
                        <li>
                            <a href="{{ route('register') }}">Register</a>


                        </li>

                </div>
            </div>
        </div>
        <!-- Header Off Canvas Menu End-->
<!-- overly Start -->
<div class="overlay"></div>
<!-- overly End -->
{{-- @include('partials.header') --}}
        @yield('content')

<div>
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-twitter"></i
                ></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-google"></i
                ></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-linkedin-in"></i
                ></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
              <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2022 Copyright:
              <a class="text-white" href="{{ route('website.index') }}">TAHANEENA.com</a>
            </div>
            <!-- Copyright -->
          </footer>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#button").click(function(){
                domtoimage.toBlob(document.getElementById('div'))
                .then(function(blob){
                    window.saveAs(blob,"output.png")
                })
            })
        })
    </script>
    @yield('script')

</body>

</html>
