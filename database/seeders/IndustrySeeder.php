<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'id' => 1,
                'title' => 'Smart Cities',
                'slug' => 'smart-cities',
                'icon' => url('/images/industries/City.svg'),
                'body' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Food & Beverage',
                'slug' => 'food-and-beverage',
                'icon' => url('/images/industries/F&B.svg'),
                'body' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Manufacturing',
                'slug' => 'manufacturing',
                'icon' => url('/images/industries/Manufacturing.svg'),
                'body' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Energy',
                'slug' => 'energy',
                'icon' => url('/images/industries/Energy.svg'),
                'body' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Water & Wastewater',
                'slug' => 'water-and-wastewater',
                'icon' => url('/images/industries/Water.svg'),
                'body' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'Metals, Mining, & Minerals',
                'slug' => 'metals-mining-minerals',
                'icon' => url('/images/industries/Mining.svg'),
                'body' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('industries')->insert($industries);
    }
}
