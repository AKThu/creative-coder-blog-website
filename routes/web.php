<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'find']);

// Route::get('/categories/{category:slug}', function (Category $category) { 
//     $blogs = $category->blogs->load('category', 'author');
//     return view('blogs', compact('blogs'));
// });

// view->slug
// => Category $category (return Category obj that has slug)
// => $category->blogs (return Blog obj that has Category obj)
// => ->load('category', 'author') (load Category obj and Author obj related to the current Blog obj and add it to the Blog itself)


// Route::get('/authors/{author:name}', function (User $author) {
//     $blogs = $author->blogs->load('category', 'author');
//     return view('blogs', compact('blogs'));
// });
