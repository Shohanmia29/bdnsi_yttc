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
                  <div class="w-full flex justify-center">
                      <a href="all_course" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-gray-700">Show All</a>
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
                                তথ্য ও প্রযুক্তি প্রশিক্ষনের ও কারিগরি প্রশিক্ষণ এর মাধ্যমে তরুন প্রজন্মকে স্বশিক্ষিত করা, আত্ম কর্মসংস্থান সৃষ্টি করা এবং ডিজিটাল বাংলাদেশ গড়ায় সহযোগিতা করা  আমাদের মুল লক্ষ্য।

                            </p>

                            <div class="flex mt-4 sm:mt-6">

                                <div x-data="{ isOpen: false }" x-cloak>
                                    <div class="py-3">
                                        <div x-show="isOpen" @click.away="isOpen = false" class="fixed z-50 inset-0 overflow-y-auto">
                                            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <!-- Background overlay -->
                                                <div x-show="isOpen" class="fixed inset-0 transition-opacity" style="background: rgba(0, 0, 0, 0.5);"></div>

                                                <!-- Modal panel -->
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                                                <div x-show="isOpen" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle w-full sm:max-w-xl sm:w-full">
                                                    <!-- Modal content -->
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        তথ্য ও প্রযুক্তি প্রশিক্ষনের ও কারিগরি প্রশিক্ষণ এর মাধ্যমে তরুন প্রজন্মকে স্বশিক্ষিত করা, আত্ম কর্মসংস্থান সৃষ্টি করা এবং ডিজিটাল বাংলাদেশ গড়ায় সহযোগিতা করা  আমাদের মুল লক্ষ্য।

                                                        প্রাণের সোনার বাংলাদেশকে ২০৪১ সালের পূর্বে উন্নত রাষ্ট্রে পরিণত করতে অত্র প্রতিষ্ঠান The Companies ACT XVIII OF 1994 (See section-115) আইনের অনুকূলে গভঃ রেজিঃ নং- CH-15691/2023 এর আওতাধীন Bangladesh Engineering & IT Developement  নামে সারা দেশব্যাপী একটি প্রকল্প চালুর সিদ্ধান্ত গ্রহণ করে। সে প্রকল্পের আওতাধীন সারা দেশব্যাপী ভিন্ন ভিন্ন নামে রয়েছে বিভিন্ন কম্পিউটার প্রশিক্ষণ কেন্দ্র। আর সে সকল কম্পিউটার প্রশিক্ষণ কেন্দ্রের মাধ্যমে তৃণমূল পর্যায়ে পৌঁছে যাচ্ছে প্রযুক্তির ছোঁয়া।বর্তমানে সারা বিশ্বে মানব সভ্যতার এ চূড়ান্ত বিকাশে প্রযুক্তির অবদান কতটুকু, সে কথা আর নতুন করে বলার অপেক্ষা রাখে না। আধুনিক পৃথিবীর সাথে দ্রুত তাল মিলিয়ে চলতে হলে আমাদেরকেও প্রযুক্তির উপরে গুরুত্ব দিতে হবে। ইতিমধ্যে বাংলাদেশ সরকারের বিভিন্ন মন্ত্রণালয় (যেমন : শিক্ষা, বানিজ্য, বিজ্ঞান ও প্রযুক্তি, পররাষ্ট্র, স্বরাষ্ট্র, অর্থ, কৃষি, যোগাযোগ, ক্রীড়া ও সাংস্কৃতিক), ধান গবেষণা ইনস্টিটিউট, কৃষি সম্প্রসারণ অধিদপ্তর, ভূমি জরিপ অধিদপ্তর, বুয়েট ইঞ্জিনিয়ারিং বিশ্ববিদ্যালয়সহ দেশের বিভিন্ন সরকারি ও বেসরকারি প্রতিষ্ঠান তথ্য প্রযুক্তি ব্যবহারে যুগান্তকারী সাফল্য বয়ে এনেছে। তথ্য প্রযুক্তি আজ গোটা পৃথিবীকে পরিবর্তন করে দিয়েছে যেমন- স্কুল, কলেজ, ব্যাংক, বীমা, ব্যবসা বাণিজ্য, ইন্ডাষ্ট্রি সহ সকল কিছু তথ্য প্রযুক্তি দ্বারা পরিচালিত। সুতরাং বুঝতে হবে প্রযুক্তির এই যুগে কম্পিউটার এর গুরুত্ব কতটুকু! সমগ্র পৃথিবী এখন কম্পিউটার এর উপর নির্ভরশীল, এটা এখন খুব সহজে বলা যায়। বিদ্যা এবং তথ্য প্রযুক্তি অসম্ভবকে সম্ভব করে দিতে পারে। তেমনি আমরা ডিজিটাল বাংলাদেশ গড়ার লক্ষ্যে সরকারে সাথে তাল মিলিয়ে মানুষের পরিবর্তনের জন্য তৃর্ণমূল পর্যায়ে তথ্য প্রযুক্তির উপর কাজ করে যাচ্ছি এবং বিশ্বের সাথে তাল মিলিয়ে চলার জন্য আধুনিক প্রযুক্তি নির্ভর প্রতিষ্ঠান ও প্রশিক্ষণ ব্যবস্থা চালু করেছি। আমরা দ্রুত মানুষের কাছে নতুন কিছু পৌঁছে দিতে চাই। পৃথিবী যখন প্রযুক্তির দিকে এগিয়ে যাচ্ছে সেখানে আমাদের মাতৃভূমি পিছিয়ে থাকার কোন সুযোগ নেই। উন্নত দেশগুলিতে মানুষ ঘরে বসেই কেনাকাটা থেকে শুরু করে সকল কাযর্ক্রম অনলাইনের মাধ্যমে করে থাকে এবং আউটসোসিং এর মাধ্যমে লক্ষ লক্ষ টাকা উপার্জন করে যাচ্ছে। কিন্তু আমাদের দেশে গ্রাম পর্যায়ে এখনও প্রত্যাশিতভাবে প্রযুক্তি নির্ভর সেবার প্রশিক্ষন ব্যবস্থা চালু হয়নি। তাই আমরা চাই দেশের প্রতিটি গ্রাম থেকে শহর পযর্ন্ত প্রযুক্তি নির্ভর সেবার প্রশিক্ষন ব্যবস্থা চালু করতে। যেখানে সাধারণ মানুষ প্রশিক্ষণের পর ঘরে বসেই কম্পিউটার মাধ্যমে সকল কাযর্ক্রম অনলাইনের করতে পারে এবং আউটসোসিং এর মাধ্যমে অর্থ উপার্জন করতে পারে। ইতিমধ্যে বাংলাদেশ সরকারও তৃর্ণমূল পর্যায় থেকে বাধ্যতামূলক কম্পিউটার শিক্ষা চালু করছেন। যেহেতু আজ দেশ দিন দিন বেকারত্বে সংখ্যা বেড়ে চলছে যা দুর করা সকলের দায়িত্ব শুধু সরকারেরই নয়, তাই আমরা কর্মসংস্থানের সুযোগ সৃষ্টির মাধ্যমে দেশের মানুষের পাশে থাকতে চাই। দক্ষ জনবল সৃষ্টি করে দেশকে সামনে এগিয়ে নিয়ে যেতে চাই। আমাদের প্রতিষ্ঠান ডিজিটাল বাংলাদেশ করার লক্ষে এগিযে যাচ্ছে।



                                                        তথ্য প্রযুক্তির কল্যাণে ২০২৫ সালের মধ্যে বাংলাদেশ হবে মধ্যম আয়ের দেশ।


                                                        তথ্যপ্রযুক্তির নতুন দিগন্ত Bangladesh Engineering & IT Developement । ইহা সম্পূর্ণ অরাজনৈতিক, জনসেবামূলক, দক্ষ মানব সম্পদ উন্নয়নের লক্ষ্যে সারাদেশে তথ্য প্রযুক্তির বিকাশ ঘটানো এবং জাতীয় পর্যায়ে তার সুফল বিস্তারের লক্ষ্যে এই প্রতিষ্ঠান প্রতিষ্ঠিত হয়েছে। । প্রাণের সোনার বাংলাদেশকে ২০৪১ সালের পূর্বে উন্নত রাষ্ট্রে পরিণত করতে অত্র প্রতিষ্ঠান The Companies ACT XVIII OF 1994 (See section-115) আইনের অনুকূলে গভঃ রেজিঃ নং- CH-15691/2023 এর আওতাধীন Bangladesh Engineering & IT Developement  নামে সারা দেশব্যাপী একটি প্রকল্প চালুর সিদ্ধান্ত গ্রহণ করে। বাংলাদেশ টেকনিক্যাল এন্ড আইটি ইনস্টিটিউট এর উপর সরকার কর্তৃক অর্পিত ক্ষমতা বলে দেশের প্রতিটি ইউনিয়ন, উপজেলা, ও জেলাগুলোতে বৃহত্তর বিজ্ঞান ও তথ্য প্রযুক্তি, কারিগরী সেবামূলক প্রতিষ্ঠান গড়ে তোলা যার মূল উদ্দেশ্য তথ্য প্রযুক্তি ভিত্তিক গবেষণা ও প্রশিক্ষণের মাধ্যমে কর্মসংস্থান সৃষ্টি করে দেশের সকল পর্যায়ের দারিদ্র বিমোচন করা। অনেকগুলো সেবামূলক প্রকল্পের কাজ হাতে নিয়েছে। যার মধ্যে রয়েছে বাংলাদেশে প্রতিটি ইউনিয়ন, উপজেলা, ও জেলা গুলোতে IT Center  গড়ে তোলা। এই পর্যন্ত প্রায় 600 টিরও বেশি IT প্রতিষ্ঠান সফলতার সাথে তাদের কার্যক্রম চালিয়ে যাচ্ছে।
                                                    </div>
                                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                        <button type="button" @click="isOpen = false" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                            Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-10">
                                        <button type="button" class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-gray-700" @click="isOpen = true">
                                            Read More
                                        </button>
                                    </div>
                                </div>


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
