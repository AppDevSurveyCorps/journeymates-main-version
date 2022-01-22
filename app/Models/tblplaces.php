<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class tblplaces extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $table = "tblplaces";
    protected $primaryKey = 'place_id';
    protected $fillable = [
        'place_name',
        'place_description',
        'place_ratings',
        'place_image',
        'page_viewer_count',
        'updated_at',
        'created_at',
    ];


}