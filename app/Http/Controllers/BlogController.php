<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category', 'author')->filter()->latest()->get();
        $categories = Category::all();
        $authors = User::all();
        return view('blogs', [
            'blogs' => $blogs,
            'categories' => $categories,
            'authors' => $authors,
        ]);
    }

    public function find(Blog $blog)
    {
        return view('blog-detail', compact('blog'));
    }
}
