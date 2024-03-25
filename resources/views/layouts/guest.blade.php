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

<div class="w-full">
    <nav class=" w-full bg-gray-200   py-1">
        <div class=" max-w-6xl mx-auto flex font-semibold   ">
                   <div class="text-xs md:text-lg flex flex-wrap">
                       <a href="/" class="px-3 py-1">Home</a>
                       <a href="{{route('all_course')}}" class="px-3 py-1  hover:underline">Courses</a>
                       <a href="{{route('verifiedInstitute')}}" class="px-3 py-1 hover:underline "> Verified Institute  </a>
                       <a href="{{route('successStudent')}}" class="px-3 py-1 hover:underline ">Success Students</a>
                       <a href="{{route('result')}}" class="px-3 py-1 hover:underline ">Student Result</a>
                       <a href="{{route('center-request.create')}}" class="px-3 py-1 hover:underline ">Institute Apply</a>
                       <a href="{{route('login')}}" class="px-3 py-1 hover:underline ">Institute Login</a>

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

<footer class="bg-gray-800 text-white py-10">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <h3 class="text-lg font-bold">Bangladesh Techical creative Institute</h3>
            <p class="mt-2"> .</p>
        </div>
        <div>
            <h4 class="text-lg font-bold">Contact Us</h4>
            <ul class="mt-2">
                <li>Email: btcisbd@gmail.com</li>
                <li>Phone: +8801915161764</li>
                <li>Address: Gazipur Hi-Tech park, Gazipur</li>
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
