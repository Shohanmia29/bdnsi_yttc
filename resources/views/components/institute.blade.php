@props(['institute'])

<div class="container mt-4">
    <div class="card " style="border: 3px double black; height: 350px;">
        <img src="{{$institute->photo??''}}" class="card-img-top" alt="Director Photo" style="height: 200px;">
        <div class="card-body" style="background-color:#c7c7c7d1; overflow: hidden;">
            <a style="color:black;" href="{{route('institute.details',$institute->id)}}">
                <h5 class="card-title">{{$institute->name??''}}</h5>
            </a>
        </div>
    </div>
</div>




