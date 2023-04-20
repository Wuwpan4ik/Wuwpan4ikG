<?php

namespace App\Http\Controllers\Payer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayerController extends Controller
{
    public function Buy(Request $request)
    {
        $user_id = $request->user_id;
        $amount = $request->amount;

        Auth::user()->tokens += 1450 * $amount;
        Auth::user()->save();
    }
}
