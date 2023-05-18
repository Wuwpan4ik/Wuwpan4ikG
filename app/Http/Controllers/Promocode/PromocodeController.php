<?php

namespace App\Http\Controllers\Promocode;

use App\Http\Controllers\Controller;
use App\Http\Requests\Promocode\UseRequest;
use App\Models\Promocode;
use App\Models\UserPromocodes;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PromocodeController extends Controller
{
    public function store()
    {

    }

    public function use(UseRequest $request)
    {
        $data = $request->except('_method');
        $code = $data['promocode'];
        if (count(UserPromocodes::where('user_id', Auth::id())->where('promocode', $code)->get()) === 0) {
            $promocode = Promocode::where('code', $code)->first();
            if (is_null($promocode)) {
                return response()->json(['error' => '1'], 404);
            } else {
                $promocode->update([
                    'count' => $promocode->count - 1
                ]);
                UserPromocodes::create([
                    'user_id' => Auth::id(),
                    'promocode' => $code,
                ]);
                Auth::user()->tokens += $promocode->amount;
                Auth::user()->save();
            }
        } else {
            return response()->json(['error' => '2'], 404);
        }
        return true;
    }
}
