<x-admin-app-layout>
    <div class="w-full flex justify-between">
        <div class="text-xl">{{ __('Session List') }}</div>
        <div>
            <a
                href="{{ route('admin.session.create') }}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 text-sm font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
            >
                + {{ __('Session') }}
            </a>
        </div>
    </div>

    <div class="w-full mt-8">
        <table class="w-full" id="subcategory_table">
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
            $('#subcategory_table').DataTable({
                serverSide: true,
                processing: true,
                ajax: {
                    url: '{{ route('admin.session.index') }}',
                    dataSrc(response) {
                        response.data.map(function (item) {
                            item.name = `<p class="text-center">${item.name}</p>`;
                            item.start_date = (new Date(item.start_date)).toLocaleDateString();
                            item.end_date = (new Date(item.end_date)).toLocaleDateString();
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