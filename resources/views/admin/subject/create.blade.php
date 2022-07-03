<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Create Subject') }}</div>
            <div>
                <a class="text-primary-700 underline font-semibold" href="{{ route('admin.subject.index') }}">{{ __('Subjects') }}</a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('admin.subject.store') }}" method="POST">
        @csrf
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="name" required class="w-full p-1"/>
            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Create') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
