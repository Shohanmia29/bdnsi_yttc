<x-frontend-layouts>
    <script defer src="{{mix('js/app.js')}}"></script>
    <div class="container" x-data="centerData">
        <div class="branch-fillter-wrap mt-4 py-4">
            <div class="text-center mb-3">
                <h5>Filter Verified Branch</h5>
            </div>
            <form action="{{route('verifiedInstitute')}}" method="get">
                <div class="row gap-2 justify-content-center">
                    <div class="col-md-3">
                        <select class="form-select" name="division" x-model="division" x-ref="division" required  aria-label="District select">
                            @foreach(\App\Lib\Geo::divisions() as $divisionId => $division)
                                <option value="{{ $divisionId }}" @selected(old('division') == $divisionId)>{{ $division['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select"  x-model="district" x-model="district" x-ref="district" name="district" required>
                            <template x-for="district in districts">
                                <option x-bind:value="district.id" x-html="district.name"></option>
                            </template>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" x-model="upazilla" name="upazilla" required>
                            <template x-for="upazilla in upazillas">
                                <option x-bind:value="upazilla.id" x-html="upazilla.name"></option>
                            </template>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-outline-success"  >Reset</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row" id="branch_wrap">
            @forelse($centers as $center)
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <x-institute :institute="$center"/>
                </div>
            @empty
                <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                    <div class="container-fluid py-5 text-center">
                        <h1 class="display-5 fw-bold">No Institute Found</h1>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="w-100">
              {{$centers->links()}}
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
</x-frontend-layouts>
