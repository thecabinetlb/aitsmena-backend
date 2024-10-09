<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\PressRelease;
use Illuminate\Http\Request;

class PressReleaseController extends Controller
{
    public function index()
    {
        return PressRelease::with(['industry', 'publicationtype'])->get();
    }

    public function getBySlug($slug)
    {
        $post = PressRelease::where('slug', $slug)->get();
        return response()->json($post);
    }

    public function getFeatured()
    {
        $featuredPosts = PressRelease::featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(PressRelease $blogpost)
    {
        $arabicPosts = $blogpost->arabic()->get();
        return response()->json($arabicPosts);
    }
}
