<?php

namespace App\Http\Controllers\Promocode;

use App\Http\Controllers\Controller;
use App\Http\Requests\Promocode\UseRequest;
use App\Models\Promocode;
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
        dd($data);
        $count = DB::table('user_promocodes')->where('user_id', Auth::id())->where('promocode', $data->code)->get();
        if (count($count) === 0) {
            DB::table('user_promocodes')->create([
                'user_id' => Auth::id(),
                'promocode' => $data->code,
            ]);
            $promocode = Promocode::where('code', $data->code);
            $promocode->decrement('count');
            Auth::user()->tokens += $promocode->amount;
        }
    }
}
