<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Translation') }}</div>
            <div>
                <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                   href="{{ route('admin.translation.index') }}">{{ __('Translation List') }}</a>
            </div>
        </div>
    </x-slot>

    <div class="w-full mt-8 p-2">
         <div class="bg-white p-5 rounded-md ">
             <form action="{{route('admin.translation.store')}}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="w-full flex flex-wrap">
                     <x-labeled-input required  type="text" name="key" class="w-full"/>
                     <x-labeled-input required  type="text" name="en" class="w-full"/>
                     <x-labeled-input required  type="text" name="bn" class="w-full"/>
                     <x-labeled-input required  type="text" name="ar" class="w-full"/>
                     <div class="w-full py-2 flex justify-center">
                         <button class="px-3 py-1 border bg-blue-700 text-white rounded " type="submit">Submit</button>
                     </div>
                 </div>
             </form>
         </div>
    </div>

</x-admin-app-layout>
