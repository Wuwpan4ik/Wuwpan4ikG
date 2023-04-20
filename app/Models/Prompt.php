<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    protected $table = 'prompts';

    protected $fillable = [
        'user_id',
        'folder_id',
        'description',
        'is_main'
    ];

    protected $guarded = false;
}
