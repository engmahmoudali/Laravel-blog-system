<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $slug = fake()->unique()->slug();
        $title = implode(' ', explode('-', $slug));
        return [
            'title' => $title,
            'slug' => $slug,
            'content' => fake()->realText(200),
            'user_id' => fake()->randomElement(User::all())['id'],
        ];
    }
}
