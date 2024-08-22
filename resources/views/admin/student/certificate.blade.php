<link rel="stylesheet" href="{{mix('css/app.css')}}">
    <style>
        .admit-card-wrap {
            width: 1185px;
            height: 835px;
            background-image: url({{asset('images/new/certifcate.jpg')}});
            margin: auto auto;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #FAFCF2;
            padding: 70px 90px;
            position: relative;
        }


    </style>
    <div class=" ">
        <div class="w-full    bg-white  overflow-x-auto  ">
            <div class="">
               <div class="admit-card-wrap font-bold"  >
                   <div class="absolute top-[45.3%]      left-[33.5%] w-38  ">{{$student->id??''}}</div>
                    <div class="absolute top-[38%] left-[77.5%] w-38  ">{{$student->roll??''}}</div>
                    <div class="absolute top-[43%] left-[77.5%] w-38  ">{{$student->registration??''}}</div>
                    <div class="absolute top-[47.5%] left-[77.5%] w-38  ">{{$student->session->name??''}}</div>
                   <div class="absolute top-[52.5%] left-[42.5%] w-38  ">{{$student->name??''}}</div>
                   <div class="absolute top-[57.4%]   left-[40.5%] w-38  ">{{$student->fathers_name??''}}</div>
                   <div class="absolute top-[57.5%] left-[73.5%] w-38  ">{{$student->mothers_name??''}} </div>
                   <div class="absolute top-[62.4%]   left-[47.5%] w-38  ">{{$student->subject->name??''}}</div>
                   <div class="absolute top-[67%]   left-[44%] w-38  ">{{$student->center->name??''}}</div>
                   <div class="absolute top-[67%]   left-[87%] w-38  ">{{$student->center->code??''}}</div>
                   <div class="absolute top-[72%]   left-[55%] w-38  ">{{\Carbon\Carbon::make($student->exam_date)->format('M-Y')??''}}</div>
                   <div class="absolute top-[72%]   left-[87%] w-38  ">{{$student->result->gpa()??''}}</div>

                </div>

            </div>

        </div>
    </div>

