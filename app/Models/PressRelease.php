<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PressRelease extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'tags',
        'image',
        'body',
        'published_at',
        'is_featured',
        'is_arabic',
        'publication_type_id',
        'industry_id'
    ];

    protected $casts = [
        'tags' => 'array',
        'published_at' => 'datetime',
    ];

    public function publicationtype()
    {
        return $this->belongsTo(PublicationType::class);
    }

    public function industry()
    {
        return $this->belongsTo(industry::class);
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

        return ($isUrl) ? $this->image : Storage::disk('public')->Storage::url($this->image);
    }
}
