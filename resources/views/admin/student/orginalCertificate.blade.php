<button onclick="window.print()" class="no-print">Print</button>
<div class="container">
    <div class="main-box">
        <img src="{{asset('images/cetificate qr code.png')}}" alt="" class="qr-code">
        <p class="publish_data">Data of Publication of Results: 19 February 2020</p>
        <div class="box">
            <p class="text-end text-lg position-0">Roll No. <span class="rol-reg-sec position-0">144773</span></p>
            <div class="inline-block w-full">
                <p class="float-left">Serial No : <span class="rol-reg-sec1">144773</span></p>
                <p class="float-right">Reg No. <span class="rol-reg-sec position-0">144773</span></p>
            </div>
            <div class="text-end mt-2 text-lg">Session. <span class="rol-reg-sec position-0">144773</span></div>
            <div class="cat_parent">
                <p class="inline-block float-left text">This is to certify that</p>
                <p class="underlined inline-block float-left position-0 student-name">Student name</p>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text2">Son/daughter of</p>
                <div class="underlined2 inline-block float-left">
                    <p class="float-left position-0">Father's name</p>
                    <p class="float-right position-0">(father)</p>
                </div>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text3">and</p>
                <div class="underlined3 inline-block float-left">
                    <p class="float-left position-0">Mother's name</p>
                    <p class="float-right position-0">(mother)</p>
                </div>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text4">of</p>
                <p class="underlined4 inline-block float-left position-0">Diploma In Marble Ceramics</p>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text5">has successfully completed the course of</p>
                <p class="underlined5 inline-block float-left position-0">"Two Years"</p>
                <p class="inline-block float-left text6">from the technical training</p>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text7">center</p>
                <p class="underlined6 inline-block float-left position-0">Young Technical Training Institute</p>
                <p class="inline-block float-left text8">examination held in the month</p>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text9">of</p>
                <p class="underlined7 inline-block float-left position-0">22-December-2024</p>
                <p class="inline-block float-left text10">Conducted by the YTTI. He/She Secured CGPA</p>
                <p class="underlined8 inline-block float-left position-0">4.00</p>
                <p class="inline-block float-left text11">on a scale of 4.00</p>
            </div>
        </div>
    </div>
</div>
<style>
    @font-face {
        font-family: 'Monotype Corsiva';
        src: url('{{ asset('frontend/fonts/Monotype Corsiva/Monotype-Corsiva-Regular-Italic.ttf') }}') format('truetype');
    }
    * {
        margin: 0;
        padding: 0;
        font-family: Monotype Corsiva;
    }
    .student-name {
        padding-left: 20px;
    }
    p {
        line-height: 26px;
        font-weight: 500;
        font-size: 20px;
    }
    .whitespace-nowrap {
        white-space: nowrap;
    }
    .container {
        /* min-height: 1346px; */

    }
    .position-0 {
        line-height: 18px
    }
    .float-right {
        float: right;
    }
    .w-full {
        width: 100%;
    }
    .cat_parent {
        width: 100%;
        display: inline-block;
    }
    .inline-block {
        display: inline-block;
    }
    .text-lg {
        font-size: 20px;
    }
    .underlined {
        border-bottom: 2px dotted black;
        margin-bottom: 20px;
        width: 77%;
        padding-left: 55px;
    }
    .underlined2 {
        border-bottom: 2px dotted black;
        margin-bottom: 20px;
        width: 78%;
        padding: 0px 6px;
        padding-left: 65px;
    }
    .underlined3 {
        border-bottom: 2px dotted black;
        margin-bottom: 20px;
        width: 82%;
        padding: 0px 6px;
        padding-left: 114px;
    }
    .underlined4 {
        border-bottom: 2px dotted black;
        margin-bottom: 20px;
        width: 85%;
        padding: 0px 6px;
        padding-left: 100px;
    }
    .underlined5 {
        border-bottom: 2px dotted black;
        margin-bottom: 20px;
        width: 40%;
        padding: 0px 6px;
        padding-left: 60px;
    }
    .underlined6 {
        border-bottom: 2px dotted black;
        margin-bottom: 20px;
        width: 65%;
        padding: 0px 6px;
        padding-left: 40px;
    }
    .underlined7 {
        border-bottom: 2px dotted black;
        margin-bottom: 20px;
        width: 23%;
        padding: 0px 6px;
        padding-left: 30px;
    }
    .underlined8 {
        border-bottom: 2px dotted black;
        margin-bottom: 20px;
        width: 18%;
        padding: 0px 6px;
        text-align: center;
    }
    .mt-2 {
        margin-top: 10px;
    }
    .main-box {
         margin: 0 auto;
        position: relative !important;
        min-height: 98%;
        background: url({{asset('images/certificate-background.jpg')}});
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        max-width: 1400px;
        aspect-ratio: 16/11;
    }
    .box {
        position: absolute;
        width: 61%;
        bottom: 19%;
        left: 59.5%;
        transform: translateX(-50%);
        /* border: 1px solid black; */
    }
    .qr-code {
        position: absolute;
        bottom: 30%;
        left: 16%;
        width: 100px;
    }

    .publish_data {
        position: absolute;
        bottom: 10%;
        left: 10%;
        font-size: 14px;
    }

    .text-end {
        text-align: end;
        margin-bottom: 10px;
    }
    .rol-reg-sec {
        text-align: start;
        padding-left: 20px;
        /* padding-bottom: 3px; */
        display: inline-block;
        width: 130px;
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        line-height: 16px;
    }
    .rol-reg-sec1 {
        text-align: start;
        padding-left: 6px;
        /* padding-bottom: 3px; */
        display: inline-block;
        width: 130px;
    }
    .float-right {
        float: right !important;
    }
    .float-left {
        float: left !important;
    }
</style>
<style>
    @media print{
        .container {
            /* min-height: 558px; */
        }
        .text-lg {
            font-size: 18px;
        }
        p {
            line-height: 22px;
            font-size: 18px;
        }
        .no-print {
            display: none;
        }
        .qr-code {
            position: absolute;
            bottom: 240px;
            left: 160px;
            width: 100px;
        }
        .main-box {
            width:100%;
            height: 100%;
        }
        .box {
            width: 710px;
            bottom: 170px;
            left: 670px;
        }
        .underlined {
            width: 75%;
            padding-left: 50px;
            margin-bottom: 11;
        }
        .underlined2 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 76%;
            padding-left: 60px;
        }
        .underlined3 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 80%;
            padding-left: 110px;
        }
        .underlined4 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 83%;
            padding-left: 100px;
        }
        .underlined5 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 35%;
            padding-left: 70px;
        }
        .underlined6 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 62%;
            padding: 0px 6px;
            padding-left: 50px;
        }
        .underlined7 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 25%;
            padding-left: 35px;
        }
        .underlined8 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 12%;
            padding: 0px 6px;
        }
        .publish_data {
            bottom: 85px;
            left: 100px;
        }
    }
</style>
