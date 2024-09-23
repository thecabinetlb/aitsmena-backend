<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class Whitepaper extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'tags',
        'image',
        'published_at',
        'is_featured',
        'is_arabic',
        'publication_type_id',
        'industry_id',
        'attachment',
        'is_gated'
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
    
    public function scopeGated($query)
    {
        return $query->where('is_gated', true);
    }
    
    public function scopeNotGated($query)
    {
        return $query->where('is_gated', false);
    }

    public function getReadingTime()
    {
        $mins = round(str_word_count($this->body) / 250);

        return ($mins < 1) ? 1 : $mins;
    }
}
