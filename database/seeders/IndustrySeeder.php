<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define your industries with defaults
        $industries = [
            [
                'title' => 'Food & Beverage',
                'slug' => 'food-and-beverage',
                'thumbnail' => 'food_thumbnail.jpg',
                'description' => 'Description for Food & Beverage industry.',
                'summary' => 'Summary for Food & Beverage industry.',
            ],
            [
                'title' => 'Water & Wastewater',
                'slug' => 'water-and-wastewater',
                'thumbnail' => 'water_thumbnail.jpg',
                'description' => 'Description for Water & Wastewater industry.',
                'summary' => 'Summary for Water & Wastewater industry.',
            ],
            [
                'title' => 'Smart Cities',
                'slug' => 'smart-cities',
                'thumbnail' => 'smart_cities_thumbnail.jpg',
                'description' => 'Description for Smart Cities industry.',
                'summary' => 'Summary for Smart Cities industry.',
            ],
            [
                'title' => 'Oil & Gas',
                'slug' => 'oil-and-gas',
                'thumbnail' => 'oil_gas_thumbnail.jpg',
                'description' => 'Description for Oil & Gas industry.',
                'summary' => 'Summary for Oil & Gas industry.',
            ],
            [
                'title' => 'Chemicals',
                'slug' => 'chemicals',
                'thumbnail' => 'chemicals_thumbnail.jpg',
                'description' => 'Description for Chemicals industry.',
                'summary' => 'Summary for Chemicals industry.',
            ],
            [
                'title' => 'Power & Utilities',
                'slug' => 'power-and-utilities',
                'thumbnail' => 'power_utilities_thumbnail.jpg',
                'description' => 'Description for Power & Utilities industry.',
                'summary' => 'Summary for Power & Utilities industry.',
            ],
            [
                'title' => 'Life Science',
                'slug' => 'life-science',
                'thumbnail' => 'life_science_thumbnail.jpg',
                'description' => 'Description for Life Science industry.',
                'summary' => 'Summary for Life Science industry.',
            ],
            [
                'title' => 'Metals, Mining, & Minerals',
                'slug' => 'metals-mining-and-minerals',
                'thumbnail' => 'metals_mining_minerals_thumbnail.jpg',
                'description' => 'Description for Metals, Mining, & Minerals industry.',
                'summary' => 'Summary for Metals, Mining, & Minerals industry.',
            ],
        ];

        // Insert industries into the database
        foreach ($industries as $industry) {
            Industry::create($industry);
        }
    }
}
