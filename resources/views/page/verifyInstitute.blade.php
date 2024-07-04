<x-frontend-layouts>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <div class="container" x-data="centerData">
        <div class="branch-filter-wrap mt-4 py-4">
            <div class="text-center mb-3">
                <h5>Filter Verified Branch</h5>
            </div>
            <form action="{{ route('verifiedInstitute') }}" method="get">
                <div class="row gap-2 justify-content-center">
                    <div class="col-md-3">
                        <select class="form-select" name="division" x-model="division" required aria-label="Division select">
                            <option value="" disabled selected>Select Division</option>
                            @foreach(\App\Lib\Geo::divisions() as $divisionId => $division)
                                <option value="{{ $divisionId }}" @selected(old('division') == $divisionId)>{{ $division['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="district" x-model="district" required aria-label="District select">
                            <option value="" disabled selected>Select District</option>
                            <template x-for="district in districts" :key="district.id">
                                <option :value="district.id" x-text="district.name"></option>
                            </template>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="upazilla" x-model="upazilla" required aria-label="Upazilla select">
                            <option value="" disabled selected>Select Upazilla</option>
                            <template x-for="upazilla in upazillas" :key="upazilla.id">
                                <option :value="upazilla.id" x-text="upazilla.name"></option>
                            </template>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-outline-success" >Search</button>
                        <button type="reset" class="btn btn-outline-danger" x-on:click="resetFilters">Reset</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row w-100" id="branch_wrap">
            @forelse($centers as $center)
                <div class="col-lg-3 col-md-3 col-sm-6 col-6  ">
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
            {{ $centers->links('page.paginate') }}
        </div>
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('centerData', () => ({
                division: '{{ old('division', '') }}',
                district: '{{ old('district', '') }}',
                upazilla: '{{ old('upazilla', '') }}',
                districts: [],
                upazillas: [],
                init() {
                    // Fetch and set districts based on the initial division
                    if (this.division) {
                        this.filterDistricts();
                    }

                    // Fetch and set upazillas based on the initial district
                    if (this.district) {
                        this.filterUpazillas();
                    }

                    // Watchers for changes
                    this.$watch('division', value => {
                        this.district = '';
                        this.upazilla = '';
                        this.filterDistricts();
                    });

                    this.$watch('district', value => {
                        this.upazilla = '';
                        this.filterUpazillas();
                    });
                },
                filterDistricts() {
                    const allDistricts = @json(\App\Lib\Geo::districts());
                    this.districts = Object.entries(allDistricts)
                        .map(([id, district]) => ({
                            id: id,
                            name: district.name,
                            division_id: district.division_id
                        }))
                        .filter(district => district.division_id == this.division);
                },
                filterUpazillas() {
                    const allUpazillas = @json(\App\Lib\Geo::upazillas());
                    this.upazillas = Object.entries(allUpazillas)
                        .map(([id, upazilla]) => ({
                            id: id,
                            name: upazilla.name,
                            district_id: upazilla.district_id
                        }))
                        .filter(upazilla => upazilla.district_id == this.district);
                },
                resetFilters() {
                    this.division = '';
                    this.district = '';
                    this.upazilla = '';
                    this.districts = [];
                    this.upazillas = [];
                }
            }));
        });
    </script>

</x-frontend-layouts>
