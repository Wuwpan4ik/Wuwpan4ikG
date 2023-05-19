<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\RegistrationMail;
use App\Models\UserModelSettings;
use App\Providers\RouteServiceProvider;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $settings = UserModelSettings::where('user_id', Auth::id())->take(1)->get()->toArray();

        if (!empty($settings)) {
            session()->put('settings', $settings[0]);
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function checkCode(Request $request)
    {
        Debugbar::log($request->code);
        Debugbar::log(Auth::user()->code);
        if ($request->code == Auth::user()->code) {
            Auth::user()->is_verified = 1;
            Auth::user()->save();
        }
        return redirect('/');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
