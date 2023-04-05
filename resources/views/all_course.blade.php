<x-guest-layout>

    <div class="w-full bg-[#F3F4F6] pb-5">
        <div class="mx-auto flex w-full max-w-6xl ">
            <!-- ====== Cards Section Start -->

            <div class="bg-[#F3F4F6] pt-20 pb-10 lg:pt-[50px] lg:pb-10">
                <div class="text-center pb-5  text-3xl ">

                    Our All Courses
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
                                    <div class="p-8 text-center sm:p-3 md:p-2 xl:p-3">
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

                </div>

            </div>
            <!-- ====== Cards Section End -->

        </div>
    </div>





</x-guest-layout>
