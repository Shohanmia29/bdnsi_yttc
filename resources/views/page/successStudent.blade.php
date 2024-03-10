<x-guest-layout>
    <div class="bg-[#F8F9FA]">
        <div class="flex flex-wrap space-x-2 py-2   border-b shadow px-4">
            <a href="#" class="text-gray-500 hover:text-gray-700">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="#" class="text-gray-500 hover:text-gray-700">Our Success Students</a>
        </div>

        <div class="min-h-screen    ">
            <div class="max-w-7xl mx-auto p-3">
                <div class="w-full flex flex-wrap">
                    @forelse($students as $student)
                        <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                            <div class="bg-white border border-coolGray-100 shadow-dashboard rounded-md">
                                <div class="flex flex-col justify-center items-center px-4 pt-8 pb-6 border-b border-coolGray-100">
                                    <img class="mb-4 w-full object-cover h-64 " src="{{$student->picture??''}}" alt="" data-config-id="auto-img-3-1">
                                    <h2 class="text-sm font-medium text-coolGray-900" data-config-id="auto-txt-19-1">{{$student->name??''}}</h2>

                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="w-full font-bold text-red-500">Not Found Institute</div>
                    @endforelse
                </div>
                <div class="w-full">
                    {{$students->links()}}
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
