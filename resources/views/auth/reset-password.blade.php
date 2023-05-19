<head>
    <title>
        Meta GPT - Восстановление пароля
    </title>
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
</head>
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <div class="first-row">
            <img src="{{ asset('assets/reg-mob.jpg') }}" alt="" />
        </div>
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="second-row">
            <div class="top-row">
                <!-- Email Address -->
                <div class="mt-4 input-form">
                    <x-input-label for="email" :value="__('Почта')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 input-form">
                    <x-input-label for="password" :value="__('Пароль')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 input-form">
                    <x-input-label for="password_confirmation" :value="__('Подтвердите пароль')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="buttonSubmit">
                    <x-primary-button >
                        {{ __('Обновите пароль') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
