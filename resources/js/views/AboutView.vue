<script setup>
import InnerHero from '../components/InnerHero.vue';
import Partners from '../components/Partners.vue';
import InsideBody from '../components/InsideBody.vue';
import ImageTextFlexFilters from '../components/ImageTextFlexFilters.vue';

const csr = [
  {
    id: 1,
    image:'/images/insidepages/about/csr/gender_v1.webp',
    title: 'Diversity & Inclusion',
    description: "At AITS, we’re committed to creating an environment where employees thrive both personally and professionally. Our inclusive culture celebrates diversity and collaboration, valuing every employee and acknowledging that everyone, regardless of gender, age, or race has equal opportunities for growth and success.",
  },
  {
    id: 2,
    image:'/images/insidepages/about/csr/employee_v1.webp',
    title: 'Our People First',
    description: "Our purpose-driven approach ensures that every employee understands their impact and contributes meaningfully to our shared goals. Whether it’s serving our customers, driving innovation, or making a positive impact in the world, purpose guides our actions and inspires excellence. Our attractive salary packages include performance-based annual increases, bonuses, and comprehensive benefits like health insurance, annual air tickets, and various paid leaves. Access training, professional development opportunities, and leadership programs for career growth, and enjoy flexible hours and remote work options to support work-life balance."
  },
  {
    id: 3,
    image:'/images/insidepages/about/csr/improvement_v1.webp',
    title: 'Continuous Improvement',
    description: "We strive to promote an environment where everyone plays an active role in identifying and solving problems and proposing improvements. Our common mindsets and attitudes are detected throughout the organization by putting values and principles into practice."
  }
];

const partners = [
    { id: 1, title: 'AVEVA Select Gulf', logo: '/images/testimonies/partners/ic2.webp' },
    { id: 2, title: 'IC2', logo: '/images/testimonies/partners/aveva.webp' },
];
</script>
<template>
    <head>
      <title>AITS - About Us</title>
      <meta name="description" content="Powered by IBI, AITS plays a pivotal role in driving positive transformation across various industrial sectors. Explore our added value to diverse industries."/>
    </head>        
    <InnerHero pagebanner="public/images/banners/about.webp" isAbout="true" 
      pagedescription="Do you need a trusted software company and strategic ally in navigating the complex landscape of industrial automation? You’re in the right place. AITS is powered by IBI Holding, an investment company that fuels innovation in businesses across various industries and actively seeks partnerships with companies and individuals who are driving transformation in today’s dynamic market. AITS plays a pivotal role in driving positive transformation across various industrial sectors. Explore our added value to diverse industries, compelling employee propositions, and available job vacancies."/>
      <section class="relative">
          <Partners sectionid="sub-companies" sectiondescription="Our portfolio holds two distinguished business lines: AVEVA Select Gulf and IC2. Together, we offer a comprehensive suite of solutions designed to address the diverse challenges faced by today's industries." :data="partners"/>
          <ImageTextFlexFilters sectiontitle="Our Culture" :data="csr"
          sectiondescription="This planet has already been through enough. We are committed to making a positive impact on society and the environment. Our commitment to sustainability is guided by three core values:"/>
          <!-- <ImagesFlex sectiontitle="Meet The Team" :data="team"/> -->
          <InsideBody/>
      </section>
</template>