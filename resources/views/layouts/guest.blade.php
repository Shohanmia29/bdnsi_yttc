<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
</head>

<div class="">
    <img class="h-[250px] w-full object-cover" src="{{asset('frontend/Navbar.jpg')}}" alt="Logo">
</div>

<div class="">
    <nav class="container mx-auto flex flex-wrap items-center justify-between py-4">
        <div class="block lg:hidden">
            <button id="menu-toggle" class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="container shadow-lg flex justify-center">
            <div class="w-full items-center block lg:flex lg:items-center lg:w-auto hidden" id="menu">
                <div class="text-sm text-lg font-bold lg:flex-grow">
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">HOME</a>
                    <a href="Courses.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">COURSES</a>
                    <a href="verified institutes.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">VERIFIED INSTITUTES</a>
                    <a href="success students.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">SUCCESS STUDENTS</a>
                    <a href="Student Result.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">STUDENT RESULT</a>
                    <a href="institute apply.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">INSTITUTE APPLY</a>
                    <a href="institute login.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">INSTITUTE LOGIN</a>
                    <a href="notice.html" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-500 mr-5">NOTICE</a>
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
                byttc@gmail.com
            </p>
        </div>
        <div class="flex  mt-4">
            <img class="object-cover w-100 h-80 mr-4" src="{{asset('frontend/Footer.jpg')}}" alt="Logo">
            <img class="object-cover w-100 h-auto" src="{{asset('frontend/Footer.jpg')}}" alt="Logo">
        </div>
    </div>
</footer>




</body>
</html>
