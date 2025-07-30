<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    // TAMBAHKAN PROPERTI INI
    protected $fillable = [
        'name',
        'description',
        'view_path',
        'thumbnail_path',
        'category',
    ];
}