<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'slug',
        'summary',
        'tags',
        'thumbnail',
        'body',
        'published_at',
        'is_featured',
        'is_arabic',
        'category_id'
    ];

    protected $casts = [
        'tags' => 'array',
        'published_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function scopeTimePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
    
    public function scopeArabic($query)
    {
        return $query->where('is_arabic', true);
    }

    public function scopeSearch($query, string $search = '')
    {
        $query->where('title', 'like', "%{$search}%");
    }

    public function getReadingTime()
    {
        $mins = round(str_word_count($this->body) / 250);

        return ($mins < 1) ? 1 : $mins;
    }

    public function getThumbnailUrl()
    {
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }
}
