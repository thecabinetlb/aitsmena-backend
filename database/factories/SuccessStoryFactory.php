<?php

namespace Database\Factories;

use App\Models\Industry;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuccessStory>
 */
class SuccessStoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get all industry IDs
        $industryIds = Industry::pluck('id')->toArray();
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'summary' => $this->faker->paragraph,
            'tags' => ['tag1', 'tag2'], // Example array of tags
            'thumbnail' => $this->faker->imageUrl(),
            'logo' => $this->faker->imageUrl(100, 100), // Generate a business-related logo URL
            'body' => $this->faker->paragraphs(3, true),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_featured' => $this->faker->boolean,
            'is_arabic' => $this->faker->boolean,
            'category_id' => 4, // Assuming 4 is the ID of the 'sucess stories' category,
            'industry_id' => $this->faker->randomElement($industryIds), // Randomly select an industry ID
        ];
    }
}
