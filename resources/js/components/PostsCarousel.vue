<script setup>


import { Carousel, Slide, Pagination } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

import { onMounted } from 'vue';

defineProps({
  sectionid: String,
  sectiontitle: String,
  sectiondescription: String,
  data: Array,
  hyphen: Boolean
})
// Calculate the number of items to show based on screen width
const getItemsToShow = () => {
  if (typeof window !== 'undefined') {
  const screenWidth = window.innerWidth;
  if (screenWidth >= 1280) {
    return 2; // Desktop
  } else if (screenWidth >= 1024) {
    return 1.50; // smaller  Desktop
  } else if (screenWidth >= 768) {
    return 2.25; // Tablet
  } else if (screenWidth >= 640) {
    return 2.50; // big mobile
  } else if (screenWidth < 640) {
    return 1; // Mobile
  }
  }};

onMounted(() => {
    window.addEventListener('resize', () => {
      getItemsToShow()
    });
});

</script>


<template>
<section :id="sectionid" class="relative flex flex-wrap items-center w-full gap-6 pt-40 lg:gap-3 lg:justify-between">
  <div class="lg:w-6/12 w-11/12 2xl:ps-[15.666667%] lg:ps-[8.333333%] lg:pe-8 mx-auto h-full">
    <h1 class="font-[200] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] uppercase mb-6">{{ sectiontitle }}</h1>
    <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify mb-6" :class="{'hyphens-auto' : hyphen}">{{ sectiondescription }}</p>
    <!-- <div class="cursor-pointer px-4 py-3 w-fit max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125 mt-auto mb-0"> Browse All </div>              -->
    <a id="'go-to-blogs-page'" aria-label="go to blog page" :href="'/resources/' + sectionid" class="block cursor-pointer px-4 py-3 w-fit max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125 mt-auto mb-0">Browse All</a>
  </div>
    <div class="relative w-full mx-auto lg:w-5/12">
      <Carousel
        :items-to-show="getItemsToShow()"
        :wrap-around="true"
        class="w-full h-full maskleft">
          <Slide v-for="(item, key) in data" :key="key" class="rounded-[16px] md:aspect-square border-2 border-bg2 my-10">
            <img :src="item.thumbnail" :alt="item.title" center cover responsive loading="eager" class="aspect-video bg-gradient-to-t from-[#1E364D] to-[#1E364D]/10 rounded-t-[16px]"/>
            <div class="flex flex-col gap-3 p-6 lg:gap-6">
              <!-- <h3 class="text-accent2 font-[200] max-sm:text-[14px]">{{ item.published_at }}</h3> -->
              <h2 class="text-accent1 font-[400] sm:text-lg sm:min-h-[56px] min-h-[56px]">{{ item.title }}</h2>
              <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify sm:min-h-[72px] min-h-[63px]">{{ item.summary }}</p>
              <!-- <div class="hover:text-accent1 text-accent2 w-[34px] sm:h-[34px] cursor-pointer aspect-square grid mt-[6px] place-content-center ms-auto me-0 border-2 border-accent2 hover:border-accent1 text-xl rounded-full"> 🡥 </div> -->
              <!-- <a :id="'go-to-' + item.title + '-page'" :aria-label="'read more ' + item.title" :href="'/resources/' + sectionid + '/' + item.id" class="hover:text-accent1 text-accent2 w-[34px] h-[34px] cursor-pointer grid place-content-center ms-auto me-0 border-2 border-accent2 hover:border-accent1 text-xl rounded-full"> 🡥 </a>  -->
            </div>
          </Slide>
          <template #addons>
            <Pagination/>              
          </template>
      </Carousel>
    </div>
</section>
</template>

<style scoped>
.carousel__slide{
  display: block !important;
  text-align: left !important;
  margin: 10px !important;  
}
.maskleft {
  -webkit-mask-image: linear-gradient(to left, rgba(0, 0, 0, 1) 80%, rgba(0, 0, 0, 0));
  mask-image: linear-gradient(to left, rgba(0, 0, 0, 1) 80%, rgba(0, 0, 0, 0));
  mask-size: cover; 
  mask-position: center;
}


@media (max-width: 640px) {
  .carousel__slide {
    width: 97% !important;
    margin: 5px !important;  
  }
}
</style>