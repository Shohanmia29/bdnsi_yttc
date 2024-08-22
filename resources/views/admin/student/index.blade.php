<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Students') }}</div>
            @can('student-create')
                <div>
                    <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                       href="{{ route('admin.student.create') }}">{{ __('Create Student') }}</a>
                </div>
            @endcan
        </div>
    </x-slot>

    <div class="w-full mt-8">
        <table class="w-full" id="students-table">
            <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Center') }}</th>
                <th>{{ __('Subject') }}</th>
                <th>{{ __('Phone') }}</th>
                <th>{{ __('Certificate') }}</th>
                <th>{{ __('Result') }}</th>
                <th>{{ __('Roll') }}</th>
                <th>{{ __('Registration') }}</th>
                <th>{{ __('Status') }}</th>
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
                    url: '{{ route('admin.student.index') }}',
                    dataSrc(response) {
                        response.data.map(function (item) {
                            item.status = @js(\App\Enums\StudentStatus::asSelectArray())[item.status]
                            item.action = actionIcons({
                                'show': '{{ route('admin.student.show', '@') }}'.replace('@', item.id),
                                @can('student-update')
                                'edit': '{{ route('admin.student.edit', '@') }}'.replace('@', item.id),
                                @endcan
                                @can('student-delete')
                                'delete': '{{ route('admin.student.destroy', '@') }}'.replace('@', item.id),
                                @endcan
                            });
                            return item;
                        });
                        return response.data;
                    }
                },
                columns: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'center.code'},
                    {data: 'subject.name'},
                    {data: 'phone'},
                    {data: 'certificate'},
                    {data: 'student_result'},
                    {data: 'roll',searchable:true},
                    {data: 'registration',searchable:true},
                    {data: 'status'},
                    {data: 'action', orderable: false, searchable: false},
                ]
            });
        </script>
    </x-slot>
</x-admin-app-layout>
