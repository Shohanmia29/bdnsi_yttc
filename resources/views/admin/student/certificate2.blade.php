<x-admin-app-layout>

        <style>

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

            .back-img{
                width: 1200px;
                height: 100vh;
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-position: center center;
                font-family: 'English111 Vivace BT', serif;
            }


            /* Absolute positioning of child elements */
            .absolute {
                position: absolute;
            }

            /* Specific positioning of text elements */
            .student-id { top: 44%; left: 33.5%; }
            .student-roll { top: 38%; left: 77.5%; }
            .student-registration { top: 43%; left: 77.5%; }
            .student-session { top: 46.5%; left: 77.5%; }
            .student-name { top: 52.5%; left: 42.5%; }
            .fathers-name { top: 57.4%; left: 35.5%; text-transform: capitalize !important; }
            .mothers-name { top: 57.5%; left: 73.5%; text-transform: capitalize !important; }
            .student-subject { top: 61.5%; left: 47.5%; }
            .center-name { top: 66.5%; left: 44%; }
            .center-code { top: 67%; left: 87%; }
            .exam-date { top: 71.4%; left: 55%; }
            .student-gpa { top: 71.5%; left: 87%; }

        </style>

        <div class="success-student">
                <div class="card-body">
                    <div class="back-img " style="background-image:url({{ asset('images/new/certifcate.jpg')}}) ; position: relative;  font-weight: bold;">
                        <div class=" ">
                            <div class="absolute student-id">{{$student->id ?? ''}}</div>
                            <div class="absolute student-roll">{{$student->roll ?? ''}}</div>
                            <div class="absolute student-registration">{{$student->registration ?? ''}}</div>
                            <div class="absolute student-session">{{$student->session->name ?? ''}}</div>
                            <div class="absolute student-name">{{$student->name ?? ''}}</div>
                            <div class="absolute fathers-name">{{$student->fathers_name ?? ''}}</div>
                            <div class="absolute mothers-name">{{$student->mothers_name ?? ''}}</div>
                            <div class="absolute student-subject">{{$student->subject->name ?? ''}}</div>
                            <div class="absolute center-name">{{$student->center->name ?? ''}}</div>
                            <div class="absolute center-code">{{$student->center->code ?? ''}}</div>
                            <div class="absolute exam-date">{{\Carbon\Carbon::make($student->exam_date)->format('M-Y') ?? ''}}</div>
                            <div class="absolute student-gpa">{{$student->result->gpa() ?? ''}}</div>
                        </div>
                    </div>
                </div>

        </div>


</x-admin-app-layout>
