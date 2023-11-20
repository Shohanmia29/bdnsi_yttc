<x-guest-layout>
    <div class="w-full mx-auto max-w-4xl shadow-lg  my-5 flex flex-wrap">
        <div class="w-full text-center text-xl border-b">
            Center request

            <div>..........................................................................................................</div>

        </div>
        <form action="{{ route('center-request.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($success = session(\App\Mixin\ResponseMixin::SUCCESS_MESSAGE_SESSION_KEY))
            <div class="w-full flex flex-wrap">
                <div class="w-full p-4 bg-green-300">{{ $success }}</div>
            </div>
            @endif
            @if($error = session(\App\Mixin\ResponseMixin::ERROR_MESSAGE_SESSION_KEY))
                <div class="w-full flex flex-wrap">
                    <div class="w-full p-4 bg-red-300">{{ $error }}</div>
                </div>
            @endif
            <div class="w-full flex flex-wrap py-2">
                <div class="w-full ">
                    <x-auth-validation-errors />
                </div>
            </div>
            <div class="w-full flex flex-wrap py-3 px-2 md:px-4" x-data="centerRequestData">
                <x-labeled-input class="w-full lg:w-1/2 p-1" name="name" label="Center Name" required/>
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
                <div class="w-full py-8 flex justify-center">
                    <x-button class="bg-green-600">{{ __('Submit') }}</x-button>
                </div>
            </div>
        </form>
    </div>

    <x-slot name="script">
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('centerRequestData', () => ({
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
