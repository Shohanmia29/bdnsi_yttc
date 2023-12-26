<x-guest-layout>
    <div class="bg-[#F8F9FA]">
        <div class="flex  flex-wrap space-x-2 py-2   border-b shadow px-4">
             <div class="ml-5">
                 <a href="#" class="text-gray-500 hover:text-gray-700">Home</a>
                 <span class="mx-2 text-gray-400">/</span>
                 <a href="#" class="text-gray-500 hover:text-gray-700">Gallery</a>
             </div>
        </div>

        <div class="min-h-screen    ">
            <div class="max-w-7xl mx-auto p-3">
                <div class="w-full flex flex-wrap">
                    @forelse($galleries as $gallery)
                        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                            <div class="mb-10 overflow-hidden rounded-lg bg-white">
                                <img  src="{{$gallery->photo??''}}" alt="image" class="w-full     h-64">

                            </div>
                        </div>
                    @empty
                        <div class="w-full font-bold text-red-500">Not Found Gallery</div>
                    @endforelse
                </div>
                <div class="w-full">
                    {{$galleries->links()}}
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
