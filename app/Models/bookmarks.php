<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookmarks extends Model
{
    use HasFactory;
    protected $table = "bookmarks";
    protected $primaryKey = 'bookmark_id';
    protected $fillable = [
        'place_id',
        'user_id',
        'place_name',
        'place_image',
    ];
}
