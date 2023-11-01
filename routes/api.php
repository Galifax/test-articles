<?php

use App\Http\Controllers\Api\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function() {
   Route::prefix('articles')->group(function() {
       Route::get('/', [ArticleController::class, 'index']);
       Route::get('{url}', [ArticleController::class, 'show']);
       Route::post('{id}/switch-active', [ArticleController::class, 'switchStatus']);
   });
});
