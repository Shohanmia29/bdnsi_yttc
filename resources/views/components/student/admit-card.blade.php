

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
    <title>Admit Card</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        img {
            width: 100%;
        }


        .admit-card-wrap {
            width: 1185px;
            height: 835px;
            background-image: url({{asset('images/AdmitCard.jpg')}});
            margin: auto auto;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 70px 90px;
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

        .data-item-wrap {
            display: flex;
            gap: 12px;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            margin-bottom: 0px;
        }

        .data-item-wrap div {
            width: 70%;
        }

        .data-item-wrap div:first-child {
            width: 27%;
            line-height: 28px;
            font-size: 16px;
        }

        .data-item-wrap div:last-child {
            width: 68%;
        }

        .data-item-wrap div:nth-child(2) {
            width: 5%;
            text-align: center;
        }

        .admit-card-footer {
            position: absolute;
            width: 100%;
            bottom: 50px;
            left: 0;
            padding: 20px 88px;
        }

        .footer-sign-wrap {
            display: flex;
            justify-content: space-around;
            align-items: start;
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
            width: 130px;
            height: 130px;
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
    </style>
</head>

<body>
<div class="print_btn">
    <button type="button" class="btn btn-primary px-5 mx-4" onclick="window.print()">Print</button>
    <button onclick="generate_pdf()" class="btn btn-secondary">Download</button>
    <a type="button" class="btn btn-warning px-5 mx-4" href="">Back</a>
</div>
<div class="admit-card-wrap" id="fullpage2">
    <div class="admit-card-header">
        <div class="d-flex align-items-center ">
            <div class="w-18 text-center">
                <img src="{{asset('logo.png')}}" style="width: 140px;margin-top: -29px;" alt="logo" />
            </div>
            <div class="cert-headings w-82">
                <img src="{{asset('images/banner.png')}}" class="w-100" alt="">
                <h5 class="normal-font" style="margin-top: -2px; margin-left: 59px">Approved By Government of the People's Republic of Bangladesh.</h5>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="info-btn">Admit Card</button>
    </div>
    <div class="d-flex justify-content-between px-2">
        <div class="">
            <p class="mb-0">Serial No. : {{\App\Lib\Helper::serialNumber($student->id)}}</p>
        </div>
    </div>
    <div class="admit-card-body">
        <div class="cert-info fw-bold text-dark w-100 d-flex flex-row justify-content-center mt-0 ps-3 gap-2">
            <div class="w-75">

                <div class="data-item-wrap">
                    <div class="data-label">Institute Code </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->center->code??''}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Institute Name </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->center->name??''}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Name of the Examinee </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->name??''}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Father's Name </div>
                    <div>:</div>
                    <div class="data-value">{{$student->fathers_name??''}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Mother's Name </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->mothers_name??''}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Roll No </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->roll??''}}</div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Reg No </div>
                    <div>:</div>
                    <div class="data-value"> {{$student->registration??''}}
                    </div>
                </div>
                <div class="data-item-wrap">
                    <div class="data-label">Type of the Examine </div>
                    <div>:</div>
                    <div class="data-value"> Regular</div>
                </div>
            </div>
            <div class="w-25 text-center pe-2">
                <div style="margin-top: -80px;">
                    <img src="{{$student->picture??''}}" style="width: 150px; margin-bottom: 25px;" alt="portrait">
                </div>
                <div>
                    <div class="visible-print  text-center">
                        <x-qr-code :student="$student"/>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="admit-card-footer">
        <div class="d-flex align-items-end gap-2">
            <div class="w-75">
                <h4 class="fw-bold ps-2">Direction</h4>
                <ol>
                    <li>The examinee must bring the Registration Card along with Admit Card in the examination hall.
                    </li>
                    <li>The examinee must sign in the attendance sheet otherwise examinee will treated as absent.
                    </li>
                </ol>
            </div>
            <div class="sign-cont w-25 text-center">
                <img style="width: 200px;" src="{{asset('images/Signature1.png')}}" alt="signature" />
                <hr />
                <p>Controller Of Examinations <br /> Bangladesh Youth Skills & Technical Training</p>
            </div>
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
    </body>

    </html>

