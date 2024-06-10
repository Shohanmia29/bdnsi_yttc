<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- toastr -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <meta name="robots" content="index, follow">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bangladesh Youth Technical Training</title>
    <style>
        ul.contact-list li svg {
            width: 20px;
            height: 20px;
        }

        ul.contact-list li {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .footer-cust {
            display: flex;
            flex-wrap: wrap;
            width: 80%;
            margin: 0 auto;
        }

        .column-1 {
            flex: 1 !important;
            padding-right: 20px;
            /* Adjust spacing between columns */
        }

        .column-2 {
            flex: 3 !important;
        }

        .footer {
            margin-top: 6% !important;
            padding: 19px !important;
        }

        .footer_image_wrap {
            position: relative;
            /* Set position to relative for containing the absolute positioned image */
            height: 150px;
            /* Adjust height to fit the rotated image */
            box-sizing: border-box;
        }

        .footer_image_wrap_noeffect {
            position: relative;
            /* Set position to relative for containing the absolute positioned image */
            box-sizing: border-box;
            height: 190px;
            /* Adjust height to fit the rotated image */
        }

        .footer_image_wrap img {
            object-fit: contain;
            object-position: left;
            position: absolute;
            /* Set position to absolute */
            top: 0%;
            transform: rotate(90deg);
            transform-origin: 1% 1%;
        }

        .footer_image_wrap_noeffect img {
            object-fit: contain;
            position: absolute;
            /* Set position to absolute */
            top: 0%;
            left: 0%;
        }

        /*
        .footer_image_wrap {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            transform: rotate(90deg);
            flex-direction: row;
        }


        .footer_image_wrap img{
            max-width: 150px;
        }*/

        /* Media query for mobile devices */

        @media (max-width: 767px) {
            .footer-cust {
                flex-direction: column;
                /* Change to a single column layout on small screens */
                width: 100%;
            }
            .footer_image_wrap {
                height: 100px;
            }
            .footer_image_wrap_noeffect {
                height: 100px;
            }
            .column-1,
            .column-2 {
                width: 100%;
                /* Make both columns take up full width */
                padding-right: 0;
                /* Remove padding between columns */
            }
        }

        @media (max-width: 467px) {
            .footer_image_wrap_noeffect {
                height: 70px;
            }
            .footer_image_wrap {
                height: 70px;
            }
        }

        @media(max-width: 576px) {
            .footer {
                padding-bottom: 10px;
            }
            .footer_image_wrap_noeffect {
                justify-content: center;
            }
            .footer_image_wrap {
                justify-content: center;
            }
        }


        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        .flex {
            display: flex;
        }
        .w-full {
            width: 100%;
        }
        .max-w-6xl {
            max-width: 72rem;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .justify-between {
            justify-content: space-between;
        }
        .bg-gray-200 {
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity));
        }
        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }
        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }
        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
        .text-xs {
            font-size: 0.75rem;
            line-height: 1rem;
        }
        .font-semibold {
            font-weight: 600;
        }
        .underline {
            text-decoration-line: underline;
        }
        .hover\:underline:hover {
            text-decoration-line: underline;
        }
        @media (min-width: 768px) {
            .md\:justify-between {
                justify-content: space-between;
            }
            .md\:text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
        }


    </style>


</head>

<body class="font-[poppins]">

<header>
    <div class="image">
        <img style="width:100%;max-height:250px;" src="{{asset('frontend/banner.jpg')}}" class="img-fluid" alt="...">
    </div>

    <nav class=" ">
        <div class="w-full">
            <nav class=" w-full bg-gray-200   py-1">
                <div class=" max-w-6xl mx-auto flex flex-wrap font-semibold   ">
                    <div class="text-xs w-full md:text-lg flex flex-wrap   md:justify-between">
                        <a href="/" class="px-3 py-1">Home</a>
                        <a style="color: black;  text-decoration: none!important;" href="{{route('all_course')}}" class="px-3 py-1    ">Courses</a>
                        <a style="color: black;  text-decoration: none!important;" href="{{route('verifiedInstitute')}}" class="px-3  py-1 hover:underline "> Verified Institute  </a>
                        <a style="color: black;  text-decoration: none!important;" href="{{route('successStudent')}}" class="px-3 py-1  hover:underline ">Success Students</a>
                        <a style="color: black;  text-decoration: none!important;" href="{{route('result')}}" class="px-3 py-1  hover:underline ">Student Result</a>
                        <a style="color: black;  text-decoration: none!important;" href="{{route('center-request.create')}}" class="px-3  py-1 hover:underline ">Institute Apply</a>
                        <a style="color: black;  text-decoration: none!important;" href="{{route('login')}}" class="px-3 py-1  hover:underline ">Institute Login</a>
                        <a style="color: black;  text-decoration: none!important;" href="{{route('contactUs')}}" class="px-3  py-1 hover:underline ">Contact Us</a>

                    </div>
                </div>

            </nav>
        </div>
    </nav>

</header>


