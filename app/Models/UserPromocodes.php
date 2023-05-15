<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPromocodes extends Model
{
    protected $guarded = false;
    protected $table = 'user_promocodes';

    protected $fillable = [
        'user_id',
        'promocode',

    ];
}
