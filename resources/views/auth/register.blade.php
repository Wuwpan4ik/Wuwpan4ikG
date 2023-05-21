
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Meta GPT - {{__('regTitle')}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
    <!-- Scripts -->
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
    <div class="loginForm">
        <section>
            <form method="POST" @guest() action="{{ route('register') }} @else action="{{ route('check.code') }} @endguest">
                @csrf
                <div class="first-row">
                    <img src="{{ asset('assets/reg-mob.jpg') }}" alt="" />
                </div>
                <!-- Name -->
                <div class="second-row">
                    <div class="top-row">
                        <h2 class="title">
                            {{ __("registerTitle") }}
                        </h2>
                        @guest()
                        <!--Имя, позже скрыть-->
                        <div class="input-form ">
                            <x-input-label for="name" :value="__('yourName')" />
                            <x-text-input id="name" value="{{ old('name') }}" placeholder="{{__('yourNameInput')}}" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4 input-form after_hide">
                            <x-input-label for="email" :value="__('yourEmail')" />
                            <x-text-input id="email" value="{{ old('email') }}" placeholder="example@gmail.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4 input-form after_hide">
                            <x-input-label for="password" :value="__('enterPass')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                          type="password"
                                          name="password"
                                          placeholder="{{__('minPass')}}"
                                          required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4 input-form after_hide">
                            <x-input-label for="password_confirmation" :value="__('confirmPassword')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                          type="password"
                                          placeholder="{{__('enterAgain')}}"
                                          name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        @else
                            <div class="mt-4 input-form after_hide">
                                <x-input-label for="code" :value="{{__('enterCode')}}" />

                                <x-text-input id="code" class="block mt-1 w-full"
                                              type="number"
                                              name="code"
                                              maxLength="6"
                                              placeholder="{{__('code')}}"
                                              required />

                                <x-input-error :messages="$errors->get('code')" class="mt-2" />
                            </div>
                        @endguest
                        @isset($error)
                             <div class="error">
                                 Неверный код {{ Auth::user()->is_verified }}
                             </div>
                        @endif

                        <div class="buttonSubmit">
                            <x-primary-button class="ml-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </div>
                    <div class="bottom-row">
                        <!--
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                        </a>
-->
                        {{__("haveAccount")}} <a href='{{ route("login") }}'>{{__("logBtn")}}</a>
                        <div class="forgot" style="margin-top:10px;">
                            <a href='forgot-password'>{{__('forgotPass')}}</a>
                        </div>
                    </div>
            </form>
        </section>
    </div>
</div>
<script>
    var url_string = "http://www.example.com/t.html?a=1&b=3&c=m2-m3-m4-m5";
    var url = new URL(url_string);
    let c;
    if (c = url.searchParams.get("code")) {
        console.log(c)
    }

</script>
</body>
</html>
