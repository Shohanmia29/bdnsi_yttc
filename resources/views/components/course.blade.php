@props(['subject'])


<div class="card">
    <div class="card-inner">
        <div class="card-front w-full">
             <div class="w-full">
                 <img class="w-full  h-[200px] -mt-24" src="{{asset($subject->photo)}}" alt="">
                 <div class="w-full flex justify-center mt-2 font-bold text-lg md:text-sm">{{$subject->name??''}}</div>
             </div>
        </div>
        <div class="card-back">
             <div class="w-full px-2  bg-[#683091] py-2 text-center rounded-md ">
                 <a href="" class="px-3 py-3    w-full text-white font-bold  ">Read More </a>
             </div>
        </div>
    </div>
</div>
