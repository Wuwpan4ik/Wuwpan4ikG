<?php

namespace App\Http\Controllers\Promocode;

use App\Http\Controllers\Controller;
use App\Http\Requests\Promocode\UseRequest;
use App\Models\Promocode;
use App\Models\UserPromocodes;
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
        $data = $request->validated();
        $code = $data['promocode'];
        $count = count(UserPromocodes::where('user_id', Auth::id())->where('promocode', $code)->get());
        if ($count === 0) {
            $promocode = Promocode::where('code', $code)->first();
            if ($promocode->count <= 0) {
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
        return response()->json(['error' => '3'], 404);
    }
}
