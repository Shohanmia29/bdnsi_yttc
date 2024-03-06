<x-guest-layout>

    {{--<section class="">
        <div class="owl-carousel owl-theme">
            <div class="item overflow-hidden md:h-[500px] w-full " style="background-color: black;">
                <img class="" style="height: 500px;" src="{{asset('frontend/banner.jpeg')}}" alt="">
            </div>
            <div class="item">
                <img class="" style="height: 500px;" src="{{asset('frontend/banner.jpeg')}}" alt="">
            </div>
        </div>
    </section>--}}

    <section class="w-full">
        <div class="w-full">
            <div class="overflow-hidden md:h-[500px] w-full " style="background-color: black;">
                <img class="w-full" style="height: 500px;" src="{{asset('frontend/banner.jpeg')}}" alt="">
            </div>
        </div>
    </section>

{{--    <div class="w-full  h-auto">
        <img class=" w-full h-[100px]  " src="{{asset('logo.png')}}" alt="Logo">
    </div>--}}

    <div class="container max-w-7xl mx-auto">
        <div class="bg-gray-200 my-5">
            <div class="flex w-full gap-5">
                <div>
                    <img src="https://byttc.com.bd/public/bg_notice_board.png" alt="" />
                </div>
                <div>
                    <div class="text-md font-bold md:text-2xl">Notice Board</div>
                    <div class="mt-2 flex items-center gap-3 text-[#5258CC]">
                        <div>
                            <img src="https://byttc.com.bd/public/bullet_tick.png" alt="" />
                        </div>
                        <div class="border-b border-dashed border-black">২১‌শে ফেব্রুয়া‌রি পালন সংক্রান্ত...</div>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-end px-3   py-1">
                <a href="" class="bg-[#6B6B6B] px-3 font-semibold text-white">All Notice</a>
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
    </div>


</x-guest-layout>
