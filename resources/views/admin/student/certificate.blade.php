<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ asset('js/pdf.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2pdf.js"></script>
    <style>



        [x-cloak] {
            display: none !important;
        }

        @font-face {
            font-family: 'Monotype Corsiva';
            src: url('{{ asset('frontend/fonts/Monotype Corsiva/Monotype-Corsiva-Regular-Italic.ttf') }}') format('truetype');
        }

        body {
            font-family: 'Monotype Corsiva';
            font-weight: normal!important;
        }

        @media print {
            .no-print, .no-print * {
                display: none !important;
            }

            body {
                -webkit-print-color-adjust: exact;
            }
        }

        @page {
            size: A4 landscape;
            margin: 0;
        }

        .card-body {
            width: 1100px;
            height: 100vh;
            display: flex;
            justify-content: center;
        }

        .back-img {
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center center;
            font-size: 22px;
        }

        .student-id,
        .student-registration,
        .student-session,
        .student-name,
        .fathers-name,
        .mothers-name,
        .center-name,
        .student-roll,
        .student-subject,
        .center-code,
        .exam-date,
        .student-gpa,
        .student-result-published {
            font-weight: normal !important;

        }


        /* Absolute positioning of child elements */
        .absolute {
            position: absolute;
        }

        .student-id { top: 38.7%; left: 35%; }
        .student-registration { top: 37%; left: 82%; }
        .student-session { top: 41.6%; left: 82%;font-size: 18px }
        .student-name { top: 45.7%; left: 44.5%; }
        .fathers-name { top: 50%; left: 43.5%; text-transform: capitalize  ; }
        .mothers-name { top: 54%; left: 41.5%; text-transform: capitalize  ; }
        .center-name { top: 58%; left: 40%; }
        .student-roll { top: 62.7%; left: 39.5%; }
        .student-subject { top: 62.7%; left: 57.5%; }
        .center-code { top: 66%; left: 87%; }
        .exam-date { top: 68%; left: 50%; font-size: 16px}
        .student-gpa { top: 67.2%; left: 74.5%; }
        .student-result-published { top: 85%; left: 24%; font-size: 12px }
        .qr { top: 57%; left: 15.5%; }

        @media screen and (min-width: 740px) {
            .student-id { top: 38.7%; left: 35%; }
            .student-registration { top: 37%; left: 82%; }
            .student-session { top: 41.6%; left: 82%;font-size: 18px }
            .student-name { top: 45.7%; left: 44.5%; }
            .fathers-name { top: 50%; left: 43.5%; text-transform: capitalize  ; }
            .mothers-name { top: 54%; left: 41.5%; text-transform: capitalize  ; }
            .center-name { top: 58%; left: 40%; }
            .student-roll { top: 62.7%; left: 39.5%; }
            .student-subject { top: 62.7%; left: 57.5%; }
            .center-code { top: 66%; left: 87%; }
            .exam-date { top: 68%; left: 50%; font-size: 16px}
            .student-gpa { top: 67.2%; left: 74.5%; }
            .student-result-published { top: 85%; left: 24%; font-size: 12px }
            .qr { top: 57%; left: 15.5%; }
        }
        .no-background {
            background-image: none !important;
        }
        /* If you need custom capitalization */
        .text {
            text-transform: capitalize !important;
        }

    </style>
</head>
<body>
<div x-data="{ hasBackground: false }">
    <div class="w-full flex justify-end gap-1 print:hidden py-5 print:py-0">
{{--        <button onclick="generate_pdf()" class="px-3 py-1 rounded-md bg-green-700 text-slate-100">Download</button>--}}
        <button onclick="window.print()" class="px-3 py-1 rounded-md bg-green-700 text-slate-100">Print</button>
        <button @click="hasBackground = !hasBackground" class="px-3 py-1 rounded-md bg-green-700 text-slate-100">
            with Out Background
        </button>
    </div>
    <div class="card-body min-h-screen" id="fullpage2">
        <div :class="{ 'no-background': !hasBackground }"
             class="back-img"
             style="background-image:url({{ asset('images/student/certificate01.jpg') }}); position: relative; font-weight: bold;">
            <div>
                <div class="absolute student-id" style="  font-size:18px">
                    {{ \App\Lib\Helper::certificateSerialNumber($student->id) ?? '' }}
                </div>
                <div class="absolute student-registration">{{ $student->registration ?? '' }}</div>
                <div class="absolute student-session text"  >{{ $student->session->name ?? '' }}</div>
                <div class="absolute student-name">{{ ucwords(strtolower($student->name)) ?? '' }}</div>
                <div class="absolute fathers-name">{{ ucwords(strtolower($student->fathers_name ?? '')) }}</div>
                <div class="absolute mothers-name">{{ ucwords(strtolower($student->mothers_name ?? '')) }}</div>
                <div class="absolute center-name">{{ ucwords(strtolower($student->center->name ?? '')) }}</div>
                <div class="absolute student-roll">{{ ucwords(strtolower($student->roll ?? '')) }}</div>
                <div class="absolute student-subject">{{ ucwords(strtolower($student->subject->name ?? '')) }}</div>
                <div style="width: 75px; height: 75px"  class="absolute qr" id="qrcode_1"></div>

                <div class="absolute exam-date capitalize">
                    {{ \Carbon\Carbon::parse($student->exam_date)->format('j-F-Y') }}
                </div>
                <div class="absolute student-gpa">
                    {{ $student->gpa($student->result->written??0)?? '' }}
                </div>
                <div class="absolute student-result-published capitalize" style="font-size: 18px">

                    @if($student->result_publised)
                        {{ \App\Lib\Helper::numberToText((int)\Carbon\Carbon::make($student->result_publised)->format('d')) }}
                        {{ \Carbon\Carbon::make($student->result_publised)->format('j-F-Y') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function generate_pdf() {
        const element = document.getElementById('fullpage2');
        const options = {
            margin: 0,
            filename: 'certificate.pdf',
            image: { type: 'jpeg', quality: 0.99 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'A3', orientation: 'landscape' }
        };
        html2pdf().set(options).from(element).save();
    }
</script>

<script type="text/javascript" src="{{ asset('js/qrcode.js') }}"></script>
<script type="text/javascript">
    // Adjusted for high-quality QR code generation
    var qrcode = new QRCode(document.getElementById("qrcode_1"), {
        text: "{{   route('result',['roll'=>$student->roll])     }}",
        width: 500,  // Increased width for high resolution
        height: 500, // Increased height for high resolution
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H, // High error correction for better readability
    });

    // Optional: Scale down the QR code display size with CSS if required
    document.querySelector('#qrcode_1 img').style.width = "100px";
</script>


</body>
</html>

