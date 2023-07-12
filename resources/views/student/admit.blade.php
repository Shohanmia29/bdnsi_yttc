<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Student Details') }}</div>
            <div>
                <a
                    class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                    href="{{ route('student.index') }}">{{ __('Students') }}</a>
            </div>
        </div>
    </x-slot>


    <style>
        .r-bg{
            width: 100%;
            height: 80vh;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
    <div class="w-full mt-8 bg-white   ">
        <div class="r-bg relative text-gray-500" style="background-image: url({{asset('images/admit.png')}})">
            <div class="absolute top-[23.3%] left-[12.5%] w-38 text-xs font-bold text-left">{{$student->id??''}}</div>
            <div class="absolute top-[31%] left-[19.5%] w-38 text-xs font-bold text-left">{{$student->center_id??''}}</div>
            <div class="absolute top-[38%] left-[19.5%] w-38 text-xs font-bold text-left">{{$student->roll??''}}</div>
            <div class="absolute top-[45.2%] left-[19.5%] w-38 text-xs font-bold text-left">{{$student->registration??''}}</div>
            <div class="absolute top-[37.5%] left-[62.3%] w-38 text-xs font-bold text-left">{{$student->center->name??''}}</div>
            <div class="absolute top-[45.5%] left-[62.5%] w-38 text-xs font-bold text-left">Computer Office Application</div>
            <div class="absolute top-[51.5%] left-[19.5%] w-38 text-xs font-bold text-left">{{$student->session->name??''}}</div>
            <div class="absolute top-[51.5%] left-[62.5%] w-38 text-xs font-bold text-left">{{$student->name??''}}</div>
            <div class="absolute top-[59.5%] left-[19.5%] w-38 text-xs font-bold text-left">Regular</div>
            <div class="absolute top-[59%] left-[62.5%] w-38 text-xs font-bold text-left">{{$student->fathers_name??''}}</div>
            <div class="absolute top-[67.5%] left-[19.5%] w-38 text-xs font-bold text-left">{{\Carbon\Carbon::now()}}</div>
            <div class="absolute top-[67.5%] left-[62.5%] w-38 text-xs font-bold text-left">{{$student->fathers_name??''}}</div>
        </div>

    </div>



</x-app-layout>
