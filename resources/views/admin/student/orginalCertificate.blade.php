<button onclick="window.print()" class="no-print">Print</button>
<div class="container">
    <div class="main-box">
        <img src="{{asset('images/cetificate qr code.png')}}" alt="" class="qr-code">
    </div>
    <div class="box">
        <div class="text-end">Roll No. <span class="rol-reg-sec">144773</span></div>
        <div class="inline-block">
            <p class="float-start">Serial No. <span class="rol-reg-sec">144773</span></p>
            <p class="float-end">Reg No. <span class="rol-reg-sec">144773</span></p>
        </div>
        <div class="text-end mt-2">Session. <span class="rol-reg-sec">144773</span></div>
        <div>
            This is to certify that
            <p class="underlined"></p>
        </div>
    </div>
</div>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    .container {
        /* min-height: 1346px; */
        
    }
    .underlined {
        border-bottom: 1px dotted black;
        width: 100%;
    }
    .mt-2 {
        margin-top: 10px;
    }
    .inline-block {
        display: inline-block;
        width: 100%;
    }
    .main-box {
        position: relative;
        min-height: 98vh;
        background: url({{asset('images/certificate-background.jpg')}});
        background-size: contain;
        background-repeat: no-repeat;
        background-position:center;
        width:1400px;
    }
    .box {
        position: absolute;
        border: 1px solid gray;
        bottom: 0;
        right: 0;
    }
    .qr-code {
        position: absolute;
        bottom: 280px;
        width: 70px;
    }
    .text-end {
        text-align: end;
        margin-bottom: 10px;
    }
    .rol-reg-sec {
        text-align: start;
        padding-left: 20px;
        padding-bottom: 3px;
        display: inline-block;
        width: 130px;
        border-bottom: 1px dotted black;
    }
    .float-end {
        float: right !important;
    }
    .float-start {
        float: left !important;
    }
</style>
<style>
    @media print{
        .container {
            /* min-height: 558px; */
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
            width: 700px;
            bottom: 170px;
            right: 100px;
        }
    }    
</style>
