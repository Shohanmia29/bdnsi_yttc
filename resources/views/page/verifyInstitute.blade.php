<x-guest-layout>
    <div class="bg-[#F8F9FA]">
        <div class="flex flex-wrap space-x-2 py-2   border-b shadow px-4">
            <a href="#" class="text-gray-500 hover:text-gray-700">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="#" class="text-gray-500 hover:text-gray-700">Verified Institute</a>
        </div>

        <div class="min-h-screen    " x-data="centerData">

             <div class="max-w-7xl mx-auto p-3">
                  <div class="max-w-3xl mx-auto p-2">
                      <form action="{{route('verifiedInstitute')}}" method="get">
                          <div class="flex w-full flex-wrap">
                              <x-labeled-select class="w-full lg:w-1/2 p-1" x-model="district" x-model="district" x-ref="district" name="district" required>
                                  <template x-for="district in districts">
                                      <option x-bind:value="district.id" x-html="district.name"></option>
                                  </template>
                              </x-labeled-select>
                              <x-labeled-select class="w-full lg:w-1/2 p-1" x-model="upazilla" name="upazilla" required>
                                  <template x-for="upazilla in upazillas">
                                      <option x-bind:value="upazilla.id" x-html="upazilla.name"></option>
                                  </template>
                              </x-labeled-select>
                              <div class="w-full flex justify-center">
                                   <button class="px-3 py-1 rounded-md border bg-blue-700 text-white">Search</button>
                              </div>
                          </div>
                      </form>

                  </div>

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
    <x-slot name="script">
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('centerData', () => ({
                    division: @js(old('division')),
                    district: @js(old('district')),
                    districts: [],
                    upazillas: [],
                    init(){
                        this.filterDistricts(this.division ?? this.$refs.division.value)
                        this.$watch('division', this.filterDistricts.bind(this))
                        this.$watch('district', this.filterUpazillas.bind(this))
                    },
                    filterDistricts(division){
                        const districts = Object.entries(@js(\App\Lib\Geo::districts())).map(item => ({
                            id: item[0],
                            name: item[1].name,
                            division_id: item[1].division_id,
                        }))
                        this.districts = districts.filter(district => district.division_id == division)
                        setTimeout(() => {
                            this.filterUpazillas(this.district ?? this.$refs.district.value)
                        }, 10)
                    },
                    filterUpazillas(district){
                        const upazillas = Object.entries(@js(\App\Lib\Geo::upazillas())).map(item => ({
                            id: item[0],
                            name: item[1].name,
                            district_id: item[1].district_id,
                        }))
                        this.upazillas = upazillas.filter(upazilla => upazilla.district_id == district)
                    }
                }))
            })
        </script>
    </x-slot>
</x-guest-layout>
