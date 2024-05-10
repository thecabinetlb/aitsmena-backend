<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SuccessStoriesPost;
use App\Models\Industry;

class SuccessStoriesPostController extends Controller
{
    public function index()
    {
        return SuccessStoriesPost::all();
    }

    public function getByIndustry(Industry $industry)
    {
        $industryPosts = $industry->IndustryInsights()->get();
        return response()->json($industryPosts);    
    }

    public function getFeatured(SuccessStoriesPost $successstories)
    {
        $featuredPosts = $successstories->featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(SuccessStoriesPost $successstories)
    {
        $arabicPosts = $successstories->arabic()->get();
        return response()->json($arabicPosts);
    }
}
