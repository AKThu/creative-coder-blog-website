<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category', 'author')->filter()->latest()->get();
        return view('blogs', compact('blogs'));
    }

    public function find(Blog $blog)
    {
        return view('blog-detail', compact('blog'));
    }
}
