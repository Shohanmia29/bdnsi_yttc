<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="auto">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Young Technical Training Center | Technical Education In Bd</title>
    <link rel="icon" href="{{asset('frontend/logo.jpg')}}?v=223" />

    <link rel="stylesheet" href="{{asset('frontend/plugins/css/bootstrap.min.css')}}?v=2" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/animate.min.css')}}?v=2" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/owl.carousel.min.css')}}?v=2" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/maginific-popup.min.css')}}?v=2" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/fancybox.css')}}?v=2" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/nice-select.min.css')}}?v=2" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/icofont.css')}}?v=2" />
    <link rel="stylesheet" href="{{asset('frontend/plugins/css/uicons.css')}}?v=2" />

{{--    <link rel="stylesheet" href="{{asset('frontend/css/toastr.min.css')}}?v=2" />--}}
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}?v=2" />
    <link rel="icon" type="image/png" href="{{ asset('frontend/logo.jpg')}}?v=223">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/logo.jpg')}}?v=223">
    <link rel="apple-touch-icon" href="{{ asset('frontend/logo.jpg')}}?v=223" />
    <meta name="msapplication-TileImage" content="{{ asset('frontend/logo.jpg')}}?v=223" />
    <meta name="google-site-verification" content="Z0nEijotHP7ZORKAfkTDJrSIefDv4G3NB5gaq9wngsE" />
    <meta name="description" content="Young Technical Training Center offers quality education in Bangladesh with modern methods, expert teachers, & diverse programs. Join now to shape your future!">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J104V2KMHD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-J104V2KMHD');
    </script>
    <style>
        .about-content p {
            margin: 0;
            padding-top: 16px;
            display: -webkit-box;
            overflow-y: scroll;
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
{{--<div id="preloader">
    <div class="preloader-main">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>--}}
<!-- End Preloader  -->

<!-- Back to top start -->
<div class="progress-wrap">
    <div class="d-flex progress-circle svg-content justify-content-center">
        <i class="fa fa-arrow-up mx-auto mt-3"></i>
    </div>

    <svg class="progress-circle svg-content d-none" width="100%" height="100%" viewBox="-1 -1 102 102">
        <!-- Circular Path -->
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" stroke="black" stroke-width="2" fill="none"/>

        <!-- Top Arrow -->
        <polygon points="50,-5 45,5 55,5" fill="black"/>
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
                    <a href="/"><img src="{{asset('frontend/logo2.png')}}" alt="#" /></a>
                </div>
                <!-- offcanvas-logo-end -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg style="height: 100%" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>


                </button>
            </div>
            <div class="mobile-menu-modal-main-body">
                <!-- offcanvas-menu start -->
                <nav id="offcanvas-menu" class="navigation offcanvas-menu">
                    <ul id="nav mobile-nav" class="list-none offcanvas-men-list">
                        <li class="">
                            <a href="{{route('all_course')}}">{{__t('Courses')}}</a>
                        </li>
                        <li class="">
                            <a href="{{route('verifiedInstitute')}}">{{__t('Verified Institute')}} </a>
                        </li>
                        <li class="">
                            <a href="{{route('successStudent')}}">{{__t('Success Students')}} </a>
                        </li>
                        <li class="">
                            <a href="{{route('result')}}">{{__t('Student Result')}}</a>
                        </li>
                        <li class="">
                            <a href="{{route('center-request.create')}}">{{__t('Institute Apply')}}</a>
                        </li>
                        <li class="">
                            <a href="{{route('login')}}">{{__t('Institute Login')}}</a>
                        </li>
                        <li class="">
                            <a href="{{route('contactUs')}}">{{__t('Contact Us')}}</a>
                        </li>

                        <li><a href="#gallary">{{__t('Photo Gallery')}}</a></li>

                    </ul>
                </nav>
            </div>
            <div class="mobile-menu-modal-main-bottom">
                <div class="topbar-school-info">

                </div>
                <!-- offcanvas-menu end -->
                <div class="mobile-menu-modal-bottom header-menu-btn">
                     <div class="text-center font-bold py-2">RJSC NO: C-178431</div>
                    <a href="{{route('login')}}" target="_blank" class="theme-btn"><span><i class="fi fi-rs-sign-in-alt"></i>{{__t('Login')}}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--@php
    $notices = \App\Models\ConfigDictionary::get('notice');

    // স্ট্রিংকে স্পেস দিয়ে বিভক্ত করে ওয়ার্ডের অ্যারে তৈরি করা
    $words = explode(' ', $notices);

    // ২০টি ওয়ার্ড করে অ্যারে তৈরি করা
    $chunkedWords = array_chunk($words, 20);

    $noticeChunks = array_map(function ($chunk) {
        return implode(' ', $chunk);
    }, $chunkedWords);
@endphp--}}


