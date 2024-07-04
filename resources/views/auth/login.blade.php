<x-frontend-layouts>
    <section id="login">
        <div class="container login border" style="padding:30px;">
            <h1>Login Your Institute Account</h1>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <center><img src="{{asset('images/new/logo.png')}}" alt="" style="width: 100%; margin-top: 5px;"></center>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                     <div class="font-weight-bold text-danger">
                         <x-auth-session-status class="mb-4" :status="session('status')" />
                         <x-auth-validation-errors class="mb-4" :errors="$errors" />
                     </div>
                    <form class="branch-login" method="POST" action="{{route('login')}}">
                        @csrf
                           <div class="form-group">
                            <label for="exampleInputEmail1">Institute Email:</label>
                            <input type="email" style="border:1px solid black" class="form-control shadow p-3 mb-5 bg-body rounded" name="email" required="" placeholder="Enter your Institute Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" style="border:1px solid black" class="form-control shadow p-3 mb-2 bg-body rounded" name="password" required="" placeholder="Enter Your Password">
                            <div class="text-end">
                                <a href="" class="text-end" contenteditable="false" style="cursor: pointer;">Forget Password?</a>
                            </div>
                        </div>
                        <div class="checkBox mt-4">
                            <input type="checkbox">
                            <label for="exampleInputEmail1">Remember me</label>
                            <button type="submit">Login</button>
                            <h3><a style="color: black; text-decoration: none; cursor: pointer;" href="{{route('center-request.create')}}" contenteditable="false">Institute Apply</a></h3>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{--    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>--}}
</x-frontend-layouts>
