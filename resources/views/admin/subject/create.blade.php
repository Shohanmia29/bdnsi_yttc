<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Create Course') }}</div>
            @can('subject-read')
            <div>
                <a
                    class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                    href="{{ route('admin.subject.index') }}">{{ __('Course') }}</a>
            </div>
            @endcan
        </div>
    </x-slot>

    <form action="{{ route('admin.subject.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="name" required class="w-full p-1"/>
            <x-labeled-input type="file" name="photo"  required class="w-full p-1"/>
            <x-labeled-input name="duration"  class="w-full p-1"/>
            <x-labeled-input name="rate"  class="w-full p-1"/>
            <x-labeled-input name="education_qualification"  class="w-full p-1"/>
            <x-labeled-textarea name="course_details"  class="w-full p-1"> </x-labeled-textarea>
            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Create') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
