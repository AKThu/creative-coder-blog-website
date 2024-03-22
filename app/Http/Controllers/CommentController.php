<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
        request()->validate([
            'body' => ['required']
        ]);

        $comment = new Comment();
        $comment->body = request('body');
        $comment->blog_id = $blog->id;
        $comment->user_id = auth()->id();
        $comment->save();

        return back();
    }
}
