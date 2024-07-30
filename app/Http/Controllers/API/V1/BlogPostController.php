<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller; 
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        return BlogPost::all();
    }

    public function getBySlug($slug)
    {
        $post = BlogPost::where('slug', $slug)->get();
        return response()->json($post);
    }
    

    public function getFeatured()
    {
        $featuredPosts = BlogPost::featured()->get();
        return response()->json($featuredPosts);
    }

    public function getArabic(BlogPost $blogpost)
    {
        $arabicPosts = $blogpost->arabic()->get();
        return response()->json($arabicPosts);
    }
}
