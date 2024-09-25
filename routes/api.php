<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\V1\ContactController;
use App\Http\Controllers\API\V1\BlogPostController;
use App\Http\Controllers\API\V1\IndustryInsightController;
use App\Http\Controllers\API\V1\NewsletterController;
use App\Http\Controllers\API\V1\SuccessStoryController;
use App\Http\Controllers\API\V1\WhitepaperController;
use App\Http\Controllers\PressReleaseController;
use Illuminate\Support\Facades\Mail;

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

Route::get('/test-email-basic', function () {
    try {
        Mail::raw('This is a test email.', function ($message) {
            $message->to('najat.h@cyberg-ae.com')
                    ->subject('Zoho SMTP Testing');;
        });

        return 'Basic email sent successfully.';
    } catch (\Exception $e) {
        return 'Failed to send email: ' . $e->getMessage();
    }
});
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
Route::get('featured-industry-insights', [IndustryInsightController::class, 'getFeatured']);
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

Route::get('press-releases', [PressReleaseController::class, 'index']);
Route::get('press-releases/{slug}', [PressReleaseController::class, 'getBySlug']);
Route::get('press-releases/featured', [PressReleaseController::class, 'getFeatured']);
Route::get('press-releases/arabic', [PressReleaseController::class, 'getArabic']);

Route::post('newsletter_subscriptions', [NewsletterController::class, 'store']);
Route::get('newsletter', [NewsletterController::class, 'index']);
