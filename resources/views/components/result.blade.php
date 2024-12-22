@props(['result'])
<style>
    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }
    .mt-3 {
        margin-top: 0.75rem;
    }
    .flex {
        display: flex;
    }
    .table {
        display: table;
    }
    .h-32 {
        height: 8rem;
    }
    .w-1\/4 {
        width: 25%;
    }
    .w-1\/5 {
        width: 20%;
    }
    .w-1\/6 {
        width: 16.666667%;
    }
    .w-3\/5 {
        width: 60%;
    }
    .w-32 {
        width: 8rem;
    }
    .w-full {
        width: 100%;
    }
    .flex-wrap {
        flex-wrap: wrap;
    }
    .justify-center {
        justify-content: center;
    }
    .rounded-full {
        border-radius: 9999px;
    }
    .border {
        border-width: 1px;
    }
    .border-l {
        border-left-width: 1px;
    }
    .border-r {
        border-right-width: 1px;
    }
    .bg-\[\#6aa84f\] {
        --tw-bg-opacity: 1;
        background-color: rgb(106 168 79 / var(--tw-bg-opacity, 1));
    }
    .bg-gray-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1));
    }
    .p-2 {
        padding: 0.5rem;
    }
    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }
    .py-1 {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
    }
    .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .text-center {
        text-align: center;
    }
    .text-right {
        text-align: right;
    }
    .text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
    }
    .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }
    .text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem;
    }
    .font-bold {
        font-weight: 700;
    }
    .font-semibold {
        font-weight: 600;
    }
    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity, 1));
    }
    @media (min-width: 768px) {
        .md\:w-1\/4 {
            width: 25%;
        }
        .md\:text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem;
        }
    }
    @media (min-width: 1024px) {
        .lg\:w-1\/5 {
            width: 20%;
        }
    }
    @media print {
        .print\:w-1\/5 {
            width: 20%;
        }
        .print\:w-3\/5 {
            width: 60%;
        }
    }


</style>

<div class="w-full flex flex-wrap">
    <div class="w-full flex flex-wrap">
        <div class="w-full   print:w-3/5  ">
            <div class="w-full h3 py-2 text-xl md:text-4xl text-center font-bold">Young Technical Training Institute</div>
            <div class="w-full py-2 text-center font-semibold">RJSC NO: C-178431</div>
        </div>
    </div>
    <div class="w-full flex flex-wrap justify-center mt-3">
        <div class="w-full md:w-1/4 lg:w-1/5 print:w-1/5 py-4">
            <img class="mx-auto w-32 h-32" src="{{ $result->student->picture }}" alt="{{ $result->student->name }}"/>
        </div>
    </div>
    <div class="w-full p-2">
        <table class="w-full">
            <tr class="bg-gray-100">
                <td class="border p-2">{{ __('Name') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->name }}</td>
                <td class="border p-2">{{ __('Roll') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->roll }}</td>
                <td class="border"></td>
            </tr>
            <tr >
                <td class="border p-2">{{ __('Father\'s Name') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->fathers_name }}</td>
                <td class="border p-2">{{ __('Registration') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->registration }}</td>
                <td class="border"></td>
            </tr>

            <tr class="bg-gray-100">
                <td class="border p-2">{{ __('Mother\'s Name') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->mothers_name }}</td>
                <td class="border p-2">{{ __('Session') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->session->name }}</td>
                <td class="border"></td>
            </tr>

            <tr class=" ">
                <td class="border p-2">{{ __('Course Name') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->subject->name }}</td>
                <td class="border p-2">{{ __('Course Duration') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->course_duration??'' }}</td>
                <td class="border"></td>
            </tr>
            <tr class=" bg-gray-100">
                <td class="border p-2">{{ __('Institute Name') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->center->name }}</td>
                <td class="border p-2">{{ __('Institute Code') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->center->code }}</td>
                <td class="border"></td>
            </tr>
            <tr class="  ">
                <td class="border p-2">{{ __('') }}</td>
                <td class="border-l p-2"  ></td>
                <td class="border-r p-2 text-right  " colspan="2">{{ __('Passport No') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->passport??'' }}</td>
                <td class="border"></td>
            </tr>

            <tr class="bg-gray-100">
                <td class="border p-2 text-center font-semibold" colspan="6">{{ __('Mark') }}</td>
                <td class="border"></td>
            </tr>
            <tr class="w-full">
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Written') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Practical') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Viva') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Total') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Full Mark') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Grade') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('GPA') }}</td>
            </tr>
            <tr class="w-full bg-gray-100" x-data="{ w: {{ optional($result)->written ?? 0 }}, p: {{ optional($result)->practical ?? 0 }}, v: {{ optional($result)->viva ?? 0 }} }">
                <td class="border p-2 text-center w-1/6" x-html="w"></td>
                <td class="border p-2 text-center w-1/6" x-html="p"></td>
                <td class="border p-2 text-center w-1/6" x-html="v"></td>
                <td class="border p-2 text-center w-1/6" x-html="parseInt(w)+parseInt(p)+parseInt(v)"></td>
                <td class="border p-2 text-center w-1/6">100</td>
                <td class="border p-2 text-center w-1/6" x-html="calculateGPA(parseInt(w)+parseInt(p)+parseInt(v))"></td>
                <td class="border p-2 text-center w-1/6" x-html="calculateCGPA(parseInt(w)+parseInt(p)+parseInt(v))">.</td>
            </tr>
        </table>
        <div class="flex flex-wrap w-full justify-center py-4">
            <a href="{{route('result')}}" class="px-3 py-1 bg-[#6aa84f] rounded-full  text-white  ">Search Again</a>
        </div>
    </div>
</div>
