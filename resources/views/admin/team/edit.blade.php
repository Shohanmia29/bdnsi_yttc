<x-admin-app-layout>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Team') }}</div>
            <div>
                <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                   href="{{ route('admin.team.index') }}">{{ __('Team List') }}</a>
            </div>
        </div>
    </x-slot>


    <div class="p-5">
        <div class="bg-white p-3 rounded-md">
            <form action="{{route('admin.team.update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="w-full flex flex-wrap">
                    <x-labeled-input :value="$data->name" required name="name" class="w-full md:w-1/3 p-2"/>
                    <x-labeled-input :value="$data->designation" required name="designation" class="w-full md:w-1/3 p-2"/>
                    <x-labeled-input :value="$data->image"    type="file" name="image" class="w-full md:w-1/3 p-2"/>
                    <div class="w-full">
                        <div class="w-full">
                            <div class="font-bold">Description</div>
                            <div>
                                <textarea   name="description" id="description"  class="w-full">{{$data->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center py-3">
                        <button class="px-3 py-1 rounded-md bg-green-600 text-white ">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace( 'description' );

    </script>
</x-admin-app-layout>
