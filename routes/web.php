<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $blogs = Blog::all();
    return view('blogs', compact('blogs'));
});

Route::get('/blogs/{slug}', function ($slug) {
    $blog = Blog::firstWhere('slug', $slug);

    return view('blog-detail', compact('blog'));
});
