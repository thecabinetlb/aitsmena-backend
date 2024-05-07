<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\IndustryInsightsPost;
use App\Models\Industry;

class IndustryInsightsPostController extends Controller
{
    public function index()
    {
        return IndustryInsightsPost::all();
    }

    public function getByIndustry(Industry $industry)
    {
        $industryPosts = $industry->IndustryInsights()->get();
        return response()->json($industryPosts);    
    }

    public function getFeatured(IndustryInsightsPost $indusryinsight)
    {
        $featuredPosts = $indusryinsight->featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(IndustryInsightsPost $indusryinsight)
    {
        $arabicPosts = $indusryinsight->arabic()->get();
        return response()->json($arabicPosts);
    }
}
