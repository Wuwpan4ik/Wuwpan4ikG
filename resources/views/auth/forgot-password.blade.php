<head>
    <title>
        Meta GPT - {{__('forgotPassword')}}
    </title>
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
</head>

<x-guest-layout>
    <!-- Session Status -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="first-row">
            <img src="{{ asset('assets/reg-mob.jpg') }}" alt="" />
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
                    <input id="email" value="@isset (Auth::user()->email) {{Auth::user()->email}}  @endisset" placeholder="example@gmail.com" class="block mt-1 w-full" type="email" name="email" required autofocus>
                    <div class="desc-info">
                        Укажите email на который вы регистрировали аккунт, чтобы мы могли прислать на него письмо с новым паролем
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="buttonSubmit">
                    <x-primary-button>
                        {{ __('sendNewPass') }}
                    </x-primary-button>
                </div>
            </div>
            <div class="bottom-row">
                {{__("haveAccount")}} <a href='{{ route("login") }}'>{{__("logBtn")}}</a>
            </div>
        </div>
    </form>
</x-guest-layout>
