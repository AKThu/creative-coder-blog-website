<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::factory(3)
            ->sequence(
                ['name' => 'frontend', 'slug' => 'frontend'],
                ['name' => 'backend', 'slug' => 'backend'],
                ['name' => 'database', 'slug' => 'database'],
            )
            ->create();
        $authors = User::factory(5)->create();
        foreach ($categories as $category) {
            foreach ($authors as $author)
                Blog::factory(3)
                    ->create([
                        'category_id' => $category->id,
                        'user_id' => $author->id
                    ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
