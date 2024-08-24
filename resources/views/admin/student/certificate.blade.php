<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<style>
    /* Define custom font */
    @font-face {
        font-family: 'English111 Vivace BT';
        src: url('{{ asset('frontend/font-awesome-4.7.0/fonts/e111viva.ttf') }}') format('truetype');
    }

    /* Font styling */
    .fontStyle {
        font-family: 'English111 Vivace BT', serif;
        font-weight: bold;
        font-size: 25px;
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


    /* Container styling */
    .admit-card-wrap {
        width: 1000px;
        height: 100vh;
        background-image: url({{ asset('images/new/certifcate.jpg') }});
        background-position: center center;
        background-repeat: no-repeat;
        background-color: #FAFCF2;
        position: relative;
    }

    /* Absolute positioning of child elements */
    .absolute {
        position: absolute;
    }

    /* Specific positioning of text elements */
    .student-id { top: 45.3%; left: 33.5%; }
    .student-roll { top: 36.5%; left: 77.5%; }
    .student-registration { top: 41.5%; left: 77.5%; }
    .student-session { top: 46.5%; left: 77.5%; }
    .student-name { top: 52.5%; left: 42.5%; }
    .fathers-name { top: 57.4%; left: 35.5%; text-transform: capitalize !important; }
    .mothers-name { top: 57.5%; left: 73.5%; text-transform: capitalize !important; }
    .student-subject { top: 62%; left: 47.5%; }
    .center-name { top: 67.5%; left: 44%; }
    .center-code { top: 67%; left: 87%; }
    .exam-date { top: 72.4%; left: 55%; }
    .student-gpa { top: 72%; left: 87%; }

    @media print {

        /* Adjusting font size for print */
        .fontStyle {
            font-size: 14pt;
        }

        .absolute {
            font-size: 12pt; /* Adjust for print readability */
            color: black; /* Ensure good contrast */
        }

        /* Hide elements not necessary for print */
        .no-print {
            display: none;
        }
    }
</style>

<div class="fontStyle">
    <div class="w-full bg-white md:p-10">
        <div class="admit-card-wrap">
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
