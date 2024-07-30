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
        $blogPosts = [
            [
                'id' => 1,
                'thumbnail' => url('/images/blog/thumbnails/two-colleagues-factory.webp'),
                'title' => 'The Impact of Industrial Digitization on Manufacturing Efficiency',
                'slug' => 'the-impact-of-industrial-digitization-on-manufacturing-efficiency',
                'summary' => 'Explore how industrial digitization is revolutionizing manufacturing processes and improving efficiency.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu justo id libero tincidunt accumsan eget sed purus. Nullam nec sodales tellus, vitae mattis lorem. Integer nec lacus nisl. Aenean pharetra suscipit nisi nec gravida. Nulla facilisi. Nullam vel sapien ut enim efficitur sollicitudin a id tortor. Sed in magna nisl. Nulla lobortis ligula sit amet commodo congue. Maecenas fringilla consectetur purus, eget pharetra odio. Vivamus vestibulum risus vitae eros laoreet vulputate. Nulla facilisi. Aenean consequat auctor dui, sit amet volutpat urna varius vitae. Sed ullamcorper, magna a ultrices ultrices, velit dui placerat urna, a ullamcorper lectus dolor quis nunc. Cras convallis ante eget velit malesuada lobortis.',
                'published_at' => '2024-04-26',
                'is_featured' => true,
                'is_arabic' => false,
            ],
            [
                'id' => 2,
                'thumbnail' => url('/images/blog/thumbnails/aerial-shot-downtown-los-angeles-night.webp'),
                'title' => 'Challenges and Opportunities in Industrial Digitization',
                'slug' => 'challenges-and-opportunities-in-industrial-digitization',
                'summary' => 'Discover the key challenges faced and opportunities unlocked by the adoption of industrial digitization technologies.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu justo id libero tincidunt accumsan eget sed purus. Nullam nec sodales tellus, vitae mattis lorem. Integer nec lacus nisl. Aenean pharetra suscipit nisi nec gravida. Nulla facilisi. Nullam vel sapien ut enim efficitur sollicitudin a id tortor. Sed in magna nisl. Nulla lobortis ligula sit amet commodo congue. Maecenas fringilla consectetur purus, eget pharetra odio. Vivamus vestibulum risus vitae eros laoreet vulputate. Nulla facilisi. Aenean consequat auctor dui, sit amet volutpat urna varius vitae. Sed ullamcorper, magna a ultrices ultrices, velit dui placerat urna, a ullamcorper lectus dolor quis nunc. Cras convallis ante eget velit malesuada lobortis.',
                'published_at' => '2024-04-25',
                'is_featured' => true,
                'is_arabic' => false,
            ],
            [
                'id' => 3,
                'thumbnail' => url('/images/blog/thumbnails/experienced-operator-hard-hat.webp'),
                'title' => 'Implementing Industrial IoT for Smart Factories',
                'slug' => 'implementing-industrial-iot-for-smart-factories',
                'summary' => 'Learn how Industrial Internet of Things (IIoT) is transforming traditional factories into smart, connected environments.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu justo id libero tincidunt accumsan eget sed purus. Nullam nec sodales tellus, vitae mattis lorem. Integer nec lacus nisl. Aenean pharetra suscipit nisi nec gravida. Nulla facilisi. Nullam vel sapien ut enim efficitur sollicitudin a id tortor. Sed in magna nisl. Nulla lobortis ligula sit amet commodo congue. Maecenas fringilla consectetur purus, eget pharetra odio. Vivamus vestibulum risus vitae eros laoreet vulputate. Nulla facilisi. Aenean consequat auctor dui, sit amet volutpat urna varius vitae. Sed ullamcorper, magna a ultrices ultrices, velit dui placerat urna, a ullamcorper lectus dolor quis nunc. Cras convallis ante eget velit malesuada lobortis.',
                'published_at' => '2024-04-24',
                'is_featured' => true,
                'is_arabic' => false,
            ],
            [
                'id' => 4,
                'thumbnail' => url('/images/blog/thumbnails/top-view-modern-operational-plant-producing-fiberglass-heavy-industry-machinery-metalworking-workshop-concept.webp'),
                'title' => 'Data Analytics in Industrial Digitization',
                'slug' => 'data-analytics-in-industrial-digitization',
                'summary' => 'Discover how data analytics is driving insights and optimizations in industrial processes through digitization initiatives.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu justo id libero tincidunt accumsan eget sed purus. Nullam nec sodales tellus, vitae mattis lorem. Integer nec lacus nisl. Aenean pharetra suscipit nisi nec gravida. Nulla facilisi. Nullam vel sapien ut enim efficitur sollicitudin a id tortor. Sed in magna nisl. Nulla lobortis ligula sit amet commodo congue. Maecenas fringilla consectetur purus, eget pharetra odio. Vivamus vestibulum risus vitae eros laoreet vulputate. Nulla facilisi. Aenean consequat auctor dui, sit amet volutpat urna varius vitae. Sed ullamcorper, magna a ultrices ultrices, velit dui placerat urna, a ullamcorper lectus dolor quis nunc. Cras convallis ante eget velit malesuada lobortis.',
                'published_at' => '2024-04-23',
                'is_featured' => true,
                'is_arabic' => false,
            ],
            [
                'id' => 5,
                'thumbnail' => url('/images/blog/thumbnails/woman-engineer-posing-with-workers-metalworking-factory.webp'),
                'title' => 'Cybersecurity Considerations for Industrial Digitization',
                'slug' => 'cybersecurity-considerations-for-industrial-digitization',
                'summary' => 'Explore the importance of cybersecurity measures in safeguarding industrial digitization systems and infrastructure.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu justo id libero tincidunt accumsan eget sed purus. Nullam nec sodales tellus, vitae mattis lorem. Integer nec lacus nisl. Aenean pharetra suscipit nisi nec gravida. Nulla facilisi. Nullam vel sapien ut enim efficitur sollicitudin a id tortor. Sed in magna nisl. Nulla lobortis ligula sit amet commodo congue. Maecenas fringilla consectetur purus, eget pharetra odio. Vivamus vestibulum risus vitae eros laoreet vulputate. Nulla facilisi. Aenean consequat auctor dui, sit amet volutpat urna varius vitae. Sed ullamcorper, magna a ultrices ultrices, velit dui placerat urna, a ullamcorper lectus dolor quis nunc. Cras convallis ante eget velit malesuada lobortis.',
                'published_at' => '2024-04-22',
                'is_featured' => true,
                'is_arabic' => false,
            ],
            [
                'id' => 6,
                'thumbnail' => url('/images/blog/thumbnails/two-women-medical-suits-working-conveyor.webp'),
                'title' => 'دور الذكاء الاصطناعي في أتمتة العمليات الصناعية',
                'slug' => 'دور-الذكاء-الاصطناعي-في-الأتمتة-الصناعية',
                'summary' => 'تعرف على كيفية تشغيل تقنيات الذكاء الاصطناعي للأتمتة والتحسين في العمليات الصناعية.',
                'body' => 'لوريم إيبسوم دولار سيت أميت، كونسيكتيتور أديبيسينغ إيليت. سيد إيو جوستو إيد ليبرو تينسيدنت أككومسان إيجيت سيد بوروس. نولام نيك سوداليس تيلوس، فيتاي ماتيس لوريم. إنتيجر نيك لاكوس نيسل. آينين فاريترا سوسيسيبت نيسي نيك جرافيدا. نولا فاسيليسي. نولام فيل سابيين أويت إينيم إفيسيتيور سوليكيتودين أ آيد تورتور. سيد إن ماجنا نيسل. نولا لوبيورتيس ليجولا سيت أميت كومودو كونجي. مايسيناس فرينجيلا كونسيكتيتور بوروس، إيجيت فاريترا أوديو. فيفاموس فيستيبولوم ريسوس فيتاي إيروس لوريت فولبوتات. نولا فاسيليسي. آينين كونسيكوات أوكتور دوي، سيت أميت فولبوتات أورنا فارياس فيتاي. سيد أولامكوربير، ماجنا أ أولتريسيس أولتريسيس، فيليت دوي بلاسيرات أورنا، أ أولامكوربير ليكتوس دولار كويز نونك. كراس كونفالليس أنت نيك فيليت ماليزوادا لوبيورتيس.',
                'published_at' => '2024-04-21',
                'is_featured' => false,
                'is_arabic' => true,
            ],
            [
                'id' => 7,
                'thumbnail' => url('/images/blog/thumbnails/abandoned-textile-factory-soviet-armenia.webp'),
                'title' => 'Digital Twin Technology in Industrial Applications',
                'slug' => 'digital-twin-technology-in-industrial-applications',
                'summary' => 'Discover how digital twin technology is enabling predictive maintenance and virtual simulations in industrial settings.',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu justo id libero tincidunt accumsan eget sed purus. Nullam nec sodales tellus, vitae mattis lorem. Integer nec lacus nisl. Aenean pharetra suscipit nisi nec gravida. Nulla facilisi. Nullam vel sapien ut enim efficitur sollicitudin a id tortor. Sed in magna nisl. Nulla lobortis ligula sit amet commodo congue. Maecenas fringilla consectetur purus, eget pharetra odio. Vivamus vestibulum risus vitae eros laoreet vulputate. Nulla facilisi. Aenean consequat auctor dui, sit amet volutpat urna varius vitae. Sed ullamcorper, magna a ultrices ultrices, velit dui placerat urna, a ullamcorper lectus dolor quis nunc. Cras convallis ante eget velit malesuada lobortis.',
                'published_at' => '2024-04-20',
                'is_featured' => false,
                'is_arabic' => false,
            ],
        ];

        DB::table('blog_posts')->insert($blogPosts);
    }
}
