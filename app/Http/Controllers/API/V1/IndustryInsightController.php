<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\IndustryInsight;
use App\Models\Industry;

class IndustryInsightController extends Controller
{
    public function index()
    {
        return IndustryInsight::all();
    }

    public function getBySlug(IndustryInsight $indusryinsight)
    {
        $post = IndustryInsight::where($indusryinsight->slug)->first();
        return response()->json($post);
    }
    
    public function getByIndustry(Industry $industry)
    {
        $industryPosts = $industry->IndustryInsights()->get();
        return response()->json($industryPosts);    
    }

    public function getFeatured(IndustryInsight $indusryinsight)
    {
        $featuredPosts = $indusryinsight->featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(IndustryInsight $indusryinsight)
    {
        $arabicPosts = $indusryinsight->arabic()->get();
        return response()->json($arabicPosts);
    }
}
