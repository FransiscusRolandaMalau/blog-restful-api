<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $category = Category::find(3);
    // return $category->posts;

    $comment = Comment::find(152);
    // return $comment->author;
    // return $comment->post;

    $post = Post::find(152);
    // return $post->category;
    // return $post->author;
    // return $post->images;
    // return $post->comments;
    // return $post->tags;

    $tag = Tag::find(5);
    // return $tag->posts;

    $author = User::find(88);
    // return $author->posts;
    return $author->comments;
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
