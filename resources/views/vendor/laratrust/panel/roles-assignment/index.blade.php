<x-admin-app-layout>
    <x-slot name="header">
        Role assignment
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                x-data="{ model: @if($modelKey) '{{$modelKey}}' @else 'initial' @endif }"
                x-init="$watch('model', value => value != 'initial' ? window.location = `?model=${value}` : '')"
                class="bg-white mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b p-8"
            >
                <span class="text-gray-700">User model to assign roles/permissions</span>
                <label class="block w-3/12">
                    <select class="form-select block w-full mt-1" x-model="model">
                        <option value="initial" disabled selected>Select a user model</option>
                        @foreach ($models as $model)
                            <option value="{{$model}}">{{ucwords($model)}}</option>
                        @endforeach
                    </select>
                </label>
                <div class="flex mt-8 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg ">
                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="bg-slate-200 p-2">Id</th>
                            <th class="bg-slate-200 p-2">Name</th>
                            <th class="bg-slate-200 p-2"># Roles</th>
                            @if(config('laratrust.panel.assign_permissions_to_user'))
                                <th class="bg-slate-200 p-2"># Permissions</th>
                            @endif
                            <th class="bg-slate-200 p-2"></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach ($users as $user)
                            <tr>
                                <td class="p-2">
                                    {{$user->getKey()}}
                                </td>
                                <td class="p-2">
                                    {{$user->name ?? 'The model doesn\'t have a `name` attribute'}}
                                </td>
                                <td class="p-2">
                                    {{$user->roles_count}}
                                </td>
                                @if(config('laratrust.panel.assign_permissions_to_user'))
                                    <td class="p-2">
                                        {{$user->permissions_count}}
                                    </td>
                                @endif
                                <td class="p-2">
                                    <a
                                        href="{{route('laratrust.roles-assignment.edit', ['roles_assignment' => $user->getKey(), 'model' => $modelKey])}}"
                                        class="text-blue-600 hover:text-blue-900"
                                    >Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($modelKey)
                    {{ $users->appends(['model' => $modelKey]) }}
                @endif

            </div>
        </div>
    </div>
</x-admin-app-layout>
