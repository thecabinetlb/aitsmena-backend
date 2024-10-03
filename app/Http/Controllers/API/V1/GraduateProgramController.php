<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\GraduateProgram;
use Illuminate\Http\Request;

class GraduateProgramController extends Controller
{
    public function index()
    {
        return GraduateProgram::all();
    }
    public function getFeatured()
    {
        $featuredPosts = GraduateProgram::featured()->get();
        return response()->json($featuredPosts);
    }
}
