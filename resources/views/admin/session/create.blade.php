<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Create Session') }}</div>
            @can('session-read')
            <div>
                <a class="text-primary-700 underline font-semibold" href="{{ route('admin.session.index') }}">{{ __('Sessions') }}</a>
            </div>
            @endcan
        </div>
    </x-slot>

    <form action="{{ route('admin.session.store') }}" method="POST">
        @csrf
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="name" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input type="date" name="start_date" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input type="date" name="end_date" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input type="number" min="1" name="duration" required class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Create') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
