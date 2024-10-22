<link rel="stylesheet" href="{{mix('css/app.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
{{--<meta name="viewport" content="width=1024">--}}
<script src="{{mix('js/app.js')}}"></script>
        <style>
            [x-cloak] { display: none !important; }
            @font-face {
                font-family: 'English111 Vivace BT';
                src: url('{{ asset('frontend/font-awesome-4.7.0/fonts/e111viva.ttf') }}') format('truetype');
            }
            @media print
            {
                .no-print, .no-print *
                {
                    display: none !important;
                }
            }

            @media print {
                body {-webkit-print-color-adjust: exact;}
            }
            @page {
                size:A4 landscape;
                margin-left: 0px;
                margin-right: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                margin: 0;
            }

            .card-body{
                width: 1100px;
                height: 100vh;
                display: flex;
                justify-content: center;
            }



            .back-img{
                width: 100%;
                height: 100%;
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-position: center center;
                font-family: 'English111 Vivace BT', serif;
                font-size: 22px;
            }


            /* Absolute positioning of child elements */
            .absolute {
                position: absolute;
            }
            .student-id { top: 45%; left: 32%; }
            .student-roll { top: 37%; left: 77.5%; }
            .student-registration { top: 42%; left: 77.5%; }
            .student-session { top: 46.5%; left: 74%; }
            .student-name { top: 51.5%; left: 42.5%; }
            .fathers-name { top: 56.4%; left: 37.5%; text-transform: capitalize !important; }
            .mothers-name { top: 56.5%; left: 75.5%; text-transform: capitalize !important; }
            .student-subject { top: 61%; left: 47.5%; }
            .center-name { top: 65.5%; left: 44%; }
            .center-code { top: 66%; left: 87%; }
            .exam-date { top: 70.4%; left: 51%; }
            .student-gpa { top: 70.5%; left: 87%; }
            .student-result-published { top: 88%; left: 23%; }
            .exam-sign { top: 80.5%; left: 41%; }
            .ChairmanSignnature { top: 80.5%; left: 80%; }
            @media (min-width: 775px) {
                .student-id { top: 44%; left: 32%; }
                .student-roll { top: 36%; left: 77.5%; }
                .student-registration { top: 41%; left: 77.5%; }
                .student-session { top: 45.5%; left: 74%; }
                .student-name { top: 50.5%; left: 42.5%; }
                .fathers-name { top: 55.4%; left: 37.5%; text-transform: capitalize !important; }
                .mothers-name { top: 55.5%; left: 75.5%; text-transform: capitalize !important; }
                .student-subject { top: 60%; left: 47.5%; }
                .center-name { top: 64.5%; left: 44%; }
                .center-code { top: 65%; left: 87%; }
                .exam-date { top: 69.4%; left: 51%; }
                .student-gpa { top: 69.5%; left: 87%; }
                .student-result-published { top: 87%; left: 23%; }
                .exam-sign { top: 79%; left: 41%; }
                .ChairmanSignnature { top: 79%; left: 80%; }

            }


            .no-background {
                background-image: none !important;
            }


        </style>

        <div class=" "  x-data="{ hasBackground: true }"  >
            <div class="w-full flex justify-end gap-1 print:hidden py-5 print:py-0">
                <button onclick="generate_pdf()" class="px-3 py-1 rounded-md bg-green-700 text-slate-100 ">Download</button>
                <button onclick="window.print()" class="px-3 py-1 rounded-md bg-green-700 text-slate-100 ">Print</button>
                <button @click="hasBackground = !hasBackground" class="px-3 py-1 rounded-md bg-green-700 text-slate-100 ">Remove background</button>
            </div>
                <div class="card-body   min-h-screen "  id="fullpage2">
                    <div  :class="{ 'no-background': !hasBackground }"  class="back-img   " style="background-image:url({{ asset('images/new/certificate2.jpg')}}) ; position: relative;  font-weight: bold;">

                        <div class=" ">
                            <div class="absolute student-id" style="font-family: 'Segoe UI'; font-size:18px ">{{\App\Lib\Helper::certificateSerialNumber($student->id) ?? ''}}</div>
                            <div class="absolute student-roll">{{$student->roll ?? ''}}</div>
                            <div class="absolute student-registration">{{$student->registration ?? ''}}</div>
                            <div class="absolute student-session">{{$student->session->name ?? ''}}</div>
                            <div class="absolute student-name">{{$student->name ?? ''}}</div>
                            <div class="absolute fathers-name">{{ ucwords(strtolower($student->fathers_name) ?? '') }}</div>
                            <div class="absolute mothers-name">{{ ucwords(strtolower($student->mothers_name) ?? '') }}</div>
                            <div class="absolute student-subject">{{$student->subject->name ?? ''}}</div>
                            <div class="absolute center-name">{{$student->center->name ?? ''}}</div>
                            <div class="absolute center-code">{{$student->center->code ?? ''}}</div>
                            <div class="absolute exam-date capitalize">
                               @if($student->exam_date !=null) {{ \App\Lib\Helper::numberToText((int)Carbon\Carbon::make($student->exam_date)->format('d')) ?? '' }} {{ optional(Carbon\Carbon::make($student->exam_date))->format('F -Y') ?? '' }}@endif
                            </div>
                            <div class="absolute student-gpa">
                                {{ $student->result->gpa() ?? '' }}
                            </div>
                            <div class="absolute student-result-published capitalize" style="font-size: 18px">
                                @if($student->result_publised !=null)  {{ \App\Lib\Helper::numberToText((int)Carbon\Carbon::make($student->result_publised)->format('d')) ?? '' }} {{ optional(Carbon\Carbon::make($student->result_publised))->format('F-Y') ?? ''}}@endif
                            </div>
                            <div class="absolute exam-sign capitalize" style="font-size: 18px">
                                <img class="w-[100px] h-11" src="{{asset('images/new/ExamController.png')}}" alt="">
                            </div>
                            <div class="absolute ChairmanSignnature capitalize" style="font-size: 18px">
                                <img class="w-[100px] h-12" src="{{asset('images/new/ChairmanSignnature.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

        </div>


<script type="text/javascript">
    function generate_pdf() {

        var opt = {
            margin: 0,
            filename: 'certificate.pdf',
            image: {
                type: 'jpeg',
                quality: 0.99
            },
            html2canvas: {
                scale: 1,
                width: 1100,
                height: 860
            },
            jsPDF: {
                unit: 'in',
                format: 'A3',
                orientation: 'portrait'
            }
        };


        html2pdf().from(document.getElementById('fullpage2')).set(opt).save().then(function() {
            document.getElementById('fullpage2').classList.add('hidePDFdata');
        });
    }
</script>
