<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Sessions') }}</div>
            @can('session-create')
                <div>
                    <a class="text-primary-700 underline font-semibold"
                       href="{{ route('admin.session.create') }}">{{ __('Create Session') }}</a>
                </div>
            @endcan
        </div>
    </x-slot>

    <div class="w-full mt-8">
        <table class="w-full" id="session-table">
            <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Start Date') }}</th>
                <th>{{ __('End Date') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
            </thead>
        </table>
    </div>
    <x-slot name="script">
        <script type="text/javascript" src="{{ mix('js/datatable.js') }}"></script>
        <script type="text/javascript">
            $('#session-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: {
                    url: '{{ route('admin.session.index') }}',
                    dataSrc(response) {
                        response.data.map(function (item) {
                            item.name = `<p class="text-center">${item.name}</p>`;
                            item.action = actionIcons({
                                'edit': '{{ route('admin.session.edit', '@') }}'.replace('@', item.id),
                                'delete': '{{ route('admin.session.destroy', '@') }}'.replace('@', item.id),
                            });
                            return item;
                        });
                        return response.data;
                    }
                },
                order: [[0, 'desc']],
                columns: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'start_date'},
                    {data: 'end_date'},
                    {data: 'action', orderable: false, searchable: false},
                ]
            });
        </script>
    </x-slot>
</x-admin-app-layout>
