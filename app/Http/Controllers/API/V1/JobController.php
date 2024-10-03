<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return Job::all();
    }
    public function getFeatured()
    {
        $featuredPosts = Job::featured()->get();
        return response()->json($featuredPosts);
    }
}
