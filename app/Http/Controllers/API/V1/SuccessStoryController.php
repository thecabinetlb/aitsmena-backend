<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SuccessStory;
use App\Models\Industry;

class SuccessStoryController extends Controller
{
    public function index()
    {
        return SuccessStory::with(['industry', 'publicationtype'])->get();
    }

    public function getBySlug(SuccessStory $successstory)
    {
        $post = SuccessStory::where($successstory->slug)->first();
        return response()->json($post);
    }

    public function getByIndustry(Industry $industry)
    {
        $industryPosts = $industry->IndustryInsights()->get();
        return response()->json($industryPosts);    
    }

    public function getFeatured(SuccessStory $successstories)
    {
        $featuredPosts = $successstories->featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(SuccessStory $successstories)
    {
        $arabicPosts = $successstories->arabic()->get();
        return response()->json($arabicPosts);
    }
}
