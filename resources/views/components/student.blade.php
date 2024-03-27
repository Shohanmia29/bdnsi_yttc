@props(['student'])

<div class="bg-white border border-gray-400 shadow-dashboard rounded-md">
    <a href="{{route('successStudentDetails',$student->id)}}">
        <div class="flex flex-col justify-center items-center   border-b border-coolGray-100">
            <img class="mb-4 w-full object-cover h-64 " src="{{$student->picture??''}}" alt="" data-config-id="auto-img-3-1">

        </div>
        <div class="p-3 text-center">
            <h2 class="text-sm font-medium text-coolGray-900" data-config-id="auto-txt-19-1">{{$student->name??''}}</h2>

        </div>
    </a>
</div>
