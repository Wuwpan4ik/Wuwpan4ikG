<?php

namespace App\Http\Controllers\Payer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payer\BuyRequest;
use App\Mail\PurchaseMail;
use App\Mail\RegistrationMail;
use App\Models\BuyHistory;
use App\Models\Purchace;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PayerController extends Controller
{
    public function Buy(BuyRequest $request)
    {
        $data = $request->validated();
        $user_id = $data['user_id'];
        $price = $data['amount'];
        $tokens = 1450 * $price;

        User::where('id', $user_id)->increment('tokens', $tokens);
        Purchace::create([
            'price' => $price,
            'tokens' => $tokens,
            'user_id' => $user_id
        ]);
        BuyHistory::create([
            'user_id' => $data['user_id'],
            'description' => "Купил токенов на $price",
            'tokens' => $tokens,
            'is_free' => 0
        ]);
        Mail::to(Auth::user()->email)->send(new PurchaseMail($tokens, $price));
    }

    public function store_test(Request $request)
    {

    }
}
