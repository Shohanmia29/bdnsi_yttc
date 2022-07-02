<x-admin-app-layout>
    <div class="w-full flex flex-wrap mt-4">
        <div class="w-full py-4">
            <div class="w-full bg-white rounded">
                <div class="w-full flex justify-between">
                    <div class=" border-b text-lg p-4">
                        {{ __('Session Create') }}
                    </div>

                    <div class="text-lg p-4">
                        <a href="{{ route('admin.session.index') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 text-sm font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" >
                             {{ __('Session List') }}
                        </a>
                    </div>
                </div>
                <div class="w-full p-4">
                    <form action="{{route('admin.session.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-labeled-input class="mt-4" type="text" name="name" required/>
                        <x-labeled-input class="mt-4" type="date" name="start_date" required/>
                        <x-labeled-input class="mt-4" type="date" name="end_date" required/>
                        <div class="w-full flex justify-center mt-8 mb-4">
                            <button class="bg-transparent border border-slate-600 py-2 px-4 text-slate-600 font-semibold rounded hover:bg-slate-600 hover:text-white">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>