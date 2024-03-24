<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
                        <div class="text-xl">{{ __('Students') }}</div>

            <div>
                <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                   href="{{ route('admin.student.create') }}">{{ __('Create Student') }}</a>
            </div>

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
            <div class="absolute top-[18%] left-[18.8%]  w-38 ">{{$student->id??'N/A'}}</div>
            <div class="absolute top-[18%] left-[82.8%]  w-38 ">{{$student->registration??'N/A'}}</div>
            <div class="absolute top-[25%] left-[70.7%] w-[19.5%] h-[17.8%]  ">
                <img class="w-full h-full border-2 border-black rounded-[2.3rem]" src="{{$student->picture??'N/A'}}" alt="">
            </div>
            <div class="absolute top-[45%] left-[75.7%] w-[19.5%] h-[17.8%]  ">
                <div id="qrcode_1"></div>
            </div>

            <div class="absolute top-[26%] left-[40.8%]  w-38 ">{{$student->name??'N/A'}}</div>
            <div class="absolute top-[30.3%] left-[40.8%]  w-38 ">{{$student->fathers_name??'N/A'}}</div>
            <div class="absolute top-[34.5%] left-[40.8%]  w-38 ">{{$student->mothers_name??'N/A'}}</div>
            <div class="absolute top-[38.5%] left-[40.8%]  w-38 ">{{\App\Enums\Gender::fromValue(  $student->gender??'N/A')->key}}</div>
            <div class="absolute top-[42.5%] left-[40.8%]  w-38 ">{{\Carbon\Carbon::parse($student->date_of_birth)->format('d-M-Y')??'N/A'}}</div>
            <div class="absolute top-[47%] left-[40.8%] print:text-sm w-38 ">{{$student->center->name??'N/A'}}</div>
            <div class="absolute top-[50.5%] left-[40.8%] print:text-sm w-38 ">{{$student->center->code??'N/A'}}</div>
            <div class="absolute top-[54.8%] left-[40.8%]  print:text-sm w-38 ">
                @foreach(\App\Lib\Geo::districts() as $district_id => $district)
                   {{$student->center->district==$district_id ? $district['name'] : ''}}
                @endforeach
            </div>
            <div class="absolute top-[58.8%] left-[40.8%] print:text-sm  w-38 ">
                @foreach(\App\Lib\Geo::upazillas() as $upzilla_id => $upzila)
                    {{$student->center->upazilla==$upzilla_id ? $upzila['name'] : ''}}
                @endforeach

            </div>
            <div class="absolute top-[62.8%]  left-[40.8%]  w-38 ">{{$student->permanent_address??'N/A'}}</div>
            <div class="absolute top-[67%]  left-[40.8%]  w-38 ">{{$student->present_address??'N/A'}}</div>
            <div class="absolute top-[71%]  left-[40.8%]  w-38 ">{{$student->subject->name??'N/A'}}</div>
            <div class="absolute top-[75%] left-[40.8%]  w-38 ">{{$student->session->name??'N/A'}}</div>
            <div class="absolute top-[92.5%] left-[16%] italic w-38 text-xs text-gray-700 ">{{now()->format('d-M-Y')}}</div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/qrcode.js') }}"></script>
    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode_1"), {
            text: "{{route('studentResult',['roll'=>$student->roll])}}",
            width: 70,
            height: 70,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H,
        });
    </script>
</x-admin-app-layout>
