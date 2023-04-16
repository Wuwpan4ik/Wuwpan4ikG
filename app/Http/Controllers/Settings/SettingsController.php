<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SettingsController extends Controller
{
    public function changeLanguage(Request $request)
    {

        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }

    public function changeTheme(Request $request)
    {
        session()->put('theme', $request->theme);

        return redirect()->back();
    }
}
