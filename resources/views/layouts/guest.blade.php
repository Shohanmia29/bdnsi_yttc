<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="{{asset('image/img/icon.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{$title ?? "Bangladesh Technical & IT Institute"}}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}"   />
    <link rel="icon" href="{{ asset('logo.png') }}">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- owl carouse -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- facebook sdk -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="YcJh7p6P"></script>

</head>
<body  >


<nav class="bg-green-700 max-w-6xl mx-auto   mb-2 border-gray-200 py-2.5 ">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a href="#" class="flex items-center text-white">
            <img src="{{asset('logo.png')}}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Btsibd</span>
        </a>
        <div class="flex items-center lg:order-2">
            <div class="hidden mt-2 mr-4 sm:inline-block">
                <span></span>
            </div>


            <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="true">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col text-white mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="{{route('welcome')}}"
                       class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent   lg:p-0 dark:text-white"
                       aria-current="page">Home</a>
                </li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{route('verifiedInstitute')}}">Verified Institutions</a></li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{route('all_course')}}">Courses</a></li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{route('successStudent')}}">Our Success Students </a></li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{ route('result') }}">Result</a></li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{route('contactUs')}}">Contact Us</a></li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{ route('center-request.create') }}">Center Request</a></li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{ route('login') }}">Center Login</a></li>



            </ul>
        </div>
    </div>
</nav>




{{$slot}}


<section class="bg-[#21225F] ">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4  py-14">
        <div class="mb-6 md:mb-0">
            <p class="text-2xl text-white font-bold text-center sm:text-start">Contact Us</p>
            <div class="w-full bg-white mt-1" style="height: 1px;"></div>

            <div class="flex justify-center mt-6">
                <ul>
                    <li class="flex text-white mb-4">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </a>
                        <span class="ml-3 text-lg">21/1, Haque Mansion, Zigatola, Dhanmondi, Dhaka</span>
                    </li>
                    <li class="flex items-center text-white mb-4">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </a>
                        <span class="ml-3 text-lg">btsi@gmail.com</span>
                    </li>
                    <li class="flex items-center text-white mb-4">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                            </svg>
                        </a>
                        <span class="ml-3 text-lg">+880239399393 +880333378787</span>
                    </li>

                </ul>
            </div>

        </div>
        <div class="mb-6 md:mb-0">
            <p class="text-2xl text-white font-bold text-center sm:text-start">Social Link</p>
            <div class="w-full bg-white mt-1" style="height: 1px;"></div>

            <div class="   text-white font-bold w-full mt-6 px-5">
                   <ul>
                        <li>Contact Us</li>
                        <li>About Us</li>
                        <li>Gallery</li>
                   </ul>

                  <div class="mt-3">
                      <ul class="flex gap-2">
                          <li><a href="https://facebook.com"><img src="facebook-icon.svg" alt="Facebook"></a></li>
                          <li><a href="https://twitter.com"><img src="twitter-icon.svg" alt="Twitter"></a></li>
                          <li><a href="https://instagram.com"><img src="instagram-icon.svg" alt="Instagram"></a></li>
                      </ul>
                  </div>
            </div>
        </div>
    </div>
</section>

<section>
    <p class="flex justify-center py-2 px-4 text-sm sm:text-base">BTSI © 2022 All rights reserved. Developed by <a class="ml-1 " href="http://www.mmitsoft.com" target="_blank"> MMIT SOFT LTD</a></p>
</section>

<script src="{{mix('js/app.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 24,
            items: 1,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
        });
    });
</script>

<script>
    $('#owl-carousel-partner').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
    });

</script>

<script>
    $('#owl-carousel-course').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

</script>


</body>
</html>
