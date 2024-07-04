<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh Youth Technical Training</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="icon" href="{{asset('images/new/logo.png')}}">
    <!-- owl carouse -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navActive{
            background-color: lightgrey;
            border-radius: 5px;
            padding: 5px 10px;
            color: #000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>
<div class="">
    <img class="md:h-[250px] w-full  " src="{{asset('images/new/BannerDesign.jpg')}}" alt="Logo">
</div>

<div class="w-full">
    <nav class=" w-full bg-gray-200   py-1">
        <div class=" max-w-6xl mx-auto flex flex-wrap font-semibold   ">
                   <div class="text-xs w-full md:text-lg flex flex-wrap   md:justify-between">
                       <a href="/" class="px-3 py-1">Home</a>
                       <a href="{{route('all_course')}}" class="px-3 py-1  @if(request()->routeIs('all_course'))  navActive @endif  hover:underline">Courses</a>
                       <a href="{{route('verifiedInstitute')}}" class="px-3 @if(request()->routeIs('verifiedInstitute')) navActive @endif  py-1 hover:underline "> Verified Institute  </a>
                       <a href="{{route('successStudent')}}" class="px-3 py-1 @if(request()->routeIs('successStudent')) navActive @endif  hover:underline ">Success Students</a>
                       <a href="{{route('result')}}" class="px-3 py-1 @if(request()->routeIs('result')) navActive @endif  hover:underline ">Student Result</a>
                       <a href="{{route('center-request.create')}}" class="px-3 py-1 @if(request()->routeIs('center-request.create')) navActive @endif  hover:underline ">Institute Apply</a>
                       <a href="{{route('login')}}" class="px-3 py-1 hover:underline @if(request()->routeIs('login')) navActive @endif  ">Institute Login</a>
                       <a href="{{route('contactUs')}}" class="px-3 py-1 hover:underline  @if(request()->routeIs('contactUs')) navActive @endif ">Contact Us</a>

                   </div>
        </div>

    </nav>
</div>

<script>
    document.getElementById('menu-toggle').onclick = function() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    }
</script>


 <div class="bg-white">
     {{$slot}}
 </div>
<link rel="stylesheet" href="{{asset('frontend/style.css')}}">


<section id="footer">
    <div class="bg-[purple]">
        <div class=" max-w-5xl mx-auto flex px-2 py-5 md:px-10">
            <div class="  w-full md:w-[40%]  text-white">
                <ul class="contact-list">
                    <li class="flex items-center py-2 gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <span>Ashulia, Savar Dhaka</span>
                    </li>
                    <li class="flex items-center py-2  gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        <a href="tel:+01895270146" class="content">01895270146</a>
                    </li>

                    <li class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        <a href="mailto:+bysttbd@gmail.com" class="content">bysttbd@gmail.com</a>
                    </li>


                </ul>
            </div>
            <div class="  w-full md:w-[60%]">
                <div class=" ">
                    <img src="{{asset('images/1711405466.jpg')}}" style="width: 100%; height: inherit;" />
                </div>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <h1>&copy; Copyright 2024. All Rights Reserved By  </h1>
    </div>
</section>
{{--<footer class="bg-gray-800 text-white py-10  ">
        <div class="max-w-6xl mx-auto px-2">
            <div class="container mx-auto flex flex-wrap md:justify-between items-center">
                <div>
                    <h3 class="text-lg font-bold">Bangladesh Youth Skills &  Techical  Training</h3>
                    <p class="mt-2"> .</p>
                </div>
                <div>
                    <h4 class="text-lg font-bold">Contact Us</h4>
                    <ul class="mt-2">
                        <li class="flex gap-2 mt-1">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>

                            bysttbd@gmail.com </li>
                        <li class="flex gap-2 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>

                            01895270146</li>
                        <li class="flex gap-2 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            Ashulia, Savar Dhaka

                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold">Follow Us</h4>
                    <ul class="mt-2 flex space-x-4">
                        <li><a href="#" class="hover:text-blue-500">Facebook</a></li>
                        <li><a href="#" class="hover:text-blue-500">Twitter</a></li>
                        <li><a href="#" class="hover:text-blue-500">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
</footer>--}}


{{$script??''}}
<script src="{{mix('js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
</body>
</html>
