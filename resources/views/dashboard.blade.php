<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="w-full flex flex-wrap">
        @foreach($cards as $card)
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
                <div class="rounded w-full bg-slate-800 text-white shadow">
                    <div class="w-full p-4">
                        <div class="w-full text-xl">{{ $card->title??'' }}</div>
                        <div class="w-full text-2xl text-right font-semibold">{{ $card->value??'' }}</div>
                    </div>
                    @foreach($card->kv as $k => $v)
                        <div class="w-full border-t flex justify-between">
                            <span class="p-2">{{ $k??'' }}</span>
                            <span class="p-2 font-semibold">{{ $v??'' }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <div class="w-full mt-8 flex flex-wrap bg-white rounded-md">
        <div class="w-full p-4 border-b text-xl font-semibold">
            {{ __('Center Information') }}
        </div>
        @php($center = auth()->user()->center)
        @if($center)
        <div class="w-full flex flex-wrap p-4">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <table>
                    <tr><td class="p-2 font-semibold">{{ __('Code') }}</td><td class="p-2">{{ $center->code??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Name') }}</td><td class="p-2">{{ $center->name??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Owner Name') }}</td><td class="p-2">{{ $center->owner_name??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Fathers Name') }}</td><td class="p-2">{{ $center->fathers_name??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Mothers Name') }}</td><td class="p-2">{{ $center->mothers_name??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Religion') }}</td><td class="p-2">{{ $center->religion->key??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Gender') }}</td><td class="p-2">{{ $center->gender->key??'' }}</td></tr>
                </table>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3">
                <table>
                    <tr><td class="p-2 font-semibold">{{ __('Nationality') }}</td><td class="p-2">{{ $center->nationality??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Division') }}</td><td class="p-2">{{ \App\Lib\Geo::divisions()[$center->division]['name']??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('District') }}</td><td class="p-2">{{ \App\Lib\Geo::districts()[$center->district]['name']??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Upazilla') }}</td><td class="p-2">{{ \App\Lib\Geo::upazillas()[$center->upazilla]['name']??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Post Office') }}</td><td class="p-2">{{ $center->post_office??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Postal Code') }}</td><td class="p-2">{{ $center->postal_code??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Facebook URL') }}</td><td class="p-2">{{ $center->facebook_url??'' }}</td></tr>
                </table>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3">
                <table>
                    <tr><td class="p-2 font-semibold">{{ __('No Of Computers') }}</td><td class="p-2">{{ $center->no_of_computers??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Institute Age') }}</td><td class="p-2">{{ $center->institute_age??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Address') }}</td><td class="p-2">{{ $center->address??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Mobile') }}</td><td class="p-2">{{ $center->mobile??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Email') }}</td><td class="p-2">{{ $center->email??'' }}</td></tr>
                    <tr><td class="p-2 font-semibold">{{ __('Status') }}</td><td class="p-2">{{ $center->status->key??'' }}</td></tr>
                </table>
            </div>
        </div>
        @else
            <div class="text-center text-red-500 font-bold ">Center Not Found</div>
        @endif
    </div>
</x-app-layout>
