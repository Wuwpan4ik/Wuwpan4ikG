<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\ChangeLangRequest;
use App\Http\Requests\Settings\ChangeThemeRequest;
use App\Http\Requests\Settings\StoreRequest;
use App\Models\UserModelSettings;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use function Pest\Laravel\json;

class SettingsController extends Controller
{
    public function changeLanguage(ChangeLangRequest $request)
    {
        $data = $request->validated();
        App::setLocale($data['lang']);
        session()->put('locale', $data['lang']);

        return redirect()->back();
    }

    public function changeTheme(ChangeThemeRequest $request)
    {
        $data = $request->validated();
        session()->put('theme', $data['theme']);

        return redirect()->back();
    }

    public function store(StoreRequest $request)
    {
//      Не доделал
        $param = $request->except('_token');
        UserModelSettings::firstOrCreate($param);
        session()->put('settings', $param);
    }
}
