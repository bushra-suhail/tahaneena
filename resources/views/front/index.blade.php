@extends('front.master')
@section('title','Homepage |'.env('APP_NAME'))
@section('content')


        <!-- Header Off Canvas Menu Start -->
        <div class="offcanvas-menu">
            <div class="offcanvas-wrapper">
                <div class="close-btn">
                    <a href="javascript:;" class="menu-close"><i class="ion-ios-close-outline"></i></a>
                </div>
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('webasset/assets/images/logo-2.png') }}" alt="Logo"></a>
                </div>
                <div class="primary-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#">About</a>


                        </li>
                        <li>
                            <a href="#">Project</a>

                            <ul class="sub-menu">
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>

                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Off Canvas Menu End-->

        <!-- overly Start -->
        <div class="overlay"></div>
        <!-- overly End -->

        <!-- Slider Start -->
        <div class="section slider-section">
            <div class="slider-active swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide single-slider d-flex align-items-center animation-style-01" style="background-image: url({{ asset('webasset/assets/images/slider/slider-1.jpg') }});">

                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>

                        <div class="container">
                            <!-- Slider Content Start -->
                            <div class="slider-content">
                                <!-- <h4 class="sub-title">Latest project</h4> -->
                                <h1 class="main-title">Greeting Card Website</h1>
                                <p> web application to give visitors , the capability of design and issue greeting cards.<br> Visitors can customize the structure and the format of the greeting cards <br> base on their preferences.</p>
                                <a class="slider-btn" href="#">See project</a>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>

                    <div class="swiper-slide single-slider d-flex align-items-center animation-style-01" style="background-image: url({{ asset('webasset/assets/images/slider/slider-1.jpg') }});">

                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>

                        <div class="container">
                            <!-- Slider Content Start -->
                            <div class="slider-content">
                                <h4 class="sub-title">Latest project</h4>
                                <h1 class="main-title">Bowmore Wine <br> Rebranding</h1>
                                <p>Combine with ideas of owner, Dustin Mahone. <br> Arquito’s team completed a super villa with many powerful features, <br> help owner really enjoy his life beside the beach</p>
                                <a class="slider-btn" href="#">See project</a>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>

                    <div class="swiper-slide single-slider d-flex align-items-center animation-style-01" style="background-image: url({{ asset('webasset/assets/images/slider/slider-1.jpg') }});">

                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>

                        <div class="container">
                            <!-- Slider Content Start -->
                            <div class="slider-content">
                                <h4 class="sub-title">Latest project</h4>
                                <h1 class="main-title">Bowmore Wine <br> Rebranding</h1>
                                <p>Combine with ideas of owner, Dustin Mahone. <br> Arquito’s team completed a super villa with many powerful features, <br> help owner really enjoy his life beside the beach</p>
                                <a class="slider-btn" href="#">See project</a>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"><i class="ion-ios-arrow-thin-right"></i></div>
                <div class="swiper-button-prev"><i class="ion-ios-arrow-thin-left"></i></div>
            </div>

            <!-- Social Start -->
            <ul class="social">
                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="#"><i class="fab fa-behance"></i></a></li>
            </ul>
            <!-- Social End -->

        </div>
        <!-- Slider End -->

        <!-- Client & About Start -->
        <div class="section bg-dark overflow-hidden">

            <!-- Client Start -->
            <div class="client-section">
                <div class="container">

                </div>
            </div>


        <!-- Why Choose & Counter Start -->
        <div class="section section-padding-02">
            <div class="container">



            </div>
        </div>
        <!-- Why Choose & Counter End -->

        <!-- Work Start -->
        <div class="section section-padding-02 mt-n10">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-3 col-lg-4">

                        <!-- Section Title Start -->
                        <div class="section-title mt-5">
                            <h2 class="title">Services</h2>
                        </div>
                        <!-- Section Title End -->

                    </div>

                    <div class="col-xl-9 col-lg-8">

                        <!-- Work Tab Menu Start -->
                        <div class="work-tabs-menu mt-5">

                        </div>
                        <!-- Work Tab Menu End -->

                    </div>
                </div>
            </div>

            <!-- Work tabs Content Start -->
            <div class="work-tab-content">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1">

                        <!-- Tab Carousel Start  -->
                        <div class="tab-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Project Slide Start -->
                                        <div class="single-project-slide">

                                            <!-- Thumb Start -->
                                            <div class="thumb">
                                                <a href="project-details.html" class="image">
                                                    <img class="fit-image" src="{{ asset('webasset/assets/images/work/work-1.jpg') }}" alt="Product" />
                                                </a>
                                            </div>
                                            <!-- Thumb End -->

                                            <!-- Content Start -->
                                            <div class="content">
                                                <h4 class="subtitle">Greeting Card</h4>
                                                <h3 class="title"><a href="project-details.html">Happy Birthday</a></h3>
                                            </div>
                                            <!-- Content End -->

                                        </div>
                                        <!-- Single Project Slide End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Project Slide Start -->
                                        <div class="single-project-slide">

                                            <!-- Thumb Start -->
                                            <div class="thumb">
                                                <a href="project-details.html" class="image">
                                                    <img class="fit-image" src="{{ asset('webasset/assets/images/work/work-2.jpg') }}" alt="Product" />
                                                </a>
                                            </div>
                                            <!-- Thumb End -->

                                            <!-- Content Start -->
                                            <div class="content">
                                                <h4 class="subtitle">Greeting Card</h4>
                                                <h3 class="title"><a href="project-details.html">Weeding</a></h3>
                                            </div>
                                            <!-- Content End -->

                                        </div>
                                        <!-- Single Project Slide End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Project Slide Start -->
                                        <div class="single-project-slide">

                                            <!-- Thumb Start -->
                                            <div class="thumb">
                                                <a href="project-details.html" class="image">
                                                    <img class="fit-image" src="{{ asset('webasset/assets/images/work/work-3.jpg') }}" alt="Product" />
                                                </a>
                                            </div>
                                            <!-- Thumb End -->

                                            <!-- Content Start -->
                                            <div class="content">
                                                <h4 class="subtitle">Greeting Card</h4>
                                                <h3 class="title"><a href="project-details.html">Ramadan </a></h3>
                                            </div>
                                            <!-- Content End -->

                                        </div>
                                        <!-- Single Project Slide End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Project Slide Start -->
                                        <div class="single-project-slide">

                                            <!-- Thumb Start -->
                                            <div class="thumb">
                                                <a href="project-details.html" class="image">
                                                    <img class="fit-image" src="{{ asset('webasset/assets/images/work/work-4.jpg') }}" alt="Product" />
                                                </a>
                                            </div>
                                            <!-- Thumb End -->

                                            <!-- Content Start -->
                                            <div class="content">
                                                <h4 class="subtitle">Greeting Card</h4>
                                                <h3 class="title"><a href="project-details.html">Mother's Day</a></h3>
                                            </div>
                                            <!-- Content End -->

                                        </div>
                                        <!-- Single Project Slide End -->
                                    </div>
                                </div>

