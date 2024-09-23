<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Industry;
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
                'image' => url('/images/industries/City.svg'),
                'description' => 'Smart Cities are at the forefront of innovation to enhance the quality of life for residents and optimize city operations. AITS is pioneering the transformation of urban landscapes by providing advanced software solutions and digital services that integrate information and communication technology (ICT) to drive efficiency, sustainability, and citizen-centric services. From smart infrastructure management to intelligent transportation systems and data-driven decision-making, our solutions empower cities to harness the power of real-time data for better resource allocation and enhanced service delivery.',
                'summary' => 'Smart Cities are enhancing urban living through advanced technologies and efficient city operations.',
            ],
            [
                'id' => 2,
                'title' => 'Food & Beverage',
                'slug' => 'food-and-beverage',
                'image' => url('/images/industries/F&B.svg'),
                'description' => 'It is crucial for the F&B industry to ensure product quality, safety, and compliance while meeting consumer demands and regulatory requirements. With our innovative software solutions and digital services, companies can better streamline production processes, enhance quality control, and ensure regulatory compliance. We apply Manufacturing Execution Systems (MES) that track the transformation of raw materials to finished goods and provide end-to-end visibility and traceability. Similar solutions also optimize supply chain management, minimize waste, and deliver safe products to consumers.',
                'summary' => 'Discover how innovative software solutions enhance quality control and compliance in the food & beverage sector.',
            ],
            [
                'id' => 3,
                'title' => 'Manufacturing',
                'slug' => 'manufacturing',
                'image' => url('/images/industries/manufactoring.svg'),
                'description' => 'Manufacturers today face increasing pressure to improve efficiency, reduce costs, and maintain quality standards. The solution? Systems such as Manufacturing Operations Management (MOM) optimize production processes, minimize downtime, and enhance overall productivity. By leveraging real-time data analytics and automation technologies, manufacturers can streamline operations, increase output, and stay ahead of market demands. This ultimately drives profitability and competitiveness in the industry.',
                'summary' => 'Explore how modern technologies are improving efficiency and productivity in the manufacturing industry.',
            ],
            [
                'id' => 4,
                'title' => 'Oil & Gas',
                'slug' => 'oil-and-gas',
                'image' => url('/images/industries/Gas.svg'),
                'description' => 'The oil and gas industry operates in a complex environment characterized by volatile market conditions, stringent regulatory requirements, and evolving technological challenges. Get tailored software solutions and digital services designed to address unique needs, from upstream exploration and production to downstream refining and distribution. Do you want to enhance operational efficiency, mitigate risks, and maximize profitability in a rapidly changing industry landscape? AITS helps enable data-driven decision-making, asset optimization, and predictive maintenance.',
                'summary' => 'Understand how digital solutions are optimizing operations and mitigating risks in the oil & gas industry.',
            ],
            [
                'id' => 5,
                'title' => 'Energy',
                'slug' => 'energy',
                'image' => url('/images/industries/energy.svg'),
                'description' => 'As the demand for energy continues to rise, energy companies are under pressure to improve sustainability, reliability, and cost-effectiveness in their operations. With advanced systems such as SCADA, energy providers can control and optimize energy generation, distribution, and management processes. AITS helps energy companies enhance grid stability, reduce energy losses, and integrate renewable energy sources. How? By leveraging advanced analytics, predictive modeling, and IoT technologies. This ultimately attains a more sustainable and resilient energy future.',
                'summary' => 'Explore how advanced systems are driving sustainability and efficiency in the energy sector.',
            ],
            [
                'id' => 6,
                'title' => 'Utilities',
                'slug' => 'utilities',
                'image' => url('/images/industries/utilities.svg'),
                'description' => 'Utilities companies face challenges such as aging infrastructure, increasing demand for services, and regulatory compliance requirements. Our software solutions and digital services for utilities enable companies to optimize asset management, improve resource allocation, and enhance grid reliability. IoT sensors, predictive analytics, and machine learning algorithms will aid utilities companies detect and prevent equipment failures, optimize energy distribution, and enhance customer satisfaction in an evolving energy landscape.',
                'summary' => 'Discover how utilities can optimize asset management and enhance grid reliability with digital solutions.',
            ],
            [
                'id' => 7,
                'title' => 'Metals, Mining, & Minerals',
                'slug' => 'metals-mining-and-minerals',
                'image' => url('/images/industries/Mining.svg'),
                'description' => 'The Metal, Mining and Minerals industry is a challenging one, especially in today’s decade where companies are experiencing potential for increased geopolitical risks, years of underinvestment, acute labor shortages, and much more.Our advanced digital threads and connected workers help in bettering waste management, optimize mineral recovery, reduce costs, and increase revenue.',
                'summary' => 'Learn about the latest advancements that help tackle challenges in the metal, mining, and minerals industry.',
            ],
        ];

        DB::table('industries')->insert($industries);

    }
}
