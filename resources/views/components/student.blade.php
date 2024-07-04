@props(['student'])

<div class="bg-white shadow-dashboard rounded-md" style="    border: 3px double black;">
    <a href="{{route('successStudentDetails',$student->id)}}">
        <div class="flex   justify-center items-center    ">
            <img class="  w-full   h-64 " src="{{$student->picture??''}}" alt=""  >

        </div>
        <div class="p-3 text-center">
            <h2 class="text-sm font-medium text-coolGray-900 font-bold underline" data-config-id="auto-txt-19-1">{{$student->name??''}}</h2>

        </div>
    </a>
</div>
