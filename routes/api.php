<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// index is a mothed that will be in the controller file and it will return a list of all articles in a JSON format
Route::get('/articles', [ArticleController::class, 'index']);

// show is a mothed that will be in the controller file and it will retrieves and returns details of a single article based on its ID in a JSON format.
Route::get('/article/{id}', [ArticleController::class, 'show']);
