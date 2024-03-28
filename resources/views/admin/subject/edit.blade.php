<x-admin-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="text-xl">{{ __('Edit Course') }}</div>
            <div>
                <a
                    class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                    href="{{ route('admin.subject.index') }}">{{ __('Course') }}</a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('admin.subject.update', $subject->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="name" required value="{{ old('name', $subject->name) }}" class="w-full p-1"/>
            <x-labeled-input type="file" name="photo"    class="w-full p-1"/>
            <x-labeled-input name="duration"  value="{{ old('duration', $subject->duration) }}" class="w-full p-1"/>
            <x-labeled-input name="rate"  value="{{ old('rate', $subject->rate) }}" class="w-full p-1"/>
            <x-labeled-input name="education_qualification"  value="{{ old('education_qualification', $subject->education_qualification) }}" class="w-full p-1"/>
            <x-labeled-textarea name="course_details"  value="{{ old('course_details', $subject->course_details) }}" class="w-full p-1" ></x-labeled-textarea>
            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Update') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
