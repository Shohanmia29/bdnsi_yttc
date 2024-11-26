<x-admin-app-layout>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
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
            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('center_notice')}}" name="center_notice"  label="Center Notice" class="w-full p-1 "> </x-labeled-textarea>
            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('notice')}}" name="notice"  class="w-full p-1 "> </x-labeled-textarea>
            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('about_us')}}" name="about_us"  class="w-full p-1 "> </x-labeled-textarea>
            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('terms_and_condition')}}" name="terms_and_condition"  class="w-full p-1 "> </x-labeled-textarea>
            <x-labeled-textarea value="{{\App\Models\ConfigDictionary::get('privacy_policy')}}" name="privacy_policy"  class="w-full p-1 "> </x-labeled-textarea>

        </div>
         <div class="w-full mt-2">
                <div class="font-bold ">Site Setting</div>
                 <div class="w-full flex flex-wrap">
                         <x-labeled-input value="{{\App\Models\ConfigDictionary::get('twitter_link')}}" name="twitter_link" class="w-full p-2 md:w-1/2" />
                         <x-labeled-input value="{{\App\Models\ConfigDictionary::get('facebook_link')}}" name="facebook_link" class="w-full p-2 md:w-1/2" />
                         <x-labeled-input value="{{\App\Models\ConfigDictionary::get('youtube_link')}}" name="youtube_link" class="w-full p-2 md:w-1/2" />
                         <x-labeled-input value="{{\App\Models\ConfigDictionary::get('linkedin_link')}}" name="linkedin_link" class="w-full p-2 md:w-1/2" />
                 </div>
         </div>

        <div class="w-full">
              <div class="font-bold">Contact  Us</div>
            <div>
                <textarea   name="description" id="editor1"  class="w-full">{{\App\Models\ConfigDictionary::get('description')}}</textarea>
            </div>
        </div>
        <div class="w-full">
              <div class="font-bold">About Us</div>
            <div>
                <textarea   name="main_about_us" id="main_about_us"  class="w-full">{{\App\Models\ConfigDictionary::get('main_about_us')}}</textarea>
            </div>
        </div>
        <div class="w-full py-8 flex justify-center">
            <x-button>{{ __('Update') }}</x-button>
        </div>
    </form>

    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'main_about_us' );
    </script>
</x-admin-app-layout>
