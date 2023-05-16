<head>
    <title>
        Meta GPT - {{__('forgotPassword')}}
    </title>
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
</head>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="first-row">
            <img src="../assets/reg-mob.jpg" alt="" />
        </div>
        <!-- Name -->
        <div class="second-row">
            <div class="top-row">
                <h2 class="title">
                    {{ __("forgotPassword") }}
                </h2>

                <!-- Email Address -->
                <div class="mt-4 input-form">
                    <x-input-label for="email" :value="__('yourEmail')" />
                    <x-text-input id="email" placeholder="example@gmail.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <div class="desc-info">
                        Укажите email на который вы регистрировали аккунт, чтобы мы могли прислать на него письмо с новым паролем
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="buttonSubmit">
                    <x-primary-button>
                        {{ __('sendNewPass') }}
                    </x-primary-button>
                </div>
            </div>
            <div class="bottom-row">
                {{__("haveAccount")}} <a href='{{ route("login") }}'>{{__("logBtn")}}</a>
            </div>
    </form>
</x-guest-layout>
