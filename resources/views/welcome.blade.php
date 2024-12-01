<x-frontend-layouts>


    <!-- Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-slider">
                        @forelse(\App\Models\Slider::get() as $slider)
                            <div class="hero-single-slider background-image"
                                 style="background-image: url({{$slider->photo}});">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-8 col-12 align-self-end">
                                        <div class="hero-content">
                                            <h3 class="hero-content-title">
                                                {{$slider->title??''}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                            <!-- Hero Single Slider -->
                            <div class="hero-single-slider background-image"
                                 style="background-image: url('https://bangla-eschool.getupdemo.xyz/storage/files/1/Sliders/slider-img-1(1).png');">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-8 col-12 align-self-end">
                                        <div class="hero-content">
                                            <h3 class="hero-content-title">
                                                স্বাগতম এক্সওয়াইজেধ স্কুল এবং কলেজ এর পক্ষ থেকে!
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hero-single-slider background-image"
                                 style="background-image: url('https://bangla-eschool.getupdemo.xyz/storage/files/1/Sliders/slider-img-3(1).png');">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-8 col-12 align-self-end">
                                        <div class="hero-content">
                                            <h3 class="hero-content-title">
                                                বিশ্বমানের শিক্ষাদানের একটি উপযুক্ত স্কুল প্রতিষ্ঠান।
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-single-slider background-image"
                                 style="background-image: url('https://bangla-eschool.getupdemo.xyz/storage/files/1/Sliders/slider-img-2(1).png');">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-8 col-12 align-self-end">
                                        <div class="hero-content">
                                            <h3 class="hero-content-title">
                                                মনোরোম পরিবেশে আমরা দিচ্ছি সেরা মানের শিক্ষা ব্যবস্থা।
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Page Main Area -->
    <section class="home-page-main-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="home-page-main-left">
                        <!-- About Us Area -->
                        <div class="about-us-area section-padding">
                            <div class="about-us-img">
                                <img
                                    src="https://bangla-eschool.getupdemo.xyz/storage/files/1/AboutUs/about-img-2(1).png"
                                    alt="#"/>
                            </div>
                            <div class="about-content">
                                <h3 class="about-cont-title">প্রতিষ্ঠান সম্পর্কে</h3>
                                <span class="title-seperetor"></span>
                                <p>
                                {!! \App\Models\ConfigDictionary::get('main_about_us','
    এক্সওয়াইজেধ স্কুল এবং কলেজ এর অতীত গৌরবোজ্জ্বল বর্তমান প্রশংসনীয়। ২০২৩ ইংরেজীর ২০ শে জানুয়ারী এক্সওয়াইজেধ স্কুল এবং কলেজ এর স্থানীয় ম্যাজিষ্ট্রেট অফিসের তৎকালীন প্রধান কারণিক মি: এক্সওয়াইজেধ কর্তৃক প্রতিষ্ঠিত। তখন এটা এক্সওয়াইজেধ
                                গভর্ণমেন্ট স্কুল নামে পরিচিত ছিল। ৯ জন বাংলাদেশী, ১ জন হিন্দু ও ৮ জন মুসলমান বিদ্যোৎসাহী ব্যক্তির একটি কমিটির উপর এর পরিচালনার দায়িত্ব ন্যাস্ত ছিল। এদেশের অধিবাসীদের বাংলায় শিক্ষায় শিক্ষিত করার জন্য এ বিদ্যালয় চালু
                                করা হয়। ২০২৩ ইংরেজির ১ ই মে মি: এক্সওয়াইজেধ বিদ্যালয়ের প্রধান শিক্ষক নিযুক্ত হন...
                               ') !!}

                                {{--  <div class="about-cont-btn">
                                      <a href="" class="theme-btn secondary">বিস্তারিত পড়ুন</a>
                                  </div>--}}
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="home-page-main-right">
                        <!-- Single Sidebar Widget -->
                        <div class="home-sidebar-widget notice-board">
                            <h4 class="home-sidebar-widget-title">
                                <img src="{{asset('frontend/svg/notice1.svg')}}" alt="#"/>নোটিশ বোর্ড
                            </h4>
                            @forelse(\App\Models\Notice::take(8)->get()  as $notice)
                                <div class="sidebar-widget-list">
                                    <div class="sidebar-widget-list-content">
                                        <img src="{{asset('frontend/svg/notice.svg')}}" alt="#"/>
                                        <p>{{\Illuminate\Support\Str::limit($notice->details,30,$end='...')}}</p>
                                    </div>
                                    <div class="sidebar-widget-list-btn">
                                        <a href="" target="_blank" class="theme-btn secondary">বিস্তারিত</a>
                                    </div>
                                </div>
                            @empty
                            @endforelse


                            <div class="home-sidebar-widget-btn">
                                <a href="" class="theme-btn">সকল নোটিশ<i class="fi-rr-arrow-right"></i></a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Corner Message Area -->
            <div class="corner-message-area">
                <div class="row">
                    <div class="col-12">
                        <div class="section-head">
                            <h3 class="section-head-title">
                                স্কুল পরিচালকদের বাণী<span class="title-line style-4"></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="corner-message-slider">
                            @forelse($teams as $team)
                                <div class="single-corner-message">
                                    <div class="corner-message-top">
                                        <div class="corner-message-img">
                                            <img
                                                src="{{$team->image??''}}"
                                                alt="#"/>

                                        </div>
                                        <div class="corner-message-info">
                                            <img
                                                src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/quote.svg"
                                                alt="#"/>
                                            <h4 class="corner-message-info-title">
                                                {{$team->desingation??''}}
                                            </h4>
                                            <span class="c-message-title-seperetor"></span>
                                            <p class="corner-message-info-name">
                                                 {{$team->name??''}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="corner-message-bottom">
                                        <p>{!! $team->description !!}
                                        <div class="corner-message-btn">
                                            <a href="" class="theme-btn secondary">আরো পড়ুন<i class="fi-rr-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="single-corner-message">
                                    <div class="corner-message-top">
                                        <div class="corner-message-img">
                                            <img
                                                src="https://bangla-eschool.getupdemo.xyz/storage/files/1/alexander-hipp-iEEBWgY_6lA-unsplash.jpg"
                                                alt="#"/>

                                        </div>
                                        <div class="corner-message-info">
                                            <img
                                                src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/quote.svg"
                                                alt="#"/>
                                            <h4 class="corner-message-info-title">
                                                সভাপতির বাণী
                                            </h4>
                                            <span class="c-message-title-seperetor"></span>
                                            <p class="corner-message-info-name">
                                                মোঃ জাফর উল্লাহ্
                                            </p>
                                        </div>
                                    </div>
                                    <div class="corner-message-bottom">
                                        <p>আস্সালামু আলাইকুম সম্মানিত অভিভাবক, শিক্ষক-শিক্ষিকা এবং শিক্ষার্থীবৃন্দ, আজকের এই
                                            দিনে আপনাদের সকলকে আমার আন্তরিক শুভেচ্ছা ও অভিনন্দন। শিক্ষা একটি জাতির মেরুদণ্ড।
                                            একটি শিক্ষিত জাতিই পারে একটি উন্নত ও সমৃদ্ধ
                                            সমাজ গড়ে তুলতে। এই বিশ্বাসের আলোকে আমরা আমাদের স্কুলটিকে একটি আদর্শ শিক্ষা
                                            প্রতিষ্ঠান হিসেবে গড়ে তুলতে কাজ করে যাচ্ছি। আমাদের স্কুলটিতে শিক্ষার্থীদের জন্য
                                            মানসম্মত শিক্ষা নিশ্চিত করার লক্ষ্যে আমরা
                                            বিভিন্ন পদক্ষেপ গ্রহণ করেছি। আমাদের শিক্ষক-শিক্ষিকাবৃন্দ অত্যন্ত দক্ষ ও অভিজ্ঞ।
                                            তারা শিক্ষার্থীদের প্রতিটি প্রশ্নের উত্তর দ...
                                        <div class="corner-message-btn">
                                            <a href="" class="theme-btn secondary">আরো পড়ুন<i class="fi-rr-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-corner-message">
                                    <div class="corner-message-top">
                                        <div class="corner-message-img">
                                            <img
                                                src="https://bangla-eschool.getupdemo.xyz/storage/files/1/Personnel/img-1.png"
                                                alt="#"/>

                                        </div>
                                        <div class="corner-message-info">
                                            <img
                                                src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/quote.svg"
                                                alt="#"/>
                                            <h4 class="corner-message-info-title">
                                                অধ্যক্ষের বাণী
                                            </h4>
                                            <span class="c-message-title-seperetor"></span>
                                            <p class="corner-message-info-name">
                                                মোঃ মোস্তফা কামাল ভূঁইয়া
                                            </p>
                                        </div>
                                    </div>
                                    <div class="corner-message-bottom">
                                        <p>প্রিয় শিক্ষার্থীবৃন্দ, আজ আমি আপনাদের সামনে দাঁড়িয়েছি একজন শিক্ষক হিসেবে, একজন
                                            অভিভাবক হিসেবে, এবং একজন বন্ধু হিসেবে। আমি আপনাদেরকে বলতে চাই যে, আপনারা সকলেই
                                            সক্ষম। আপনারা সকলেই আপনার সম্পূর্ণ সম্ভাবনায়
                                            পৌঁছাতে পারেন। আপনাদেরকে শুধুমাত্র কঠোর পরিশ্রম করতে হবে, সৎ হতে হবে, এবং
                                            অন্যদের প্রতি শ্রদ্ধাশীল হতে হবে। আপনাদেরকে নিজের উপর বিশ্বাস রাখতে হবে এবং কখনই
                                            থেমে থাকতে হবে না।<br/>
                                            <br/> আমি আপনাদের জন্য শুভকামনা জানাই। আমি আশা করি আপনারা সকলেই একজন ভালো মানুষ
                                            হিসেবে গড়ে উঠবেন এবং আপনারা আপনার লক্ষ্য অর্জনে সফল হবেন। ...
                                        <div class="corner-message-btn">
                                            <a href="" class="theme-btn secondary">আরো পড়ুন<i class="fi-rr-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-corner-message">
                                    <div class="corner-message-top">
                                        <div class="corner-message-img">
                                            <img
                                                src="https://bangla-eschool.getupdemo.xyz/storage/files/1/Personnel/img-2.png"
                                                alt="#"/>

                                        </div>
                                        <div class="corner-message-info">
                                            <img
                                                src="https://bangla-eschool.getupdemo.xyz/frontend_assets/images/icons/quote.svg"
                                                alt="#"/>
                                            <h4 class="corner-message-info-title">
                                                উপাধ্যক্ষের বাণী
                                            </h4>
                                            <span class="c-message-title-seperetor"></span>
                                            <p class="corner-message-info-name">
                                                মিসেস শিউলী আক্তার
                                            </p>
                                        </div>
                                    </div>
                                    <div class="corner-message-bottom">
                                        <p>প্রিয় শিক্ষার্থীবৃন্দ, আজ আমি আপনাদের সামনে দাঁড়িয়েছি একজন শিক্ষক হিসেবে, একজন
                                            অভিভাবক হিসেবে, এবং একজন বন্ধু হিসেবে। আমি আপনাদেরকে বলতে চাই যে, আপনারা সকলেই
                                            সক্ষম। আপনারা সকলেই আপনার সম্পূর্ণ সম্ভাবনায়
                                            পৌঁছাতে পারেন। আপনাদেরকে শুধুমাত্র কঠোর পরিশ্রম করতে হবে, সৎ হতে হবে, এবং
                                            অন্যদের প্রতি শ্রদ্ধাশীল হতে হবে। আপনাদেরকে নিজের উপর বিশ্বাস রাখতে হবে এবং কখনই
                                            থেমে থাকতে হবে না।<br/>
                                            <br/> আমি আপনাদের জন্য শুভকামনা জানাই। আমি আশা করি আপনারা সকলেই একজন ভালো মানুষ
                                            হিসেবে গড়ে উঠবেন এবং আপনারা আপনার লক্ষ্য অর্জনে সফল হবেন। ...
                                        <div class="corner-message-btn">
                                            <a href="" class="theme-btn secondary">আরো পড়ুন<i class="fi-rr-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teachers Area -->
        </div>
    </section>
    <!-- End Page Main Area -->

    <!-- Gallery Area -->
    <section class="gallery-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-head">
                        <h3 class="section-head-title">
                            ছবি এবং ভিডিও গ্যালারী<span class="title-line style-3"></span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="gallery-slider">

                        <!-- Single Gallery -->
                        <div class="single-gallery">
                            <div class="gallery-img">

                                <img
                                    src="https://bangla-eschool.getupdemo.xyz/storage/files/1/Gallery/successful-child-with-graduation-cap-backpack-full-books(1).jpg"
                                    alt="Gallery Image"/>

                                <a data-fancybox="photo" class="image-view-btn"><i class="fi fi-ss-eye"></i></a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-content-title">
                                    বিদ্যালয়ের সেরা ছাত্র
                                </h4>
                            </div>
                        </div>
                        <div class="single-gallery">
                            <div class="gallery-img">

                                <img
                                    src="https://bangla-eschool.getupdemo.xyz/storage/files/1/Gallery/successful-child-with-graduation-cap-backpack-full-books(1).jpg"
                                    alt="Gallery Image"/>

                                <a data-fancybox="photo" class="image-view-btn"><i class="fi fi-ss-eye"></i></a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-content-title">
                                    বিদ্যালয়ের সেরা ছাত্র
                                </h4>
                            </div>
                        </div>
                        <div class="single-gallery">
                            <div class="gallery-img">

                                <img
                                    src="https://bangla-eschool.getupdemo.xyz/storage/files/1/Gallery/successful-child-with-graduation-cap-backpack-full-books(1).jpg"
                                    alt="Gallery Image"/>

                                <a data-fancybox="photo" class="image-view-btn"><i class="fi fi-ss-eye"></i></a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-content-title">
                                    বিদ্যালয়ের সেরা ছাত্র
                                </h4>
                            </div>
                        </div>
                        <div class="single-gallery">
                            <div class="gallery-img">

                                <img
                                    src="https://bangla-eschool.getupdemo.xyz/storage/files/1/Gallery/successful-child-with-graduation-cap-backpack-full-books(1).jpg"
                                    alt="Gallery Image"/>

                                <a data-fancybox="photo" class="image-view-btn"><i class="fi fi-ss-eye"></i></a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-content-title">
                                    বিদ্যালয়ের সেরা ছাত্র
                                </h4>
                            </div>
                        </div>
                        <div class="single-gallery">
                            <div class="gallery-img">

                                <img
                                    src="https://bangla-eschool.getupdemo.xyz/storage/files/1/Gallery/successful-child-with-graduation-cap-backpack-full-books(1).jpg"
                                    alt="Gallery Image"/>

                                <a data-fancybox="photo" class="image-view-btn"><i class="fi fi-ss-eye"></i></a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-content-title">
                                    বিদ্যালয়ের সেরা ছাত্র
                                </h4>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-bottom-btn">
                        <a href="" class="theme-btn secondary">আরো দেখুন<i class="fi-rr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Area -->

    <!-- School Committe Area -->
    <section class="school-committe-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-head">
                        <h3 class="section-head-title">
                            Institute<span class="title-line"></span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row school-committe-group">
                @forelse(\App\Models\Center::where('status',\App\Enums\CenterStatus::Approved)->take(8)->get() as $institute)
                    <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                        <x-institute :institute="$institute"/>
                    </div>
                @empty
                    <div>Not Found</div>
                @endforelse


            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-bottom-btn">
                        <a href="{{route('verifiedInstitute')}}" class="theme-btn secondary">আরো দেখুন<i
                                class="fi-rr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End School Committe Area -->

    <!-- Total School Area -->
    <section class="total-students-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-head">
                        <h3 class="section-head-title">
                            পরিসংখান<span class="title-line"></span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="total-students-group" id="section_counter">

                        <!-- Single Total Student -->
                        <div class="total-students-card">
                            <h3 style="color: #6aa84f!important;" class="total-students-number counter">145</h3>
                            <p class="total-students-text">Total Institute</p>

                        </div>
                        <div class="total-students-card">
                            <h3 style="color: #6aa84f!important;" class="total-students-number counter">100</h3>
                            <p class="total-students-text">Total Course</p>

                        </div>
                        <div class="total-students-card">
                            <h3 style="color: #6aa84f!important;" class="total-students-number counter">0</h3>
                            <p class="total-students-text">Total Exam</p>

                        </div>
                        <div class="total-students-card">
                            <h3 style="color: #6aa84f!important;" class="total-students-number counter">200</h3>
                            <p class="total-students-text">Total Students</p>

                        </div>
                        <div class="total-students-card">
                            <h3 style="color: #6aa84f!important;" class="total-students-number counter">5</h3>
                            <p class="total-students-text">Total Session</p>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End School Committe Area -->

    <!-- Students Area -->
    <section class="students-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-head">
                        <h3 class="section-head-title">
                            সেরা ছাত্র/ছাত্রী <span class="title-line style-2"></span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="students-slider">

                        @forelse(\App\Models\Student::where('status',\App\Enums\StudentStatus::Approved)->take(8)->get() as $student)
                            <x-student :student="$student"/>
                        @empty
                            <div>Not Found</div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-bottom-btn">
                        <a href="{{route('successStudent')}}" class="theme-btn secondary">আরো দেখুন<i
                                class="fi-rr-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Students Area -->

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
                    counter.style.color = 'rgb(192 132 252';

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
