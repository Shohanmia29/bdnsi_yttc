<button onclick="window.print()" class="no-print">Print</button>
<div class="container">
    <div class="main-box">
        <img src="{{asset('images/cetificate qr code.png')}}" alt="" class="qr-code">
        <p class="publish_data">Data of Publication of Results: 19 February 2020</p>
        <div class="box">
            <div class="text-end">Roll No. <span class="rol-reg-sec">144773</span></div>
            <div class="inline-block w-full">
                <p class="float-left">Serial No. <span class="rol-reg-sec">144773</span></p>
                <p class="float-right">Reg No. <span class="rol-reg-sec">144773</span></p>
            </div>
            <div class="text-end mt-2">Session. <span class="rol-reg-sec">144773</span></div>
            <div class="cat_parent">
                <p class="inline-block float-left text">This is to certify that</p>
                <p class="underlined inline-block float-left">Student name</p>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text2">Son/daughter of</p>
                <div class="underlined2 inline-block float-left">
                    <p class="float-left">Father's name</p>
                    <p class="float-right">(father)</p>
                </div>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text3">and</p>
                <div class="underlined3 inline-block float-left">
                    <p class="float-left">Mother's name</p>
                    <p class="float-right">(mother)</p>
                </div>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text4">of</p>
                <p class="underlined4 inline-block float-left">Institute name</p>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text5">bearing roll no</p>
                <p class="underlined5 inline-block float-left">244773</p>
                <p class="inline-block float-left text6">duly passed the</p>
                <p class="underlined6 inline-block float-left">PaikPara Model High School</p>
            </div>
            <div class="cat_parent">
                <p class="inline-block float-left text7">Examination held in the month of</p>
                <p class="underlined7 inline-block float-left">12-December-2019</p>
                <p class="inline-block float-left text8">He/She scored CGPA</p>
                <p class="underlined8 inline-block float-left">3.75</p>
                <p class="inline-block float-left text9">on a scale of 4.00</p>
            </div>
            <p class="inline-block">at under the "Education program" A project of Young Technical Training institute</p>
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
    .float-right {
        float: right;
    }
    .w-full {
        width: 100%;
    }
    .text {
        width: 140px;
    }
    .text2 {
        width: 110px;
    }
    .text3 {
        width: 30px;
    }
    .text4 {
        width: 20px;
    }
    .text5 {
        width: 100px;
    }
    .text6 {
        width: 100px;
    }
    .text7 {
        width: 220px;
    }
    .text8 {
        width: 140px;
    }
    .text9 {
        width: 120px;
    }
    .cat_parent {
        width: 100%;
    }
    .inline-block {
        display: inline-block;
    }
    .underlined {
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        width: 80%;
        padding: 0px 6px;
    }
    .underlined2 {
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        width: 81%;
        padding: 0px 6px;
        padding-left: 30px;
    }
    .underlined3 {
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        width: 90%;
        padding: 0px 6px;
        padding-left: 30px;
    }
    .underlined4 {
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        width: 92%;
        padding: 0px 6px;
        padding-left: 30px;
    }
    .underlined5 {
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        width: 19%;
        padding: 0px 6px;
        padding-left: 30px;
    }
    .underlined6 {
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        width: 49%;
        padding: 0px 6px;
        padding-left: 10px;
    }
    .underlined7 {
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        width: 20%;
        padding: 0px 6px;
        padding-left: 30px;
    }
    .underlined8 {
        border-bottom: 2px dotted black;
        margin-bottom: 10px;
        width: 10%;
        padding: 0px 6px;
        padding-left: 30px;
    }
    .mt-2 {
        margin-top: 10px;
    }
    .main-box {
        margin: 0px auto;
        position: relative;
        min-height: 98%;
        background: url({{asset('images/certificate-background.jpg')}});
        background-size: contain;
        background-repeat: no-repeat;
        background-position:center;
        width:1400px;
    }
    .box {
        position: absolute;
        width: 810px;
        bottom: 190px;
        left: 420px;
    }
    .qr-code {
        position: absolute;
        bottom: 280px;
        left: 250px;
        width: 100px;
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
        border-bottom: 1px dotted black;
    }
    .float-right {
        float: right !important;
    }
    .float-left {
        float: left !important;
    }
    .publish_data {
        position: absolute;
        bottom: 100px;
        left: 190px;
        font-size: 16px;
    }
</style>
<style>
    @media print{
        .container {
            /* min-height: 558px; */
        }
        p {
            line-height: 22px;
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
            left: 315px;
        }
        .text5 {
            width: 93px;
        }
        .text9 {
            width: 113px;
        }
        .underlined {
            width: 75%;
        }
        .underlined2 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 80%;
            padding: 0px 6px;
        }
        .underlined3 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 93%;
            padding: 0px 6px;
        }
        .underlined4 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 95%;
            padding: 0px 6px;
        }
        .underlined5 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 25%;
            padding: 0px 6px;
        }
        .underlined6 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 40%;
            padding: 0px 6px;
            padding-left: 10px;
        }
        .underlined7 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 21%;
            padding: 0px 6px;
        }
        .underlined8 {
            border-bottom: 2px dotted black;
            margin-bottom: 10px;
            width: 8%;
            padding: 0px 6px;
        }
        .publish_data {
            bottom: 85px;
            left: 100px;
        }
    }    
</style>
