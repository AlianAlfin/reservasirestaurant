<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CategoryBlog extends Model
{
    protected $fillable = [
        'title',
        'image',
        'preview',
        'tag',
        'desc',
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blogers');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    use HasFactory;
    use HasSlug;
}
