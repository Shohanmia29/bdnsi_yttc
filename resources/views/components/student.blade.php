@props(['student'])

<div class="bg-white border border-gray-500 shadow-dashboard rounded-md">
    <a href="{{route('successStudentDetails',$student->id)}}">
        <div class="flex   justify-center items-center    ">
            <img class="  w-full   h-64 " src="{{$student->picture??''}}" alt=""  >

        </div>
        <div class="p-3 text-center">
            <h2 class="text-sm font-medium text-coolGray-900" data-config-id="auto-txt-19-1">{{$student->name??''}}</h2>

        </div>
    </a>
</div>
