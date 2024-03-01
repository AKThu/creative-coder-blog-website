<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        // getting blogs
        $blogs = Blog::with('category', 'author');

        // filter by category
        if ($slug = request('category')) {
            $blogs = $blogs->whereHas('category', function ($category) use ($slug) {
                return $category->where('slug', $slug);
            });
        }

        // filter by author
        if ($username = request('author')) {
            $blogs = $blogs->whereHas('author', function ($user) use ($username) {
                return $user->where('username', $username);
            });
        }

        // search feature
        if ($search = request('search')) {
            $blogs = $blogs->where(function ($query) use ($search) {
                $query = $query->where('title', 'LIKE', "%$search%")
                    ->orwhere('slug', 'LIKE', "%$search%")
                    ->orwhere('intro', 'LIKE', "%$search%")
                    ->orwhere('body', 'LIKE', "%$search%");
            });
        }

        $blogs = $blogs->get()->sortBy('title');

        // getting categories
        $categories = Category::all();

        return view('blogs', compact('blogs', 'categories'));
    }

    public function find(Blog $blog)
    {
        $randomBlogs = Blog::inRandomOrder()->take(3)->get();
        return view('blog-detail', compact('blog', 'randomBlogs'));
    }
}
