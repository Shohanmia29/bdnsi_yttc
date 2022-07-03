<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Subjects') }}</div>
            @can('subject-create')
                <div>
                    <a class="text-primary-700 underline font-semibold"
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
                            item.name = `<p class="text-center">${item.name}</p>`;
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
                    {data: 'action', orderable: false, searchable: false},
                ]
            });
        </script>
    </x-slot>
</x-admin-app-layout>
