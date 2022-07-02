<x-admin-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <div class="text-xl">{{ __('Update Center') }}</div>
            <div>
                <a class="text-primary-700 underline font-semibold" href="{{ route('admin.center.index') }}">{{ __('Centers') }}</a>
            </div>
        </div>
    </x-slot>

    <form action="{{ route('admin.center.update', $center->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex flex-wrap justify-center w-full bg-white p-4" x-data="centerData">
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="code" :value="old('code', $center->code)" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="name" :value="old('name', $center->name)" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="owner_name" :value="old('owner_name', $center->owner_name)" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="fathers_name" :value="old('fathers_name', $center->fathers_name)" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="mothers_name" :value="old('mothers_name', $center->mothers_name)" required/>
            <x-labeled-select class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="religion" :value="old('religion', $center->religion)" required>
                @foreach(\App\Enums\Religion::getInstances() as $religion)
                    <option value="{{ $religion->value }}" @selected(old('religion', $center->religion->value) == $religion->value)>{{ $religion->key }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-select class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="gender" required>
                @foreach(\App\Enums\Gender::getInstances() as $gender)
                    <option value="{{ $gender->value }}" @selected(old('gender', $center->gender->value) == $gender->value)>{{ $gender->key }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-select class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="division" x-model="division" x-ref="division" required>
                @foreach(\App\Lib\Geo::divisions() as $divisionId => $division)
                    <option value="{{ $divisionId }}" @selected(old('division', $center->division) == $divisionId)>{{ $division['name'] }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-select class="w-full lg:w-1/2 odd:pr-2 even:pl-2" x-model="district" x-model="district" x-ref="district" name="district" required>
                <template x-for="district in districts">
                    <option x-bind:value="district.id" x-html="district.name"></option>
                </template>
            </x-labeled-select>
            <x-labeled-select class="w-full lg:w-1/2 odd:pr-2 even:pl-2" x-model="upazilla" name="upazilla" required>
                <template x-for="upazilla in upazillas">
                    <option x-bind:value="upazilla.id" x-html="upazilla.name"></option>
                </template>
            </x-labeled-select>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="nationality" :value="old('nationality', $center->nationality)" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="post_office" :value="old('post_office', $center->post_office)" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="postal_code" :value="old('postal_code', $center->postal_code)" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="facebook_url" :value="old('facebook_url', $center->facebook_url)" type="url"/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="no_of_computers" :value="old('no_of_computers', $center->no_of_computers)" type="number" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="institute_age" :value="old('institute_age', $center->institute_age)" type="number" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="address" :value="old('address', $center->address)" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="mobile" :value="old('mobile', $center->mobile)" pattern="\d{11}" x-on:input="$event.target.setCustomValidity($event.target.validity.patternMismatch ? 'Phone number should be 11 digits' : '')" required/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="email" :value="old('email', $center->email)" required type="email"/>
            <x-labeled-select class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="status" required>
                @foreach(\App\Enums\CenterStatus::getInstances() as $status)
                    <option value="{{ $status->value }}" @selected(old('status', $center->status->value) == $status->value)>{{ $status->key }}</option>
                @endforeach
            </x-labeled-select>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="photo" :value="old('photo', $center->photo)" type="file" accept="image/*"/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="authority_signature" :value="old('authority_signature', $center->authority_signature)" type="file" accept="image/*"/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="nid_photo" :value="old('nid_photo', $center->nid_photo)" type="file" accept="image/*"/>
            <x-labeled-input class="w-full lg:w-1/2 odd:pr-2 even:pl-2" name="trade_license" :value="old('trade_license', $center->trade_license)" type="file" accept="image/*"/>
            <div class="w-full pt-4 flex justify-end">
                <x-button>{{ __('Update') }}</x-button>
            </div>
        </div>
    </form>

    <x-slot name="beforeScript">
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('centerData', () => ({
                    division: @js(old('division', $center->division)),
                    district: @js(old('district', $center->district)),
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
