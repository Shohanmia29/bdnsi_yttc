@props(['subject'])


<div class="single-blog">
    <div class="blog-img">
        <img src="{{asset($subject->photo)}}" alt="Image">
    </div>
    <div class="blog-content">
    {{--    <ul class="blog-meta">
            <li>Post by:<span>Admin</span></li>
            <li>Date:<span>05 Nov, 2023</span></li>
        </ul>--}}
        <a href="{{route('course.details',$subject->id)}}" contenteditable="false" style="cursor: pointer;">
            <h4 class="blog-content-title">
                {{$subject->name??''}}
            </h4>
        </a>
        <div class="blog-content-btn">
            <a href="{{route('course.details',$subject->id)}}" class="theme-btn secondary" contenteditable="false" style="cursor: pointer;">আরো দেখুন<i class="fi-rr-arrow-right"></i></a>
        </div>
    </div>
</div>




