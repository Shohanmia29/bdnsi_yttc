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
 <div class="print:min-h-screen">
     <div class="w-full   bg-white min-w-[800px] overflow-x-auto  ">
         <div class="flex flex-col   print:h-screen  justify-between">
             <div class="r-bg  print:h-[48vh] h-screen   w-full relative text-[16px] font-bold text-gray-500" style="background-image: url({{asset('images/admit.png')}});font-family: 'Times New Roman'">
                 <div class="absolute top-[18.3%] left-[81.5%] w-38  ">
                     <img class="w-24 h-24 rounded-md" src="{{$student->picture}}" alt="">
                 </div>
                 <div class="absolute top-[7%] left-[30.5%] text-[#1C77B9]      text-xl     w-38      uppercase">Bangladesh Technical & Software Institute</div>
                 <div class="absolute top-[12.3%]  left-[30.5%] text-[#1C77B9] text-sm py-1 uppercase  tracking-[3px]     w-38  tracking-y-[20px]   ">{{$student->subject->name  .'-'.   date('y',strtotime($student->session->start_date))??''}}</div>
                 <div class="absolute top-[23.3%] md:top-[22%] left-[12.5%] w-38  ">{{$student->id??''}}</div>
                 <div class="absolute md:top-[18%] top-[19%] left-[56.5%] w-38  ">C-{{$student->center->code??''}}/{{date('y',strtotime($student->session->start_date))}} </div>
                 <div class="absolute top-[31%] left-[19.5%] w-38  ">{{$student->center->code??''}}</div>
                 <div class="absolute top-[38%] left-[19.5%] w-38  ">{{$student->roll??''}}</div>
                 <div class="absolute top-[45.2%] left-[19.5%] w-38  ">{{$student->registration??''}}</div>
                 <div class="absolute top-[37.5%] left-[62.3%] w-38  ">{{$student->center->name??''}}</div>
                 <div class="absolute top-[45.5%] md:top-[44%] left-[62.5%] w-38  ">{{$student->subject->name??''}}</div>
                 <div class="absolute top-[51.5%]  left-[19.5%] w-38  ">{{$student->session->name??''}}</div>
                 <div class="absolute top-[51.5%] left-[62.5%] w-38  ">{{$student->name??''}}</div>
                 <div class="absolute top-[59.5%] left-[19.5%] w-38  ">Regular</div>
                 <div class="absolute top-[59.4%] md:top-[59%] left-[62.5%] w-38  ">{{$student->fathers_name??''}}</div>
                 <div class="absolute top-[67.5%] left-[19.5%] w-38  ">{{$student->exam_date??''}}</div>
                 <div class="absolute top-[67.5%] left-[62.5%] w-38  ">{{$student->mothers_name??''}}</div>
                 <div class="absolute top-[85.5%] text-[#7CA299]  left-[11%] w-38 capitalize tracking-[.1em] ">{{$student->center->name??''}}</div>
             </div>
             <div class="r-bg  print:h-[48vh] h-screen   w-full relative text-[16px] font-bold text-gray-500" style="background-image: url({{asset('images/admit.png')}});font-family: 'Times New Roman'">
                 <div class="absolute top-[18.3%] left-[81.5%] w-38 ">
                     <img class="w-24 h-24 rounded-md" src="{{$student->picture}}" alt="">
                 </div>
                 <div class="absolute top-[7%] left-[30.5%] text-[#1C77B9]      text-xl     w-38      uppercase">Bangladesh Technical & Software Institute</div>
                 <div class="absolute top-[12.3%]  left-[30.5%] text-[#1C77B9] text-sm py-1 uppercase  tracking-[3px]     w-38  tracking-y-[20px]   ">{{$student->subject->name  .'-'.   date('y',strtotime($student->session->start_date))??''}}</div>
                 <div class="absolute top-[23.3%] md:top-[22%] left-[12.5%] w-38  ">{{$student->id??''}}</div>
                 <div class="absolute md:top-[18%] top-[19%] left-[56.5%] w-38  ">C-{{$student->center->code??''}}/{{date('y',strtotime($student->session->start_date))}} </div>
                 <div class="absolute top-[31%] left-[19.5%] w-38  ">{{$student->center->code??''}}</div>
                 <div class="absolute top-[38%] left-[19.5%] w-38  ">{{$student->roll??''}}</div>
                 <div class="absolute top-[45.2%] left-[19.5%] w-38  ">{{$student->registration??''}}</div>
                 <div class="absolute top-[37.5%] left-[62.3%] w-38  ">{{$student->center->name??''}}</div>
                 <div class="absolute top-[45.5%] md:top-[44%] left-[62.5%] w-38  ">{{$student->subject->name??''}}</div>
                 <div class="absolute top-[51.5%]  left-[19.5%] w-38  ">{{$student->session->name??''}}</div>
                 <div class="absolute top-[51.5%] left-[62.5%] w-38  ">{{$student->name??''}}</div>
                 <div class="absolute top-[59.5%] left-[19.5%] w-38  ">Regular</div>
                 <div class="absolute top-[59.4%] md:top-[59%] left-[62.5%] w-38  ">{{$student->fathers_name??''}}</div>
                 <div class="absolute top-[67.5%] left-[19.5%] w-38  ">{{$student->exam_date??''}}</div>
                 <div class="absolute top-[67.5%] left-[62.5%] w-38  ">{{$student->mothers_name??''}}</div>
                 <div class="absolute top-[85.5%] text-[#7CA299]  left-[11%] w-38 capitalize tracking-[.1em] ">{{$student->center->name??''}}</div>
             </div>

         </div>
         <div class="w-full flex justify-end py-1 print:hidden">
             <button onClick="window.print()" type="button" class="px-2 py-1 bg-green-700 text-white rounded-lg ">Print</button>
         </div>
     </div>
 </div>
</x-app-layout>
