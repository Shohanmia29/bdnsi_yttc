<x-admin-app-layout>
    <x-slot name="header">
        Roles
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a
                href="{{route('laratrust.roles.create')}}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
            >
                + New Role
            </a>
            <div
                class="mt-8 w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="p-2 bg-slate-200">Id</th>
                        <th class="p-2 bg-slate-200">Display Name</th>
                        <th class="p-2 bg-slate-200">Name</th>
                        <th class="p-2 bg-slate-200"># Permissions</th>
                        <th class="p-2 bg-slate-200"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach ($roles as $role)
                        <tr>
                            <td class="p-1">
                                {{$role->getKey()}}
                            </td>
                            <td class="p-1">
                                {{$role->display_name}}
                            </td>
                            <td class="p-1">
                                {{$role->name}}
                            </td>
                            <td class="p-1">
                                {{$role->permissions_count}}
                            </td>
                            <td class="flex justify-end px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                @if (\Laratrust\Helper::roleIsEditable($role))
                                    <a href="{{route('laratrust.roles.edit', $role->getKey())}}"
                                       class="text-blue-600 hover:text-blue-900">Edit</a>
                                @else
                                    <a href="{{route('laratrust.roles.show', $role->getKey())}}"
                                       class="text-blue-600 hover:text-blue-900">Details</a>
                                @endif
                                <form
                                    action="{{route('laratrust.roles.destroy', $role->getKey())}}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete the record?');"
                                >
                                    @method('DELETE')
                                    @csrf
                                    <button
                                        type="submit"
                                        class="{{\Laratrust\Helper::roleIsDeletable($role) ? 'text-red-600 hover:text-red-900' : 'text-gray-600 hover:text-gray-700 cursor-not-allowed'}} ml-4"
                                        @if(!\Laratrust\Helper::roleIsDeletable($role)) disabled @endif
                                    >Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $roles->links() }}
        </div>
    </div>
</x-admin-app-layout>
