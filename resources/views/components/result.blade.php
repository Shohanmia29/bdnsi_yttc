@props(['result'])

<div class="w-full flex flex-wrap">
    <div class="w-full flex flex-wrap">
        <div class="w-full md:w-1/4 lg:w-1/5 print:w-1/5">
            <img class="mx-auto w-32 h-32" src="{{ asset('logo.png') }}" />
        </div>
        <div class="w-full md:w-1/2 lg:w-3/5 print:w-3/5 flex flex-col justify-center items-center">
            <div class="w-full py-2 text-2xl text-center">Bangladesh Engineering & IT Development</div>
            <div class="w-full py-2 text-center">Govt. License No:  CH-15691</div>
        </div>
    </div>
    <div class="w-full flex flex-wrap justify-end">
        <div class="w-full md:w-1/2 lg:w-3/5 print:w-3/5 flex flex-col justify-center items-center">
            <div class="w-full py-2 text-xl text-center">{{ $result->student->center->name }}</div>
            <div class="w-full py-1 text-center font-semibold">{{ $result->student->subject->name }}</div>
            <div class="w-full py-2 text-center">Center code: {{ $result->student->center->code }}</div>
        </div>
        <div class="w-full md:w-1/4 lg:w-1/5 print:w-1/5">
            <img class="mx-auto w-32 h-32" src="{{ $result->student->picture }}" alt="{{ $result->student->name }}"/>
        </div>
    </div>
    <div class="w-full">
        <table class="w-full">
            <tr>
                <td class="border p-2">{{ __('Name') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->name }}</td>
                <td class="border p-2">{{ __('Roll') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->roll }}</td>
            </tr>
            <tr>
                <td class="border p-2">{{ __('Father\'s Name') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->fathers_name }}</td>
                <td class="border p-2">{{ __('Registration') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->registration }}</td>
            </tr>
            <tr>
                <td class="border p-2">{{ __('Mother\'s Name') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->mothers_name }}</td>
                <td class="border p-2">{{ __('Session') }}</td>
                <td class="border p-2" colspan="2">{{ $result->student->session->name }}</td>
            </tr>
            <tr>
                <td class="border p-2 text-center font-semibold" colspan="6">{{ __('Mark') }}</td>
            </tr>
            <tr class="w-full">
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Written') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Practical') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Viva') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Total') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Full Mark') }}</td>
                <td class="border p-2 text-center font-semibold text-sm w-1/6">{{ __('Grade') }}</td>
            </tr>
            <tr class="w-full" x-data="{ w: {{ optional($result)->written ?? 0 }}, p: {{ optional($result)->practical ?? 0 }}, v: {{ optional($result)->viva ?? 0 }} }">
                <td class="border p-2 text-center w-1/6" x-html="w"></td>
                <td class="border p-2 text-center w-1/6" x-html="p"></td>
                <td class="border p-2 text-center w-1/6" x-html="v"></td>
                <td class="border p-2 text-center w-1/6" x-html="parseInt(w)+parseInt(p)+parseInt(v)"></td>
                <td class="border p-2 text-center w-1/6">100</td>
                <td class="border p-2 text-center w-1/6" x-html="calculateGPA(parseInt(w)+parseInt(p)+parseInt(v))"></td>
            </tr>
        </table>
    </div>
</div>
