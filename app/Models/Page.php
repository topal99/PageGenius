<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'template_id',
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'content' => 'array', // Ini penting agar kolom JSON otomatis di-handle
    ];

    /**
     * Mendapatkan template yang digunakan oleh halaman ini.
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }
}