<x-guest-layout>
    <div class="w-full mx-auto max-w-4xl flex flex-wrap bg-white print:absolute print:inset-0 print:max-w-full">
        <div class="w-full py-4 text-center text-xl border-b print:hidden">
            {{ __('Result') }}
        </div>
        <form class="w-full print:hidden" action="{{ route('result') }}" method="POST">
            @csrf
            @if($error = session(\App\Mixin\ResponseMixin::ERROR_MESSAGE_SESSION_KEY))
                <div class="w-full flex flex-wrap">
                    <div class="w-full p-4 bg-red-300">{{ $error }}</div>
                </div>
            @endif
            <div class="w-full flex flex-wrap py-8 px-2 md:px-4">
                <x-labeled-input class="w-full md:w-1/2 p-1" name="roll" required/>
                <x-labeled-input class="w-full md:w-1/2 p-1" name="registration" required/>
                <div class="w-full flex justify-center py-4 items-center">
                    <x-button>{{ __('Search') }}</x-button>
                </div>
            </div>
        </form>
        @if($result)
            <div class="w-full my-4">
                <x-result :result="$result" />
            </div>
        @endif
    </div>

    <x-slot name="script">
        <x-calculate-gpa-script />
    </x-slot>
</x-guest-layout>
