<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as Admin!
                </div>
            </div>
        </div>
    </div>

     @role('admin')
    <div class="w-full mt-4">
        <div class="w-full flex flex-wrap">
            <div class="w-full md:w-1/2  p-2 ">
                <div class="w-full bg-white rounded-lg">
                    <div class="border-b px-2 font-bold py-2 text-black">Admin list</div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th   class="px-6 py-3">
                                    Name
                                </th>
                                <th   class="px-6 py-3">
                                    Email
                                </th>
                                <th   class="px-6 py-3">
                                    Password Change
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Models\Admin::get() as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th   class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$user->name??''}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$user->email??''}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a class="cursor-pointer" href="{{route('admin.adminList.edit',$user->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="w-full md:w-1/2 2 ">
                <div class="p-3 bg-white rounded-lg">
                    <form action="{{route('admin.userCreate')}}" method="post">
                        @csrf
                        <div class="w-full text-black ">
                            <x-labeled-input class="w-full " required name="name"/>
                            <x-labeled-input class="w-full " required type="email" name="email"/>
                            <x-labeled-input class="w-full " required type="password" name="password"/>
                            <x-labeled-input class="w-full " required type="password" name="password_confirmation"/>
                        </div>
                        <div class="w-full flex justify-center mt-3">
                            <button class="py-1 rounded-md bg-black text-white px-3 ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endrole


</x-admin-app-layout>
