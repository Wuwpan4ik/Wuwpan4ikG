<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchace extends Model
{
    protected $table = 'purchases';

    protected $guarded = false;

    public $timestamps = true;

    protected $fillable = [
        'id',
        'price',
        'tokens',
        'user_id'
    ];
}
