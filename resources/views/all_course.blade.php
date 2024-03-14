<x-guest-layout>

    <div class="w-full bg-[#F3F4F6] pb-5">
        <div class="mx-auto flex w-full max-w-6xl ">
            <!-- ====== Cards Section Start -->

            <div class="bg-[#F3F4F6] pt-20 pb-10 lg:pt-[50px] lg:pb-10">
                <div class="text-center pb-5  text-3xl ">

                    Our All Courses
                    <hr class="m-2 ">
                </div>

                <div class="container mx-auto w-full">
                    <div class="w-full flex flex-wrap gap-2">
                        @foreach($courses as $course)
                            <x-course :subject="$course" />
                        @endforeach

                    </div>

                </div>

            </div>
            <!-- ====== Cards Section End -->

        </div>
    </div>





</x-guest-layout>
