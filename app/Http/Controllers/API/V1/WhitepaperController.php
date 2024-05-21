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

    public function getBySlug(Whitepaper $whitepaper)
    {
        $post = Whitepaper::where($whitepaper->slug)->first();
        return response()->json($post);
    }

    public function getGated(Whitepaper $whitepaper)
    {
        $featuredPosts = $whitepaper->gated()->get();
        return response()->json($featuredPosts);
    }

    public function getNotGated(Whitepaper $whitepaper)
    {
        $featuredPosts = $whitepaper->notGated()->get();
        return response()->json($featuredPosts);
    }

    public function getFeatured(Whitepaper $whitepaper)
    {
        $featuredPosts = $whitepaper->featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(Whitepaper $whitepaper)
    {
        $arabicPosts = $whitepaper->arabic()->get();
        return response()->json($arabicPosts);
    }
}
