<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Centers') }}</div>
            @can('center-create')
                <div>
                    <a
                        href="{{ route('admin.center.create') }}"
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                    >
                        + {{ __('Create Center') }}
                    </a>
                </div>
            @endcan
        </div>
    </x-slot>

    <div class="w-full mt-8">
        <table class="w-full" id="centers-table">
            <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Code') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Owner') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
            </thead>
        </table>
    </div>
    <x-slot name="script">
        <script type="text/javascript" src="{{ mix('js/datatable.js') }}"></script>
        <script type="text/javascript">
            $('#centers-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: {
                    url: '{{ route('admin.center.index') }}',
                    dataSrc(response) {
                        response.data.map(function (item) {
                            item.status = @js(\App\Enums\CenterStatus::asSelectArray())[item.status];
                            item.action = actionIcons({
                                'show': '{{ route('admin.center.show', '@') }}'.replace('@', item.id),
                                @can('center-update')
                                'edit': '{{ route('admin.center.edit', '@') }}'.replace('@', item.id),
                                @endcan
                                @can('center-delete')
                                'delete': '{{ route('admin.center.destroy', '@') }}'.replace('@', item.id),
                                @endcan
                            });
                            return item;
                        });
                        return response.data;
                    }
                },
                columns: [
                    {data: 'id'},
                    {data: 'code'},
                    {data: 'name'},
                    {data: 'owner_name'},
                    {data: 'status'},
                    {data: 'action', orderable: false, searchable: false},
                ]
            });
        </script>
    </x-slot>
</x-admin-app-layout>
