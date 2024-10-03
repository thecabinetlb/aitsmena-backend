<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'body',
        'published_at',
        'is_featured',
        'location',
        'type',
    ];
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    } 
}
