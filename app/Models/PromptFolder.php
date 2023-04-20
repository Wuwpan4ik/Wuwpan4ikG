<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromptFolder extends Model
{
    protected $table = 'prompt_folders';

    protected $fillable = [
        'id',
        'title'
    ];

    protected $guarded = false;
}
