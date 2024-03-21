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
    <img class="md:h-[250px] w-full  " src="{{asset('frontend/banner.jpg')}}" alt="Logo">
</div>

<div class="">
    <nav class="  bg-[#F8F9FA] flex flex-wrap items-center justify-between py-1">
        <div class="block lg:hidden p-2">
            <button id="menu-toggle" class="flex items-center px-3 py-2 border rounded text-gray-600 border-gray-400  ">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>

        <div class="container flex justify-center">
            <div class="w-full items-center block lg:flex p-2 md:p-0 lg:items-center lg:w-auto hidden" id="menu">
                <div class="text-sm text-lg font-semibold lg:flex-grow ">
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-black capitalize hover:text-gray-500 mr-5">Home</a>
                    <a href="{{route('all_course')}}" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">Courses</a>
                    <a href="{{route('verifiedInstitute')}}" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5"> Verified Institute  </a>
                    <a href="{{route('successStudent')}}" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">Success Students</a>
                    <a href="{{route('result')}}" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">Student Result</a>
                    <a href="{{route('center-request.create')}}" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">Institute Apply</a>
                    <a href="{{route('login')}}" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">Institute Login</a>
                    <a href="" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">Notice</a>
                </div>
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


{{$slot}}


<!--Footer-->
<footer class="bg-gray-800  flex p-10 mt-10 left-5 items-center justify-center">
    <div class="flex">
        <div class="container mx-auto flex flex-col  text-white">
            <p>Gazipur Hi-Tech park, Gazipur</p>
            <p>
                <i class="text-white fas fa-map-marker-alt mr-2"></i>
                Gazipur, Bangladesh
            </p>
            <p>
                <i class="text-white fas fa-phone-alt mr-2"></i>
                +8801915161764
            </p>
            <p>
                <i class="text-white far fa-envelope mr-2"></i>
                btcisbd@gmail.com
            </p>
        </div>
        <div class="flex  mt-4">
            <img class="object-cover w-100 h-80 mr-4" src="{{asset('frontend/Footer.jpg')}}" alt="Logo">
            <img class="object-cover w-100 h-auto" src="{{asset('frontend/Footer.jpg')}}" alt="Logo">
        </div>
    </div>
</footer>


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
