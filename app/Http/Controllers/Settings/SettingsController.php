<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\UserModelSettings;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use function Pest\Laravel\json;

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

    public function store(Request $request)
    {
        $param = $request->except('_token');
        UserModelSettings::firstOrCreate($param);
        session()->put('settings', $param);
    }
}
