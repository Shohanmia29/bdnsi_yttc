<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Configration') }}</div>

                <div>
                    <a
                        class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                        href="{{ route('admin.configDictionary.create') }}">{{ __('Configration') }}</a>
                </div>

        </div>
    </x-slot>

    <form action="{{route('admin.configDictionary.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap justify-center w-full bg-white p-4">

            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('notice')}}" name="notice"  class="w-full p-1 "> </x-labeled-textarea>
            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('about_us')}}" name="about_us"  class="w-full p-1 "> </x-labeled-textarea>
            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('terms_and_condition')}}" name="terms_and_condition"  class="w-full p-1 "> </x-labeled-textarea>
            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('privacy_policy')}}" name="privacy_policy"  class="w-full p-1 "> </x-labeled-textarea>
            <div class="w-full py-8 flex justify-center">
                <x-button>{{ __('Create') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
