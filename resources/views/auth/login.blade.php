<head>
    <title>
        Meta GPT - {{__('loginTitle')}}
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
</head>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="first-row">
            <img src="{{ asset('/assets/login-mob.jpg') }}" />
        </div>
        <!-- Email Address -->
        <div class="second-row">
            <div class="top-row">
                <h2 class="title">
                    {{ __('loginInAccount') }}
                </h2>
                <div class="input-form">
                    <x-input-label for="email" :value="__('yourEmail')" />
                    <x-text-input id="email" class="block mt-1 w-full" placeholder="example@gmail.com" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 error-bag" />
                </div>

                <!-- Password -->
                <div class="mt-4 input-form">
                    <x-input-label for="password" :value="__('enterPassword')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder="********"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <!--
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
                -->
                <div class="buttonSubmit">
                    <x-primary-button class="ml-3">
                        {{ __('loginBtn') }}
                    </x-primary-button>
                </div>
            </div>

                <div class="bottom-row">
                    @if (Route::has('password.request'))
                        <!-- Забыли пароль
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        -->
                        <!-- Рега-->
                        {{__("noAccount")}} <a href='{{ route("register") }}'>{{__("registerBtn")}}</a>
                        <div class="forgot" style="margin-top:10px;">
                             <a href='forgot-password'>{{__('forgotPass')}}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
