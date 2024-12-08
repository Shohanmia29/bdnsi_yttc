@props(['student','style'=>''])

<div    id="qrcode_1"></div>

<style>
    @if(empty($style))
    #qrcode_1 img{
        width: 100px;
        margin-left:45px;
    }
    @else
    #qrcode_1 img{
    {{$style}}
    }
    @endif

</style>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/qrcode.js') }}"></script>
<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode_1"), {
        text: "{{route('result',['roll'=>$student->roll])}}",
        width: 50,
        height: 50,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H,
    });
</script>
