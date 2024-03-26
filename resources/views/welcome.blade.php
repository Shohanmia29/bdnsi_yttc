<x-guest-layout>

    <section class="">
        <div class="owl-carousel owl-theme">

            @forelse(\App\Models\Slider::get() as $slider)
            <div class="item overflow-hidden  w-full " style="background-color: black;">
                <img class="md:h-[500px] w-full"   src="{{asset('images/slider/'.$slider->photo)}}" alt="">
            </div>
            @empty
                <div class="item overflow-hidden  w-full " style="background-color: black;">
                    <img class="md:h-[500px] w-full"   src="{{asset('frontend/banner.jpeg')}}" alt="">
                </div>
                <div class="item">
                    <img class="md:h-[500px] w-full"  src="{{asset('frontend/banner.jpeg')}}" alt="">
                </div>
            @endforelse

        </div>
    </section>

  <div class="max-w-6xl mx-auto px-2 py-2">
         <div class="w-full flex ">
               <button class="px-3 py-1 bg-blue-700 text-white rounded-md">Notice</button>
             <marquee class="font-bold" behavior="" direction="">
                  {{\App\Models\ConfigDictionary::get('notice','শীঘ্রই আসছে')}}
             </marquee>
         </div>
  </div>

    {{--    <div class="w-full  h-auto">
            <img class=" w-full h-[100px]  " src="{{asset('logo.png')}}" alt="Logo">
        </div>--}}

    <div class="  max-w-6xl mx-auto p-3">
        <div class="bg-gray-200 my-5">
            <div class="flex w-full gap-5">
                <div>
                    <img src="https://byttc.com.bd/public/bg_notice_board.png" alt="" />
                </div>
                <div>
                    <div class="text-md font-bold md:text-2xl">Notice Board</div>
                    @forelse(\App\Models\Notice::take(1)->latest()->get() as $notice)
                    <div class="mt-2 flex items-center gap-3 text-[#5258CC]">
                        <div>
                            <img src="https://byttc.com.bd/public/bullet_tick.png" alt="" />
                        </div>
                        <div class="border-b border-dashed border-black w-full">{{\Illuminate\Support\Str::limit($notice->details, '30', $end='...')}}</div>
                    </div>
                    @empty
                        <div class="mt-2 flex items-center gap-3 text-[#5258CC]">
                            <div>
                                <img src="https://byttc.com.bd/public/bullet_tick.png" alt="" />
                            </div>

                            <div class="border-b border-dashed border-black w-full">২১‌শে ফেব্রুয়া‌রি পালন সংক্রান্ত...</div>

                        </div>
                    @endforelse
                </div>
            </div>
            <div class="flex w-full justify-end px-3   py-1">
                <a href="" class="bg-[#6B6B6B] px-3 font-semibold text-white">All Notice</a>
            </div>
        </div>


        <!-- Flip box -->
        <div class="mt-5 flex justify-center mt-20">
            <div class="shopping-cart mx-auto">
                @forelse(\App\Models\Subject::take(9)->get() as $subject)
                    <x-course :subject="$subject" />
                @empty
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front w-full">
                                <div class="w-full">
                                    <img class="w-full" src="https://beitbd.com/storage/upload/subject/4EHMFarO1u2dgaCiDkfomxnoNL0ULXIjimnF5Qxt.png" alt="">
                                    <div class="w-full flex justify-center font-bold text-lg md:text-sm">Course</div>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="w-full px-2  bg-[#683091] py-2 text-center rounded-md ">
                                    <a href="" class="px-3 py-3    w-full text-white font-bold  ">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="flex items-center justify-center mt-10">
            <a href="{{route('all_course')}}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">All Courses</a>
        </div>
        <!-- Apply Now for Your Institute Registration  -->
        <div class="rounded border mt-20">
            <div class="bg-purple-400 h-64 w-full flex flex-col justify-center items-center mt-5">
                <p class="text-white text-center text-3xl font-bold mb-4">Apply Now for Your Institute Registration</p>
                <a href="{{route('center-request.create')}}" class="bg-white text-purple-400 font-bold py-2 px-4 rounded hover:bg-purple-400 hover:text-white">Apply Now</a>
            </div>
        </div>

        <!-- Cart  -->
        <div class="w-full mt-20">
            <div class="bg-white   w-full rounded-lg shadow-lg p-8  ">
                  <div class="flex flex-wrap">
                      <div class="w-full md:w-1/4">
                               <div>
                                   <div class="rounded-full bg-gray-800   mx-auto w-12 h-12 mb-2">
                                       <i class="fas fa-institute"></i>
                                   </div>
                                   <div class="text-center">
                                       <p class="text-gray-800 text-lg font-bold">1050</p>
                                       <p class=" text-2xl font-bold text-black ">Institute</p>
                                   </div>
                               </div>
                      </div>
                      <div class="w-full md:w-1/4">
                              <div>
                                  <div class="rounded-full bg-gray-800    mx-auto  w-12 h-12 mb-2">
                                      <i class="fas fa-book"></i>
                                  </div>
                                  <div class="text-center">
                                      <p class="text-gray-800 text-lg font-bold">300</p>
                                      <p class=" text-2xl font-bold text-black ">Courses</p>
                                  </div>
                              </div>
                      </div>
                      <div class="w-full md:w-1/4">
                              <div>
                                  <div class="rounded-full bg-gray-800 text-white   mx-auto w-12 h-12 mb-2">
                                      <i class="fas fa-exam"></i>
                                  </div>
                                  <div class="text-center">
                                      <p class="text-gray-800 text-lg font-bold">120</p>
                                      <p class=" text-2xl font-bold text-black ">Exam</p>
                                  </div>
                              </div>
                      </div>
                      <div class="w-full md:w-1/4">
                           <div>
                               <div class="rounded-full bg-gray-800 text-white  mx-auto  w-12 h-12 mb-2">
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
        </div>
    </div>


</x-guest-layout>