<style>
    #carouselExample img {
        max-width: 100%;
        max-height: 700px;
    }

    #carouselExample {
        overflow: hidden;
    }

    .ticker h6 {
        color: white;
        margin-top: 12%;
        height: 10px;
        text-transform: uppercase;
        text-align: center;
    }

    @media (max-width: 768px) {
        #carouselExample img {
            max-height: 500px;
            max-width: 80%;
        }
    }

    @media (max-width: 576px) {
        #carouselExample img {
            max-height: 400px;
            max-width: 56%;
        }
    }

    /*notice_board*/

    .notice_board_wrap {
        border: 1px solid #dddddd;
        padding: 0 0 10px 0;
        background: #ffffff;
        background: -moz-linear-gradient(top, #ffffff 0%, #ebebeb 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #ebebeb));
        background: -webkit-linear-gradient(top, #ffffff 0%, #ebebeb 100%);
        background: -o-linear-gradient(top, #ffffff 0%, #ebebeb 100%);
        background: -ms-linear-gradient(top, #ffffff 0%, #ebebeb 100%);
        background: linear-gradient(to bottom, #ffffff 0%, #ebebeb 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ebebeb', GradientType=0);
        background: url("/public/bg_notice_board.png") no-repeat left top #EBEBEB !important;
        padding: 20px;
        padding-left: 100px;
        padding-bottom: 10px;
    }

    .notice_board ul li {
        background: transparent;
        border: none;
        padding: 0;
        padding-left: 10px;
    }

    .notice_board ul li a {
        border-bottom: 1px dashed;
        text-decoration: none;
    }

    .notice_board .all_btn {
        background-image: linear-gradient(to bottom, #666, #a6a6a6);
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #a2a2a2;
        padding: 0 5px;
        color: #fff;
        background-color: #a6a6a6;
        text-decoration: none;
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swipper_cont {
        background-color: #EFEFEF;
        border: 1px solid #CCCCCC;
        margin: 20px auto;
        padding: 10px;
        padding-left: 100px;
        position: relative;
    }

    .swpiiper_title {
        display: inline-block;
        position: absolute;
        margin-top: 10px;
        font-weight: 700;
    }

    .swipper_cont .swiper-slide {
        justify-content: start;
        text-align: start;
    }

    .swiper-wrapper {
        padding-left: 55px;
    }

    .swpiiper_all_btn {
        position: absolute;
        right: 10px;
        top: 5px;
        background-image: linear-gradient(to bottom, #666, #a6a6a6);
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #a2a2a2;
        padding: 0 5px;
        color: #fff;
        background-color: #a6a6a6;
        text-decoration: none;
        z-index: 10;
    }

    .flip-box {
        background-color: transparent;
        /*width: 300px;*/
        min-height: 387px;
        /*border: 1px solid #f1f1f1;*/
        perspective: 1000px;
    }

    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
    }

    .flip-box-front,
    .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-box-front {
        /*background-color: #bbb;*/
        color: black;
    }

    .flip-box-back {
        /*background-color: dodgerblue;*/
        color: white;
        transform: rotateY(180deg);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 8px;
    }
</style>

{{$slot}}

<style>
    .carousel-inner {
        height: 320px !important;
        width: 960px;
        margin: auto;
    }

    .carousel-item img {
        max-width: 100%;
        max-height: 100%;
        display: block;
        width: 100%;
        height: auto;
    }

    .carousel-item img {
        transition: opacity 2000ms ease-in-out 0s;
    }
</style>

<style>
    .rslides {
        position: relative;
        list-style: none;
        overflow: hidden;
        width: 100%;
        padding: 0;
        margin: 0;
    }

    .rslides li {
        -webkit-backface-visibility: hidden;
        position: absolute;
        display: none;
        width: 100%;
        left: 0;
        top: 0;
    }

    .rslides li:first-child {
        position: relative;
        display: block;
        float: left;
    }

    .rslides img {
        display: block;
        height: 450px;
        float: left;
        width: 100%;
        border: 0;
    }
</style>

<section id="footer">
    <div class="container-fluid footer">
        <div class="footer-cust">
            <div class="column-1">
                <ul class="contact-list">
                    <li class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                        <span>idb Computer Village Second Level-6, Block-A, Dhaka</span>
                    </li>
                    <li class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                        <a href="tel:+01895270146" class="content">01895270146</a>
                    </li>

                    <li class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                        <a href="mailto:+bysttbd@gmail.com" class="content">bysttbd@gmail.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 column-2">
                <div class="footer_image">
                    <img src="{{asset('images/1711405466.jpg')}}" style="width: 100%; height: inherit;">

                </div>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <h1>&copy; Copyright 2024. All Rights Reserved By  </h1>
    </div>
</section>









<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="/user/jquery.counterup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 5,
            time: 1000
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    var img = document.querySelector(".footer_image img");
    var imgRect = img.getBoundingClientRect();

    function res() {

        var parent = document.querySelector(".column-2");
        var parentRect = parent.getBoundingClientRect();


        if (imgRect.width < imgRect.height) {
            console.log(32)
            $(`.footer_image`).removeClass(`footer_image_wrap_noeffect`);
            $(`.footer_image`).addClass(`footer_image_wrap`);

            $(`.footer_image_wrap img`).height(parentRect.width);
            $(`.footer_image_wrap img`).width(parentRect.height);
            img.style.height = parentRect.width;
            img.style.right = -parentRect.height + "px";

        } else {

            $(`.footer_image`).removeClass(`footer_image_wrap`);
            $(`.footer_image`).addClass(`footer_image_wrap_noeffect`);

            $(`.footer_image_wrap_noeffect img`).height(parentRect.height);
            $(`.footer_image_wrap_noeffect img`).width(parentRect.width);

        }


    }
    window.addEventListener('resize', res);
    window.addEventListener("DOMContentLoaded", function() {
        res();
        res();
    });
</script>
<script>
    jQuery(document).ready(function($) {
        $(".rslides").responsiveSlides({
            auto: true,
            speed: 1000,
            timeout: 4000,
        });
    })
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        loop: true,
        loopFillGroupWithBlank: false,
        autoplay: true
    });
</script>

</body>

</html>
