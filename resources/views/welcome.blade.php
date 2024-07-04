<x-frontend-layouts>
    <!-- owl carouse -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .img_slider{
            height: 200px!important;
        }

        @media (min-width: 600px) {
            .img_slider {
                height: 500px!important;
            }
        }

    </style>

    <section id="home">
        <section class="">
            <div class="owl-carousel owl-theme">
                @forelse(\App\Models\Slider::get() as $slider)
                    <div class="item   rslides img">
                        <img  class=" img_slider"   src="{{asset('images/slider/'.$slider->photo)}}" alt="">
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
    </section>




    <section class="container">
        <div class="d-flex justify-content-center align-items-center py-5">
            <button class="btn btn-primary">News</button>
            <marquee behavior="" direction="" class="fw-bolder fs-5"> {{\App\Models\ConfigDictionary::get('notice','শীঘ্রই আসছে')}}</marquee>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="">
                <div class="">
                    <div class="notice_board_wrap">
                        <h5 class="fw-bold">Notice Board</h5>
                        <div class="notice_board">
                            <ul class="list-group">
                                @forelse(\App\Models\Notice::take(1)->latest()->get() as $notice)
                                    <li class="list-group-item d-flex justify-content-start align-items-center">
                                    <span style="width: 24px;">
                                            <img src="{{asset('frontend/bullet_tick.png')}}" />
                                        </span>
                                        <a href="" class="form-check-label" target="_blank" for="firstCheckbox">{{\Illuminate\Support\Str::limit($notice->details, '30', $end='...')}}</a>
                                    </li>
                                @empty
                                    <li class="list-group-item d-flex justify-content-start align-items-center">
                                    <span style="width: 24px;">
                                            <img src="{{asset('frontend/bullet_tick.png')}}" />
                                        </span>
                                        <a href="" class="form-check-label" target="_blank" for="firstCheckbox">২১‌শে ফেব্রুয়া‌রি পালন সংক্রান্ত...</a>
                                    </li>
                                @endforelse

                            </ul>
                            <div class="text-end">
                                <a href="{{route('frontendNoticeList')}}" class="all_btn">All Notice</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="courses">
        <div class="container courses-list">
            <div class="row">
                @forelse(\App\Models\Subject::take(4)->get() as $subject)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-4 flip-box">
                    <x-course :subject="$subject" />
                    </div>
                @empty
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-4 flip-box">
                    <div class="card flip-box-inner">
                        <div class="flip-box-front">
                            <img height="250" src="public/images/1698818046.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Diploma in Dressmaking &amp; Tailoring</h5>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <a class="btn" style="background: #683091; color: white;" href="/course/48">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-4 flip-box">
                    <div class="card flip-box-inner">
                        <div class="flip-box-front">
                            <img height="250" src="public/images/1717073216.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Diploma in Ceramic Tiles</h5>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <a class="btn" style="background: #683091; color: white;" href="/course/495">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-4 flip-box">
                    <div class="card flip-box-inner">
                        <div class="flip-box-front">
                            <img height="250" src="public/images/1705855414.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Diploma in Fiber Optical Technician</h5>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <a class="btn" style="background: #683091; color: white;" href="/course/232">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt-4 flip-box">
                    <div class="card flip-box-inner">
                        <div class="flip-box-front">
                            <img height="250" src="public/images/1704992120.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Diploma In MEP (Mechanical, Electrical, &amp; Plumbing.)</h5>
                            </div>
                        </div>
                        <div class="flip-box-back">
                            <a class="btn" style="background: #683091; color: white;" href="/course/217">Read More</a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>




    <button class="btn3 mt-5"><a href="{{route('all_course')}}">Our All Courses</a></button>




    <section id="review">
        <div class="container-fluid review-student">
            <div class="container review1">
                <div class="row review">
                    <div class="col-lg-12">
                        <h1 class="text-center text-white">Apply Now for Your Institute Registration
                        </h1>
                    </div>
                    <div class="col-md-4 offset-md-4">
                        <center>
                            <button class="btn btn-outline-success mt-2"><a class="text-white shadow"
                                                                            href="{{route('center-request.create')}}" style="text-decoration:none">APPLY NOW</a></button>

                        </center>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="section_counter">
        <div class="container counter-number shadow p-5 mb-2 bg-body rounded">
            <div class="row">
                <div class="col-lg-3 icon counter-box">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h2 class="counter " data-target="200">0</h2>
                    <h3>Institute</h3>
                </div>
                <div class="col-lg-3 icon counter-box">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <h2 class="counter " data-target="300">0</h2>
                    <h3>Courses</h3>
                </div>
                <div class="col-lg-3 icon counter-box">
                    <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                    <h2 class="counter " data-target="120">0</h2>
                    <h3>Exam</h3>
                </div>
                <div class="col-lg-3 icon counter-box">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h2 class="counter " data-target="144223">0</h2>
                    <h3>Students</h3>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 24,
                items: 1,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
            });
        });
    </script>


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

</x-frontend-layouts>
