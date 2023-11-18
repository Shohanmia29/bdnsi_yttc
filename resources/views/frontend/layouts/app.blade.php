<!doctype html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/iconplugins.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme-dark.css')}}">

    <title>Course Management</title>

    <link rel="icon" type="image/png" href="{{asset('frontend/assets/images/favicon.png')}}">
</head>

<body>

{{--<div id="preloader">
    <div id="preloader-area">
        <div class="spinner"></div>
        <div class="spinner"></div>
        <div class="spinner"></div>
        <div class="spinner"></div>
        <div class="spinner"></div>
        <div class="spinner"></div>
        <div class="spinner"></div>
        <div class="spinner"></div>
    </div>
    <div class="preloader-section preloader-left"></div>
    <div class="preloader-section preloader-right"></div>
</div>--}}


<div class="navbar-area ledu-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="">
                        <img src="{{asset('frontend/assets/images/logos/logo-small.png')}}" class="logo-one" alt="logo">
                        <img src="{{asset('frontend/assets/images/logos/logo-small-white.png')}}" class="logo-two" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav nav-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href=" ">
                    <img src="{{asset('frontend/assets/images/logos/logo.png')}}" class="logo-one" alt="Logo">
                    <img src="{{asset('frontend/assets/images/logos/logo-2.png')}}" class="logo-two" alt="Logo">
                </a>
                <div class="nav-widget-form">
                    <form class="search-form">
                        <input type="search" class="form-control" placeholder="Search courses">
                        <button type="submit">
                            <i class="ri-search-line"></i>
                        </button>
                    </form>
                </div>
                <div class="navbar-category">
                    <div class="dropdown category-list-dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtoncategory" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-list"></i>
                            Categories
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtoncategory">
                            <a href="courses-details.html" class="nav-link-item">
                                <i class="flaticon-web-development"></i>
                                Development
                            </a>
                            <a href="courses-details.html">
                                <i class="flaticon-design"></i>
                                Web designing
                            </a>
                            <a href="courses-details.html">
                                <i class="flaticon-wellness"></i>
                                Lifestyle
                            </a>
                            <a href="courses-details.html">
                                <i class="flaticon-heart-beat"></i>
                                Health & fitness
                            </a>
                            <a href="courses-details.html">
                                <i class="flaticon-folder"></i>
                                Data science
                            </a>
                            <a href="courses-details.html">
                                <i class="flaticon-user"></i>
                                Accounting
                            </a>
                            <a href="courses-details.html">
                                <i class="flaticon-camera"></i>
                                Photography
                            </a>
                            <a href="courses-details.html">
                                <i class="flaticon-corporate"></i>
                                Marketing
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle active">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link active">
                                        Home Demo - 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">
                                        Home Demo - 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">
                                        Home Demo - 3
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">
                                        Testimonials
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">
                                        Cart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">
                                        Checkout
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Instructors
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="instructors.html" class="nav-link">
                                                Instructors
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="instructors-details.html" class="nav-link">
                                                Instructors Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">
                                        Pricing Plan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        User
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="signin.html" class="nav-link">
                                                Sign in
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="signup.html" class="nav-link">
                                                Sign Up
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forgot-password.html" class="nav-link">
                                                Forgot Password
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-condition.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">
                                        404 Page
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">
                                        Coming Soon
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Courses
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="courses.html" class="nav-link">
                                        Courses
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="courses-list.html" class="nav-link">
                                        Courses List
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="courses-sidebar.html" class="nav-link">
                                        Courses Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="courses-details.html" class="nav-link">
                                        Courses Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Event
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="event.html" class="nav-link">Event</a>
                                </li>
                                <li class="nav-item">
                                    <a href="event-details.html" class="nav-link">Event Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Blog </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">
                                        Blog Grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-2.html" class="nav-link">
                                        Blog Left Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-3.html" class="nav-link">
                                        Blog Right Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="author.html" class="nav-link">
                                        Author
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="categories.html" class="nav-link">
                                        Categories
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tags.html" class="nav-link">
                                        Tags
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Single Blog
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="single-blog-1.html" class="nav-link">
                                                Default
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="single-blog-2.html" class="nav-link">
                                                With Video
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="single-blog-3.html" class="nav-link">
                                                With Images Slider
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="optional-item">
                            <a href="signup.html" class="default-btn two">Sign Up</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="side-nav-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-item">
                            <form class="search-form">
                                <input type="search" class="form-control" placeholder="Search courses">
                                <button type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>
                        <div class="side-item">
                            <a href="signup.html" class="default-btn two">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">FOR A BETTER FUTURE</span>
                    <h1 data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">Discover the most exciting online courses</h1>
                    <p data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">Flexible easy to access learning opportunities can bring a significant change in how individuals prefer to learn! The Ellen can offer you to enjoy the beauty of eLearning!</p>
                    <div class="banner-form-area" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <form class="banner-form" data-toggle="validator" method="POST">
                            <input type="email" class="form-control" placeholder="Search your courses" name="EMAIL" required autocomplete="off">
                            <button class="default-btn" type="submit">
                                <i class="ri-search-line"></i> Search now
                            </button>
                        </form>
                    </div>
                    <ul class="banner-popular-tag" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <li class="title">Popular search:</li>
                        <li><a href="">Design,</a></li>
                        <li><a href="">Development,</a></li>
                        <li><a href="">Marketing,</a></li>
                        <li><a href="">Affiliate</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-img" data-speed="0.05" data-revert="true">
                    <img src="{{asset('frontend/assets/images/home-one/man.png')}}" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Man" />
                    <div class="bg-shape">
                        <img src="{{asset('frontend/assets/images/home-one/home-one-shape.png')}}" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Shape" />
                    </div>
                    <div class="top-content" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <i class="flaticon-student"></i>
                        <div class="content">
                            <h3>250K</h3>
                            <p>Assisted student</p>
                        </div>
                    </div>
                    <div class="right-content" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <i class="flaticon-checked"></i>
                        <div class="content">
                            <h3>Congratulations</h3>
                            <p>Your admission completed</p>
                        </div>
                    </div>
                    <div class="left-content" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <div class="content">
                            <img src="{{asset('frontend/assets/images/home-one/user-img.jpg')}}" alt="User" />
                            <h3>User experience class</h3>
                            <p>Today at 12.00 PM</p>
                        </div>
                        <a href="" class="join-btn">Join now</a>
                    </div>
                    <div class="banner-img-shape">
                        <div class="shape1" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                            <img src="{{asset('frontend/assets/images/home-one/shape3.png')}}" alt="Shape" />
                        </div>
                        <div class="shape2" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                            <img src="{{asset('frontend/assets/images/home-one/shape2.png')}}" alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape">
        <div class="banner-shape1">
            <img src="{{asset('frontend/assets/images/home-one/shape1.png')}}" alt="Shape" />
        </div>
    </div>
