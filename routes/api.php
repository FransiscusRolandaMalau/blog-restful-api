<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\CommentApiController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\TagApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Support\Facades\Route;

Route::get('author/{id}', [UserApiController::class, 'show']);
Route::get('author/{id}/posts', [UserApiController::class, 'posts']);
Route::get('author/{id}/comments', [UserApiController::class, 'comments']);

Route::get('categories', [CategoryApiController::class, 'index']);
Route::get('categories/{id}/posts', [CategoryApiController::class, 'posts']);

Route::get('posts', [PostApiController::class, 'index']);
Route::get('posts/{id}', [PostApiController::class, 'show']);
Route::get('posts/{id}/comments', [PostApiController::class, 'comments']);

Route::get('tags/{id}/posts', [TagApiController::class, 'posts']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('comments/posts', [CommentApiController::class, 'store']);
});
