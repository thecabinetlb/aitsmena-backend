<script setup>
defineProps({
  sectiontitle: String,
  sectiondescription: String,
  // data: Array
})
</script>
<template>
    <section id="employee-benefits" class="w-11/12 pt-40 mx-auto 2xl:w-8/12 lg:w-10/12">
      <h1 class="font-[500] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] uppercase mb-6">{{ sectiontitle }}</h1>
      <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify">{{ sectiondescription }}</p>
      <!-- <ul role="list" class="flex flex-col mt-10 flex-wrap gap-10 w-full h-full md:p-10 p-6 bg-gradient-to-r from-accent1/10 to-accent1/20 rounded-[16px] list-style-none">
        <li v-for="(item, key) in data" :key="key" class="flex items-center justify-between flex-grow w-full h-full gap-3 border-b lg:min-h-[108px] pb-3 max-sm:flex-wrap border-accent1"
        :class="{'lg:border-none' : key === 2}">
          <h1 class="sm:w-2/12 w-full font-[400] 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] text-accent1">0{{ item.id }}</h1>
          <div class="w-full lg:w-10/12">
              <!-- <h2 class="2xl:text-2xl lg:text-xl text-lg text-accent1 font-[400] mb-3">{{ item.title }}</h2>
              <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify">{{ item.title }}</p>          
          </div>
        </li>
      </ul> -->
      <div class="space-y-3 md:p-10 p-6 bg-gradient-to-r from-accent1/10 to-accent1/20 rounded-[16px] mt-10">
        <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify">At AITS, we’re committed to creating an environment where employees thrive both personally and professionally. Our inclusive culture celebrates diversity and collaboration, valuing every employee. We’re committed to aligning our mission and values with the work we do. Our purpose-driven approach ensures that every employee understands their impact and contributes meaningfully to our shared goals. Whether it’s serving our customers, driving innovation, or making a positive impact in the world, purpose guides our actions and inspires excellence.</p>
        <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify">Our attractive salary packages include performance-based annual increases, bonuses, and comprehensive benefits like health insurance, annual air tickets, and various paid leaves. Get access to training, professional development opportunities, and leadership programs for career growth, and enjoy flexible hours and remote work options to support work-life balance.</p>    
      </div>  
    </section>
</template>