</div>


{{$slot}}


<div class="footer-contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="section-title">
                    <h2>We will assist you in furthering your career and growth.</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-end">
                <a href="contact.html" class="default-btn">Contact us now</a>
            </div>
        </div>
    </div>
</div>


<footer class="footer-area">
    <div class="container pt-100 pb-70">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="assets/images/logos/logo-2.png" alt="Images">
                        </a>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consec tetur adipiscing elit eiusmod tempor incididunt labore dolore magna aliqua consec tetur adipiscing elite sed do labor.
                    </p>
                    <ul class="social-link">
                        <li class="social-title">Follow Us:</li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget ps-5">
                    <h3>About us</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="about.html">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="signup.html">
                                Instructor registration
                            </a>
                        </li>
                        <li>
                            <a href="instructors.html">
                                Instructors
                            </a>
                        </li>
                        <li>
                            <a href="event.html">
                                Our Event
                            </a>
                        </li>
                        <li>
                            <a href="courses-list.html">
                                Courses List
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget ps-5">
                    <h3>Resources</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="courses.html">
                                Courses
                            </a>
                        </li>
                        <li>
                            <a href="blog.html">
                                Our Blog
                            </a>
                        </li>
                        <li>
                            <a href="terms-condition.html">
                                Terms & conditions
                            </a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget ps-5">
                    <h3>Official Info</h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="ri-map-pin-2-fill"></i>
                            <div class="content">
                                <h4>Location:</h4>
                                <span>2976 Sunrise Road Las Vegas</span>
                            </div>
                        </li>
                        <li>
                            <i class="ri-mail-fill"></i>
                            <div class="content">
                                <h4>Email:</h4>
                                <span><a href="/cdn-cgi/l/email-protection#1179747d7d7e517d7475643f727e7c"><span class="__cf_email__" data-cfemail="afc7cac3c3c0efc3cacbda81ccc0c2">[email&#160;protected]</span></a>
                                    </span>
                            </div>
                        </li>
                        <li>
                            <i class="ri-phone-fill"></i>
                            <div class="content">
                                <h4>Phone:</h4>
                                <span><a href="tel:098765432150">098765432150</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copy-right-text text-center">
                <p>
                    Copyright @
                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear())
                    </script> <b>Ledu</b> All Rights Reserved
                    <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>

<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>

</html>
