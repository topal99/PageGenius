<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // <-- Impor kelas HasMany

class Template extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'view_path',
        'thumbnail_path',
        'category',
    ];

    /**
     * Definisikan relasi bahwa sebuah Template memiliki banyak Pages.
     */
    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }
}