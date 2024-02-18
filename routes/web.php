<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $blogs = Blog::with('category', 'author')->get()->sortBy('title');
    return view('blogs', compact('blogs'));
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blog-detail', compact('blog'));
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $blogs = $category->blogs->load('category', 'author');
    return view('blogs', compact('blogs'));
});

Route::get('/authors/{author:name}', function (User $author) {
    $blogs = $author->blogs->load('category', 'author');
    return view('blogs', compact('blogs'));
});
