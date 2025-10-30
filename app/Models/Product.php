<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'price',
        'description',
        'extra_fields',
        'image',
        'order'
    ];

    protected $casts = [
        'extra_fields' => 'array',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(255);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
