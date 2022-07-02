<x-admin-app-layout>
    <div class="w-full flex justify-between">
        <div class="text-xl">{{ __('Subject List') }}</div>
        <div>
            <a
                href="{{ route('admin.subject.create') }}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 text-sm font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
            >
                + {{ __('Subject') }}
            </a>
        </div>
    </div>

    <div class="w-full mt-8">
        <table class="w-full" id="subcategory_table">
            <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Name') }}</th>
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
                    url: '{{ route('admin.subject.index') }}',
                    dataSrc(response) {
                        response.data.map(function (item) {
                            item.name = `<p class="text-center">${item.name}</p>`;
                            item.action = actionIcons({
                                'edit': '{{ route('admin.subject.edit', '@') }}'.replace('@', item.id),
                                'delete': '{{ route('admin.subject.destroy', '@') }}'.replace('@', item.id),
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
                    {data: 'action', orderable: false, searchable: false},
                ]
            });
        </script>
    </x-slot>
</x-admin-app-layout>