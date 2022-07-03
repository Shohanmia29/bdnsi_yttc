<x-admin-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="text-xl">{{ __('Edit Session') }}</div>
            <div>
                <a class="text-primary-700 underline font-semibold" href="{{ route('admin.session.index') }}">{{ __('Sessions') }}</a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('admin.session.update', $session->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="name" required value="{{ old('name', $session->name) }}" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="start_date" type="date" required value="{{ old('start_date', $session->start_date) }}" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="end_date" type="date" required value="{{ old('end_date', $session->end_date) }}" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Update') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
