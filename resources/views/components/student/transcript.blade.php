@props(['student'])
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=1024">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="{{mix('js/app.js')}}"></script>
    <x-calculate-gpa-script />
    <title>Transcript  </title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        img {
            width: 100%;
        }

        .admit-card-wrap {
            width: 1170px;
            height: 1650px;
            background-image: url({{asset('images/new/RegistrationCard.jpg')}});
            margin: auto;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 90px 130px;
            position: relative;
        }

        .info-btn {
            border: 3px solid green;
            background: red;
            color: white !important;
            padding: 1px 26px;
            font-size: 28px;
            border-radius: 21px;
        }

        .admit-card-body {
            padding-top: 35px;
        }

        .data-item-wrap {
            display: flex;
            gap: 12px;
            justify-content: space-between;
            align-items: center;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .data-item-wrap div:last-child {
            width: 68%;
        }

        .data-item-wrap div:first-child {
            width: 27%;
            line-height: 28px;
            font-size: 18px;
        }

        .admit-card-footer {
            position: absolute;
            width: 100%;
            bottom: 80px;
            left: 0;
            padding: 20px 130px;
        }

        .footer-sign-wrap {
            display: flex;
            justify-content: space-around;
            align-items: end;
            gap: 20px;
            margin-bottom: 40px;
        }

        .sign-cont hr {
            margin: 0;
            height: 3px;
            background: black;
            opacity: .7;
        }

        .sign-cont p {
            /* font-size: 18px; */
            font-weight: 600;
        }

        .sign-cont {
            flex: 1 1 33%;
        }

        .qr {
            width: 150px;
            height: 150px;
        }

        .w-18 {
            width: 18% !important;
        }

        .w-82 {
            width: 82% !important;
        }

        .print_btn {
            margin-top: 10px;
            text-align: center;
        }

        @media print {
            .print_btn {
                display: none;
            }
        }

        .data-item-wrap div:nth-child(2) {
            width: 5%;
            text-align: center;
        }
    </style>
</head>

<body>
<div class="print_btn">
    <button type="button" class="btn btn-primary px-5 mx-4" onclick="window.print()">Print</button>
    <button onclick="generate_pdf()" class="btn btn-secondary">Download</button>
    <a type="button" class="btn btn-warning px-5 mx-4" href="">Back</a>
</div>
@php($result=$student->result)
<div class="admit-card-wrap" id="html2pdf" x-data="{ w: {{ optional($result)->written ?? 0 }}, p: {{ optional($result)->practical ?? 0 }}, v: {{ optional($result)->viva ?? 0 }} }">
    <div class="admit-card-header">
        <div class="d-flex align-items-center ">
            <div class="w-18 text-center ">
                <img src="{{asset('images/new/logo.png')}}" style="width: 140px;margin-top: -4px;" alt="logo" />
            </div>
            <div class="cert-headings w-82">
                <img src="{{asset('images/banner.png')}}" class="w-100" alt="">
                <h5 class="normal-font" style="margin-left: 38px;"> Approved By Government of the People's Republic of Bangladesh.</h5>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="info-btn">Academic Transcript</button>
    </div>
    <div class="d-flex justify-content-between px-2">
        <div class="">
            <p>Serial No. : {{\App\Lib\Helper::serialNumber($student->id)}}</p>
        </div>
    </div>


    <div class="admit-card-body"  >
{{--        <h3 class="me-5 text-center fw-bold mb-4">{{$student->subject->name??'N/A'}}</h3>--}}
        <div class="cert-info fw-bold text-dark w-100 d-flex flex-row justify-content-center mt-2 ps-3 gap-2">
            <div class="w-75">
                <div class="data-item-wrap">
                    <div class="data-label">Name</div>
                    <div>:</div>
                    <div class="data-value"> {{$student->name??'N/A'}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Father's Name </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->fathers_name??'N/A'}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Mother's Name </div>
                    <div>:</div>
                    <div class="data-value">  {{$student->mothers_name??'N/A'}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Roll </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->roll??''}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Reg Number </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->registration??''}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Course Name </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->subject->name??''}}</div>
                </div>

                <div class="data-item-wrap">
                    <div class="data-label">Course Duration </div>
                    <div>:</div>
                    <div class="data-value">
                        {{$student->course_duration??'N/A'}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Session </div>
                    <div>:</div>
                    <div class="data-value">
                        {{$student->session->name??'N/A'}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Grade Point </div>
                    <div>:</div>
                    <div class="data-value  " x-html="calculateCGPA(parseInt(w)+parseInt(p)+parseInt(v)) +'   (In the Scale Of 5.00)'">

                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Letter Grade </div>
                    <div>:</div>
                    <div class="data-value" x-html="calculateGPA(parseInt(w)+parseInt(p)+parseInt(v))">
{{--                         A+--}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Institute Name </div>
                    <div>:</div>
                    <div class="data-value">
                          {{$student->center->name??''}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Institute Code </div>
                    <div>:</div>
                    <div class="data-value">
                          {{$student->center->code??''}}
                    </div>
                </div>


            </div>



            <div class="w-25 text-center pe-2">
                <div style="/*margin-top: -175px;*/">
{{--                    <img src="{{$student->picture}}" style="width: 150px; margin-bottom: 55px;" alt="portrait" />--}}
                </div>

            </div>
        </div>

    </div>
    <div class="admit-card-footer">
        <div>
            <table class="table table-border ">
                <thead>
                <tr class="w-full">
                    <th class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Written') }}</th>
                    <th class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Practical') }}</th>
                    <th class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Viva') }}</th>
                    <th class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Total') }}</th>
                    <th class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Full Mark') }}</th>
                    <th class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Grade') }}</th>
                    <th class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('CGPA') }}</th>
                </tr>
                </thead>
                <tr class="w-full bg-gray-100"  >
                    <td class="border p-2 text-center w-1/6" x-html="w"></td>
                    <td class="border p-2 text-center w-1/6" x-html="p"></td>
                    <td class="border p-2 text-center w-1/6" x-html="v"></td>
                    <td class="border p-2 text-center w-1/6" x-html="parseInt(w)+parseInt(p)+parseInt(v)"></td>
                    <td class="border p-2 text-center w-1/6">100</td>
                    <td class="border p-2 text-center w-1/6" x-html="calculateGPA(parseInt(w)+parseInt(p)+parseInt(v))"></td>
                    <td class="border p-2 text-center w-1/6" x-html="calculateCGPA(parseInt(w)+parseInt(p)+parseInt(v))">.</td>
                </tr>

            </table>
        </div>
        <div class="footer-sign-wrap">
            <div class="sign-cont text-center">
{{--                <hr />--}}
{{--                <p>Signature of the <br /> Student</p>--}}
            </div>
            <div class="sign-cont text-center">
{{--                <hr />--}}
{{--                <p>Signature Of The Regional <br /> Director</p>--}}
            </div>
            <div class="sign-cont text-center">
                <img class="text-center" style="width: 200px" src="{{asset('images/Signature1.png')}}" alt="signature" />
                <hr />
                <p>Exam Controller <br /> bystt</p>
            </div>
        </div>
        <hr />
        <div class="fw-semibold">
            <p></p>

        </div>
    </div>
</div>
<script type="text/javascript">
    function generate_pdf() {
        var opt = {
            margin: 0,
            filename: 'myfile.pdf',
            image: {
                type: 'jpeg',
                quality: 0.99
            },
            html2canvas: {
                scale: 1,
                width: 1200,
                height: 1660
            },
            jsPDF: {
                unit: 'in',
                format: 'A3',
                orientation: 'portrait'
            }
        };
        // html2pdf().from(document.getElementById('fullpage2')).set(opt).save();
        html2pdf().from(document.getElementById('html2pdf')).set(opt).save().then(function() {
            document.getElementById('fullpage2').classList.add('hidePDFdata');
        });
    }
</script>




</body>

</html>


