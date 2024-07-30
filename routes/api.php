<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\V1\ContactController;
use App\Http\Controllers\API\V1\BlogPostController;
use App\Http\Controllers\API\V1\IndustryInsightController;
use App\Http\Controllers\API\V1\SuccessStoryController;
use App\Http\Controllers\API\V1\WhitepaperController;
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
Route::get('blog-posts/{slug}', [BlogPostController::class, 'getBySlug']);
Route::get('featured-blog-posts', [BlogPostController::class, 'getFeatured']);
Route::get('blog-posts/arabic', [BlogPostController::class, 'getArabic']);

Route::get('industry-insights', [IndustryInsightController::class, 'index']);
Route::get('industry-insights/{slug}', [IndustryInsightController::class, 'getBySlug']);
Route::get('industry-insights/featured', [IndustryInsightController::class, 'getFeatured']);
Route::get('industry-insights/arabic', [IndustryInsightController::class, 'getArabic']);

Route::get('success-stories', [SuccessStoryController::class, 'index']);
Route::get('success-stories/{slug}', [SuccessStoryController::class, 'getBySlug']);
Route::get('success-stories/featured', [SuccessStoryController::class, 'getFeatured']);
Route::get('success-stories/arabic', [SuccessStoryController::class, 'getArabic']);

Route::get('whitepapers', [WhitepaperController::class, 'index']);
Route::get('whitepapers/{slug}', [WhitepaperController::class, 'getBySlug']);
Route::get('whitepapers/featured', [WhitepaperController::class, 'getFeatured']);
Route::get('whitepapers/arabic', [WhitepaperController::class, 'getArabic']);
Route::get('whitepapers/gated', [WhitepaperController::class, 'getGated']);
Route::get('whitepapers/not-gated', [WhitepaperController::class, 'getNoteGated']);

Route::get('/recaptcha-config', function () {
    return response()->json([
        'v2SiteKey' => env('RECAPTCHAV2_SITEKEY'),
    ]);
});