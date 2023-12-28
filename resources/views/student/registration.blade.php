<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Students') }}</div>
            @can('student-create')
                <div>
                    <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                       href="{{ route('student.create') }}">{{ __('Create Student') }}</a>
                </div>
            @endcan
        </div>
    </x-slot>
    <style>
        .r-bg{
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
    <div class="  mt-8 bg-white p-3 print:p-0 min-w-[800px] overflow-x-auto">
        <div class="w-full print:hidden flex justify-end"><button onclick="window.print()" class="px-3 py-1 rounded-md bg-green-600 text-white ">Print</button></div>
        <div class="r-bg relative w-full   h-[130vh] print:h-[90vh] text-lg font-bold " style="background-image: url({{asset('images/register.jpg')}})">

            <div class="absolute top-[19%] left-[70.7%] w-[19.5%] h-[17.8%]  ">
                <img class="w-full h-full border-2 border-black rounded-[2.3rem]" src="{{$student->picture??'N/A'}}" alt="">
            </div>
            <div class="absolute top-[33%] left-[45.8%]  w-38 ">{{$student->name??'N/A'}}</div>
            <div class="absolute top-[36.8%] left-[45.8%]  w-38 ">{{$student->fathers_name??'N/A'}}</div>
            <div class="absolute top-[40.8%] left-[45.8%]  w-38 ">{{$student->mothers_name??'N/A'}}</div>
            <div class="absolute top-[44.5%] left-[45.8%]  w-38 ">{{\App\Enums\Gender::fromValue(  $student->gender??'N/A')->key}}</div>
            <div class="absolute top-[48.2%] left-[45.8%] print:text-sm w-38 ">{{$student->center->name??'N/A'}}/{{$student->center->code??'N/A'}}</div>

            <div class="absolute top-[52%] left-[45.8%]  print:text-sm w-38 ">{{$student->present_address??'N/A'}}</div>
            <div class="absolute top-[55.7%] left-[45.8%] print:text-sm  w-38 ">{{$student->permanent_address??'N/A'}}</div>
            <div class="absolute top-[59.2%]  left-[45.8%]  w-38 ">{{$student->registration??'N/A'}}</div>
            <div class="absolute top-[62.5%] left-[45.8%]  w-38 ">{{$student->session->name??'N/A'}}</div>
            <div class="absolute top-[82.5%] left-[84.3%]  w-38 "><img class="w-14 h-10" src="{{asset('signature.png')}}" alt=""></div>
        </div>
    </div>
</x-app-layout>
