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

    public function getBySlug($slug)
    {
        $post = IndustryInsight::where('slug', $slug)->get();
        return response()->json($post);
    }

    public function getByIndustry(Industry $industry)
    {
        $industryPosts = $industry->IndustryInsights()->get();
        return response()->json($industryPosts);    
    }

    public function getFeatured()
    {
        $featuredPosts = IndustryInsight::featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(IndustryInsight $indusryinsight)
    {
        $arabicPosts = $indusryinsight->arabic()->get();
        return response()->json($arabicPosts);
    }
}
