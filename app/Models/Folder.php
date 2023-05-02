<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Folder extends Model
{
    protected $table = 'folders';

    protected $guarded = false;

    protected $fillable = [
        'id',
        'title',
        'user_id'
    ];

    protected $primaryKey = 'id';

    public function children()
    {
        return $this->hasMany(Chat::class, 'folder_id', 'id');
    }

    public function getFolders()
    {
        return Folder::where('user_id', Auth::id())->with('children')->get();
    }
}
