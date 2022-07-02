<x-admin-app-layout>
    <div class="py-8 w-full flex justify-between">
        <div class="text-3xl">{{ __('Edit Subject') }}</div>
        <div>
            <a class="bg-transparent hover:bg-blue-500 text-blue-700 text-sm font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="{{ route('admin.subject.index') }}">{{ __('Subject List') }}</a>
        </div>
    </div>

    <form action="{{ route('admin.subject.update', $subject->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="name" required value="{{$subject->name}}" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <div class="w-full pt-4 flex justify-end">
                <x-button>{{ __('Edit') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>