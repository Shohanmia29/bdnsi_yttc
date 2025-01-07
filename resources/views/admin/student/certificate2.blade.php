

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<style>
    @font-face {
        font-family: certificate;
        src: url({{asset('frontend/fonts/Monotype Corsiva/Monotype-Corsiva-Regular-Italic.ttf')}});
    }
    * {
        font-family: certificate;
    }

    .bg-image {
        background: url({{asset('images/student/certificate01.jpg')}});
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
<div class="bg-image w-full h-screen relative font-bold text-base">
    <p class="absolute top-[291px] lg:top-[294px] left-[340px] lg:left-[557px]">Serial No</p>
    <p class="absolute top-[288px] lg:top-[288px] right-[90px] lg:right-[318px]">Registration No</p>
    <p class="absolute top-[314px] lg:top-[317px] right-[135px] lg:right-[361px]">Seassion</p>
    <p class="absolute top-[349px] lg:top-[352px] left-[400px] lg:left-[627px]">Student Name</p>
    <p class="absolute top-[382px] lg:top-[387px] left-[400px] lg:left-[620px]">Father's Name</p>
    <p class="absolute top-[412px] lg:top-[417px] left-[400px] lg:left-[613px]">Mother's Name</p>
    <p class="absolute top-[445px] lg:top-[450px] left-[300px] lg:left-[550px]">Name of Institute</p>
    <p class="absolute top-[479px] lg:top-[483px] left-[374px] lg:left-[600px]">244773</p>
    <p class="absolute top-[479px] lg:top-[483px] left-[544px] lg:left-[780px]">course Name</p>
    <p class="absolute top-[512px] lg:top-[512px] left-[474px] lg:left-[707px]">Exam Date</p>
    <p class="absolute top-[512px] lg:top-[512px] left-[724px] lg:left-[950px]">CGPA</p>
</div>
</body>
</html>


{{--
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
            src: url('{{ asset('frontend/fonts/Monotype Corsiva/Monotype-Corsiva-Regular.ttf') }}') format('truetype');
        }

        body {
            font-family: 'Monotype Corsiva';
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

        /* Absolute positioning of child elements */
        .absolute {
            position: absolute;
        }

        .student-id { top: 40%; left: 32%; }
        .student-registration { top: 36%; left: 80.5%; }
        .student-session { top: 42%; left: 80.5%; }
        .student-name { top: 45%; left: 44.5%; }
        .fathers-name { top: 50%; left: 43.5%; text-transform: capitalize !important; }
        .mothers-name { top: 56.5%; left: 41.5%; text-transform: capitalize !important; }
        .center-name { top: 58.5%; left: 40%; }
        .student-roll { top: 62%; left: 38.5%; }
        .student-subject { top: 63%; left: 57.5%; }
        .center-code { top: 66%; left: 87%; }
        .exam-date { top: 69%; left: 47%; }
        .student-gpa { top: 68.5%; left: 75%; }
        .student-result-published { top: 85%; left: 24%; }

        .no-background {
            background-image: none !important;
        }
    </style>
</head>
<body>
<div x-data="{ hasBackground: true }">
    <div class="w-full flex justify-end gap-1 print:hidden py-5 print:py-0">
        <button onclick="generate_pdf()" class="px-3 py-1 rounded-md bg-green-700 text-slate-100">Download</button>
        <button onclick="window.print()" class="px-3 py-1 rounded-md bg-green-700 text-slate-100">Print</button>
        <button @click="hasBackground = !hasBackground" class="px-3 py-1 rounded-md bg-green-700 text-slate-100">
            Toggle Background
        </button>
    </div>
    <div class="card-body min-h-screen" id="fullpage2">
        <div :class="{ 'no-background': !hasBackground }"
             class="back-img"
             style="background-image:url({{ asset('images/new/certificate3.jpg') }}); position: relative; font-weight: bold;">
            <div>
                <div class="absolute student-id" style="font-family: 'Segoe UI'; font-size:18px">
                    {{ \App\Lib\Helper::certificateSerialNumber($student->id) ?? '' }}
                </div>
                <div class="absolute student-registration">{{ $student->registration ?? '' }}</div>
                <div class="absolute student-session">{{ $student->session->name ?? '' }}</div>
                <div class="absolute student-name">{{ $student->name ?? '' }}</div>
                <div class="absolute fathers-name">{{ ucwords(strtolower($student->fathers_name ?? '')) }}</div>
                <div class="absolute mothers-name">{{ ucwords(strtolower($student->mothers_name ?? '')) }}</div>
                <div class="absolute center-name">{{ $student->center->name ?? '' }}</div>
                <div class="absolute student-roll">{{ $student->roll ?? '' }}</div>
                <div class="absolute student-subject">{{ $student->subject->name ?? '' }}</div>
                <div class="absolute exam-date capitalize">
                    {{ \Carbon\Carbon::parse($student->exam_date)->format('j-F-Y') }}
                </div>
                <div class="absolute student-gpa">
                    {{ $student->result->gpa() ?? '' }}
                </div>
                <div class="absolute student-result-published capitalize" style="font-size: 18px">
                    @if($student->result_published)
                        {{ \App\Lib\Helper::numberToText((int)\Carbon\Carbon::make($student->result_published)->format('d')) }}
                        {{ \Carbon\Carbon::make($student->result_published)->format('F-Y') }}
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
</body>
</html>
--}}
