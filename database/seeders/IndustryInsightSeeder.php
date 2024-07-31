<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustryInsightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industryinsightsPosts = [
            [
                'id' => 1,
                'thumbnail' => url('/storage/industry-insights/thumbnails/logistics-means-transport-together-with-technological-futuristic-holograms.webp'),
                'title' => 'The Rise of Smart Cities and Their Impact on Urban Living',
                'slug' => 'the-rise-of-smart-cities-and-their-impact-on-urban-living',
                'summary' => 'Smart cities are enhancing urban living through advanced technologies and efficient city operations.',
                'body' => 'Smart cities leverage advanced technologies to optimize city operations, enhance the quality of life for residents, and drive sustainability. These cities use real-time data for better resource allocation and service delivery. From smart infrastructure management to intelligent transportation systems, smart cities are at the forefront of urban innovation.',
                'published_at' => '2024-05-10',
                'is_featured' => true,
                'is_arabic' => false,
                'category_id' => 2,
                'industry_id' => 1, // Smart Cities
            ],
            [
                'id' => 2,
                'thumbnail' => url('/storage/industry-insights/thumbnails/barman-using-coffee-machine.webp'),
                'title' => 'Ensuring Quality and Compliance in the Food & Beverage Industry',
                'slug' => 'ensuring-quality-and-compliance-in-the-food-and-beverage-industry',
                'summary' => 'Discover how innovative software solutions enhance quality control and compliance in the food & beverage sector.',
                'body' => 'In the food & beverage industry, ensuring product quality and compliance with regulatory standards is crucial. Advanced software solutions streamline production processes, enhance quality control, and ensure traceability. These systems help companies meet consumer demands and regulatory requirements while minimizing waste and optimizing supply chain management.',
                'published_at' => '2024-06-15',
                'is_featured' => true,
                'is_arabic' => false,
                'category_id' => 2,
                'industry_id' => 2, // Food & Beverage
            ],
            [
                'id' => 3,
                'thumbnail' => url('/storage/industry-insights/thumbnails/cutting-metal-with-plasma-equipment.webp'),
                'title' => 'تعزيز كفاءة التصنيع بالتقنيات الحديثة',
                'slug' => 'تعزيز-كفاءة-التصنيع-بالتقنيات-الحديثة',
                'summary' => 'استكشاف كيفية تحسين الكفاءة والإنتاجية في صناعة التصنيع باستخدام التقنيات الحديثة.',
                'body' => 'تستخدم صناعة التصنيع التقنيات الحديثة لتحسين الكفاءة، وتقليل التكاليف، والحفاظ على معايير الجودة. أنظمة إدارة العمليات التصنيعية (MOM) تحسن عمليات الإنتاج وتقلل من فترات التوقف. تحليلات البيانات في الوقت الفعلي وتقنيات الأتمتة تسهل العمليات، وتزيد الإنتاج، وتعزز الربحية.',
                'published_at' => '2024-03-20',
                'is_featured' => false,
                'is_arabic' => true,
                'category_id' => 2,
                'industry_id' => 3, // التصنيع
            ],            
            [
                'id' => 4,
                'thumbnail' => url('/storage/industry-insights/thumbnails/extracting-machines-oil.webp'),
                'title' => 'Digital Transformation in the Oil & Gas Sector',
                'slug' => 'digital-transformation-in-the-oil-and-gas-sector',
                'summary' => 'Understand how digital solutions are optimizing operations and mitigating risks in the oil & gas industry.',
                'body' => 'The oil & gas industry operates in a complex environment with volatile market conditions and stringent regulatory requirements. Tailored software solutions address unique challenges, from upstream exploration to downstream refining. Digital solutions enable data-driven decision-making, asset optimization, and predictive maintenance, enhancing operational efficiency and profitability.',
                'published_at' => '2024-02-28',
                'is_featured' => true,
                'is_arabic' => false,
                'category_id' => 2,
                'industry_id' => 4, // Oil & Gas
            ],
            [
                'id' => 5,
                'thumbnail' => url('/storage/industry-insights/thumbnails/cutting-metal-with-plasma-equipment.webp'),
                'title' => 'Sustainable Energy Solutions for a Resilient Future',
                'slug' => 'sustainable-energy-solutions-for-a-resilient-future',
                'summary' => 'Explore how advanced systems are driving sustainability and efficiency in the energy sector.',
                'body' => 'As the demand for energy rises, companies are under pressure to improve sustainability, reliability, and cost-effectiveness. Advanced systems such as SCADA control and optimize energy generation and distribution. Leveraging advanced analytics and IoT technologies, energy providers enhance grid stability, reduce energy losses, and integrate renewable energy sources.',
                'published_at' => '2024-07-01',
                'is_featured' => true,
                'is_arabic' => false,
                'category_id' => 2,
                'industry_id' => 5, // Energy
            ],
            [
                'id' => 6,
                'thumbnail' => url('/storage/industry-insights/thumbnails/sun-setting-silhouette-electricity-pylons.webp'),
                'title' => 'Optimizing Utility Operations with Advanced Technologies',
                'slug' => 'optimizing-utility-operations-with-advanced-technologies',
                'summary' => 'Discover how utilities can optimize asset management and enhance grid reliability with digital solutions.',
                'body' => 'Utilities companies face challenges such as aging infrastructure and increasing demand. Advanced software solutions enable companies to optimize asset management and enhance grid reliability. IoT sensors, predictive analytics, and machine learning algorithms detect and prevent equipment failures, optimize energy distribution, and enhance customer satisfaction.',
                'published_at' => '2024-01-18',
                'is_featured' => false,
                'is_arabic' => false,
                'category_id' => 2,
                'industry_id' => 6, // Utilities
            ],
            [
                'id' => 7,
                'thumbnail' => url('/storage/industry-insights/thumbnails/view-ialomitei-cave-bucegi-mountains-romania.webp'),
                'title' => 'Advancements in the Metal, Mining & Minerals Industry',
                'slug' => 'advancements-in-the-metal-mining-and-minerals-industry',
                'summary' => 'Learn about the latest advancements that help tackle challenges in the metal, mining, and minerals industry.',
                'body' => 'The metal, mining, and minerals industry faces challenges such as geopolitical risks and labor shortages. Advanced digital threads and connected worker solutions enhance waste management, optimize mineral recovery, and reduce costs. These technologies drive revenue growth and competitiveness in the industry.',
                'published_at' => '2024-03-05',
                'is_featured' => true,
                'is_arabic' => false,
                'category_id' => 2,
                'industry_id' => 7, // Metal, Mining & Minerals
            ]
        ];
        DB::table('industry_insights')->insert($industryinsightsPosts);
    }
}
