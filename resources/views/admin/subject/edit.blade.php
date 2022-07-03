<x-admin-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="text-xl">{{ __('Edit Subject') }}</div>
            <div>
                <a class="text-primary-700 underline font-semibold" href="{{ route('admin.subject.index') }}">{{ __('Subjects') }}</a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('admin.subject.update', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="name" required value="{{ old('name', $subject->name) }}" class="w-full p-1"/>
            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Update') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
