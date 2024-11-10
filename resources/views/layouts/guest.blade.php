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


@include('layouts.nav')
{{$slot}}


<!-- Footer Area -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-widget quick-links">
                        <h4 class="footer-widget-title">অন্যান্য লিঙ্ক</h4>
                        <ul class="quick-links-inner">
                            <li>
                                <a href= target="_blank">
                                    <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/link.svg" alt="Link"/>
                                    পাঠশালা
                                </a>
                            </li>
                            <li>
                                <a href= target="_blank">
                                    <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/link.svg" alt="Link"/>
                                    ই-স্কুল
                                </a>
                            </li>
                            <li>
                                <a href= target="_blank">
                                    <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/link.svg" alt="Link"/>
                                    ভর্তি পরীক্ষার আবেদন
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/link.svg" alt="Link"/>
                                    পিডিএস (সরকারি মাধ্যমিক)
                                </a>
                            </li>
                            <li>
                                <a href= target="_blank">
                                    <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/link.svg" alt="Link"/>
                                    ওয়েব মেইল লগিন
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-widget quick-links">
                        <h4 class="footer-widget-title">সরাসরি লিঙ্ক</h4>
                        <ul class="quick-links-inner">
                            <li>
                                <a href=>যোগাযোগ</a>
                            </li>
                            <li>
                                <a href=>প্রতিষ্ঠান পরিচিতি</a>
                            </li>
                            <li>
                                <a href=>প্রতিষ্ঠানের তথ্যাদি</a>
                            </li>
                            <li>
                                <a href=>সকল শিক্ষক/শিক্ষিকা বৃন্দ</a>
                            </li>
                            <li>
                                <a href=>স্কুল কমিটির সদস্যবৃন্দ</a>
                            </li>
                            <li>
                                <a href=>ছবি এবং ভিডিও গ্যালারী</a>
                            </li>
                            <li>
                                <a href=>অধ্যায়ণরত শিক্ষার্থীর সংখ্যা</a>
                            </li>
                            <li>
                                <a href=>সংবাদ/ ব্লগ সমূহ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="footer-widget contact">
                        <h4 class="footer-widget-title">যোগাযোগ</h4>
                        <!-- Single Widget -->
                        <div class="footer-contact-widget">
                            <div class="footer-contact-icon">
                                <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/map.svg" alt="#" />
                            </div>
                            <div class="footer-contact-info">
                                <p class="footer-contact-text">
                                    XYZ School &amp; College, Main Road, Khilgaon, Dhaka
                                </p>
                            </div>
                        </div>

                        <!-- Single Widget -->
                        <div class="footer-contact-widget">
                            <div class="footer-contact-icon">
                                <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/phone.svg" alt="#" />
                            </div>
                            <div class="footer-contact-info">
                                <a href="tel:+880 1234 567890">+8801000000000</a>
                                <a href="tel:+880 1234 567890">+8801000000002</a>
                            </div>
                        </div>

                        <!-- Single Widget -->
                        <div class="footer-contact-widget">
                            <div class="footer-contact-icon">
                                <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/envelope.svg" alt="#" />
                            </div>
                            <div class="footer-contact-info">
                                <a href="mailto:info@xyzschool.com">example@yourschool.com</a>
                                <a href="mailto:hello@xyzschool.com">example_two@yourschool.com</a>
                            </div>
                        </div>

                        <!-- Single Widget -->
                        <div class="footer-contact-widget">
                            <div class="footer-contact-icon">
                                <img src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/info.svg" alt="#" />
                            </div>
                            <div class="footer-contact-info">
                                <ul>
                                    <li>EIIN No:<span>12547</span></li>
                                    <li>School code:<span>44231</span></li>
                                    <li>Reg. No:<span>6100-KA</span></li>
                                </ul>
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
                            © 2024 XYZ School &amp; College 21. All right reserved.
                        </p>
                        <span>Design & Developed by:<a href="#" target="_blank">Company Limited</a></span>
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
{{--<script src="{{asset('frontend/plugins/js/nice-select.min.js')}}"></script>--}}
<script src="{{asset('frontend/plugins/js/active.js')}}"></script>


<script>
</script>
</body>

</html>
