<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\V1\ContactController;
use App\Http\Controllers\API\V1\BlogPostController;
use App\Http\Controllers\API\V1\IndustryInsightsPostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('contact_submissions', [ContactController::class, 'store']);
Route::get('contact', [ContactController::class, 'index']);

Route::get('blog-posts', [BlogPostController::class, 'index']);
Route::get('blog-posts/featured', 'API\V1\BlogPostController@getFeatured');
Route::get('blog-posts/arabic', 'API\V1\BlogPostController@getArabic');

Route::get('industry-insights', [IndustryInsightsPostController::class, 'index']);
Route::get('blog-posts/featured', 'API\V1\IndustryInsightsPostController@getFeatured');
Route::get('blog-posts/arabic', 'API\V1\IndustryInsightsPostController@getArabic');