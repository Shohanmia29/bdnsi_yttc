<!DOCTYPE html>
<html class="no-js" lang="ZXX">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Young Technical Training Center</title>
    <link rel="icon" href="https://bangla-eschool.getupdemo.xyz/storage/files/1/school-favicon.png" />

    <link rel="stylesheet" href="{{asset('frontend/plugins/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/maginific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/fancybox.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/nice-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/icofont.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/uicons.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/ss/toastr.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link rel="icon" type="image/png" href="{{ asset('frontend/logo.png') }}?v=2">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/logo.png') }}?v=4">
    <link rel="apple-touch-icon" href="{{ asset('frontend/logo.png') }}?v=4" />
    <meta name="msapplication-TileImage" content="{{ asset('frontend/logo.png') }}?v=4" />

    <style>
        .about-content p {
            margin: 0;
            padding-top: 16px;
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 9;
            -webkit-box-orient: vertical;
        }

        .corner-message-bottom p {
            margin-bottom: 24px;
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 12;
            -webkit-box-orient: vertical;
            height: 286px;
        }
    </style>

    <style>
        :root {
            --primary-color: #6aa84f;
            --secondary-color: #3ccf4e;
            --tertiary-color: #f45050;
            --white-color: #ffffff;
            --white-color-2: #f8f8f8;
            --white-color-3: #e6f4f0;
            --title-color: #20262e;
            --paragraph-color: #2c3333;
            --hints-color: #767a7a;
            --border-color: #e9e9ea;
        }

        /* customize pagination color start */

        ul.pagination {
            display: inline-flex;
        }

        .page-item .page-link {
            color: #6aa84f !important;
        }

        .active>.page-link,
        .page-link.active {
            background-color: #6aa84f !important;
            border-color: #6aa84f !important;
            color: white;
        }

        .page-item.active .page-link {
            color: white !important;
        }

        /* customize pagination color end */

        .row.school-committe-group {
            row-gap: 24px;
        }
    </style>

</head>

<body>

<!-- Preloader  -->
<div id="preloader">
    <div class="preloader-main">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- End Preloader  -->

<!-- Back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Back to top end -->
<!-- Mobile Menu Modal -->
<div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
    <div class="modal-dialog offcanvas-dialog">
        <div class="modal-content">
            <div class="modal-header offcanvas-header">
                <!-- offcanvas-logo-start -->
                <div class="offcanvas-logo">
                    <a href="/"><img src="{{asset('images/full-logo.png')}}" alt="#" /></a>
                </div>
                <!-- offcanvas-logo-end -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fi fi-ss-cross"></i>
                </button>
            </div>
            <div class="mobile-menu-modal-main-body">
                <!-- offcanvas-menu start -->
                <nav id="offcanvas-menu" class="navigation offcanvas-menu">
                    <ul id="nav mobile-nav" class="list-none offcanvas-men-list">
                        <li class="">
                            <a href="{{route('all_course')}}">Courses</a>
                        </li>
                        <li class="">
                            <a href="{{route('verifiedInstitute')}}">Verified Institute </a>
                        </li>
                        <li class="">
                            <a href="{{route('successStudent')}}">Success Students </a>
                        </li>
                        <li class="">
                            <a href="{{route('result')}}">Student Result</a>
                        </li>
                        <li class="">
                            <a href="{{route('center-request.create')}}">Institute Apply</a>
                        </li>
                        <li class="">
                            <a href="{{route('login')}}">Institute Login</a>
                        </li>
                        <li class="">
                            <a href="{{route('contactUs')}}">Contact Us</a>
                        </li>

                        <li><a href="">ছবির গ্যালারী</a></li>
                        <li><a href="">যোগাযোগ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="mobile-menu-modal-main-bottom">
                <div class="topbar-school-info">

                </div>
                <!-- offcanvas-menu end -->
                <div class="mobile-menu-modal-bottom header-menu-btn">
                    <a href="" target="_blank" class="theme-btn"><span><i class="fi fi-rs-sign-in-alt"></i>Login</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Topbar Area -->
<div class="topbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-6 col-12">
                <div class="topbar-left">
                    <div class="topbar-update-notice">
                        <span class="topbar-update-notice-title">আপডেট</span>

                        <!-- Update Notice Slider -->
                        <div class="topbar-update-notice-slider">
                            <div class="topbar-update-notice-main">
                                <p class="topbar-update-notice-single">
                                    <a href="" target="_blank">স্কুল শুরু হওয়ার নির্ধারিত সময় প্রসঙ্গে নোটিশ</a>
                                </p>
                            </div>
                            <div class="topbar-update-notice-main">
                                <p class="topbar-update-notice-single">
                                    <a href="" target="_blank">তাপপ্রবাহের সতর্কবার্তার কারণে শ্রেণি কার্যক্রম ও চলমান পরীক্ষা বন্ধ সংক্..</a>
                                </p>
                            </div>
                            <div class="topbar-update-notice-main">
                                <p class="topbar-update-notice-single">
                                    <a href="" target="_blank">প্রথম সাময়িক পরীক্ষা ২০২৩ এর প্রসঙ্গে বিজ্ঞপ্তি সকল শ্রেণীর</a>
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="topbar-right">
                    <div class="topbar-school-info">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Topbar Area -->

