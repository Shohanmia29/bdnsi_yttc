@props(['subject'])


<div class="card flip-box-inner">
    <div class="flip-box-front">
        <img height="250" src="{{asset($subject->photo)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$subject->name??''}}</h5>
        </div>
    </div>
    <div class="flip-box-back">
        <a class="btn" style="background: #683091; color: white;" href="{{route('course.details',$subject->id)}}">Read More</a>
    </div>
</div>



