<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'thumbnail',
        'title',
        'description',
        'slug',
        'summary',
    ];
    public function BlogPosts()
    {
        return $this->hasMany(BlogPost::class);
    }

    public function IndustryInsights()
    {
        return $this->hasMany(IndustryInsight::class);
    }
    public function SuccessStories()
    {
        return $this->hasMany(SuccessStory::class);
    }
    public function Whitepapers()
    {
        return $this->hasMany(Whitepaper::class);
    }
}
