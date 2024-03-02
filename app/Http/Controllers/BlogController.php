<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category', 'author')->filter()->latest()->get();
        $categories = Category::all();
        return view('blogs', compact('blogs', 'categories'));
    }

    public function find(Blog $blog)
    {
        return view('blog-detail', compact('blog'));
    }
}
