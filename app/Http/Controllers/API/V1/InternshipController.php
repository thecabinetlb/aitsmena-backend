<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        return Internship::all();
    }
    public function getFeatured()
    {
        $featuredPosts = Internship::featured()->get();
        return response()->json($featuredPosts);
    }
}
