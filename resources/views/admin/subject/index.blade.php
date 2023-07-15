<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Subjects') }}</div>
            @can('subject-create')
                <div>
                    <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                       href="{{ route('admin.subject.create') }}">{{ __('Create Subject') }}</a>
                </div>
            @endcan
        </div>
    </x-slot>

    <div class="w-full mt-8">
        <table class="w-full" id="subject_table">
            <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Image') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
            </thead>
        </table>
    </div>
    <x-slot name="script">
        <script type="text/javascript" src="{{ mix('js/datatable.js') }}"></script>
        <script type="text/javascript">
            $('#subject_table').DataTable({
                serverSide: true,
                processing: true,
                ajax: {
                    url: '{{ route('admin.subject.index') }}',
                    dataSrc(response) {
                        response.data.map(function (item) {
                            item.photo= `<img class="w-10 h-10 mx-auto" src="${item.photo}" alt="${item.name}"/> `;
                            item.action = actionIcons({
                                @can('subject-update')
                                'edit': '{{ route('admin.subject.edit', '@') }}'.replace('@', item.id),
                                @endcan
                                @can('subject-delete')
                                'delete': '{{ route('admin.subject.destroy', '@') }}'.replace('@', item.id),
                                @endcan
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
                    {data: 'photo'},
                    {data: 'action', orderable: false, searchable: false},
                ]
            });
        </script>
    </x-slot>
</x-admin-app-layout>
