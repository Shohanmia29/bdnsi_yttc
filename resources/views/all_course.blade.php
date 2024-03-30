<x-guest-layout>

    <div class="w-full   pb-5">
        <div class="mx-auto max-w-6xl px-2   w-full  ">
            <!-- ====== Cards Section Start -->

            <div class="  pt-20 pb-10 lg:pt-[50px] lg:pb-10">
                <div class="text-center pb-5  text-3xl ">

                    Our All Courses
                    <hr class="m-2 ">
                </div>

                <div class="   w-full  ">
                      <div class="pb-4">
                          <div class="max-w-xl mx-auto p-4 shadow-lg rounded-md ">
                              <form action="{{route('all_course')}}" method="get">
                                  <x-labeled-input name="course_name" value="{{request('course_name')}}" class="w-full" placeholder="Enter  Course name"/>
                                  <div class="flex py-4 justify-center w-full">
                                      <button class="px-3 py-1 rounded-md border bg-blue-700 text-white ">Search</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                    <div class="w-full flex flex-wrap  gap-2 justify-center">
                        @forelse($courses as $course)
                            <x-course :subject="$course" />
                        @empty
                            <div class="font-bold text-red-500">
                                  Not Found
                            </div>
                        @endforelse

                    </div>

                </div>
                 <div>
                     {{$courses->links()}}
                 </div>
            </div>
            <!-- ====== Cards Section End -->

        </div>
    </div>





</x-guest-layout>
