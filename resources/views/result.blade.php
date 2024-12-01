<x-frontend-layouts>
    <style>
        .absolute {
            position: absolute;
        }
        .inset-0 {
            inset: 0px;
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        .my-4 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .flex {
            display: flex;
        }
        .hidden {
            display: none;
        }
        .w-1\/2 {
            width: 50%;
        }
        .w-full {
            width: 100%;
        }
        .max-w-4xl {
            max-width: 56rem;
        }
        .max-w-7xl {
            max-width: 80rem;
        }
        .max-w-full {
            max-width: 100%;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .items-center {
            align-items: center;
        }
        .justify-center {
            justify-content: center;
        }
        .rounded-full {
            border-radius: 9999px;
        }
        .rounded-md {
            border-radius: 0.375rem;
        }
        .border {
            border-width: 1px;
        }
        .border-2 {
            border-width: 2px;
        }
        .border-\[\#6aa84f\] {
            --tw-border-opacity: 1;
            border-color: rgb(106 168 79 / var(--tw-border-opacity, 1));
        }
        .bg-\[\#6aa84f\] {
            --tw-bg-opacity: 1;
            background-color: rgb(106 168 79 / var(--tw-bg-opacity, 1));
        }
        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1));
        }
        .bg-red-300 {
            --tw-bg-opacity: 1;
            background-color: rgb(252 165 165 / var(--tw-bg-opacity, 1));
        }
        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1));
        }
        .p-1 {
            padding: 0.25rem;
        }
        .p-2 {
            padding: 0.5rem;
        }
        .p-4 {
            padding: 1rem;
        }
        .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }
        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .text-center {
            text-align: center;
        }
        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
        .font-bold {
            font-weight: 700;
        }
        .text-red-800 {
            --tw-text-opacity: 1;
            color: rgb(153 27 27 / var(--tw-text-opacity, 1));
        }
        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1));
        }
        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .outline-none {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }
        @media (min-width: 768px) {
            .md\:w-1\/2 {
                width: 50%;
            }
            .md\:px-4 {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .md\:text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
        }
        @media print {
            .print\:absolute {
                position: absolute;
            }
            .print\:inset-0 {
                inset: 0px;
            }
            .print\:hidden {
                display: none;
            }
            .print\:max-w-full {
                max-width: 100%;
            }
        }

    </style>

    <script src="{{mix('js/app.js')}}" ></script>
    <meta name="viewport" content="width=1024">
     <div class="container">
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
                             <div class="shadow-lg w-full  bg-gray-50 md:w-1/2 mx-auto rounded-md">
                                 <div class="font-bold text-sm md:text-lg text-red-800 text-center">  {{ __('Student Result') }}</div>
                                 <div class="p-2">
                                     <label for="" class="font-bold">Roll Number / Passport Number</label>
                                     <input class="w-full  outline-none px-3 mx-auto p-1 border-[#6aa84f] border-2 rounded-full " name="roll" required/>
                                 </div>
                                 <div class="w-full flex justify-center py-4 items-center">
                                     <button class="px-3 py-2 border bg-[#6aa84f] rounded-md text-white">{{ __('Get Result') }}</button>
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
     </div>

    <x-slot name="script">
        <x-calculate-gpa-script />
    </x-slot>
</x-frontend-layouts>


