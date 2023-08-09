<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    protected $fillable = [
        'title',
        'image',
        'slug',
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blogers');
    }
    use HasFactory;
}
