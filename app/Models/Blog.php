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
}
