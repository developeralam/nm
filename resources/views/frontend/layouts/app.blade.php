<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{App\Models\SiteConfig::getAllStiteConfig()->company_title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{asset(''.App\Models\SiteConfig::getAllStiteConfig()->favicon)}}">

    <!-- CSS
        ============================================ -->
    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="{{asset('/frontend/assets/css/vendor/bootstrap.min.css')}}"> -->

    <!-- Font Family CSS -->
    <!-- <link rel="stylesheet" href="{{asset('/frontend/assets/css/vendor/cerebrisans.css')}}"> -->

    <!-- FontAwesome CSS -->
    {{-- <link rel="stylesheet" href="{{asset('/frontend/assets/css/vendor/fontawesome-all.min.css')}}"> --}}

    <!-- Swiper slider CSS -->
    <!-- <link rel="stylesheet" href="{{asset('/frontend/assets/css/plugins/swiper.min.css')}}"> -->

    <!-- animate-text CSS -->
    <!-- <link rel="stylesheet" href="{{asset('/frontend/assets/css/plugins/animate-text.css')}}"> -->

    <!-- Animate CSS -->
    <!-- <link rel="stylesheet" href="{{asset('/frontend/assets/css/plugins/animate.min.css')}}"> -->

    <!-- Light gallery CSS -->
    <!-- <link rel="stylesheet" href="{{asset('/frontend/assets/css/plugins/lightgallery.min.css')}}"> -->

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css')}} & plugins.min.css')}} for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="{{asset('/frontend/assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/plugins/plugins.min.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/style.css')}}">

    {{-- Counter js --}}
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 6000
            });
        });
    </script>

