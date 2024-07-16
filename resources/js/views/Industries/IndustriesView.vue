<script setup>
import InnerHero from '../../components/InnerHero.vue';
import IndustriesGrid from '../../components/IndustriesGrid.vue'
import InsideBody from '../../components/InsideBody.vue'

const industries = [
{ id: 1, title: 'Smart Cities', description:"Smart Cities are at the forefront of innovation to enhance the quality of life for residents and optimize city operations. AITS is pioneering the transformation of urban landscapes by providing advanced software solutions and digital services that integrate information and communication technology (ICT) to drive efficiency, sustainability, and citizen-centric services. From smart infrastructure management to intelligent transportation systems and data-driven decision-making, our solutions empower cities to harness the power of real-time data for better resource allocation and enhanced service delivery.", 
icon:'/images/industries/City.svg' },
{ id: 2, title: 'Food & Beverage', description:"It is crucial for the F&B industry to ensure product quality, safety, and compliance while meeting consumer demands and regulatory requirements. With our innovative software solutions and digital services, companies can better streamline production processes, enhance quality control, and ensure regulatory compliance. We apply Manufacturing Execution Systems (MES) that track the transformation of raw materials to finished goods and provide end-to-end visibility and traceability. Similar solutions also optimize supply chain management, minimize waste, and deliver safe products to consumers.", 
icon:'/images/industries/F&B.svg' },
{ id: 3, title: 'Manufacturing', description:"Manufacturers today face increasing pressure to improve efficiency, reduce costs, and maintain quality standards. The solution? Systems such as Manufacturing Operations Management (MOM) optimize production processes, minimize downtime, and enhance overall productivity. By leveraging real-time data analytics and automation technologies, manufacturers can streamline operations, increase output, and stay ahead of market demands. This ultimately drives profitability and competitiveness in the industry.", 
icon:'/images/industries/manufactoring.svg' },
{ id: 4, title: 'Oil & Gas', description:"The oil and gas industry operates in a complex environment characterized by volatile market conditions, stringent regulatory requirements, and evolving technological challenges. Get tailored software solutions and digital services designed to address unique needs, from upstream exploration and production to downstream refining and distribution. Do you want to enhance operational efficiency, mitigate risks, and maximize profitability in a rapidly changing industry landscape? AITS helps enable data-driven decision-making, asset optimization, and predictive maintenance.", 
icon:'/images/industries/Gas.svg' },
{ id: 5, title: 'Energy', description:"As the demand for energy continues to rise, energy companies are under pressure to improve sustainability, reliability, and cost-effectiveness in their operations. With advanced systems such as SCADA, energy providers can control and optimize energy generation, distribution, and management processes. AITS helps energy companies enhance grid stability, reduce energy losses, and integrate renewable energy sources. How? By leveraging advanced analytics, predictive modeling, and IoT technologies. This ultimately attains a more sustainable and resilient energy future.", 
icon:'/images/industries/utilities.svg' },
{ id: 6, title: 'Utilities', description:"Utilities companies face challenges such as aging infrastructure, increasing demand for services, and regulatory compliance requirements. Our software solutions and digital services for utilities enable companies to optimize asset management, improve resource allocation, and enhance grid reliability. IoT sensors, predictive analytics, and machine learning algorithms will aid utilities companies detect and prevent equipment failures, optimize energy distribution, and enhance customer satisfaction in an evolving energy landscape.", 
icon:'/images/industries/energy.svg' },
{ id: 7, title: 'Metal, Mining, & Minerals', description:"The Metal, Mining and Minerals industry is a challenging one, especially in today’s decade where companies are experiencing potential for increased geopolitical risks, years of underinvestment, acute labor shortages, and much more.Our advanced digital threads and connected workers help in bettering waste management, optimize mineral recovery, reduce costs, and increase revenue.", 
icon:'/images/industries/Mining.svg' },
];


</script>
<template>
    <head>
      <title>AITS - The Various Industries We Serve</title>
      <meta name="description" content="We provide solutions to Smart Cities, F&B, Manufacturing, Oil&Gas, Energy, and Utilities. Interested? Let's get started!"/>
    </head>        
    <InnerHero pagebanner="public/images/banners/industries.webp" pagetitle="Industries"
        pagedescription="From Smart Cities to Food and Beverage, Energy, Transportation, and much more, AITS offers tailored industrial software solutions and digital services to meet your unique needs in various industries. Discover how our industry-specific solutions and services can drive success for your business."/>
        <section class="relative">
            <IndustriesGrid :data="industries"/>
            <!-- <Testimonials />
            <PostsGrid sectionid="success-stories" sectiontitle="Success Stories" sectiondescription="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip." :data='successStories'/> -->
            <InsideBody/>
        </section>
</template>