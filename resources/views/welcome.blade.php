<x-guest-layout>

    <div class="w-full  h-auto">
        <img class=" w-full h-[100px] object-cover" src="" alt="Logo">
    </div>
    <div class="border  border-gray-300 p-4 rounded-md">
        <div class="container mx-auto mt-1 p-1 bg-gray-200">
            <div class="text-2xl font-semibold bg-white p-2 rounded-md">
                <div class="flex items-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        News
                    </button>

                    <marquee class="text-black-500" behavior="scroll" direction="left" scrollamount="8">
                        The independence day
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-10">
        <div class="flex justify-center items-center">
            <div class="w-full max-w-screen-lg relative">
                <img class="w-full h-64 object-cover rounded-lg" src="{{asset('frontend/images/Navbar.jpg')}}" alt="Notice Board Image">
                <div id="menu" class="absolute inset-0 bg-black opacity-50"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <h2 class="text-xl text-white font-bold">Notice Board</h2>
                    <div class="mt-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Notice</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Flip box -->
    <div class="mt-5 flex justify-center mt-20">
        <div class="shopping-cart mx-auto">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h2>Item 1 Front</h2>
                    </div>
                    <div class="card-back">
                        <h2>Item 1 Back</h2>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h2>Item 2 Front</h2>
                    </div>
                    <div class="card-back">
                        <h2>Item 2 Back</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center mt-10">
        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">All Courses</button>
    </div>
    <!-- Apply Now for Your Institute Registration  -->
    <div class="rounded border mt-20">
        <div class="bg-purple-400 h-64 w-full flex flex-col justify-center items-center mt-5">
            <p class="text-white text-center text-3xl font-bold mb-4">Apply Now for Your Institute Registration</p>
            <button class="bg-white text-purple-400 font-bold py-2 px-4 rounded hover:bg-purple-400 hover:text-white">Apply Now</button>
        </div>
    </div>

    <!-- Cart  -->
    <div class="flex justify-center mt-20">
        <div class="bg-white container w-full rounded-lg shadow-lg p-8 flex justify-between">
            <div class="flex flex-col justify-center items-center mr-4 mb-4">
                <div class="rounded-full bg-gray-800  flex items-center justify-center w-12 h-12 mb-2">
                    <i class="fas fa-institute"></i>
                </div>
                <div class="text-center">
                    <p class="text-gray-800 text-lg font-bold">1050</p>
                    <p class=" text-2xl font-bold text-black ">Institute</p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center mr-8 mb-4">
                <div class="rounded-full bg-gray-800  flex items-center justify-center w-12 h-12 mb-2">
                    <i class="fas fa-book"></i>
                </div>
                <div class="text-center">
                    <p class="text-gray-800 text-lg font-bold">300</p>
                    <p class=" text-2xl font-bold text-black ">Courses</p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center mr-8 mb-4">
                <div class="rounded-full bg-gray-800 text-white flex items-center justify-center w-12 h-12 mb-2">
                    <i class="fas fa-exam"></i>
                </div>
                <div class="text-center">
                    <p class="text-gray-800 text-lg font-bold">120</p>
                    <p class=" text-2xl font-bold text-black ">Exam</p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center">
                <div class="rounded-full bg-gray-800 text-white flex items-center justify-center w-12 h-12 mb-2">
                    <i class="fas fa-users"></i>
                </div>
                <div class="text-center">
                    <p class="text-gray-800 text-lg font-bold">144,223</p>
                    <p class=" text-2xl font-bold text-black ">Students</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
