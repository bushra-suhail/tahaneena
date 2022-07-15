@extends('front.master')
@section('title', 'Homepage |' . env('APP_NAME'))
@section('content')




    <!-- overly Start -->
    <div class="overlay"></div>
    <!-- overly End -->

    <!-- Slider Start -->
    <div class="section slider-section">
        <div class="slider-active swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide single-slider d-flex align-items-center animation-style-01"
                    style="background-image: url({{ asset('webasset/assets/images/slider/slider-1.jpg') }});">

                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>

                    <div class="container">
                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <!-- <h4 class="sub-title">Latest project</h4> -->
                            <h1 class="main-title">Greeting Card Website</h1>
                            <p> web application to give visitors , the capability of design and issue greeting cards.<br>
                                Visitors can customize the structure and the format of the greeting cards <br> base on their
                                preferences.</p>
                            <a class="slider-btn" href="#">See project</a>
                        </div>
                        <!-- Slider Content End -->
                    </div>
                </div>

                <div class="swiper-slide single-slider d-flex align-items-center animation-style-01"
                    style="background-image: url({{ asset('webasset/assets/images/slider/slider-2.jpg') }});">

                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>

                    <div class="container">

                        <!-- Slider Content End -->
                    </div>
                </div>

                <div class="swiper-slide single-slider d-flex align-items-center animation-style-01"
                    style="background-image: url({{ asset('webasset/assets/images/slider/slider-3.jpg') }});">

                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>

                    <div class="container">

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
                                    @foreach ($categories as $category)
                                        <div class="swiper-slide">
                                            <!-- Single Project Slide Start -->
                                            <div class="single-project-slide">

                                                <!-- Thumb Start -->
                                                <div class="thumb">
                                                    <a href="#" class="image">
                                                        <img class="fit-image"src="{{ asset('uploads/' . $category->image) }}"
                                                            alt="Product" />
                                                    </a>

                                                </div>
                                                <!-- Thumb End -->

                                                <!-- Content Start -->
                                                <div class="content">
                                                    <h4 class="subtitle">Greeting Card</h4>
                                                    <h3 class="title"><a
                                                            href="project-details.html">{{ $category->name }}</a></h3>
                                                </div>
                                                <!-- Content End -->

                                            </div>
                                            <!-- Single Project Slide End -->
                                        </div>
                                    @endforeach
                                    <div class="swiper-slide">
                                        <!-- Single Project Slide Start -->
                                        <div class="single-project-slide">

                                            <!-- Thumb Start -->
                                            <div class="thumb">
                                                <a href="project-details.html" class="image">
                                                    <img class="fit-image"
                                                        src="{{ asset('webasset/assets/images/work/work-1.jpg') }}"
                                                        alt="Product" />
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

                                </div>

                                <!-- Project Start -->
                                <div class="section">
                                    <div class="container">

                                        <!-- Page Banner Title Start -->
                                        <div class="page-banner-title">
                                            <h2 class="title">CARDS</h2>
                                        </div>
                                        <!-- Page Banner Title End -->

                                        <!-- Filter  Section Start -->
                                        {{-- <div class="filter-menu">
            <ul class="menu-list">
                <li class="active" data-filter="*">all</li>
                <li data-filter=".Ramadan">Ramadan</li>
                <li data-filter=".branding">Wedding</li>
                <li data-filter=".Birth-Day">Birth Day</li>
                <li data-filter=".Mother-Day">Mother Day</li>
            </ul>
        </div> --}}
                                        <!-- Filter  Section End -->

                                    </div>
                                    <div class="container-fluid d-flex flex-row overflow-auto">
                                        @foreach ($cards as $card)
                                            <div class=" Birth-Day mx-2">
                                                <!-- Single Project Start -->
                                                <div class="single-project rounded wow zoomIn" data-wow-delay="0.3s"
                                                    data-wow-duration="0.5s">
                                                    <div>
                                                        <div class="project-images">
                                                            <a href="{{ route('card.details', $card->id) }}">
                                                                <img style="object-fit: contain; width:100%;height:200px;border-top-right-raduis:5px; border-top-right-raduis:5px"
                                                                    src="{{ asset('uploads/' . $card->image) }}"
                                                                    alt="Project"></a>
                                                        </div>
                                                        <div class="project-content">
                                                            <h4 class="title"><a
                                                                    href="{{ route('card.details', $card->id) }}">
                                                                    {{ $card->title }}</a></h4>
{{-- <form method="GET" action="">

</form> --}}



                                                        </div>
                                                    </div>

                                                </div>


                                            </div>




                                        @endforeach

                                    </div>
                                    {{ $cards->links() }}
                                    <div>

                                        <div class="custom-container container-fluid">
                                            <!-- Project Section Start -->
