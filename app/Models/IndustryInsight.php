<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class IndustryInsight extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'tags',
        'cover',
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
        return $this->belongsTo(PublicationType::class, 'publication_type_id');;
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
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
}

