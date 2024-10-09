<?php

namespace Database\Seeders;

use App\Models\PublicationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [ 'id' => 1, 'title' => 'Blog Posts', 'slug' => 'blog'],
            [ 'id' => 2, 'title' => 'Industry Insights', 'slug' => 'industry-insights'],
            [ 'id' => 3, 'title' => 'Whitepapers', 'slug' => 'whitepapers'],
            [ 'id' => 4, 'title' => 'Success Stories', 'slug' => 'success-stories'],
            [ 'id' => 5, 'title' => 'Press Releases', 'slug' => 'press-releases'],
        ];

        DB::table('publication_types')->insert($types);
  
    }
}
