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
        $promocode = Promocode::where('code', $code)->first();
        if (count(UserPromocodes::where('user_id', Auth::id())->where('promocode', $code)->where('is_partner', 0)->get()) === 0 || (count(UserPromocodes::where('user_id', Auth::id())->where('is_partner', 1)->get()) === 0 )) {
            if (is_null($promocode)) {
                return response()->json(['error' => '1'], 404);
            } else {
                $is_partner = 0;
                if (isset($promocode->partner_id)) {
                    $is_partner = 1;
                }

                $promocode->update([
                    'count' => $promocode->count - 1

                ]);
                $data = [
                    'user_id' => Auth::id(),
                    'promocode' => $code,
                    'is_partner' => $is_partner
                ];
                Debugbar::log($data);
                UserPromocodes::create();
                Auth::user()->tokens += $promocode->amount;
                Auth::user()->save();
            }
        } else {
            return response()->json(['error' => '2'], 404);
        }
        return true;
    }
}
