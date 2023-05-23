<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $guarded = false;

    protected $fillable = [
        'title',
        'title_en',
        'id',
        'description',
        'description_en',
        'role',
        'role_en'
    ];
}
