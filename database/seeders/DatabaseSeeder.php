<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mahmoud Ali',
            'email' => 'admin@admin.com'
        ]);

        // Create a random posts for database testing.
        Post::factory()->count(20)->create();

        // Create a random comments for database testing.
        Comment::factory()->count(120)->create();

    }
}
