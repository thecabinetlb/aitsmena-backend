<?php

namespace Database\Factories;

use App\Models\Industry;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Whitepaper>
 */
class WhitepaperFactory extends Factory
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
            'attachment' => $this->uploadFile(), // Upload a file and get its path
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'is_featured' => $this->faker->boolean,
            'is_arabic' => $this->faker->boolean,
            'is_gated' => $this->faker->boolean,
            'category_id' => 3, // Assuming 3 is the ID of the 'whitepapers' category,
            'industry_id' => $this->faker->randomElement($industryIds), // Randomly select an industry ID
        ];
    }
    protected function uploadFile()
    {
        $file = UploadedFile::fake()->create('document.pdf'); // Change 'document.pdf' to the desired file name
        $filePath = Storage::putFile('whitepapers/uploads', $file);
    
        return $filePath;
    }
}
