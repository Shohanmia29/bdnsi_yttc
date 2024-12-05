@props(['student'])

<div class="p-10">
    <div class="flex w-full flex-wrap">
        <div class="w-full p-2 md:w-1/2">
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
                        <img class="mx-auto h-24 w-24 rounded-full border-[4px] border-[#6aa84f]" src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg" alt="" />

                        <div class="mt-5">
                            <table class="mx-auto w-full font-semibold text-xs text-left">
                                <tr>
                                    <td class="px-2">Reg No</td>
                                    <td class="px-2">:</td>
                                    <td class="px-2">444</td>
                                </tr>
                                <tr>
                                    <td class="px-2">Student Name</td>
                                    <td class="px-2">:</td>
                                    <td class="px-2">{{$student->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2">Father Name</td>
                                    <td class="px-2">:</td>
                                    <td class="px-2">{{$student->fathers_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2">Institute</td>
                                    <td class="px-2">:</td>
                                    <td class="px-2">{{$student->center->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2">Phone</td>
                                    <td class="px-2">:</td>
                                    <td class="px-2">{{$student->phone ?? ''}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Break -->
        <div class="w-full p-2 md:w-1/2">
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

<!-- Page Break CSS -->
<style>
    @media print {
        .p-10 {
            margin: 0;
            padding: 0;
        }
        .w-full {
            width: 100%;
        }
        .md\:w-1\/2 {
            width: 100%;
        }
        .flex {
            display: block;
        }
        .p-2 {
            padding: 0;
        }

        /* Add page break between sections */
        .w-full:nth-child(2) {
            page-break-before: always; /* Ensure second column is on a new page */
        }
    }
</style>





