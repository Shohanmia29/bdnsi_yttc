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
                <a href="{{route('frontendNoticeList')}}" class="bg-[#6B6B6B] px-3 font-semibold text-white">All Notice</a>
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
      <section id="section_counter">
          <div class="w-full py-20">
              <div class="bg-white   w-full rounded-lg shadow-xl p-10  ">
                  <div class="flex flex-wrap p-10">
                      <div class="w-full md:w-1/4">
                          <div class="mt-10 border md:border-none p-2 md:mt-0">
                              <div class="rounded-full   w-10 mx-auto h-10   ">
                                  <svg class="w-10 h-10 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
                                      <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                      <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                  </svg>

                              </div>
                              <div class="text-center">
                                  <p class="text-gray-800 text-lg font-bold counter"  data-target="1050">0</p>
                                  <p class=" text-2xl font-bold text-black ">Institute</p>
                              </div>
                          </div>
                      </div>
                      <div class="w-full md:w-1/4">
                          <div class="mt-10 border md:border-none p-2 md:mt-0">
                              <div class="rounded-full   w-10 mx-auto h-10   ">
                                  <svg class="w-10 h-10 mx-auto"  xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"   x="0" y="0" viewBox="0 0 459.319 459.319" style="enable-background:new 0 0 512 512" xml:space="preserve"  ><g><path d="M94.924 366.674h312.874c.958 0 1.886-.136 2.778-.349.071 0 .13.012.201.012 6.679 0 12.105-5.42 12.105-12.104V12.105C422.883 5.423 417.456 0 410.777 0H94.941c-32.22 0-58.428 26.214-58.428 58.425 0 .432.085.842.127 1.259-.042 29.755-.411 303.166-.042 339.109-.023.703-.109 1.389-.109 2.099 0 30.973 24.252 56.329 54.757 58.245.612.094 1.212.183 1.847.183h317.683c6.679 0 12.105-5.42 12.105-12.105V401.65c0-6.68-5.427-12.105-12.105-12.105s-12.105 5.426-12.105 12.105v33.461H94.924c-18.395 0-33.411-14.605-34.149-32.817.018-.325.077-.632.071-.963-.012-.532-.03-1.359-.042-2.459 1.058-17.924 15.935-32.198 34.12-32.198zm8.254-308.249c0-6.682 5.423-12.105 12.105-12.105s12.105 5.423 12.105 12.105V304.31c0 6.679-5.423 12.105-12.105 12.105s-12.105-5.427-12.105-12.105V58.425z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                              </div>
                              <div class="text-center">
                                  <p class="text-gray-800 text-lg font-bold counter" data-target="300">0</p>
                                  <p class=" text-2xl font-bold text-black ">Courses</p>
                              </div>
                          </div>
                      </div>
                      <div class="w-full md:w-1/4">
                          <div class="mt-10 border md:border-none p-2 md:mt-0">
                              <div class="rounded-full   w-10 mx-auto h-10   ">
                                  <svg class="w-10 h-10 mx-auto" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"  ><g><path fill="#000000" fill-rule="evenodd" d="M2 16C2 8.268 8.268 2 16 2h32c7.732 0 14 6.268 14 14v24a2 2 0 0 1-.55 1.377l-19 20A2 2 0 0 1 41 62H16C8.268 62 2 55.732 2 48zM16 6C10.477 6 6 10.477 6 16v32c0 5.523 4.477 10 10 10h23v-6c0-7.732 6.268-14 14-14h5V16c0-5.523-4.477-10-10-10zm39.341 36H53c-5.523 0-10 4.477-10 10v2.99z" clip-rule="evenodd" opacity="1" data-original="#000000" class=""></path></g></svg>
                              </div>
                              <div class="text-center">
                                  <p class="text-gray-800 text-lg font-bold counter" data-target="120">0</p>
                                  <p class=" text-2xl font-bold text-black ">Exam</p>
                              </div>
                          </div>
                      </div>
                      <div class="w-full md:w-1/4">
                          <div class="mt-10 border md:border-none p-2 md:mt-0">
                              <div class="rounded-full   w-10 mx-auto h-10   ">
                                  <svg class="w-10 h-10 mx-auto" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  x="0" y="0" viewBox="0 0 80.13 80.13" style="enable-background:new 0 0 512 512" xml:space="preserve"  ><g><path d="M48.355 17.922c3.705 2.323 6.303 6.254 6.776 10.817a11.69 11.69 0 0 0 4.966 1.112c6.491 0 11.752-5.261 11.752-11.751 0-6.491-5.261-11.752-11.752-11.752-6.429.002-11.644 5.169-11.742 11.574zm-7.699 24.062c6.491 0 11.752-5.262 11.752-11.752s-5.262-11.751-11.752-11.751c-6.49 0-11.754 5.262-11.754 11.752s5.264 11.751 11.754 11.751zm4.985.801h-9.972c-8.297 0-15.047 6.751-15.047 15.048v12.195l.031.191.84.263c7.918 2.474 14.797 3.299 20.459 3.299 11.059 0 17.469-3.153 17.864-3.354l.785-.397h.084V57.833c.003-8.297-6.747-15.048-15.044-15.048zm19.443-12.132h-9.895a14.483 14.483 0 0 1-4.47 10.088c7.375 2.193 12.771 9.032 12.771 17.11v3.758c9.77-.358 15.4-3.127 15.771-3.313l.785-.398h.084V45.699c0-8.296-6.75-15.046-15.046-15.046zm-45.049-.8c2.299 0 4.438-.671 6.25-1.814a14.544 14.544 0 0 1 5.467-9.276c.012-.22.033-.438.033-.66 0-6.491-5.262-11.752-11.75-11.752-6.492 0-11.752 5.261-11.752 11.752 0 6.488 5.26 11.75 11.752 11.75zm10.554 10.888a14.492 14.492 0 0 1-4.467-10.032c-.367-.027-.73-.056-1.104-.056h-9.971C6.75 30.653 0 37.403 0 45.699v12.197l.031.188.84.265c6.352 1.983 12.021 2.897 16.945 3.185v-3.683c.002-8.078 5.396-14.915 12.773-17.11z" fill="#000000" opacity="1" data-original="#000000" class="hovered-path"></path></g></svg>
                              </div>
                              <div class="text-center">
                                  <p class="text-gray-800 text-lg font-bold counter " data-target="144223">0</p>
                                  <p class=" text-2xl font-bold text-black ">Students</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </div>
    <script>
        let section_counter = document.querySelector('#section_counter');
        let counters = document.querySelectorAll('.counter');

        // Scroll Animation

        let CounterObserver = new IntersectionObserver(
            (entries, observer) => {
                let [entry] = entries;
                if (!entry.isIntersecting) return;

                let speed = 20;
                counters.forEach((counter, index) => {
                    counter.style.color='rgb(192 132 252';
                    function UpdateCounter() {
                        const targetNumber = +counter.dataset.target;
                        const initialNumber = +counter.innerText;
                        const incPerCount = targetNumber / speed;
                        if (initialNumber < targetNumber) {
                            counter.innerText = Math.ceil(initialNumber + incPerCount);
                            setTimeout(UpdateCounter, 50);
                        }
                    }

                    UpdateCounter();

                    if (counter.parentElement.style.animation) {
                        counter.parentElement.style.animation = '';
                    } else {
                        counter.parentElement.style.animation = `slide-up 0.3s ease forwards ${
                            index / counters.length + 0.5
                        }s`;
                    }

                });
                observer.unobserve(section_counter);
            },
            {
                root: null,
                threshold: window.innerWidth > 768 ? 0.4 : 0.3,
            }
        );

        CounterObserver.observe(section_counter);
    </script>

</x-guest-layout>
