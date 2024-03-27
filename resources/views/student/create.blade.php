<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Create Student') }}</div>
            <div>
                <a
                    class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                    href="{{ route('student.index') }}">{{ __('Students') }}</a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="fathers_name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="mothers_name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="date_of_birth" type="date" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-select name="gender" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                @foreach(\App\Enums\Gender::getInstances() as $gender)
                    <option value="{{ $gender->value }}" @selected(old('gender') == $gender->value)>{{ $gender->key }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-select name="blood_group" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                @foreach(\App\Enums\BloodGroup::getInstances() as $bloodGroup)
                    <option value="{{ $bloodGroup->value }}" @selected(old('blood_group') == $bloodGroup->value)>{{ $bloodGroup }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-select name="religion" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                @foreach(\App\Enums\Religion::getInstances() as $religion)
                    <option value="{{ $religion->value }}" @selected(old('religion') == $religion->value)>{{ $religion->key }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-input name="present_address" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="permanent_address" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="passport" label="Passport Number" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="phone" pattern="\d{11}" x-data x-on:input="$event.target.setCustomValidity($event.target.validity.patternMismatch ? 'Phone number should be 11 digits' : '')" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="email" type="email" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="guardian_name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="nid_or_birth" label="NID or Birth Certificate No." required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-select name="session_id" label="Session" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                @foreach($sessions as $session)
                    <option value="{{ $session->id }}" @selected(old('session_id') == $session->id)>{{ $session->name }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-select name="subject_id" label="Course Name" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" @selected(old('subject_id') == $subject->id)>{{ $subject->name }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-input name="picture" required type="file" accept="image/*" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Create') }}</x-button>
            </div>
        </div>
    </form>
</x-app-layout>
