<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Create Result') }}</div>
            @can('result-read')
                <div>
                    <a class="border border-slate-500 py-1 px-4 rounded text-slate-700 text-sm hover:text-white hover:bg-slate-700"
                       href="{{ route('admin.result.index') }}">{{ __('Results') }}</a>
                </div>
            @endcan
        </div>
    </x-slot>

    <div class="flex flex-wrap justify-center w-full bg-white p-4">
        <form class="w-full" action="{{ route('admin.result.create') }}" method="GET">
            <div class="w-full flex flex-wrap">

                <x-labeled-input label="Roll Number" name="roll" class="w-full p-1 " value="{{request('roll')}}"  required/>
                <div class="w-full pt-4 flex justify-end">
                    <x-button>{{ __('Search') }}</x-button>
                </div>
            </div>
        </form>
    </div>

    <form action="{{ route('admin.result.store') }}" method="POST">
        @csrf
        <div class="flex flex-wrap justify-center w-full bg-white mt-8">
            <table class="w-full">
                <thead>
                <tr>
                    <th class="p-2 border">Student</th>
                    <th class="p-2 border">Course  Type</th>
                    <th class="p-2 border">Roll</th>
                    <th class="p-2 border">Registration</th>
                    <th class="p-2 border">Written</th>
                    <th class="p-2 border">Practical</th>
                    <th class="p-2 border">Viva</th>
                    <th class="p-2 border">C GPA</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr x-data="{ w: {{ optional($student->result)->written ?? 0 }}, p: {{ optional($student->result)->practical ?? 0 }}, v: {{ optional($student->result)->viva ?? 0 }} }">
                        <td class="p-1 border">{{ $student->name }}</td>
                        <td class="p-1 border">{{ $student->type }}</td>
                        <td class="p-1 border">{{ $student->roll }}</td>
                        <td class="p-1 border">{{ $student->registration }}</td>
                        <td class="p-1 border w-28"><input class="w-full border p-1" x-bind:class="parseInt(w)+parseInt(p)+parseInt(v) > 100 ? 'border-red-500' : ''" type="number"  x-model="w" name="written[{{ $student->id }}]"/></td>
                        <td class="p-1 border w-28"><input class="w-full border p-1" x-bind:class="parseInt(w)+parseInt(p)+parseInt(v) > 100 ? 'border-red-500' : ''" type="number"  x-model="p" name="practical[{{ $student->id }}]"/></td>
                        <td class="p-1 border w-28"><input class="w-full border p-1" x-bind:class="parseInt(w)+parseInt(p)+parseInt(v) > 100 ? 'border-red-500' : ''" type="number"  x-model="v" name="viva[{{ $student->id }}]"/></td>
                        <td class="p-1 border">
                            <input type="hidden" name="id[]" value="{{ $student->id }}">
                            <div class="text-center" x-html="calculateGPA(parseInt(w)+parseInt(p)+parseInt(v))"></div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="w-full p-4 flex justify-end">
                <x-button>{{ __('Publish') }}</x-button>
            </div>
        </div>
    </form>

    <x-slot name="beforeScript">
        <x-calculate-gpa-script />
    </x-slot>
</x-admin-app-layout>
