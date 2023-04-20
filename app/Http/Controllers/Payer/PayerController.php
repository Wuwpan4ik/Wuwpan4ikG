<?php

namespace App\Http\Controllers\Payer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payer\BuyRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayerController extends Controller
{
    public function Buy(BuyRequest $request)
    {
        $data = $request->validated();
        $user_id = $data['user_id'];
        $amount = $data['amount'];

        User::where('id', $user_id)->increment('tokens', 1450 * $amount);
    }
}