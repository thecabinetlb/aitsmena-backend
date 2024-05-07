<?php


namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BlogPost;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {
        return BlogPost::all();
    }

    public function getFeatured()
    {
        return BlogPost::featured()->get();
    }

    public function getArabic()
    {
        return BlogPost::arabic()->get();
    }
}
