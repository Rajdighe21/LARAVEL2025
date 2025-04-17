<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5000; $i++) {
            Post::create([
                'post_name' => fake()->word(),
                'description' => fake()->sentence(),
                'like' => rand(0, 1000),
                'dislike' => rand(0, 1000),                  // Random dislike count between 0 and 1000
                'comments' => fake()->sentence(),            // Random comment
                'users_id' => rand(1, 100),                   // Random user_id (assuming there are users with ids 1-100)
            ]);
        }
    }
}
