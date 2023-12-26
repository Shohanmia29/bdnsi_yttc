<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="{{asset('image/img/icon.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{$title ?? "Bangladesh Engineering & IT DEVELOPMENT"}}</title>
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
        <a href="/" class="flex items-center text-white">
            <img src="{{asset('logo.png')}}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Beitbd</span>
        </a>
        <div class="flex items-center lg:order-2">
            <div class="hidden mt-2 mr-4 sm:inline-block">
                <span></span>
            </div>


            <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg lg:hidden hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1 hidden" id="mobile-menu-2">
            <ul class="flex flex-col text-white mt-4 font-medium lg:flex-row lg:space-x-5 lg:mt-0">
                <li>
                    <a href="{{route('welcome')}}"
                       class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent   lg:p-0 dark:text-white"
                       aria-current="page">Home</a>
                </li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{route('verifiedInstitute')}}">Verified Institutions</a></li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{route('all_course')}}">Courses</a></li>
                <li><a class="block py-2 pl-3 pr-4  border-b border-gray-100 hover:bg-green-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" href="{{route('gallery')}}">Gallery</a></li>
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

<footer>
    <div class="bg-gray-800 py-4 text-gray-400">
        <div class="container px-4 mx-auto">
            <div class="-mx-4 flex flex-wrap justify-between">
                <div class="px-4 my-4 w-full xl:w-1/5">
                    <a href="/" class="block w-56 mb-10">
                         <div class="flex gap-2">
                             <img class="w-10 h-10" src="{{asset('logo.png')}}" alt="">
                               <div class="text-2xl md:text-3xl font-bold">
                                   Beitbd
                               </div>
                         </div>
                    </a>

                    <div class="flex justify-center mt-6">
                        <ul>
                            <li class="flex text-white mb-4">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </a>
                                <span class="ml-3 text-lg">Kabi Vashkar Shashanka Mohan Sen Road, Dhalghat, Patiya, Chattogram.</span>
                            </li>
                            <li class="flex items-center text-white mb-4">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </a>
                                <span class="ml-3 text-lg">info.beitbd@gmail.com</span>
                            </li>
                            <li class="flex items-center text-white mb-4">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                    </svg>
                                </a>
                                <span class="ml-3 text-lg">01533-886037</span>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="px-4 my-4 w-full sm:w-auto">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Company</h2>
                    </div>
                    <ul class="leading-8">
                        <li><a href="#" class="hover:text-blue-400">About Us</a></li>
                        <li><a href="#" class="hover:text-blue-400">Terms &amp; Conditions</a></li>
                        <li><a href="#" class="hover:text-blue-400">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-blue-400">Contact Us</a></li>
                    </ul>
                </div>

                <div class="px-4 my-4 w-full sm:w-auto xl:w-1/5">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Connect With Us</h2>
                    </div>
                    <a target="_blank" href="{{\App\Models\ConfigDictionary::get('facebook_link')}}" class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                        </svg>
                    </a>
                    <a target="_blank" href="{{\App\Models\ConfigDictionary::get('twitter_link')}}" class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                        </svg>
                    </a>

                    <a href="{{\App\Models\ConfigDictionary::get('linkedin_link')}}" class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"   x="0" y="0" viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 512 512" xml:space="preserve"  ><g><circle cx="56.098" cy="56.097" r="56.098" style="" fill="#007ab9" data-original="#007ab9" class=""></circle><path d="M89.616 60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118-3.705 0-5.906 2.491-6.878 4.903-.353.862-.444 2.059-.444 3.268v22.524h-13.41s.18-36.546 0-40.329h13.411v5.715c-.027.045-.065.089-.089.132h.089v-.132c1.782-2.742 4.96-6.662 12.085-6.662 8.822 0 15.436 5.764 15.436 18.149zm-54.96-36.642c-4.587 0-7.588 3.011-7.588 6.967 0 3.872 2.914 6.97 7.412 6.97h.087c4.677 0 7.585-3.098 7.585-6.97-.089-3.956-2.908-6.967-7.496-6.967zm-6.791 59.77H41.27v-40.33H27.865v40.33z" style="" fill="#f1f2f2" data-original="#f1f2f2"></path></g></svg>
                    </a>

                    <a target="_blank" href="{{\App\Models\ConfigDictionary::get('youtube_link')}}" class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full hover:text-blue-400 hover:border-blue-400">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-indigo-700 py-4 text-gray-100">
        <div class="container mx-auto px-4">
            <div class="-mx-4 flex flex-wrap justify-between">
                <div class="px-4 w-full text-center sm:w-auto sm:text-left">
                    Copyright © 2018
                    <script>new Date().getFullYear() > 2020 && document.write("- " + new Date().getFullYear())</script>-
                     . All Rights Reserved.
                </div>
                <div class="px-4 w-full text-center sm:w-auto sm:text-left">
                    <a href="https://www.mmitsoft.com/">
                        Made with ❤️ by MMITSOFT.
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


{{$script??''}}
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
