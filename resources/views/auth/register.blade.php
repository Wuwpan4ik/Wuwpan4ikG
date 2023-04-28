<head>
    <title>
        Meta GPT - {{__('regTitle')}}
    </title>
</head>
<x-guest-layout>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="first-row">
            <img src="../assets/reg-mob.jpg" alt="" />
        </div>
        <!-- Name -->
        <div class="second-row">
            <div class="top-row">
                <h2 class="title">
                    {{ __("registerTitle") }}
                </h2>
                <!--Имя, позже скрыть-->
                <div class="input-form">
                    <x-input-label for="name" :value="__('yourName')" />
                    <x-text-input id="name" placeholder="{{__('yourNameInput')}}" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4 input-form">
                    <x-input-label for="email" :value="__('yourEmail')" />
                    <x-text-input id="email" placeholder="example@gmail.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 input-form">
                    <x-input-label for="password" :value="__('enterPass')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder="{{__('minPass')}}"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 input-form">
                    <x-input-label for="password_confirmation" :value="__('confirmPassword')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    placeholder="{{__('enterAgain')}}"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

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
            </div>
    </form>
</x-guest-layout>
