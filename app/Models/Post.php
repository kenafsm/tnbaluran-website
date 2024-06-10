<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'post_image',
        'title',
        'slug',
        'nama_latin',
        'kepadatan',
        'sebaran',
        'status',
        'bentuk_daun',
        'morfologi',
        'anatomi',
        'kegunaan',
        'deskripsi'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
