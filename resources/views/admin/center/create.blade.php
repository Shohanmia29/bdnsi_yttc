<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Create Center') }}</div>
            @can('center-read')
                <div>
                    <a class="text-primary-700 underline font-semibold"
                       href="{{ route('admin.center.index') }}">{{ __('Centers') }}</a>
                </div>
            @endcan
        </div>
    </x-slot>

    <form action="{{ route('admin.center.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap justify-center w-full bg-white p-4" x-data="centerData">
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="name" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="owner_name" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="fathers_name" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="mothers_name" required/>
            <x-labeled-select class="w-full lg:w-1/2 p-1" name="religion" required>
                @foreach(\App\Enums\Religion::getInstances() as $religion)
                    <option value="{{ $religion->value }}" @selected(old('religion') == $religion->value)>{{ $religion->key }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-select class="w-full lg:w-1/2 p-1" name="gender" required>
                @foreach(\App\Enums\Gender::getInstances() as $gender)
                    <option value="{{ $gender->value }}" @selected(old('gender') == $gender->value)>{{ $gender->key }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-select class="w-full lg:w-1/2 p-1" name="division" x-model="division" x-ref="division" required>
                @foreach(\App\Lib\Geo::divisions() as $divisionId => $division)
                    <option value="{{ $divisionId }}" @selected(old('division') == $divisionId)>{{ $division['name'] }}</option>
                @endforeach
            </x-labeled-select>
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
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="nationality" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="post_office" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="postal_code" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="facebook_url" type="url"/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="no_of_computers" type="number" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="institute_age" type="number" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="address" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="mobile" pattern="\d{11}" x-on:input="$event.target.setCustomValidity($event.target.validity.patternMismatch ? 'Phone number should be 11 digits' : '')" required/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="email" required type="email"/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="photo" required type="file" accept="image/*"/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="authority_signature" required type="file" accept="image/*"/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="nid_photo" required type="file" accept="image/*"/>
            <x-labeled-input class="w-full lg:w-1/2 p-1" name="trade_license" required type="file" accept="image/*"/>
            <div class="w-full pt-4 flex justify-end">
                <x-button>{{ __('Create') }}</x-button>
            </div>
        </div>
    </form>

    <x-slot name="beforeScript">
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
</x-admin-app-layout>
