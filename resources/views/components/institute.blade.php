@props(['institute'])
<style>
    .card{
        width: 100%!important;

    }
</style>
<div class="  mt-4">
    <div class=" card   " style="border: 3px double black; height: 350px;">
        <img src="{{$institute->photo??''}}" class="card-img-top" alt="Director Photo" style="height: 200px;">
        <div class="card-body" style="background-color:#c7c7c7d1; ">
            <a style="color:black;" href="{{route('institute.details',$institute->id)}}">
                <h5 class="card-title" style=""><a href="{{route('institute.details',$institute->id)}}"   class="underline font-bold" >{{$institute->name??''}}</a></h5>
            </a>
        </div>
    </div>
</div>




