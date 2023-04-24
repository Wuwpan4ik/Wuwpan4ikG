<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';

    protected $guarded = false;

    protected $fillable = [
        'title',
        'role',
        'folder_id',
        'user_id',
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:H:i',
    ];
}
