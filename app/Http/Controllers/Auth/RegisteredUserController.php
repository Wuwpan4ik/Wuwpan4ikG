<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationMail;
use App\Models\BuyHistory;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        if (App::getLocale() == 'ru') {
            $message = [
                'email.required' => 'Такая почта уже занята',
                'email.email' => 'Здесь должна быть почта!',
                'email.unique' => 'Такая почта уже зарегестрирована',
                'name.required' => 'Обязательное поле',
                'name.string' => 'В поле Имя должна быть строка',
                'name.max' => 'Максимальная длина - 255 символов',
                'password.required' => 'Обязательное поле',
                'password.confirmed' => 'Пароли должны совпадать'
            ];
        } else if(App::getLocale() == 'en') {
            $message = [
                'email.required' => 'This mail is already taken',
                'email.email' => 'There should be mail here!',
                'email.unique' => 'This email is already registered.',
                'name.required' => 'Obligatory field',
                'name.string' => 'The Name field should contain the string',
                'name.max' => 'Maximum length - 255 characters',
                'password.required' => 'Obligatory field',
                'password.confirmed' => 'Passwords must match'
            ];
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], $message);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'code' => random_int(100000, 999999),
            'partner_id' => session()->get('partner_id'),
        ]);

        Debugbar::log($user);

        event(new Registered($user));

        Auth::login($user);

        $tokens = 5000;
        if (session()->get('partner_id')) {
            $tokens += 5000;
        }

        BuyHistory::create([
            'user_id' => Auth::id(),
            'description' => "Получил бесплатные токены",
            'tokens' => $tokens
        ]);
        if (session()->get('partner_id')) {
            try {
                $partner = User::where('id', session()->get('partner_id'))->first();
                $partner->update([
                    'tokens' => $partner->tokens + 10000,
                ]);
                $partner->save();
            } catch (\Exception $exception) {
            }

        }

//      Сделать уведомление партнёрам тут.

        Mail::to(Auth::user()->email)->send(new RegistrationMail());

        return redirect(RouteServiceProvider::HOME);
    }
}
