<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Students') }}</div>
            @can('student-create')
                <div>
                    <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                       href="{{ route('admin.student.create') }}">{{ __('Create Student') }}</a>
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
    <div class="w-full mt-8 bg-white p-3 print:p-0  ">
         <div class="w-full print:hidden flex justify-end"><button onclick="window.print()" class="px-3 py-1 rounded-md bg-green-600 text-white ">Print</button></div>
      <div class="r-bg relative w-full h-[600px] md:h-[130vh] text-lg font-bold print:h-[90vh]" style="background-image: url({{asset('images/register.jpg')}})">
              <div class="absolute top-[16%] left-[17%]  w-38 ">{{$student->id??''}}</div>
              <div class="absolute top-[25.5%]  left-[35.8%]  w-38 ">{{$student->registration??'N/A'}}</div>
              <div class="absolute top-[31%] left-[35.8%]  w-38 ">{{$student->roll??'N/A'}}</div>
              <div class="absolute top-[36.5%] left-[35.8%]  w-38 ">{{$student->session->name??'N/A'}}</div>
              <div class="absolute top-[25.5%] left-[75.8%]     w-[9.7rem] md:w-[12.5rem]  md:h-[9rem]  h-[10.6rem]">
                  <img class="w-[90px] h-[109px] md:w-full  md:h-full rounded-3xl" src="{{$student->picture??'N/A'}}" alt="">
              </div>
          <div class="absolute top-[42%] left-[35.8%]  w-38 ">{{$student->name??'N/A'}}</div>
          <div class="absolute top-[47.5%] left-[35.8%]  w-38 ">{{$student->fathers_name??'N/A'}}</div>
          <div class="absolute top-[53%] left-[35.8%]  w-38 ">{{$student->mothers_name??'N/A'}}</div>
          <div class="absolute top-[58.5%] left-[35.8%]  w-38 ">{{\App\Enums\Gender::fromValue(  $student->gender??'N/A')->key}}</div>
          <div class="absolute top-[64%] left-[35.8%]  w-38 ">{{$student->present_address??'N/A'}}</div>
          <div class="absolute top-[69.7%] left-[35.8%]  w-38 ">{{$student->permanent_address??'N/A'}}</div>
          <div class="absolute top-[75.2%] left-[35.8%]  w-38 ">{{$student->center->name??'N/A'}}</div>
          <div class="absolute top-[80.7%] left-[35.8%]  w-38 ">{{$student->center->code??'N/A'}}</div>
          <div class="absolute top-[82.5%] left-[84.3%]  w-38 "><img class="w-14 h-10" src="{{asset('signature.png')}}" alt=""></div>
      </div>
    </div>
</x-admin-app-layout>
