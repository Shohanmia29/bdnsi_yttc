<x-guest-layout>
    <div class="max-w-7xl mx-auto">
        <main>
            <!-- banner section -->
            <section class="">
                <div class="owl-carousel owl-theme">
                    <div class="item overflow-hidden md:h-[500px] w-full " style="background-color: black;">
                        <img class="" style="height: 500px;" src="https://blogassets.leverageedu.com/blog/wp-content/uploads/2019/10/23170101/List-of-Professional-Courses-after-Graduation.gif" alt="">
                    </div>
                </div>
            </section>


            <!-- popular course section -->
            <section class="mx-4 my-10">
                <div class="w-full text-center mb-10">
                    <p class="text-2xl sm:text-4xl font-bold text-success-500">Our Courses</p>
                    <div class="bg-primary-500 flex  mx-auto mt-3" style="height: 3px; width:200px"></div>
                </div>

                <div class="w-full flex flex-wrap p-10">
                    @foreach($courses as $course)
                    <div class="w-1/2 md:w-1/4 p-4">
                        <div class="w-full  shadow-lg rounded-md border ">
                            <img class="w-full border-b" src="{{$course->image??''}}" alt="">
                            <div class="p-2 text-center">
                               {{$course->name??''}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </section>

            <section class=" my-10 md:my-20">
                <div class=" bg-blue-50 sm:w-full rounded-none sm:rounded-3xl px-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-10">
                        <div class="flex justify-center">
                            <img src="{{asset('about.png')}}" alt="">
                        </div>
                        <div class="mx-0 sm:mx-4 my-4 sm:my-5">
                            <p class="text-2xl md:text-3xl lg:text-4xl font-semibold md:mt-14">We Focused on Your Success</p>
                            <p class="mt-4 text-md md:text-xl text-justify">From a hands-on education to opportunities to work alongside industry professionals, there are countless reasons students choose us.</p>
                            <p class="mt-4 text-md md:text-xl text-justify">WE'RE NOT YOUR AVERAGE IT TRAINING COMPANY</p>
                            <p class="mt-4 text-md md:text-xl text-justify">Nothing makes us more proud than watching our students thrive and achieve their goals. We believe in delivering quality education to our students and going the extra mile!
                                Also We Provide Internship Opportunity in our company so that you can learn extra from others because we believe you are the future.</p>

                            <div class="flex mt-4 sm:mt-6">
                                <a href="" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-gray-700">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Partners -->
            <section class="my-10 md:my-20">
                <div class="w-full bg-gray-900 grid grid-cols-1 md:grid-cols-3 py-12 rounded text-white">
                    <div class="text-center mb-10 md:mb-0">
                        <p class="text-2xl font-bold mb-3">Sharing Knowledge</p>
                        <p>Opportunity to share knowledge with developers</p>
                    </div>
                    <div class="text-center mb-10 md:mb-0">
                        <p class="text-2xl font-bold mb-3">Small Class Sizes</p>
                        <p>With an average class size of 20 students</p>
                    </div>
                    <div class="text-center mb-10 md:mb-0">
                        <p class="text-2xl font-bold mb-3">Experienced Faculty</p>
                        <p>With first-hand industry experience</p>
                    </div>
                </div>
            </section>


{{--            <!-- Partners -->
            <section class="my-10 md:my-20">
                <div class="">
                    <div class="w-full text-center mb-10">
                        <!-- <p class="text-xl font-semibold text-primary-500">All Courses>></p> -->
                        <p class="text-2xl sm:text-4xl font-bold text-success-500">Partners</p>
                        <div class="bg-primary-500 flex  mx-auto mt-3" style="height: 3px; width:200px"></div>
                    </div>

                    <div id="owl-carousel-partner" class="owl-carousel owl-theme">
                        <div class="item rounded-b-xl mx-3">
                            <a href=" ">
                                <img class="w-20 h-20" src="https://www.mmitsoft.com/wp-content/uploads/2022/04/d-1.png" alt="">
                            </a>
                        </div>
                        <div class="item rounded-b-xl mx-3">
                            <a href="">
                                <img class="w-20 h-20" src="https://www.mmitsoft.com/wp-content/uploads/2022/04/green.png" alt="">
                            </a>
                        </div>
                        <div class="item rounded-b-xl mx-3">
                            <a href="">
                                <img class="w-20 h-20" src="https://www.mmitsoft.com/wp-content/uploads/2020/11/Five-Star-School.jpg" alt="">
                            </a>
                        </div>
                        <div class="item rounded-b-xl mx-3">
                            <a href="">
                                <img class="w-20 h-20" src="https://www.mmitsoft.com/wp-content/uploads/2022/04/a1.jpg" alt="">
                            </a>
                        </div>
                        <div class="item rounded-b-xl mx-3">
                            <a href="">
                                <img class="w-20 h-20" src="https://www.mmitsoft.com/wp-content/uploads/2020/11/Badarganj-Girls-School.jpg" alt="">
                            </a>
                        </div>
                        <div class="item rounded-b-xl mx-3">
                            <a href="">
                                <img class="w-20 h-20" src="https://www.mmitsoft.com/wp-content/uploads/2022/04/annex.png" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </section>--}}


            <section class="my-10 md:my-20 w-full ">
                <div class="bg-blue-600 py-20 rounded  flex justify-center items-center">
                    <div class="text-center text-white px-2">
                        <p class="text-3xl font-bold">Join our Happy Community!</p>
                        <p class="mt-5 text-lg">Subscribe & get latest news and growth opportunities!</p>
                        <div class="mt-5 block sm:flex items-center justify-center">
                            <input type="email" class="px-8 py-2 rounded-lg focus:shadow-lg focus:shadow-gray-300 focus:outline-none focus:ring focus:bg-primary-300">
                            <button class="bg-gray-900 mt-4 sm:mt-0 px-5 py-2 ml-4 focus:shadow-lg focus:shadow-gray-300 rounded-lg">Get Started</button>
                        </div>
                    </div>
                </div>
            </section>


        </main>
    </div>
</x-guest-layout>