<!-- Topbar Area -->

<div class="topbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-6 col-12">
                <div class="topbar-left">
                    <div class="topbar-update-notice">
                        <span class="topbar-update-notice-title">Notice</span>
                            <marquee behavior="" direction="left">{{\App\Models\ConfigDictionary::get('notice','coming soon')}}</marquee>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="topbar-right">
                    <div class="topbar-school-info">
                        <div class="topbar-right">
                            <div class="topbar-school-info d-flex gap-1">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button"   data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ strtoupper(session('locale','en')) == 'EN' ? 'English' : (strtoupper(session('locale')) == 'BN' ? 'বাংলা' : (strtoupper(session('locale')) == 'AR' ? 'اللغة' : ''))}}
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                        <li class="w-100"><a class="dropdown-item {{ session('locale') == 'en' ? 'active' : '' }}" href="#" onclick="changeLanguage('en')">English</a></li>
                                        <li class="w-100"><a class="dropdown-item {{ session('locale') == 'bn' ? 'active' : '' }}" href="#" onclick="changeLanguage('bn')">বাংলা</a></li>
                                        <li class="w-100"><a class="dropdown-item {{ session('locale') == 'ar' ? 'active' : '' }}" href="#" onclick="changeLanguage('ar')">اللغة</a></li>
                                    </ul>
                                </div>

                                <ul class="topbar-school-info-list">
                                    <li>RJSC NO: <span>C-178431</span></li>
                                </ul>
                            </div>
                        </div>
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
                                <a href="/"><img src="{{asset('frontend/logo2.png')}}" alt="#" /></a>
                            </div>
                        </div>
                        <div class="col-md-10 col-4">
                            <div class="header-right">
                                <div class="header-menu">
                                    <nav class="navigation">
                                        <ul class="header-menu-list">
                                            <li class="active">
                                                <a href="{{route('all_course')}}">{{__t('Courses')}}</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('verifiedInstitute')}}">{{__t('Verified Institute')}} </a>
                                            </li>

                                            <li class="">
                                                <a href="{{route('result')}}">{{__t('Student Result')}}</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('center-request.create')}}">{{__t('Institute Apply')}}</a>
                                            </li>
                                            <li>
                                                <a href="#" contenteditable="false" style="cursor: pointer;">{{__t('Contact Us')}}<i class="fi-rr-angle-small-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li class="">
                                                        <a href="{{route('successStudent')}}">{{__t('Success Students')}} </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{route('contactUs')}}">{{__t('Contact Us')}}</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="{{route('login')}}">{{__t('Institute Login')}}</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                {{--                <div class="header-menu-btn">
                                    <a href="https:///login" target="_blank" class="theme-btn"><i class="fi fi-rs-sign-in-alt"></i>Login</a>
                                </div>--}}
                            </div>
                         <div class="d-flex align-items-center justify-content-center">
                             <!-- Mobile Menu Button -->
                             <div class="dropdown d-lg-none ">
                                 <button class="btn btn-light dropdown-toggle" type="button" style="font-size: 10px"   data-bs-toggle="dropdown" aria-expanded="false">
                                     {{ strtoupper(session('locale','en')) == 'EN' ? 'English' : (strtoupper(session('locale')) == 'BN' ? 'বাংলা' : (strtoupper(session('locale')) == 'AR' ? 'اللغة' : ''))}}
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="languageDropdown" style="font-size: 10px">
                                     <li class="w-100"><a class="dropdown-item {{ session('locale') == 'en' ? 'active' : '' }}" href="#" onclick="changeLanguage('en')">English</a></li>
                                     <li class="w-100"><a class="dropdown-item {{ session('locale') == 'bn' ? 'active' : '' }}" href="#" onclick="changeLanguage('bn')">বাংলা</a></li>
                                     <li class="w-100"><a class="dropdown-item {{ session('locale') == 'ar' ? 'active' : '' }}" href="#" onclick="changeLanguage('ar')">اللغة</a></li>
                                 </ul>
                             </div>
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
                                       <div class="footer-contact-icon {{request()->routeIs('result') ? 'p-3' : ''}} ">
                                           <img src="{{asset('frontend/svg/location.png')}}" alt="#" />
                                       </div>
                                       <div class="footer-contact-info {{request()->routeIs('result') ? 'p-3' : ''}}">
                                           <p class="footer-contact-text">
                                               {{config('site.setting.address')}}
                                           </p>
                                       </div>
                                   </div>
                                   <div class="footer-contact-widget">
                                       <div class="footer-contact-icon {{request()->routeIs('result') ? 'p-3' : ''}}">
                                           <img src="{{asset('frontend/svg/img/phone.png')}}" alt="#" />
                                       </div>
                                       <div class="footer-contact-info {{request()->routeIs('result') ? 'p-3' : ''}}">
                                           <a href="tel:{config('site.setting.phone')}}">   {{config('site.setting.phone')}}</a>

                                       </div>
                                   </div>
                               </div>
                         </div>
                        <div class="col-12 col-md-6">
                              <div>
                                  <div class="footer-contact-widget">
                                      <div class="footer-contact-icon {{request()->routeIs('result') ? 'p-3' : ''}}">
                                          <img src="{{asset('frontend/svg/img/mail.png')}}" alt="#" />
                                      </div>
                                      <div class="footer-contact-info {{request()->routeIs('result') ? 'p-3' : ''}}">
                                          <a href="mailto:{{config('site.setting.email')}}"  style="margin: {{request()->routeIs('result') ? '-19px' : ''}} ">{{config('site.setting.email')}}</a>
                                      </div>
                                  </div>
                                  <div class="footer-contact-widget">
                                      <div class="footer-contact-icon {{request()->routeIs('result') ? 'p-3' : ''}}">
                                          <img src="{{asset('frontend/svg/img/what.png')}}" alt="#" />
                                      </div>
                                      <div class="footer-contact-info">

                                          <a href="">   RJSC NO: C-178431 </a>
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
                            © {{date('Y')}} . All right reserved.
                        </p>
                        <span>Design & Developed by:<a href="#" target="_blank">MMITSFOT Ltd.</a></span>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="footer-social">
                        <span>Connect us</span>

                        <ul class="footer-social-list">
                            <li>
                                <a href="{{\App\Models\ConfigDictionary::get('facebook_link')}}" target="_blank"><img src="{{asset('frontend/svg/img/facebook.png')}}" alt="#" /></a>
                            </li>
                            <li>
                                <a href="https://m.me/527199240465260" target="_blank"><img src="{{asset('frontend/svg/img/messenger.png')}}" alt="#" /></a>
                            </li>
                            <li>
                                <a href="{{\App\Models\ConfigDictionary::get('twitter_link')}}" target="_blank"><img src="{{asset('frontend/svg/img/twitter.png')}}" alt="#" /></a>
                            </li>

                            <li>
                                <a href="{{\App\Models\ConfigDictionary::get('linkedin_link')}}" target="_blank"><img src="{{asset('frontend/svg/img/linkedin.png')}}" alt="#" /></a>
                            </li>

                            <li>
                                <a href="https://wa.link/focee3" target="_blank"><img src="{{asset('frontend/svg/img/whatapp.png')}}" alt="#" /></a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/younginstitute/" target="_blank"><img src="{{asset('frontend/svg/img/instragram.png')}}" alt="#" /></a>
                            </li>

                            <li>
                                <a href="{{\App\Models\ConfigDictionary::get('youtube_link')}}" target="_blank"><img src="{{asset('frontend/svg/img/youtube.png')}}" alt="#" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1  style="opacity: 0; font-size: 1px!important;">Young Technical Training Center | Technical Education In Bd</h1>
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
    function changeLanguage(lang) {
        fetch('/lang-change?locale=' + lang, { method: 'GET' })
            .then(response => location.reload());
    }
</script>
</body>

</html>