</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="NADFwTZY"></script>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!--====================  header area ====================-->
    <div class="header-area">
        <div class="header-top-bar-info bg-gray d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar-wrap">
                            <div class="top-bar-left">
                                <div class="top-bar-text">{{strip_tags(App\Models\SiteConfig::getAllStiteConfig()->httext)}}</div>
                            </div>
                            <div class="top-bar-right">
                                <ul class="top-bar-info">
                                    <li class="info-item">
                                        <a href="tel:{{App\Models\SiteConfig::getAllStiteConfig()->phone}}" class="info-link">
                                            <i class="info-icon fa fa-phone"></i>
                                            <span class="info-text"><strong>{{App\Models\SiteConfig::getAllStiteConfig()->phone}}</strong></span>
                                        </a>
                                    </li>
                                    <li class="info-item">
                                    <i class="fal fa-envelope"></i>
                                    <a href="mailto:{{App\Models\SiteConfig::getAllStiteConfig()->email}}" class="hover-style-link">{{App\Models\SiteConfig::getAllStiteConfig()->email}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap header-sticky bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header position-relative">
                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="index.html">
                                    <img src="{{asset(''.App\Models\SiteConfig::getAllStiteConfig()->logo)}}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <div class="header-right">

                                <!-- navigation menu -->
                                <div class="header__navigation menu-style-three d-none d-xl-block">
                                    <nav class="navigation-menu">
                                        <ul>
                                            <li class="has-children">
                                                <a href="{{route('index')}}"><span>Home</span></a>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Company</span></a>
                                                <ul class="submenu">
                                                    <li class="has-children">
                                                        <a href="about-us-01.html"><span>About us</span></a>
                                                        <ul class="submenu">
                                                            <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                                            <li class="has-children">
                                                                <a href="#"><span>Submenu Level Two</span></a>
                                                                <ul class="submenu">
                                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Services</span></a>
                                                <ul class="submenu">
                                                    <li><a href="it-services.html"><span>IT Services</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#"><span>Products</span></a>
                                                <!-- mega menu -->
                                                <ul class="submenu">
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="{{route('index')}}"><span>Digital Marketing</span></a>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>News & Media</span></a>
                                                <ul class="submenu">
                                                    <li><a href="blog-list-large-image.html"><span>Photo Gallery</span></a></li>
                                                    <li><a href="blog-list-large-image.html"><span>Video Gallery</span></a></li>
                                                    <li><a href="blog-list-large-image.html"><span>News</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->
    <div id="main-wrapper">
        @yield('content')
        <!--====================  footer area ====================-->
        <div class="footer-area-wrapper reveal-footer bg-gray">
            <div class="footer-area section-space--ptb_100">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                            <div class="footer-widget__logo mb-30">
                                <img src="{{asset(''.App\Models\SiteConfig::getAllStiteConfig()->logo)}}" class="img-fluid" alt="">
                            </div>
                            <ul class="footer-widget__list">
                                <li><i class="info-icon fa fa-map-marker-alt"> </i> {{App\Models\SiteConfig::getAllStiteConfig()->address}}</li>
                                <li><i class="fal fa-envelope"> </i> <a href="mailto:{{App\Models\SiteConfig::getAllStiteConfig()->email}}" class="hover-style-link">{{App\Models\SiteConfig::getAllStiteConfig()->email}}</a></li>
                                <li><i class="info-icon fa fa-phone"> </i> <a href="tel:{{App\Models\SiteConfig::getAllStiteConfig()->phone}}" class="hover-style-link text-black font-weight--bold">{{App\Models\SiteConfig::getAllStiteConfig()->phone}}</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-widget">
                            <h6 class="footer-widget__title mb-20">Our Services</h6>
                            <ul class="footer-widget__list">
                                @foreach(App\Models\Service::getSixService() as $service)
                                <li><a href="{{route('service.show', $service->id)}}" class="hover-style-link p">{{$service->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12 footer-widget">
                            <h6 class="footer-widget__title mb-20 text-left">Connect With Us</h6>
                            <div class="fb-page" data-href="{{App\Models\Social::getSocial()->facebook_page}}" data-tabs="timeline" data-width="" data-height="180px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{App\Models\Social::getSocial()->facebook_page}}" class="fb-xfbml-parse-ignore"><a href="{{App\Models\Social::getSocial()->facebook_page}}">Facebook</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left">
                            <span class="copyright-text">&copy; 2019 {{App\Models\SiteConfig::getAllStiteConfig()->company_name}}. <a href="#">All Rights Reserved.</a></span>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <ul class="list ht-social-networks solid-rounded-icon">

                                <li class="item">
                                    <a href="{{App\Models\Social::getSocial()->twitter}}" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-twitter link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="{{App\Models\Social::getSocial()->facebook}}" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-facebook-f link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="{{App\Models\Social::getSocial()->instagram}}" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-instagram link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="{{App\Models\Social::getSocial()->linkedin}}" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-linkedin link-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of footer area  ====================-->
    </div>
    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ml-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-right">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!--====================  End of search overlay  ====================-->

    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('/frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- jQuery JS -->
    <script src="{{asset('/frontend/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('/frontend/assets/js/vendor/bootstrap.min.js')}}"></script>

    <!-- wow JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/wow.min.js')}}"></script> -->

    <!-- Swiper Slider JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/swiper.min.js')}}"></script> -->

    <!-- Light gallery JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/lightgallery.min.js')}}"></script> -->

    <!-- Waypoints JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/waypoints.min.js')}}"></script> -->

    <!-- Counter down JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/countdown.min.js')}}"></script> -->

    <!-- Isotope JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/isotope.min.js')}}"></script> -->

    <!-- Masonry JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/masonry.min.js')}}"></script> -->

    <!-- ImagesLoaded JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/images-loaded.min.js')}}"></script> -->

    <!-- Wavify JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/wavify.js')}}"></script> -->

    <!-- jQuery Wavify JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/jquery.wavify.js')}}"></script> -->

    <!-- circle progress JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/circle-progress.min.js')}}"></script> -->

    <!-- counterup JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/counterup.min.js')}}"></script> -->


    <!-- animation text JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/animation-text.min.js')}}"></script> -->

    <!-- Vivus JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/vivus.min.js')}}"></script> -->

    <!-- Some plugins JS -->
    <!-- <script src="{{asset('/frontend/assets/js/plugins/some-plugins.js')}}"></script> -->


    <!-- Plugins JS (Please remove the comment from below plugins.min.js')}} for better website load performance and remove plugin js files from avobe) -->


    <script src="{{asset('/frontend/assets/js/plugins/plugins.min.js')}}"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{asset('/frontend/assets/js/plugins/jquery.counterup.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('/frontend/assets/js/main.js')}}"></script>


</body>

</html>