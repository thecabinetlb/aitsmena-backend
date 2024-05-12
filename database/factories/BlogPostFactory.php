<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(3),
            'thumbnail' => $this->faker->imageUrl(),
            'summary' => $this->faker->paragraph(5),
            'body' => $this->faker->paragraph(10),
            'published_at' => $this->faker->dateTimeBetween('-1 Week', '+1 week'),
            'is_arabic' => $this->faker->boolean(10),
            'is_featured' => $this->faker->boolean(10),
            'category_id' => 1, // Assuming 1 is the ID of the 'blog' category
        ];
    }
}
