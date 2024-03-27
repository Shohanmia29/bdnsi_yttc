@props(['subject'])


<div class="card">
    <div class="card-inner bg-white">
        <div class="card-front w-full ">
             <div class="w-full ">
                 <img class="w-full  h-[250px] -mt-24" src="{{asset($subject->photo)}}" alt="">
                 <div class="w-full flex justify-center py-10  font-bold text-lg md:text-xl">{{$subject->name??''}}</div>
             </div>
        </div>
        <div class="card-back">
             <div class="w-full px-2  bg-[#683091] py-2  text-center rounded-md ">
                 <a href="{{route('course.details',$subject->id)}}" class="px-3 py-3    w-full text-white font-bold  ">Read More </a>
             </div>
        </div>
    </div>
</div>
