<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'intro', 'body'];
    // protected $guarded = ['id'];

    // a blog belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class); // belongsTo: category method => category_id foreign key
    }

    // a blog belongs to a user
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); // belongsTo: user method => user_id foreign key
    }

    // filter method
    public function scopeFilter($query)
    {
        // filter by search
        if ($search = request('search')) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%")
                    ->orWhere('intro', 'LIKE', "%$search%")
                    ->orWhere('body', 'LIKE', "%$search%");
            });
        }
        // filter by category
        if ($slug = request('category')) {
            $query->whereHas('category', function ($query) use ($slug) {
                $query->where('slug', $slug);
            });
        }
        // filter by author
        if ($username = request('author')) {
            $query->whereHas('author', function ($query) use ($username) {
                $query->where('username', $username);
            });
        }
    }
}