<!-- Project Start -->
<div class="section">
    <div class="container">

        <!-- Page Banner Title Start -->
        <div class="page-banner-title">
            <h2 class="title"> Latest Projects</h2>
        </div>
        <!-- Page Banner Title End -->

        <!-- Filter  Section Start -->
        <div class="filter-menu">
            <ul class="menu-list">
                <li class="active" data-filter="*">all</li>
                <li data-filter=".web-design">web design</li>
                <li data-filter=".branding">branding</li>
                <li data-filter=".mobile-app">mobile app</li>
                <li data-filter=".motion">motion</li>
            </ul>
        </div>
        <!-- Filter  Section End -->

    </div>

    <div class="custom-container container-fluid">

        <!-- Project Section Start -->
        <div class="project-section mt-n4">
            <div class="row grid">

                <div class="col-xl-4 col-md-6 mobile-app">
                    <!-- Single Project Start -->
                    <div class="single-project wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                        <div class="project-images">
                            <a href="project-details.html"><img src="{{ asset('webasset/assets/images/project/project-1.jpg') }}" alt="Project"></a>
                        </div>
                        <div class="project-content">
                            <h4 class="title"><a href="project-details.html">Figma Free UI Kit</a></h4>
                            <p class="category">Web/App, Branding</p>
                        </div>
                    </div>
                    <!-- Single Project End -->
                </div>
                <div class="col-xl-4 col-md-6 web-design mobile-app">
                    <!-- Single Project Start -->
                    <div class="single-project wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                        <div class="project-images">
                            <a href="project-details.html"><img src="{{ asset('webasset/assets/images/project/project-2.jpg') }}" alt="Project"></a>
                        </div>
                        <div class="project-content">
                            <h4 class="title"><a href="project-details.html">AZA Social App</a></h4>
                            <p class="category">Web/App</p>
                        </div>
                    </div>
                    <!-- Single Project End -->
                </div>
                <div class="col-xl-4 col-md-6 branding motion">
                    <!-- Single Project Start -->
                    <div class="single-project wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                        <div class="project-images">
                            <a href="project-details.html"><img src="{{ asset('webasset/assets/images/project/project-3.jpg') }}" alt="Project"></a>
                        </div>
                        <div class="project-content">
                            <h4 class="title"><a href="project-details.html">Allen Carter Business Card</a></h4>
                            <p class="category">Branding</p>
                        </div>
                    </div>
                    <!-- Single Project End -->
                </div>


               @stop
