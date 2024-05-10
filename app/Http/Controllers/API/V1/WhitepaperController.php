<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Whitepaper;

class WhitepaperController extends Controller
{
    public function index()
    {
        return Whitepaper::all();
    }

    public function getGated(Whitepaper $whitepapers)
    {
        $featuredPosts = $whitepapers->gated()->get();
        return response()->json($featuredPosts);
    }

    public function getNotGated(Whitepaper $whitepapers)
    {
        $featuredPosts = $whitepapers->notGated()->get();
        return response()->json($featuredPosts);
    }

    public function getFeatured(Whitepaper $whitepapers)
    {
        $featuredPosts = $whitepapers->featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(Whitepaper $whitepapers)
    {
        $arabicPosts = $whitepapers->arabic()->get();
        return response()->json($arabicPosts);
    }
}
