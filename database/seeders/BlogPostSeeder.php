<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $posts = [
          [
              "id" => 1,
              "image" => url('/images/publications/blog/thumbnails/challenges-in-manufacturing-transformation.png'),
              "title" => "Top 5 Challenges in Manufacturing Operations Transformation",
              "slug" => "top-5-challenges-in-manufacturing-operations-transformation",
              "summary" => "To overcome the challenges manufacturers face during their digital transformation journey, there is a need for a comprehensive strategy, including interoperability solutions, cybersecurity measures, workforce training, and fostering a culture of innovation.",
              "content" => "",
              "published_at" => "September 15 2024",
              "is_featured" => true,
              "is_arabic" => false,
              "industry" => "Manufacturing",
              "publication_type" => "Blog post"
          ],
          [
              "id" => 2,
              "image" => url('/images/publications/blog/thumbnails/the-role-of-digital-twins.png'),
              "title" => "The Role of Digital Twins in Accelerating Manufacturing Efficiency",
              "slug" => "the-role-of-digital-twins-in-accelerating-manufacturing-efficiency",
              "summary" => "Digital twins enable simulations, testing, and optimization of factory operations, helping manufacturers achieve a 10-15% increase in production volume while cutting waste and emissions by up to 20%.",
              "content" => "",
              "published_at" => "September 22 2024",
              "is_featured" => true,
              "is_arabic" => false,
              "industry" => "Manufacturing",
              "publication_type" => "Blog post"
          ],
          [
              "id" => 3,
              "image" => url('/images/publications/blog/thumbnails/growing-challenges-modern-cities.webp'),
              "title" => "Building Smart Cities: Addressing the Challenges of Urban Living",
              "slug" => "growing-challenges-modern-cities",
              "summary" => "Explore the growing challenges facing modern cities, from aging infrastructure and budget constraints to climate change and rapid urbanization. Discover how digital transformation can reshape urban management and pave the way for sustainable, resilient cities.",
              "content" => "",
              "published_at" => "October 05 2024",
              "is_featured" => true,
              "is_arabic" => false,
              "industry" => "Smart Cities",
              "publication_type" => "Blog post"
          ]
      ];    

      DB::table('blog_posts')->insert($posts);
    }
}