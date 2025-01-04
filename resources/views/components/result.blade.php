@props(['result'])

<div class="w-full">
    <div class="w-10/12 m-auto flex items-center flex-col justify-between h-[90%] gap-3">
        <div class="text-center py-4">
            <h1 class="font-semibold text-3xl text-green-600">Young Technical Training Institute</h1>
            <p class="text-lg font-medium text-orange-400">Govt. License No: C-178431</p>
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
                <div class="w-8/12 md:w-4/12 md:border-r-2 border-b-2 border-green-600 font-semibold text-sm flex items-center py-4 px-4">{{$result->student->course_duration ?? ''}}</div>
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
                        @foreach(['Written','Practical', 'Viva','Grade', 'GPA'] as $header)
                            <th class="border border-gray-300 px-4 py-2 text-center font-medium">{{ $header }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border border-gray-300 text-center px-4 py-2">{{$result->student->written($result->written)}}</td>
                        <td class="border border-gray-300 text-center px-4 py-2">{{$result->student->practical($result->practical)}}</td>
                        <td class="border border-gray-300 text-center px-4 py-2">{{$result->student->viva($result->viva)}}</td>
                        <td class="border border-gray-300 text-center px-4 py-2">{{$result->student->practical($result->practical)}}</td>
                        <td class="border border-gray-300 text-center px-4 py-2">{{$result->student->gpa($result->written)}}</td>

                    </tr>
                    <!-- Repeat rows as needed -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>



