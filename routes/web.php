<?php

use App\Models\BlogPost;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/preview-email', function () {
    $data = [
        'email' => 'example@example.com',
        'name' => 'John Doe',
        'content' => 'This is a test message.'
    ];

    return view('emails.contact', ['data' => $data]);
});
