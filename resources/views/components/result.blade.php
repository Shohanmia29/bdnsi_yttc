@props(['result'])

<div class="w-full flex flex-wrap">
    <div class="w-full flex flex-wrap">
        <div class="w-full   print:w-3/5  ">
            <div class="w-full py-2 text-xl md:text-4xl text-center font-bold">Bangladesh Youth Skills & Technical Training</div>
            <div class="w-full py-2 text-center font-semibold">Govt. License No: C-195491</div>
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
            <a href="{{route('result')}}" class="px-3 py-1 bg-blue-700 text-white  ">Search Again</a>
        </div>
    </div>
</div>
