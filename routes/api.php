<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Category
Route::get('category',[\App\Http\Controllers\API\CategoryController::class,'index']);
Route::get('category_id={id}',[\App\Http\Controllers\API\CategoryController::class,'show']);
//Posts
Route::get('posts',[\App\Http\Controllers\API\PostsController::class,'index']);
Route::get('posts_slug={slug}',[\App\Http\Controllers\API\PostsController::class,'show']);
