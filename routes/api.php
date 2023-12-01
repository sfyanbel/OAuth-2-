<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\PostController;

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


// view user data
Route::group(['middleware' => 'OAuth',
              'prefix' => 'auth'], 
              function ($router) {
        Route::post('me', [AuthController::class, 'me']);
});


Route::middleware(['OAuth','adsViewUser'])->group(function () {
    // Routes accessible only by users with the 'adsViewUser' role
    Route::post('/allAds', [AdsController::class, 'allAds']);

});


Route::middleware(['OAuth','postViewUser'])->group(function () {
    // Routes accessible only by users with the 'postViewUser' role
    Route::post('/allPosts', [PostController::class, 'allPosts']);

});

