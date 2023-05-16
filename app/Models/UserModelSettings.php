<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserModelSettings extends Model
{
    protected $table = 'user_model_settings';

    protected $guarded = false;
}
