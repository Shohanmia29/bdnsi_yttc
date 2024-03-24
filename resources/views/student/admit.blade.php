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
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
    <div class=" ">
        <div class="w-full    bg-white  overflow-x-auto  ">
            <div class="">
                <div class="r-bg  min-h-[100vh] print:min-h-[50vh] flex-col justify-center   w-full relative text-[16px] font-bold text-gray-500" style="background-image: url({{asset('images/admit.png')}});font-family: 'Times New Roman'">
                    <div class="absolute top-[22.3%] left-[81.5%] w-38 ">
                        <img class="w-24 h-24 rounded-md" src="{{$student->picture}}" alt="">
                    </div>
                    <div class="absolute top-[42.3%] left-[81.5%] w-38 ">
                        <div id="qrcode_1"></div>

                    </div>

                    <div class="absolute top-[23.3%]   print:top-[22%]  left-[12.5%] w-38  ">{{$student->id??''}}</div>
                    <div class="absolute top-[34%] left-[35.5%] w-38  ">{{$student->center->code??''}}</div>
                    <div class="absolute top-[39%] left-[35.5%] w-38  ">{{$student->center->name??''}}</div>
                    <div class="absolute top-[44%] left-[35.5%] w-38  ">{{$student->name??''}}</div>
                    <div class="absolute top-[50%] left-[35.5%] w-38  ">{{$student->fathers_name??''}}</div>
                    <div class="absolute top-[55%] left-[35.5%] w-38  ">{{$student->mothers_name??''}}</div>
                    <div class="absolute top-[60%] left-[35.5%] w-38  ">{{$student->roll??''}}</div>
                    <div class="absolute top-[66%] left-[35.5%] w-38  ">{{$student->registration??''}}</div>
                </div>

            </div>
            <div class="w-full flex justify-end py-1 print:hidden">
                <button onClick="window.print()" type="button" class="px-2 py-1 bg-green-700 text-white rounded-lg ">Print</button>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/qrcode.js') }}"></script>
    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode_1"), {
            text: "{{route('result',['roll'=>$student->roll])}}",
            width: 70,
            height: 70,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H,
        });
    </script>
</x-app-layout>
