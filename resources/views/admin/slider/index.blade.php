<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Sliders') }}</div>
            @can('student-create')
                <div>
                    <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                       href="{{ route('admin.slider.create') }}">{{ __('Add Slider Image') }}</a>
                </div>
            @endcan
        </div>
    </x-slot>

    <div class="w-full mt-8">
        <table class="w-full" id="students-table">
            <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Photo') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
            </thead>
        </table>
    </div>
    <x-slot name="script">
        <script type="text/javascript" src="{{ mix('js/datatable.js') }}"></script>
        <script type="text/javascript">
            $('#students-table').DataTable({
                serverSide: true,
                processing: true,
                ajax: {
                    url: '{{ route('admin.slider.index') }}',
                    dataSrc(response) {
                        response.data.map(function (item) {
                            item.action = actionIcons({
                                'show': '{{ route('admin.slider.show', '@') }}'.replace('@', item.id),
                                @can('student-update')
                                'edit': '{{ route('admin.slider.edit', '@') }}'.replace('@', item.id),
                                @endcan
                                    @can('student-delete')
                                'delete': '{{ route('admin.slider.destroy', '@') }}'.replace('@', item.id),
                                @endcan
                            });
                            return item;
                        });
                        return response.data;
                    }
                },
                columns: [
                    {data: 'id'},
                    {data: 'title'},
                    {data: 'photo'},
                    {data: 'action', orderable: false, searchable: false},
                ]
            });
        </script>
    </x-slot>
</x-admin-app-layout>
