<?php

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $blogs = Blog::all();
    return view('blogs', compact('blogs'));
});

// Route::get('/blogs/{blog:slug}', function (Blog $blog) {
//     return view('blog-detail', compact('blog'));
// });
Route::get('/blogs/{blog:slug}', function ($blog) {
    $blog = Blog::firstWhere('slug', $blog);
    return view('blog-detail', compact('blog'));
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $blogs = $category->blogs;
    return view('blogs', compact('blogs'));
});
