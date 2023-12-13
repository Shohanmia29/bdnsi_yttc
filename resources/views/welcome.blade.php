<x-guest-layout>
    <div class="max-w-6xl mx-auto">
        <main>
            <!-- banner section -->
            <section class="">
                <div class="owl-carousel owl-theme">
                      @forelse(\App\Models\Slider::get() as $slider)
                        <div class="item overflow-hidden md:h-[500px] w-full " style="background-color: black;">
                            <img class="h-[300px] md:h-[500px]"   src="{{$slider->photo??''}}" alt="">
                        </div>
                    @empty
                        <div class="item overflow-hidden md:h-[500px] w-full " style="background-color: black;">
                            <img class="" style="height: 500px;" src="{{asset('images/slider/slider.gif')}}" alt="">
                        </div>
                    @endforelse
                </div>

                 <div class="flex items-center">
                     <button class="px-4 py-2 bg-black text-white ">Notice</button>
                     <marquee class="font-bold" behavior="" direction="">{{\App\Models\ConfigDictionary::get('notice','This is Notice')}} </marquee>
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
                            <img class="w-full border-b md:h-40" src="{{$course->photo??''}}" alt="">
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
                            <p class="text-2xl md:text-3xl lg:text-4xl font-semibold md:mt-14">About Us</p>
                            <p class="mt-4 text-md md:text-xl text-justify">
                                বাংলা‌দেশ যুব কা‌রিগ‌রি প্রশিক্ষন সেল দীর্ঘ পথ পা‌ড়ি দি‌য়ে ৬ বছরে পর্দাপণ করেছে। এ জন্য সকল ছাত্রছাত্রী, অভিভাবক এবং সকল শুভানুধায়ীদের জানাই আন্তরিক শুভেচ্ছা। পল্লী চিকিৎসকসহ কম্পিউটার, ভূমি জরিপ, ইলেকট্রিক এন্ড হাউজ ওয়্যারিংসহ বিভিন্ন সর্টকোর্সে ভর্তি চলছে। বিস্তারিত জানার জন্য যোগাযোগ করুন আপনার জেলার আঞ্চ‌লিক শাখায়।
                            </p>

                            <div class="flex mt-4 sm:mt-6">
                                <a href="" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-gray-700">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Partners -->
            <section class="my-10 md:my-20">
               <div class="">
                   <div class="   md:p-14  shadow-lg p-5 mb-2 bg-body rounded">
                       <div class="w-full flex flex-wrap justify-center md:justify-between text-lg font-bold">
                           <div class=" w-full md:w-auto ">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10">
                                   <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                               </svg>

                               <h2 class="text-[#683091]">1050</h2>
                               <h3>Center</h3>
                           </div>
                           <div class="w-full md:w-auto  ">

                               <svg  class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"  >
                                   <path d="M10.75 16.82A7.462 7.462 0 0115 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0018 15.06v-11a.75.75 0 00-.546-.721A9.006 9.006 0 0015 3a8.963 8.963 0 00-4.25 1.065V16.82zM9.25 4.065A8.963 8.963 0 005 3c-.85 0-1.673.118-2.454.339A.75.75 0 002 4.06v11a.75.75 0 00.954.721A7.506 7.506 0 015 15.5c1.579 0 3.042.487 4.25 1.32V4.065z" />
                               </svg>

                               <h2 class="text-[#683091]">300</h2>
                               <h3>Courses</h3>
                           </div>
                           <div class="w-full md:w-auto  ">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10">
                                   <path fill-rule="evenodd" d="M3.25 3A2.25 2.25 0 001 5.25v9.5A2.25 2.25 0 003.25 17h13.5A2.25 2.25 0 0019 14.75v-9.5A2.25 2.25 0 0016.75 3H3.25zM2.5 9v5.75c0 .414.336.75.75.75h13.5a.75.75 0 00.75-.75V9h-15zM4 5.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V6a.75.75 0 00-.75-.75H4zM6.25 6A.75.75 0 017 5.25h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H7a.75.75 0 01-.75-.75V6zM10 5.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V6a.75.75 0 00-.75-.75H10z" clip-rule="evenodd" />
                               </svg>
                               <h2 class="text-[#683091]">50</h2>
                               <h3>Exam</h3>
                           </div>
                           <div class="w-full md:w-auto  ">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10">
                                   <path d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z" />
                               </svg>


                               <h2 class="text-[#683091]">40675788</h2>
                               <h3>Students</h3>

                           </div>
                       </div>
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
                        <p class="text-3xl font-bold">Apply now for your center Registration</p>
                        <p class="mt-5 text-lg">Subscribe & get latest news and growth opportunities!</p>
                        <div class="mt-5 block sm:flex items-center justify-center">
                            <input type="email" class="px-8 py-2 rounded-lg focus:shadow-lg focus:shadow-gray-300 focus:outline-none focus:ring focus:bg-primary-300">
                            <a href="{{route('center-request.create')}}" class="bg-gray-900 mt-4 sm:mt-0 px-5 py-2 ml-4 focus:shadow-lg focus:shadow-gray-300 rounded-lg">Apply Now</a>
                        </div>
                    </div>
                </div>
            </section>


        </main>
    </div>
</x-guest-layout>
