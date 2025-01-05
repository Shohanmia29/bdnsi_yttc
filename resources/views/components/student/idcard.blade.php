@props(['student'])
<script src="{{asset('js/pdf.js')}}"></script>
<div class="flex items-center justify-center space-x-4 print:hidden mt-4">
    <button
        type="button"
        class="px-4 py-2 rounded-md bg-green-800 text-white hover:bg-green-700 transition"
        onclick="window.print()">
        Print
    </button>
    <button
        onclick="generate_pdf()"
        class="px-4 py-2 rounded-md bg-green-800 text-white hover:bg-green-700 transition">
        Download
    </button>
    <a
        type="button"
        class="px-4 py-2 rounded-md bg-green-800 text-white hover:bg-green-700 transition"
        href="">
        Back
    </a>
</div>

<div class="md:p-10">
    <div class="flex w-full flex-wrap" id="html2pdf">
        <div class=" p-2 w-1/2">
            <div
                class="relative h-[600px] w-full rounded-md p-2"
                style="
                    background-image: url({{asset('images/student/idcard.jpg')}});
                    background-position: center center;
                    background-size: contain;
                    background-repeat: no-repeat;
                "
            >
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <img class="mx-auto h-28 w-28 rounded-full border-[4px] border-[#6aa84f]" src="{{$student->picture ?? ''}}" alt="" />

                        <div class="mt-5 flex justify-center">
                            <table class="mx-auto w-full font-semibold text-xs text-left">
                                <tr>
                                    <td class="px-2 py-2">Reg No</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="px-2 py-2">444</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2">Student Name</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="px-2 py-2">{{$student->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2">Father Name</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="px-2 py-2">{{$student->fathers_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2">Institute</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="px-2 py-2">{{$student->center->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2">Phone</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="px-2 py-2">{{$student->phone ?? ''}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Page Break -->
        <div class=" p-2 w-1/2">
            <div
                class="relative h-[600px] w-full rounded-md p-2"
                style="
                    background-image: url({{asset('images/student/idcardback.jpg')}});
                    background-position: center center;
                    background-size: contain;
                    background-repeat: no-repeat;
                "
            >
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function generate_pdf() {
        var opt = {
            margin: 0,
            filename: 'idcard.pdf',
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





