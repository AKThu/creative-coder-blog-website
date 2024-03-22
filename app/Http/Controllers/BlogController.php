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
        $blogs = Blog::with('category', 'author')->filter()->latest()->paginate(9);
        return view('blogs', [
            'blogs' => $blogs,
        ]);
    }

    public function show(Blog $blog)
    {

        return view('blog-detail', compact('blog'));
    }
}
