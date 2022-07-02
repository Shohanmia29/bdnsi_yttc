<x-admin-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="text-xl">{{ __('Edit User') }}</div>
            <div>
                <a class="text-primary-700 underline font-semibold" href="{{ route('admin.user.index') }}">{{ __('Users') }}</a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap justify-center w-full bg-white p-4">
            <x-labeled-input name="username" required value="{{ old('username', $user->username) }}" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="name" required value="{{ old('name', $user->name) }}" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="phone" required value="{{ old('phone', $user->phone) }}" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input name="email" value="{{ old('email', $user->email) }}" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input type="password" name="password" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-input type="password" name="password_confirmation" class="w-full p-1 md:w-1/2 lg:w-1/3"/>
            <x-labeled-select name="center_id" required class="w-full p-1 md:w-1/2 lg:w-1/3">
                @foreach($centers as $center)
                    <option value="{{ $center->id }}" @selected(old('center_id', $user->center_id) == $center->id)>{{ $center->name }}</option>
                @endforeach
            </x-labeled-select>
            <div class="w-full pt-4 flex justify-end">
                <x-button>{{ __('Edit') }}</x-button>
            </div>
        </div>
    </form>
</x-admin-app-layout>
