@props(['result'])
<style>
    .m-auto {
        margin: auto !important;
    }
    .mt-4 {
        margin-top: 1rem !important;
    }
    .flex {
        display: flex !important;
    }
    .h-52 {
        height: 13rem !important;
    }
    .h-\[90\%\] {
        height: 90% !important;
    }
    .w-10\/12 {
        width: 83.333333% !important;
    }
    .w-4\/12 {
        width: 33.333333% !important;
    }
    .w-52 {
        width: 13rem !important;
    }
    .w-64 {
        width: 16rem !important;
    }
    .w-8\/12 {
        width: 66.666667% !important;
    }
    .w-full {
        width: 100% !important;
    }
    .flex-row {
        flex-direction: row !important;
    }
    .flex-col {
        flex-direction: column !important;
    }
    .flex-wrap {
        flex-wrap: wrap !important;
    }
    .items-center {
        align-items: center !important;
    }
    .justify-between {
        justify-content: space-between !important;
    }
    .gap-3 {
        gap: 0.75rem !important;
    }
    .overflow-auto {
        overflow: auto !important;
    }
    .whitespace-nowrap {
        white-space: nowrap !important;
    }
    .rounded-3xl {
        border-radius: 1.5rem !important;
    }
    .rounded-md {
        border-radius: 0.375rem !important;
    }
    .rounded-bl-md {
        border-bottom-left-radius: 0.375rem !important;
    }
    .rounded-br-md {
        border-bottom-right-radius: 0.375rem !important;
    }
    .rounded-tl-md {
        border-top-left-radius: 0.375rem !important;
    }
    .rounded-tr-md {
        border-top-right-radius: 0.375rem !important;
    }
    .border-2 {
        border-width: 2px !important;
    }
    .border-b-2 {
        border-bottom-width: 2px !important;
    }
    .border-r-2 {
        border-right-width: 2px !important;
    }
    .border-green-500 {
        --tw-border-opacity: 1;
        border-color: rgb(34 197 94 / var(--tw-border-opacity, 1)) !important;
    }
    .border-green-600 {
        --tw-border-opacity: 1;
        border-color: rgb(22 163 74 / var(--tw-border-opacity, 1)) !important;
    }
    .bg-green-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(220 252 231 / var(--tw-bg-opacity, 1)) !important;
    }
    .bg-green-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(187 247 208 / var(--tw-bg-opacity, 1)) !important;
    }
    .object-center {
        object-position: center !important;
    }
    .px-2 {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    .px-4 {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
    }
    .py-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }
    .py-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }
    .py-4 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    .text-center {
        text-align: center !important;
    }
    .text-3xl {
        font-size: 1.875rem !important;
        line-height: 2.25rem !important;
    }
    .text-lg {
        font-size: 1.125rem !important;
        line-height: 1.75rem !important;
    }
    .text-sm {
        font-size: 0.875rem !important;
        line-height: 1.25rem !important;
    }
    .font-bold {
        font-weight: 700 !important;
    }
    .font-medium {
        font-weight: 500 !important;
    }
    .font-semibold {
        font-weight: 600 !important;
    }
    .text-green-600 {
        --tw-text-opacity: 1;
        color: rgb(22 163 74 / var(--tw-text-opacity, 1)) !important;
    }
    .text-orange-400 {
        --tw-text-opacity: 1;
        color: rgb(251 146 60 / var(--tw-text-opacity, 1)) !important;
    }
    @media (min-width: 768px) {
        .md\:w-2\/12 {
            width: 16.666667% !important;
        }
        .md\:w-4\/12 {
            width: 33.333333% !important;
        }
        .md\:border-b-2 {
            border-bottom-width: 2px !important;
        }
        .md\:border-r-2 {
            border-right-width: 2px !important;
        }
    }
</style>
<div class="w-full">
    <div class="w-10/12 m-auto flex items-center flex-col justify-between h-[90%] gap-3">
        <div class="text-center py-4">
            <h1 class="font-semibold text-3xl text-green-600">Youth Technical Training</h1>
            <p class="text-lg font-medium text-orange-400">Govt. License No: C-100001</p>
        </div>
        <img class="h-52 w-52 object-center border-2 rounded-3xl border-green-500" src="{{ $result->student->picture }}" alt="{{ $result->student->name }}" />
        <div class="w-full border-2 border-green-600 rounded-md">
            <!-- Header Row -->
            <div class="w-full flex flex-wrap rounded-tl-md rounded-tr-md bg-green-100">
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Name</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->name ?? ''}}</div>
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Roll</div>
                <div class="w-8/12 md:w-4/12 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->roll ?? ''}}</div>
            </div>
            <!-- Row 2 -->
            <div class="w-full flex flex-wrap">
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Father's Name</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->fathers_name ?? ''}}</div>
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4 text-center">Registration Number</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->registration ?? ''}}</div>
            </div>
            <!-- Row 3 -->
            <div class="w-full bg-green-200 flex flex-wrap">
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Mother's Name</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->mothers_name ?? ''}}</div>
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Session</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->session->name ?? ''}}</div>
            </div>
            <!-- Row 4 -->
            <div class="w-full flex flex-wrap">
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Course Name</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->subject->name ?? ''}}</div>
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Course Duration</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->subject->duration ?? ''}}</div>
            </div>
            <!-- Row 5 -->
            <div class="w-full bg-green-200 flex flex-wrap">
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Institute Name</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->center->name ?? ''}}</div>
                <div class="w-4/12 md:w-2/12 border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Institute Code</div>
                <div class="w-8/12 md:w-4/12 md:border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->center->code ?? ''}}</div>
            </div>
            <!-- Footer Row -->
            <div class="w-full flex flex-wrap rounded-bl-md rounded-br-md">
                <div class="w-4/12 md:w-2/12 border-r-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Date of Birth</div>
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->date_of_birth ?? ''}}</div>
                <div class="w-4/12 md:w-2/12 border-r-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">Passport No</div>
                <div class="w-8/12 md:w-4/12 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->passport ?? ''}}</div>
            </div>
        </div>
        <div class="w-full border-2 border-green-600 flex flex-col rounded-md mt-4">
            <div class="bg-green-200 py-1 rounded-tl-md rounded-tr-md text-center">
                <span class="font-bold">Marks</span>
            </div>
            <div class="w-full overflow-auto whitespace-nowrap">
                <table class="min-w-full table-auto border-collapse border border-gray-200">
                    <thead>
                    <tr>
                        @foreach(['Practical', 'Written', 'Viva','Grade', 'GPA'] as $header)
                            <th class="border border-gray-300 px-4 py-2 text-center font-medium">{{ $header }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border border-gray-300 text-center px-4 py-2">{{$result->student->practical($result->practical)}}</td>
                        <td class="border border-gray-300 text-center px-4 py-2">{{$result->student->written($result->written)}}</td>
                        <td class="border border-gray-300 text-center px-4 py-2">{{$result->student->viva($result->viva)}}</td>
                        <td class="border border-gray-300 text-center px-4 py-2">1</td>
                        <td class="border border-gray-300 text-center px-4 py-2">1</td>

                    </tr>
                    <!-- Repeat rows as needed -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>



