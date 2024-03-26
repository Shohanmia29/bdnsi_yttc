<x-guest-layout>
    <div class="bg-[#F8F9FA]">
        <div class="flex flex-wrap space-x-2 py-2   border-b shadow px-4">
            <a href="#" class="text-gray-500 hover:text-gray-700">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="#" class="text-gray-500 hover:text-gray-700">Verified Institute</a>
        </div>

        <div class="min-h-screen    ">
             <div class="max-w-7xl mx-auto p-3">
                 <div class="w-full flex flex-wrap">
                     @forelse($centers as $center)
                         <div class="w-full p-4 md:w-1/2 xl:w-1/4">
                          <x-institute :institute="$center"/>
                         </div>
                     @empty
                         <div class="w-full font-bold text-red-500">Not Found Institute</div>
                     @endforelse
                 </div>
                 <div class="w-full">
                         {{$centers->links()}}
                 </div>
             </div>

        </div>
    </div>
</x-guest-layout>
