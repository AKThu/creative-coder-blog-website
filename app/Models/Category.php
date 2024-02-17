<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function blogs()
    {
        return $this->hasMany(Blog::class); // hasMany: Category Model => category_id foreign key
    }
}
