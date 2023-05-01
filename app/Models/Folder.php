<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $table = 'folders';

    protected $guarded = false;

    protected $fillable = [
        'id',
        'title'
    ];

    protected $primaryKey = 'id';

    public function children()
    {
        return $this->hasMany(Chat::class, 'folder_id', 'id');
    }

    public function getFolders()
    {
        return Folder::with('children')->get();
    }
}
