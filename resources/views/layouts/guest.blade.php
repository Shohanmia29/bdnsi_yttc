<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="flex min-h-screen flex-col">
    <div class="w-full py-8 text-center text-4xl">
        <div class="mx-auto w-full max-w-4xl text-center">{{ config('app.name') }}</div>
    </div>
   <div class="w-full md:w-1/2 mx-auto flex ">
              <div class="md:w-[15%]">
                    <div class="   py-1 px-6 bg-[#002147] text-white font-bold">
                        Notice
                    </div>
              </div>
          <div class="w-[90%]">
              <marquee behavior="" direction="">
                  {{\App\Models\ConfigDictionary::get('notice')}}
              </marquee>
          </div>
   </div>
    <div class="w-full bg-slate-500">
        <section class="shadow-lg sticky top-0 z-50 bg-slate-500" style="box-shadow: 0px 0px 7px 0pxrgba(0,0,0,0.5);">
            <div class="max-w-7xl mx-auto  flex flex-wrap md:flex-nowrap justify-between items-center my-1 py-2" x-data="{ menuOpen: false }">
                <div class="flex w-1/2 justify-end md:hidden">
                    <a href="#" x-on:click="menuOpen = !menuOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </a>
                </div>
                <div class="w-full md:flex md:justify-end mb-3 md:mb-0" x-bind:class="menuOpen ? 'flex' :'hidden'">
                    <ul class="flex flex-wrap  md:flex-nowrap font-semibold text-white">
                        <li class="w-full md:w-auto mx-4 border-b md:border-none my-2 md:my-0"><a href="{{route('welcome')}}">Home</a></li>
                        <li class="w-full md:w-auto mx-4 border-b md:border-none my-2 md:my-0"><a href="">Verified Institutions</a></li>
                        <li class="w-full md:w-auto mx-4 border-b md:border-none my-2 md:my-0"><a href="">Courses</a></li>
                        <li class="w-full md:w-auto mx-4 border-b md:border-none my-2 md:my-0"><a href="">Our Students Success</a></li>
                        <li class="w-full md:w-auto mx-4 border-b md:border-none my-2 md:my-0"><a href="{{ route('result') }}">Result</a></li>
                        <li class="w-full md:w-auto mx-4 border-b md:border-none my-2 md:my-0"><a href="{{route('contactUs')}}">Contact Us</a></li>
                        <li class="w-full md:w-auto mx-4 border-b md:border-none my-2 md:my-0"><a href="{{ route('center-request.create') }}">Center Request</a></li>
                        <li class="w-full md:w-auto mx-4 border-b md:border-none my-2 md:my-0"><a href="{{ route('login') }}">Center Login</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <div class="w-full flex-grow">
        {{ $slot }}
    </div>
    <div class="w-full mt-8">
        <footer class="relative bg-slate-500 pt-8 pb-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap text-left lg:text-left">
                    <div class="w-full lg:w-6/12 px-4">
                        <h4 class="text-3xl fonat-semibold text-blueGray-700 text-white">Let's keep in touch!</h4>
                        <h5 class="text-lg mt-0 mb-2 text-blueGray-600 text-white">
                            Find us on any of these platforms, we respond 1-2 business days.
                        </h5>
                        <div class="mt-6 lg:mb-0 mb-6">
                            <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                <i class="fab fa-dribbble"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6 text-white">
                            <div class="w-full lg:w-4/12 px-4 ml-auto">
                                <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="{{route('dynamicPage',['about_us'=>'about_us'])}}">About Us </a>
                                    </li>
                                    <li>            <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="{{route('contactUs')}}">Contact Us</a></li>

                                </ul>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other Resources</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">MIT License</a>
                                    </li>
                                    <li>

                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="{{route('dynamicPage',['terms_and_condition'=>'terms_and_condition'])}}">Terms &amp; Conditions</a>
                                    </li>
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="{{route('dynamicPage',['privacy_policy'=>'privacy_policy'])}}">Privacy Policy</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-blueGray-300">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                        <div class="text-sm text-blueGray-500 font-semibold py-1 text-white">
                            Copyright © <span id="get-current-year">2023</span><a href="#" class="text-blueGray-500 hover:text-gray-800" target="_blank"> Design & Development by</a>
                                <a href="#" class="text-blueGray-500 hover:text-blueGray-800">MMIT Soft Ltd</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    {{ $script ?? '' }}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
            },
        });
    </script>
</div>
</body>
</html>
