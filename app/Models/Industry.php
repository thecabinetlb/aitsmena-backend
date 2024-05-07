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
    public function IndustryInsights()
    {
        return $this->hasMany(IndustryInsightsPost::class);
    }
}
