<?php


namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\IndustryInsightsPost;
use App\Models\Industry;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class IndustryInsightsPostController extends Controller
{
    public function index()
    {
        return IndustryInsightsPost::all();
    }

    public function getByIndustry()
    {
        return Industry::IndustryInsights()->get();    
    }

    public function getFeatured()
    {
        return IndustryInsightsPost::featured()->get();
    }

    public function getArabic()
    {
        return IndustryInsightsPost::arabic()->get();
    }
}
