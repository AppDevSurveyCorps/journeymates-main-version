<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class admin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "admin";
    protected $primaryKey = 'admin_id';
    protected $fillable = [
        'admin_username',
        'admin_password',
        'updationDate',
    ];


}