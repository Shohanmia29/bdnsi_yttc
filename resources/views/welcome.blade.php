<x-guest-layout>
    <div class="w-full">
        <div class="mx-auto flex w-full max-w-full     h-auto">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <img
                            class=" h-auto w-full  "
                            src="{{asset('/images/slider/'.$slider->photo)}}"
                            alt="banner"
                        />

                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="w-full sm:">
        <div class="mx-auto flex flex-col-reverse sm:flex-row w-full max-w-6xl sm: w-full " x-data="{ showFullText: false }" x-cloak>
            <div class="w-2/3 mt-20 sm: w-2/2 mx-auto">
                <div class="w-full text-3xl text-[#076e37] pb-1"> Welcome to </div>
                <span class="text-2xl text-[#eb1c24]">BTSI</span>
                <hr class="mt-2 ">
                <div >
                    <p>
                        <span x-show="!showFullText"
                              x-transition:enter="transition ease-out duration-300"
                              x-transition:enter-start="opacity-0 scale-90"
                              x-transition:enter-end="opacity-100 scale-100"
                              x-transition:leave="transition ease-in duration-300"
                              x-transition:leave-start="opacity-100 scale-100"
                              x-transition:leave-end="opacity-0 scale-90"

                        > {{\Illuminate\Support\Str::limit(\App\Models\ConfigDictionary::get('about_us'),200,$end='...')}}</span>

                     <p
                        x-show="showFullText"
                        class="pt-5"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90"
                    >{{\App\Models\ConfigDictionary::get('about_us')}}
                    </p>

                    </p>
                </div>
                <button @click="showFullText = !showFullText" type="button" class=" mt-5 float-right pt-2 mt-4 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2  mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">READ MORE</button>
            </div>
            <div class="mt-20 sm: mt-5">
                <img class="h-auto max-w-full pl-8" src="{{asset('/logo.png')}}" alt="image description">
            </div>
        </div>
    </div>
    <section id="course">
        <div class="w-full bg-[#F3F4F6] pb-5">
            <div class="mx-auto flex w-full max-w-6xl ">
                <!-- ====== Cards Section Start -->

                <div class="bg-[#F3F4F6] pt-20 pb-10 lg:pt-[50px] lg:pb-10">
                    <div class="text-center pb-5  text-3xl ">

                        Our Courses
                        <hr class="m-2 ">
                    </div>

                      <div class=" max-w-7xl mx-auto   ">
                              <div class="w-full flex flex-wrap">
                                  @foreach($courses as $course)
                                     <div class="w-full md:w-1/4 p-3 ">
                                         <div class="w-full bg-white   rounded-lg shadow-md ">
                                             <img src="{{$course->photo}}" alt="Card Image" class="w-full     ">
                                             <div  class="text-xl  px-2 py-4   text-center font-semibold mb-2">{{$course->name}}</div>
                                         </div>
                                     </div>
                                  @endforeach
                              </div>
                      </div>

                    <div class="container mx-auto">
                        <div class=" flex flex-wrap">
                        </div>
                        <a href="{{url('/all_course')}}" class="float-right text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 rounded-lg px-4 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            SHOW ALL
                        </a>

                    </div>

                </div>
                <!-- ====== Cards Section End -->

            </div>
        </div>
    </section>


    <div class="flex flex-col max-w-6xl bg-pink-600 text-white p-6 m-10 mx-auto">
        <div class="md:w-6xl mx-auto">
            <div class="text-2xl font-semibold flex flex-wrap gap-4 items-center text-center">
                <div class="w-full md:w-auto">
                    Apply Now for Your Institute Registration
                </div>
                <div class="w-full md:w-auto">
                    <a href="{{route('center-request.create')}}" class="px-5 py-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 text-lg font-medium text-white rounded-lg focus:outline-none dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 md:mb-0 mb-4">
                        APPLY NOW
                    </a>
                </div>
            </div>
        </div>
    </div>




</x-guest-layout>
