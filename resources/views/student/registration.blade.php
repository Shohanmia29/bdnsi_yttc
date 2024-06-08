
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

    <title>Registration Card</title>
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
            background-image: url({{asset('images/RegistrationCard.jpg')}});
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
<div class="admit-card-wrap" id="html2pdf">
    <div class="admit-card-header">
        <div class="d-flex align-items-center ">
            <div class="w-18 text-center ">
                <img src="{{asset('logo.png')}}" style="width: 140px;" alt="logo" />
            </div>
            <div class="cert-headings w-82">
                <img src="{{asset('images/banner.png')}}" class="w-100" alt="">
                <h5 class="normal-font"> Approved By Government of the People's Republic of Bangladesh.</h5>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="info-btn">Registration Card</button>
    </div>
    <div class="d-flex justify-content-between px-2">
        <div class="">
            <p>Serial No. : {{$student->id}}</p>
        </div>
    </div>
    <div class="admit-card-body">
        <h3 class="me-5 text-center fw-bold mb-4">{{$student->subject->name??'N/A'}}</h3>
        <div class="cert-info fw-bold text-dark w-100 d-flex flex-row justify-content-center mt-2 ps-3 gap-2">
            <div class="w-75">
                <div class="data-item-wrap">
                    <div class="data-label">Registration Number</div>
                    <div>:</div>
                    <div class="data-value"> {{$student->registration??'N/A'}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Name of Student</div>
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
                    <div class="data-label">Gender </div>
                    <div>:</div>
                    <div class="data-value"> {{\App\Enums\Gender::fromValue(  $student->gender??'N/A')->key}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Institute Name </div>
                    <div>:</div>
                    <div class="data-value">
                        {{$student->center->name??'N/A'}}
                    </div>
                </div>

                <!--<div class="data-item-wrap">-->
                <!--    <div class="data-label">Institute District </div>-->
                <!-- <div>:</div> -->
                <!--    <div class="data-value">  Chattogram</div>-->
                <!--</div>-->
                <div class="data-item-wrap">
                    <div class="data-label">Student Thana </div>
                    <div>:</div>
                    <div class="data-value">
                        @foreach(\App\Lib\Geo::upazillas() as $upzilla_id => $upzila)
                            {{$student->center->upazilla==$upzilla_id ? $upzila['name'] : ''}}
                        @endforeach
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Student District </div>
                    <div>:</div>
                    <div class="data-value">
                        @foreach(\App\Lib\Geo::districts() as $district_id => $district)
                            {{$student->center->district==$district_id ? $district['name'] : ''}}
                        @endforeach
                    </div>
                </div>

                <div class="data-item-wrap">
                    <div class="data-label">Course Name </div>
                    <div>:</div>
                    <div class="data-value">{{$student->subject->name??'N/A'}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Course Duration </div>
                    <div>:</div>
                    <div class="data-value">{{$student->course_duration??'N/A'}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Session </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->session->name??'N/A'}}</div>
                </div>
            </div>


            <div class="w-25 text-center pe-2">
                <div style="/*margin-top: -175px;*/">
                    <img src="{{$student->picture}}" style="width: 150px; margin-bottom: 55px;" alt="portrait" />
                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
    <div class="admit-card-footer">
        <div class="footer-sign-wrap">
            <div class="sign-cont text-center">
                <hr />
                <p>Signature of the <br /> Student</p>
            </div>
            <div class="sign-cont text-center">
                <hr />
                <p>Signature Of The Regional <br /> Director</p>
            </div>
            <div class="sign-cont text-center">
                <img class="text-center" style="width: 250px" src="{{asset('images/Signature1.png')}}" alt="signature" />
                <hr />
                <p>Exam Controller <br /> BTCIS</p>
            </div>
        </div>
        <hr />
        <div class="fw-semibold">
            <p></p>
            <ol>
                <li>This Registration card is valid till 8 Consecutive years</li>
                <li>For All Correspondence with the byttc, Institute code, registration number and session are to be mentioned
                </li>
                <li>Scan the QR code and follow the link in the QR code to verify the Registration card from   </li>
            </ol>
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



{{--<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Students') }}</div>
            @can('student-create')
                <div>
                    <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                       href="{{ route('admin.student.create') }}">{{ __('Create Student') }}</a>
                </div>
            @endcan
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
            text: "{{route('result',['roll'=>$student->roll])}}",
            width: 70,
            height: 70,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H,
        });
    </script>
</x-app-layout>--}}
