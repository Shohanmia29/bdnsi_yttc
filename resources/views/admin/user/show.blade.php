<x-admin-layout :title="__('User Details')">


    <div class="py-6 flex justify-between">
        <div class="text-3xl">{{ __('User Details') }}</div>
        <div>
            <a class="text-primary-700 underline font-semibold" href="{{ route('admin.user.index') }}">{{ __('Users') }}</a>
        </div>
    </div>

    <div class="w-full bg-white flex flex-wrap justify-end p-4">
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center p-2">
            <img class="h-64 w-64" src="{{ $user->getAvatarUrl() }}" alt="Avatar of {{ $user->username }}"/>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
            <table>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Username') }}</td>
                    <td class="p-2">{{ $user->username }}</td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Name') }}</td>
                    <td class="p-2">{{ $user->name }}</td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Phone') }}</td>
                    <td class="p-2">{{ $user->phone }}</td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Email') }}</td>
                    <td class="p-2">{{ $user->email }}</td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('NID') }}</td>
                    <td class="p-2">{{ $user->nid }}</td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Gender') }}</td>
                    <td class="p-2">{{ $user->gender->key }}</td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Birthday') }}</td>
                    <td class="p-2">{{ optional($user->birthday)->format('l jS \\of F Y') }}</td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Referrer') }}</td>
                    <td class="p-2">{{ optional($user->referrer)->username ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Agent') }}</td>
                    <td class="p-2 flex">
                        {{ $user->isA('agent') ? 'Yes' : 'No' }}
                        <form class="ml-2" action="{{ route('admin.user.agent', $user->id) }}" method="POST">
                            @csrf
                            <button class="py-1 px-2 rounded {{ $user->isA('agent') ? 'bg-red-600' : 'bg-gray-600' }} text-white text-sm font-semibold">{{ $user->isA('agent') ? __('Revoke Agent Role') : __('Make Agent') }}</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Active') }}</td>
                    <td class="p-2 flex">
                        {{ $user->isActive() ? 'Yes' : 'No' }}
                        <form class="ml-2" action="{{ $user->isActive() ? route('admin.user.deactivate', $user->id) : route('admin.user.activate', $user->id) }}" method="POST">
                            @csrf
                            <button class="py-1 px-2 rounded {{ $user->isActive() ? 'bg-red-600' : 'bg-gray-600' }} text-white text-sm font-semibold">{{ $user->isActive() ? __('Deactivate') : __('Activate') }}</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td class="p-2 font-semibold">{{ __('Package') }}</td>
                    <td class="p-2 flex">
                        {{ $user->package_id ? $user->package->name : 'Free' }}
                        @if($user->package_id)
                            <form class="ml-2" action="{{ route('admin.user.make_free', $user->id) }}" onsubmit="return confirm('Are you sure you want to change this users package to free?')" method="POST">
                                @csrf
                                <button class="py-1 px-2 rounded bg-red-600 text-white text-sm font-semibold">{{ __('Make Free') }}</button>
                            </form>
                        @endif
                    </td>
                </tr>
            </table>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
            <table>
                @foreach(\App\Enums\Wallet::getInstances() as $wallet)
                    <tr>
                        <td class="p-2 font-semibold">{{ __($wallet->title) }}</td>
                        <td class="p-2">{{ $user->{$wallet->name} }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-admin-layout>
