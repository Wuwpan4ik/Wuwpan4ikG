<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyHistory extends Model
{
    protected $table = 'buy_histories';

    protected $guarded = false;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'description',
        'tokens',
        'created_at'
    ];
}
