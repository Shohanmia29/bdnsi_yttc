

<link rel="stylesheet" href="{{mix('css/app.css')}}">
     <script src="{{mix('js/app.js')}}" ></script>
    <meta name="viewport" content="width=1024">
    <div class="w-full mx-auto max-w-4xl flex flex-wrap bg-white print:absolute print:inset-0 print:max-w-full">
        @if(!request('roll'))
            <form class="w-full print:hidden" action="{{ route('result') }}" method="get">

                @if($error = session(\App\Mixin\ResponseMixin::ERROR_MESSAGE_SESSION_KEY))
                    <div class="w-full flex flex-wrap">
                        <div class="w-full p-4 bg-red-300">{{ $error }}</div>
                    </div>
                @endif
                <div class="max-w-7xl mx-auto">
                    <div class="w-full flex flex-wrap py-8    px-2 md:px-4">
                        <div class="shadow-lg w-full md:w-1/2 mx-auto rounded-md">
                            <div class="font-bold text-sm md:text-lg text-purple-800 text-center">  {{ __('Student Result') }}</div>
                            <x-labeled-input class="w-full  px-3 mx-auto p-1" name="roll" label="Roll Number / Passport Number" required/>
                            <div class="w-full flex justify-center py-4 items-center">
                                <button class="px-3 py-2 border bg-blue-700 rounded-md text-white">{{ __('Get Result') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endif
        @if($result)
            <div class="w-full my-4">
                <x-result :result="$result" />
            </div>
        @endif
    </div>

    <x-slot name="script">
        <x-calculate-gpa-script />
    </x-slot>

