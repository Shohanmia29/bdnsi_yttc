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
              width: 100%;
              height: 130vh;
              background-size: 100% 100%;
              background-repeat: no-repeat;
              background-position: center center;
          }
    </style>
    <div class="w-full mt-8 bg-white p-3  ">
      <div class="r-bg relative" style="background-image: url({{asset('images/register.jpg')}})">
              <div class="absolute top-[16.5%] left-[17.8%] text-sm font-bold w-38 text-left">#{{$student->id??''}}</div>
              <div class="absolute top-[24.5%] left-[35.8%] text-sm font-bold w-38 text-left">#{{$student->registration??'N/A'}}</div>
              <div class="absolute top-[29.5%] left-[35.8%] text-sm font-bold w-38 text-left">#{{$student->roll??'N/A'}}</div>
              <div class="absolute top-[34%] left-[35.8%] text-sm font-bold w-38 text-left">{{$student->session->name??'N/A'}}</div>
              <div class="absolute top-[24.5%] left-[75.8%] text-sm font-bold w-38 text-left">
                  <img class="w-28 h-28 rounded-lg" src="{{$student->picture??'N/A'}}" alt="">
              </div>
          <div class="absolute top-[38.5%] left-[35.8%] text-sm font-bold w-38 text-left">{{$student->name??'N/A'}}</div>
          <div class="absolute top-[43.5%] left-[35.8%] text-sm font-bold w-38 text-left">{{$student->fathers_name??'N/A'}}</div>
          <div class="absolute top-[47.5%] left-[35.8%] text-sm font-bold w-38 text-left">{{$student->mothers_name??'N/A'}}</div>
          <div class="absolute top-[52.5%] left-[35.8%] text-sm font-bold w-38 text-left">{{\App\Enums\Gender::fromValue(  $student->gender??'N/A')->key}}</div>
          <div class="absolute top-[57.5%] left-[35.8%] text-sm font-bold w-38 text-left">{{$student->present_address??'N/A'}}</div>
          <div class="absolute top-[62.5%] left-[35.8%] text-sm font-bold w-38 text-left">{{$student->permanent_address??'N/A'}}</div>
          <div class="absolute top-[67.5%] left-[35.8%] text-sm font-bold w-38 text-left">{{$student->center->name??'N/A'}}</div>
          <div class="absolute top-[71.5%] left-[35.8%] text-sm font-bold w-38 text-left">{{$student->center->id??'N/A'}}</div>

      </div>

    </div>

</x-admin-app-layout>
