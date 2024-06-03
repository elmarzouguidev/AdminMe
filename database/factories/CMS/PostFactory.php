<?php

namespace Database\Factories\CMS;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CMS\Post>
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
        return [
            'title' => fake()->sentence(8),
            'excerpt' => fake()->text(),
            'content' => fake()->paragraphs(100, true),
            'published_at' => now()->addDays(rand(2, 15)),
            'active' => rand(0, 1),
        ];
    }
}
