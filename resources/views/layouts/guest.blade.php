<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Btcisbd</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <!-- owl carouse -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="">
    <img class="md:h-[250px] w-full  " src="{{asset('frontend/newbanner.jpg')}}" alt="Logo">
</div>

<div class="w-full">
    <nav class=" w-full bg-gray-200   py-1">
        <div class=" max-w-6xl mx-auto flex font-semibold   ">
                   <div class="text-xs w-full md:text-lg flex flex-wrap md:justify-between">
                       <a href="/" class="px-3 py-1">Home</a>
                       <a href="{{route('all_course')}}" class="px-3 py-1  hover:underline">Courses</a>
                       <a href="{{route('verifiedInstitute')}}" class="px-3 py-1 hover:underline "> Verified Institute  </a>
                       <a href="{{route('successStudent')}}" class="px-3 py-1 hover:underline ">Success Students</a>
                       <a href="{{route('result')}}" class="px-3 py-1 hover:underline ">Student Result</a>
                       <a href="{{route('center-request.create')}}" class="px-3 py-1 hover:underline ">Institute Apply</a>
                       <a href="{{route('login')}}" class="px-3 py-1 hover:underline ">Institute Login</a>
                       <a href="{{route('contactUs')}}" class="px-3 py-1 hover:underline ">Contact Us</a>

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

<footer class="bg-gray-800 text-white py-10  ">
        <div class="max-w-6xl mx-auto px-2">
            <div class="container mx-auto flex flex-wrap md:justify-between items-center">
                <div>
                    <h3 class="text-lg font-bold">Bangladesh Techical creative Institute</h3>
                    <p class="mt-2"> .</p>
                </div>
                <div>
                    <h4 class="text-lg font-bold">Contact Us</h4>
                    <ul class="mt-2">
                        <li class="flex gap-2 mt-1">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>

                            btcisbd@gmail.com</li>
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
                            idb Computer Village Second Level-6, Block-A, Dhaka

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
</footer>


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
