@extends('frontend.layouts.app')
@section('content')
<div class="site-wrapper-reveal section-space--pt__120">
    <!--============ Service Hero Start ============-->
    <div class="service-hero-wrapper service-hero-space">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @php
                        $i=0;
                @endphp
                @foreach(App\Models\Hero::getAllHero() as $hero)
                    @php
                        $i++;
                    @endphp
                    @if($i==1)
                        <div class="carousel-item active">
                            <img src="{{asset(''.$hero->img)}}" alt="{{$hero->alt}}" class="w-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="text-white">{{$hero->title}}</h3>
                                <h5 class="text-white">{{$hero->caption}}</h5>
                            </div>
                        </div><!-- .carousel-item end -->
                    @else
                        <div class="carousel-item">
                            <img src="{{asset(''.$hero->img)}}" alt="{{$hero->alt}}" class="w-100">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="text-white">{{$hero->title}}</h3>
                                <h5 class="text-white">{{$hero->caption}}</h5>
                            </div>
                        </div><!-- .carousel-item end -->
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--============ Service Hero End ============-->
    <!--===========  feature-images-wrapper  Start =============-->
    <div class="feature-images-wrapper position-relative">
        <div class="swiper-container service-slider__container">
            <div class="swiper-wrapper service-slider__wrapper feature-images__three">
                @foreach (App\Models\Product::getAllProduct() as $product)
                <div class="swiper-slide">
                    <!-- ht-box-icon Start -->
                    <a href="{{route('product.show', $product->id)}}" class="ht-box-images style-03 wow move-up">
                        <div class="image-box-wrap">
                            <div class="box-image">
                                <img class="img-fluid" src="{{asset(''.$product->image)}}" alt="{{$product->alt}}">
                            </div>
                            <div class="content">
                                <h6 class="heading">{{$product->name}}</h6>
                                <div class="text">{{Str::of(strip_tags($product->description))->limit(80)}}</div>
                            </div>
                        </div>
                    </a>
                    <!-- ht-box-icon End -->
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-service section-space--mt_30"></div>
        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->




    <!--===========  Our Company History Start =============-->

    <div class="our-company-history pt-5">
        <div class="container-fluid">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-custom-col">
                        <div class="section-title-wrap">
                            <h6 class="section-sub-title mb-20">Our company</h6>
                            <h3 class="heading">{{App\Models\AboutUs::getAboutUs()->title}}</h3>

                            <p class="text mt-30">{{Str::of(strip_tags(App\Models\AboutUs::getAboutUs()->description))->limit(300) }}</p>

                            <div class="inner-button-box section-space--mt_60">
                                <a href="" class="ht-btn ht-btn-md">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rv-video-section">

                        {{-- <div class="ht-banner-01 ">
                            <img class="img-fluid border-radus-5 animation_images one wow fadeInDown" src="{{asset(''.App\Models\AboutUs::getAboutUs()->banner1)}}" alt="">
                        </div>

                        <div class="ht-banner-02">
                            <img class="img-fluid border-radus-5 animation_images two wow fadeInDown" src="{{asset(''.App\Models\AboutUs::getAboutUs()->banner2)}}" alt="">
                        </div> --}}

                        <div class="main-video-box video-popup">
                            <a href="{{App\Models\AboutUs::getAboutUs()->video_link}}" class="video-link  mt-30">
                                <div class="single-popup-wrap">
                                    <img class="img-fluid border-radus-5" src="{{asset(''.App\Models\AboutUs::getAboutUs()->video_thumbnail)}}" alt="">
                                    <div class="ht-popup-video video-button">
                                        <div class="video-mark">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                        </div>
                                        <div class="video-button__two">
                                            <div class="video-play">
                                                <span class="video-play-icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========  Our Company History Start  End =============-->

    <!--===========  feature-icon-wrapper  Start =============-->
    <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20">Industries we Serve</h6>
                        <h3 class="heading">Services We Deliver<br> we provide <span class="text-color-primary"> truly prominent IT solutions.</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="feature-list__two">
                        <div class="row">
                            @foreach (App\Models\Service::getAllService() as $service)
                                <div class="col-lg-4 col-md-6 wow move-up" style="padding-left:0px; padding-right:0px;">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <div class="icon-box-wrap">



                                            <div class="card">
                                                <img class="card-img-top" src="{{asset(''.$service->image)}}" alt="Card image cap">
                                                <div class="svg-icon d-none" id="svg-3" data-svg-icon="{{asset('/frontend/assets/images/svg/linea-basic-alarm.svg')}}"></div>
                                                <div class="card-body">
                                                    <h6 class="heading mb-2">{{$service->name}}</h6>
                                                    <p class="card-text">{{Str::of(strip_tags($service->description))->limit(120)}}</p>
                                                    <a href="" class="btn btn-xs btn-primary">Know More</a>
                                                </div>
                                                </div>


                                            {{-- <div class="image row">
                                                <div class="svg-icon d-none" id="svg-3" data-svg-icon="{{asset('/frontend/assets/images/svg/linea-basic-alarm.svg')}}"></div>
                                                <img src="{{asset(''.$service->image)}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="content row">
                                                <h5 class="heading">{{$service->name}}</h5>
                                                <div class="text">
                                                    {{Str::of(strip_tags($service->description))->limit(100)}}
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="feature-list-button-box mt-30 text-center">
                        <a href="#" class="ht-btn ht-btn-md">Talk to a consultant</a>
                        <a href="" class="ht-btn ht-btn-md ht-btn--outline">Contact us now </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-icon-wrapper  End =============-->



    <!--====================  gradation process area ====================-->
    <div class="gradation-process-area section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="gradation-title-wrapper section-space--mb_60">
                        <div class="gradation-title-wrap ">
                            <h6 class="section-sub-title text-black mb-20">How we works</h6>
                            <h4 class="heading">How it helps <span class="text-color-primary">your <br> business succeed</span></h4>
                        </div>


                        <div class="gradation-sub-heading">
                            <h3 class="heading"><mark>04</mark> Steps</h3>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ht-gradation style-01">
                        <!-- Single item gradation Start -->
                        <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.1s">
                            <div class="line"></div>
                            <div class="circle-wrap">
                                <div class="mask">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                    <div class="wave-pulse wave-pulse-3"></div>
                                </div>

                                <h6 class="circle">1</h6>
                            </div>

                            <div class="content-wrap">

                                <h6 class="heading">01. Discussion</h6>

                                <div class="text">We meet customers in set place to discuss the details about needs and demands before proposing a plan.</div>

                                <a class="gradation-btn" href="#">
                                    <span class="button-text" data-text="Look more">
                                Look more </span>
                                    <span class="button-icon far fa-long-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- Single item gradation End -->

                        <!-- Single item gradation Start -->
                        <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.15s">
                            <div class="line"></div>
                            <div class="circle-wrap">
                                <div class="mask">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                    <div class="wave-pulse wave-pulse-3"></div>
                                </div>

                                <h6 class="circle">2</h6>
                            </div>

                            <div class="content-wrap">

                                <h6 class="heading">02. Concepts &amp; Initatives</h6>

                                <div class="text">Our experts come up with all kinds of ideas and initiatives for delivering the best solutions for IT services chosen.</div>

                                <a class="gradation-btn" href="#">
                                    <span class="button-text" data-text="Look more">
                                Look more </span>
                                    <span class="button-icon far fa-long-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- Single item gradation End -->

                        <!-- Single item gradation Start -->
                        <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.20s">
                            <div class="line"></div>
                            <div class="circle-wrap">
                                <div class="mask">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                    <div class="wave-pulse wave-pulse-3"></div>
                                </div>

                                <h6 class="circle">3</h6>
                            </div>

                            <div class="content-wrap">

                                <h6 class="heading">03. Testing &amp; Trying</h6>

                                <div class="text">After agreeing on the ideas and plans, we will conduct as scheduled and give comments on the results &amp; adaptations.</div>

                                <a class="gradation-btn" href="#">
                                    <span class="button-text" data-text="Look more">
                                Look more </span>
                                    <span class="button-icon far fa-long-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- Single item gradation End -->

                        <!-- Single item gradation Start -->
                        <div class="item item-1 animate wow fadeInRight" data-wow-delay="0.25s">
                            <div class="line"></div>
                            <div class="circle-wrap">
                                <div class="mask">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                    <div class="wave-pulse wave-pulse-3"></div>
                                </div>

                                <h6 class="circle">4</h6>
                            </div>

                            <div class="content-wrap">

                                <h6 class="heading">04. Execute &amp; install</h6>

                                <div class="text">Once the final plan is approved, everything will be conducted according to the agreed contract.</div>

                                <a class="gradation-btn" href="#">
                                    <span class="button-text" data-text="Look more">
                                Look more </span>
                                    <span class="button-icon far fa-long-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- Single item gradation End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of gradation process area  ====================-->

    <!--========== Call to Action Area Start ============-->
    <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
                    <div class="row">
                        <div class="col-3 border-right">
                            <i class="fas fa-building h1 text-white"></i>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white"><span class="counter">{{App\Models\Progress::getProgress()->experience}}</span>+</h3>
                            <p class="text-white">YEARS OF EXPERIENCE</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
                    <div class="row">
                        <div class="col-3 border-right">
                            <i class="fas fa-briefcase h1 text-white"></i>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white"><span class="counter">{{App\Models\Progress::getProgress()->project}}</span>+</h3>
                            <p class="text-white">PROJECTS COMPLETED</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
                    <div class="row">
                        <div class="col-3 border-right">
                            <i class="fab fa-black-tie h1 text-white"></i>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white"><span class="counter">{{App\Models\Progress::getProgress()->professionals}}</span>+</h3>
                            <p class="text-white">EXPERT PROFESSIONALS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-6">
                    <div class="row">
                        <div class="col-3 border-right">
                            <i class="far fa-smile h1 text-white"></i>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white"><span class="counter">{{App\Models\Progress::getProgress()->customer}}</span>+</h3>
                            <p class="text-white">HAPPY CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== Call to Action Area End ============-->

    <!--=========== Service Projects Wrapper Start =============-->
    {{-- <div class="service-projects-wrapper section-space--pt_100 mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20">Case studies</h6>
                        <h3 class="heading">Proud projects that <span class="text-color-primary">make us stand out</span></h3>
                    </div>
                </div>
            </div>
            <div class="swiper-container service-slider__project-active">
                <div class="swiper-wrapper service-slider__project">
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="slide-content col-lg-6 col-xl-5 order-2 order-lg-1">
                                <div class="service-project-slide-info">
                                    <h4 class="heading font-weight--reguler mb-10">Aqua Technology Case Studies</h4>
                                    <p class="sub-text text-color-primary">Cyber Security</p>
                                    <div class="text">ARM Holdings is the world's leading semiconductor Intellectual Property (IP) supplier. A semiconductor is the electronic controller at the heart of many devices that we use every day.</div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                                <div class="slide-image">
                                    <div class="image-wrap">
                                        <div class="image">
                                            <img class="img-fluid" src="{{asset('/frontend/assets/images/features/home-services-case-study-slide-image-01.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="slide-content col-lg-6 col-xl-5 order-2 order-lg-1">
                                <div class="service-project-slide-info">
                                    <h4 class="heading font-weight--reguler mb-10">Aqua Technology Case Studies</h4>
                                    <p class="sub-text text-color-primary">Cyber Security</p>
                                    <div class="text">ARM Holdings is the world's leading semiconductor Intellectual Property (IP) supplier. A semiconductor is the electronic controller at the heart of many devices that we use every day.</div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                                <div class="slide-image">
                                    <div class="image-wrap">
                                        <div class="image">
                                            <img class="img-fluid" src="{{asset('/frontend/assets/images/features/home-services-case-study-slide-image-02.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--=========== Service Projects Wrapper End =============-->

    <!--========= Pricing Table Area Start ==========-->
    {{-- <div class="pricing-table-area section-space--pb_70 bg-gradient">
        <div class="pricing-table-title-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                            <h6 class="section-sub-title mb-20">Pricing and plan</h6>
                            <h3 class="section-title">1 monthly fee for <span class="text-color-primary">all IT services.</span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-table-content-area">
            <div class="container">
                <div class="row pricing-table-one">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__header">
                                <h6 class="sub-title">Basic</h6>
                                <div class="pricing-table__image">
                                    <img src="{{asset('/frontend/assets/images/icons/mitech-pricing-box-icon-01-90x90.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">$</h6>
                                    <h6 class="price">19</h6>
                                    <h6 class="period">/mo</h6>
                                </div>
                            </div>
                            <div class="pricing-table__body">
                                <div class="pricing-table__footer">
                                    <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                </div>
                                <ul class="pricing-table__list text-left">
                                    <li>03 projects</li>
                                    <li>Quality &amp; Customer Experience</li>
                                    <li><span class="featured">Try for free, forever!</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__feature-mark">
                                <span>Popular Choice</span>
                            </div>
                            <div class="pricing-table__header">
                                <h6 class="sub-title">Professional</h6>
                                <div class="pricing-table__image">
                                    <img src="{{asset('/frontend/assets/images/icons/mitech-pricing-box-icon-02-88x88.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">$</h6>
                                    <h6 class="price">59</h6>
                                    <h6 class="period">/mo</h6>
                                </div>
                            </div>
                            <div class="pricing-table__body">
                                <div class="pricing-table__footer">
                                    <a href="#" class="ht-btn  ht-btn-md ">Get started</a>
                                </div>
                                <ul class="pricing-table__list text-left">
                                    <li>Unlimited project</li>
                                    <li>Power And Predictive Dialing</li>
                                    <li>Quality &amp; Customer Experience</li>
                                    <li>24/7 phone and email support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__header">
                                <h6 class="sub-title">Professional</h6>
                                <div class="pricing-table__image">
                                    <img src="{{asset('/frontend/assets/images/icons/mitech-pricing-box-icon-03-90x90.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">$</h6>
                                    <h6 class="price">29</h6>
                                    <h6 class="period">/mo</h6>
                                </div>
                            </div>
                            <div class="pricing-table__body">
                                <div class="pricing-table__footer">
                                    <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                </div>
                                <ul class="pricing-table__list text-left">
                                    <li>10 projects</li>
                                    <li>Power And Predictive Dialing </li>
                                    <li>Quality &amp; Customer Experience </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--========= Pricing Table Area End ==========-->
    <!--=========== Service Projects Wrapper Start =============-->
    {{-- <div class="service-projects-wrapper section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20">Latest news</h6>
                        <h3 class="heading">Latest news are <span class="text-color-primary">on top all times</span></h3>
                    </div>
                </div>
            </div>
            <div class="latest-news-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-blog-lg-item wow move-up">
                            <!-- Post Feature Start -->
                            <a href="blog-post-layout-one.html">
                                <div class="post-blog-thumbnail">
                                    <img class="img-fluid" src="{{asset('/frontend/assets/images/blog/blog-03-540x330.jpg')}}" alt="Blog Images">
                                    <div class="post-meta mt-20">
                                        <div class="post-author">
                                            <img class="img-fluid avatar-96" src="{{asset('/frontend/assets/images/team/admin.jpeg')}}" alt=""> Harry Ferguson
                                        </div>
                                        <div class="post-date">
                                            <span class="far fa-calendar meta-icon"></span>
                                            January 18, 2019
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info mt-20">
                                <h4 class="post-title">
                                    <a href="blog-post-layout-one.html">5 Ways Technology Has Improved Business Today</a>
                                </h4>
                                <div class="post-excerpt mt-15">
                                    <p>They play a role in making operations more seamless, bridging the gap between authorities, consumers and businesses. …</p>
                                </div>
                                <div class="btn-text mt-15">
                                    <a href="#">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post info End -->
                        </div>
                    </div>
                    <div class="col-lg-6 blog-list-service">
                        <div class="single-blog-lg-list wow move-up">
                            <!-- Post Feature Start -->
                            <a href="blog-post-layout-one.html">
                                <div class="post-blog-thumbnail">
                                    <img class="img-fluid" src="{{asset('/frontend/assets/images/blog/blog-01-480x312.jpg')}}" alt="Blog Images">
                                    <div class="post-meta mt-20">
                                        <div class="post-author">
                                            <img class="img-fluid avatar-96" src="{{asset('/frontend/assets/images/team/admin.jpeg')}}" alt=""> Harry Ferguson
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-meta mb-10">
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        January 18, 2019
                                    </div>
                                </div>
                                <h5 class="post-title">
                                    <a href="blog-post-layout-one.html">Ideas for High Returns on Investment</a>
                                </h5>
                            </div>
                            <!-- Post info End -->
                        </div>
                        <div class="single-blog-lg-list wow move-up">
                            <!-- Post Feature Start -->
                            <a href="blog-post-layout-one.html">
                                <div class="post-blog-thumbnail">
                                    <img class="img-fluid" src="{{asset('/frontend/assets/images/blog/blog-08-480x312.jpg')}}" alt="Blog Images">
                                    <div class="post-meta mt-20">
                                        <div class="post-author">
                                            <img class="img-fluid avatar-96" src="{{asset('/frontend/assets/images/team/admin-02.jpeg')}}" alt=""> Harry Ferguson
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-meta mb-10">
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        February 21, 2019
                                    </div>
                                </div>
                                <h5 class="post-title">
                                    <a href="blog-post-layout-one.html">How Technology Made Businesses More Efficient</a>
                                </h5>
                            </div>
                            <!-- Post info End -->
                        </div>
                        <div class="single-blog-lg-list wow move-up">
                            <!-- Post Feature Start -->
                            <a href="blog-post-layout-one.html">
                                <div class="post-blog-thumbnail">
                                    <img class="img-fluid" src="{{asset('/frontend/assets/images/blog/blog-07-480x312.jpg')}}" alt="Blog Images">
                                    <div class="post-meta mt-20">
                                        <div class="post-author">
                                            <img class="img-fluid avatar-96" src="{{asset('/frontend/assets/images/team/admin-02.jpeg')}}" alt=""> Harry Ferguson
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-meta mb-10">
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        January 18, 2019
                                    </div>
                                </div>
                                <h5 class="post-title">
                                    <a href="blog-post-layout-one.html">Data Secure on Transitioning to a New Office</a>
                                </h5>
                            </div>
                            <!-- Post info End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--=========== Service Projects Wrapper End =============-->

    <!--============ Contact Us Area Start =================-->
    <div class="contact-us-area service-contact-bg section-space--ptb_100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">
                    <div class="contact-info sytle-one service-contact text-left">

                        <div class="contact-info-title-wrap text-center">
                            <h3 class="heading text-white mb-10">4.9/5.0</h3>
                            <div class="ht-star-rating lg-style">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="sub-text">by 700+ customers for 3200+ clients</p>
                        </div>

                        <div class="contact-list-item">
                            <a href="tel:190068668" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-phone"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Call for advice now!</h6>
                                            <div class="text"  style="font-size:26px;">{{App\Models\SiteConfig::getAllStiteConfig()->phone}}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:hello@mitech.com" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-envelope"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Say hello</h6>
                                            <div class="text" style="font-size:26px;">{{App\Models\SiteConfig::getAllStiteConfig()->email}}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7 ml-auto">
                    <div class="contact-form-service-wrap">
                        <div class="contact-title text-center section-space--mb_40">
                            <h3 class="mb-10">Need a hand?</h3>
                            <p class="text">Reach out to the world’s most reliable IT services.</p>
                        </div>

                        <form action="{{route('message.store')}}" method="post">
                            @csrf
                            <div class="contact-form__two">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="name" type="text" placeholder="Name *">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="email" type="email" placeholder="Email *">
                                    </div>
                                </div>
                                <div class="contact-select">
                                    <div class="form-item contact-inner">
                                        <span class="inquiry">
                                            <input type="text" placeholder="Subject" name="subject">
                                        </span>
                                    </div>
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="message" placeholder="Please describe what you need."></textarea>
                                </div>
                                <div class="comment-submit-btn">
                                    <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                    <p class="form-messege-2"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--============ Contact Us Area End =================-->
    <!--====================  brand logo slider area ====================-->
    <div class="brand-logo-slider-area section-space--ptb_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__one">
                                @foreach(App\Models\Client::getAllClient() as $client)
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="{{$client->link}}">
                                        <div class="brand-logo__image">
                                            <img src="{{asset(''.$client->image)}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{asset(''.$client->image)}}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo slider area  ====================-->
</div>
@endsection