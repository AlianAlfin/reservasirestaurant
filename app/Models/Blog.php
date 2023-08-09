<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'tag',
        'second',
        'last',
    ];

    public function category_blogs()
    {
        return $this->belongsToMany(CategoryBlog::class, 'blogers');
    }

    use HasFactory;
}