<!-- Header Area -->
<header id="active-sticky" class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-inner">
                    <div class="row align-items-center">
                        <div class=" col-md-2 col-8">
                            <div class="header-logo">
                                <a href="/"><img src="{{asset('images/full-logo.png')}}" alt="#" /></a>
                            </div>
                        </div>
                        <div class="col-md-10 col-4">
                            <div class="header-right">
                                <div class="header-menu">
                                    <nav class="navigation">
                                        <ul class="header-menu-list">
                                            <li class="active">
                                                <a href="{{route('all_course')}}">Courses</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('verifiedInstitute')}}">Verified Institute </a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('successStudent')}}">Success Students </a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('result')}}">Student Result</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('center-request.create')}}">Institute Apply</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('login')}}">Institute Login</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('contactUs')}}">Contact Us</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                {{--                <div class="header-menu-btn">
                                    <a href="https:///login" target="_blank" class="theme-btn"><i class="fi fi-rs-sign-in-alt"></i>Login</a>
                                </div>--}}
                            </div>
                            <!-- Mobile Menu Button -->
                            <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                            <!-- End Mobile Menu Button -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

{{$slot}}


<!-- Footer Area -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
     {{--           <div class="col-lg-4 col-md-6 col-12">
              --}}{{--      <div class="footer-widget quick-links">
                        <h4 class="footer-widget-title">অন্যান্য লিঙ্ক</h4>
                        <ul class="quick-links-inner">
                            <li>
                                <a href= target="_blank">
                                    <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/link.svg" alt="Link"/>

                                </a>
                            </li>

                        </ul>
                    </div>--}}{{--
                </div>
                <div class="col-lg-4 col-md-6 col-12">
        --}}{{--            <div class="footer-widget quick-links">
                        <h4 class="footer-widget-title">সরাসরি লিঙ্ক</h4>
                        <ul class="quick-links-inner">
                        --}}{{----}}{{--    <li>
                                <a href=>যোগাযোগ</a>
                            </li>--}}{{----}}{{--

                        </ul>
                    </div>--}}{{--
                </div>--}}
                <div class="col-12 py-4">
                    <div class="row">
                         <div class="col-12 col-md-6">
                               <div>
                                   <div class="footer-contact-widget">
                                       <div class="footer-contact-icon">
                                           <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/map.svg" alt="#" />
                                       </div>
                                       <div class="footer-contact-info">
                                           <p class="footer-contact-text">
                                               {{config('site.setting.address')}}
                                           </p>
                                       </div>
                                   </div>
                                   <div class="footer-contact-widget">
                                       <div class="footer-contact-icon">
                                           <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/phone.svg" alt="#" />
                                       </div>
                                       <div class="footer-contact-info">
                                           <a href="tel:{config('site.setting.phone')}}">   {{config('site.setting.phone')}}</a>

                                       </div>
                                   </div>
                               </div>
                         </div>
                        <div class="col-12 col-md-6">
                              <div>
                                  <div class="footer-contact-widget">
                                      <div class="footer-contact-icon">
                                          <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/envelope.svg" alt="#" />
                                      </div>
                                      <div class="footer-contact-info">
                                          <a href="mailto:{{config('site.setting.email')}}">{{config('site.setting.email')}}</a>
                                      </div>
                                  </div>
                                  <div class="footer-contact-widget">
                                      <div class="footer-contact-icon">
                                          <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/info.svg" alt="#" />
                                      </div>
                                      <div class="footer-contact-info">

                                      </div>
                                  </div>
                              </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="footer-copyright">
                        <p class="footer-copyright-text">
                            © 2024 . All right reserved.
                        </p>
                        <span>Design & Developed by:<a href="#" target="_blank">MMITSFOT Ltd.</a></span>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="footer-social">
                        <span>Connect us</span>

                        <ul class="footer-social-list">
                            <li>
                                <a href="" target="_blank"><img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/facebook.svg" alt="#" /></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/messenger.png" alt="#" /></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/twitter.png" alt="#" /></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/instagram.png" alt="#" /></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/linkedin.svg" alt="#" /></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/whatsapp.svg" alt="#" /></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/telegram.svg" alt="#" /></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/youtube.svg" alt="#" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Jquery JS -->
<script src="{{asset('frontend/plugins/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/jquery-migrate.js')}}"></script>
<script src="{{asset('frontend/plugins/js/modernizer.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/backToTop.js')}}"></script>
<script src="{{asset('frontend/plugins/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/jquery-fancybox.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/nice-select.min.js')}}"></script>
<script src="{{asset('frontend/plugins/js/active.js')}}"></script>


<script>
</script>
</body>

</html>
