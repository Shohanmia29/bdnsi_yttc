<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Result Details') }}</div>
            @can('result-read')
                <div>
                    <a class="text-primary-700 underline font-semibold"
                       href="{{ route('admin.center.index') }}">{{ __('Results') }}</a>
                </div>
            @endcan
        </div>
    </x-slot>

    <div class="flex flex-wrap justify-center w-full bg-white p-4">
        <x-result :result="$result" />
    </div>

    <x-slot name="beforeScript">
        <x-calculate-gpa-script />
    </x-slot>
</x-admin-app-layout>
