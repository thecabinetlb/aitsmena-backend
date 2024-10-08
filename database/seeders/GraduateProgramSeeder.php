<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraduateProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                "id" => 1,
                "title" => "Graduate Engineer",
                "slug" => "graduate-engineer",
                "location" => "Al Khobar, Eastern, Saudi Arabia",
                "type" => "Full-Time",
                "summary" => "Are you a fresh graduate with a passion for software engineering? Our Graduate Program offers a unique opportunity to build your career with us!",
                "body" => "to be replaced",
                "published_at" => Carbon::parse('October 4 2024'),
                "is_featured" => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];    
  
        DB::table('graduate_programs')->insert($jobs);    
    }
}
