<x-admin-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="text-xl">{{ __('Edit Student') }}</div>
            <div>
                <a
                    class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                    href="{{ route('admin.student.index') }}">{{ __('Students') }}</a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('admin.student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap justify-center w-full bg-white p-4">

          @if(auth()->user()->id==1)
                <x-labeled-select name="center_id" label="Institute Name" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                    @foreach($centers as $center)
                        <option value="{{ $center->id }}" @selected(old('center_id', $student->center_id) == $center->id)>{{ $center->name }}</option>
                    @endforeach
                </x-labeled-select>
                <x-labeled-input name="name" :value="$student->name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="roll" :value="$student->roll" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="registration" :value="$student->registration" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="passport" label="Passport Number" :value="$student->passport" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="fathers_name" :value="$student->fathers_name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="mothers_name" :value="$student->mothers_name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="date_of_birth" :value="$student->date_of_birth->toDateString()" type="date" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-select name="gender" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                    @foreach(\App\Enums\Gender::getInstances() as $gender)
                        <option value="{{ $gender->value }}" @selected(old('gender', $student->gender->value) == $gender->value)>{{ $gender->key }}</option>
                    @endforeach
                </x-labeled-select>


                <x-labeled-select name="religion" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                    @foreach(\App\Enums\Religion::getInstances() as $religion)
                        <option value="{{ $religion->value }}" @selected(old('religion', $student->religion->value) == $religion->value)>{{ $religion->key }}</option>
                    @endforeach
                </x-labeled-select>
                <x-labeled-input name="present_address" :value="$student->present_address" required  label="District" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="permanent_address" :value="$student->permanent_address" required  label="Upazila" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="phone" :value="$student->phone"    class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="email" :value="$student->email" type="email" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="guardian_name" :value="$student->guardian_name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="nid_or_birth" :value="$student->nid_or_birth" label="NID or Birth Certificate No." required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-select2 name="session_id" label="Session" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                    @foreach($sessions as $session)
                        <option value="{{ $session->id }}" @selected(old('session_id', $student->session_id) == $session->id)>{{ $session->name }}</option>
                    @endforeach
                </x-select2>
                <x-select2 name="subject_id" label="Course Name" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}" @selected(old('subject_id', $student->subject_id) == $subject->id)>{{ $subject->name }}</option>
                    @endforeach
                </x-select2>
                <x-labeled-input name="course_duration"  value="{{$student->course_duration}}" type="text" label="Course Duration"  class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input name="picture" type="file" accept="image/*" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
                <x-labeled-input  name="exam_date" :value="$student->exam_date" type="date" class="w-full p-1 md:w-1/2 lg:w-1/3" required/>
                <x-labeled-select name="status" required class="w-full p-1 ">
                    @foreach(\App\Enums\StudentStatus::getInstances() as $status)
                        <option value="{{ $status->value }}" @selected(old('status', $student->status->value) == $status->value)>{{ $status->key }}</option>
                    @endforeach
                </x-labeled-select>
                <x-labeled-input type="number" name="paid_amount" :value="$student->paid_amount" required class="w-full p-1 md:w-1/2"/>
                <x-labeled-input type="number" name="due_amount" :value="$student->due_amount" required class="w-full p-1 md:w-1/2"/>

            @else
                <x-labeled-select name="status" required class="w-full p-1 ">
                    @foreach(\App\Enums\StudentStatus::getInstances() as $status)
                        <option value="{{ $status->value }}" @selected(old('status', $student->status->value) == $status->value)>{{ $status->key }}</option>
                    @endforeach
                </x-labeled-select>
            @endif

            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Update') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
