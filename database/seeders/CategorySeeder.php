<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define your categories
        $categories = [
            ['title' => 'Blog', 'slug' => 'blog'],
            ['title' => 'Industry Insights', 'slug' => 'industry-insights'],
            ['title' => 'Whitepapers', 'slug' => 'whitepapers'],
            ['title' => 'Success Stories', 'slug' => 'success-stories'],
        ];

        // Insert categories into the database
        foreach ($categories as $category) {
            Category::create($category);
        }    
    }
}
