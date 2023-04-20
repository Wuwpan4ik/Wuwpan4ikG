<?php

namespace App\Http\Controllers\Payer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PayerController extends Controller
{
    public function Buy(Request $request)
    {
        $user_id = $request->user_id;
        $amount = $request->amount;

        User::where('id', $user_id)->increment('tokens', 1450 * $amount);
    }
}
