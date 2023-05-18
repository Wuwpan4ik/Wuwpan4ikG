<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{

    protected $table = 'promocodes';

    protected $guarded = false;

    protected $primaryKey = 'code';

    protected $fillable = [
        'author_id',
        'code',
        'amount',
        'count'
    ];

}
