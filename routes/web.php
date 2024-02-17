<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $blogs = Blog::all();
    return view('blogs', compact('blogs'));
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blog-detail', compact('blog'));
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $blogs = $category->blogs;
    return view('blogs', compact('blogs'));
});

Route::get('/authors/{user:name}', function (User $user) {
    $blogs = $user->blogs;
    return view('blogs', compact('blogs'));
});
