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
              height: 145vh;
              background-size: 100% 100%;
              background-repeat: no-repeat;
              background-position: center center;
          }
    </style>
    <div class="w-full mt-8 bg-white p-3 min-h-screen">
      <div class="r-bg relative" style="background-image: url({{asset('images/registration.jpeg')}})">
              <div class="absolute top-[16.3%] left-[15.5%] w-38 text-left">#34</div>
{{--              <div class="absolute top-[16.3%] left-[13.5%] w-38 text-left">#2022</div>--}}
{{--              <div class="absolute top-calc(.4% + 25%) left-[34.5%] w-38 text-3xl text-black text-left">222531</div>--}}
{{--              <div class="absolute top-calc(.4% + 29%) left-[34.5%] w-38 text-3xl text-black text-left">2531</div>--}}
{{--              <div class="absolute top-calc(.4% + 24%) left-[77.8%] w-20 h-13.2 text-center">--}}
{{--                  <img class="h-full w-full" src="https://tiobd.com/uploads/studentprofile/1748836107797973.jpg" alt="">--}}
{{--              </div>--}}

      </div>

    </div>

</x-admin-app-layout>
