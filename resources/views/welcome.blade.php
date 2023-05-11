<x-guest-layout>
    <div class="w-full">
        <div class="mx-auto flex w-full max-w-full h-[30rem] sm: h-[20rem]">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <img
                            class="object-cover w-full h-[30rem]"
                            src="{{asset('/images/slider/'.$slider->photo)}}" /> {{--3000/900--}}
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
        <div class="mx-auto flex flex-col-reverse sm:flex-row w-full max-w-6xl sm: w-full ">
            <div class="w-2/3 mt-20 sm: w-2/2 mx-auto">
                <div class="w-full text-3xl text-[#076e37] pb-1"> Welcome to </div>
                <span class="text-2xl text-[#eb1c24]">BTSI</span>
                <hr class="mt-2 ">
                <p class="pt-5">With the help of the Government BICTF has built up greatest science and information technology, vocational based education in every Union, Thana, District and the main intention of it is to create the employment of the unemployed people through Information and Technology based research and training. Almost every sector in a country i..</p>
                <button type="button" class=" mt-5 float-right pt-2 mt-4 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2  mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">READ MORE</button>
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

                    <div class="container mx-auto">
                        <div class="-mx-4 flex flex-wrap">
                            @foreach($courses as $course)
                                <div class="w-full px-2 md:w-1/2 xl:w-1/3">
                                    <div class="mb-10 overflow-hidden rounded-lg bg-white">
                                        @if($course->image !== NULL)
                                            <img
                                                src="{{asset('/images/course/'.$course->photo?$course->photo:'no-image.jpg')}}"
                                                alt="image"
                                                class="w-full"
                                            />
                                        @else
                                            <img
                                                src="{{asset('/images/course/no-image.jpg')}}"
                                                alt="image"
                                                class="w-full"
                                            />
                                        @endif
                                        <div class="p-8  text-center sm:p-3 md:p-2 xl:p-3">
                                            <h3>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                                                >
                                                    {{$course->name}}
                                                </a>

                                            </h3>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

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
                    <a href="#" class="px-5 py-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 text-lg font-medium text-white rounded-lg focus:outline-none dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 md:mb-0 mb-4">
                        APPLY NOW
                    </a>
                </div>
            </div>
        </div>
    </div>




</x-guest-layout>
