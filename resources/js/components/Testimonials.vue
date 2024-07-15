<script setup>
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination } from 'vue3-carousel'
import client1 from '/images/testimonies/client1.svg'
import { ref } from 'vue'

const myCarousel = ref(null)

const testimoniesslides = [
    { id: 1, title: 'We are in a good company', ceo:'Samir A.', content: '"AITS proved worthy of our trust with their up-to-date smart solutions. Tripoli’s wastewater problem wouldn’t have been solved without them."', icon: client1 },
    { id: 2, title: 'We are in a good company', ceo:'Malak H.', content: '"Our company witnessed tangible growth in profit after collaborating with AITS. Their services were just perfect and precisely what we needed."', icon: client1 },
];
</script>


<style scoped>
.carousel__slide{
  display: block !important;
} 
.mask {
  -webkit-mask-image: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 15%, rgba(0, 0, 0, 1) 85%, rgba(0, 0, 0, 0) 100%);
  mask-image: linear-gradient(to left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 15%, rgba(0, 0, 0, 1) 85%, rgba(0, 0, 0, 0) 100%);
  mask-size: cover; 
  mask-position: center;
}
</style>

<template>
  <section id="testimonials" class="relative pt-40 mx-auto">
    <div class="w-11/12 mx-auto 2xl:w-8/12 lg:w-10/12">
      <h1 class="text-accent1 font-[200] text-lg uppercase">What Our Clients Think</h1>
      <hr class="w-full h-4 mt-3 text-accent2"/>  
    </div>
    <div class="relative w-11/12 h-full mx-auto mt-10 2xl:w-8/12 lg:w-10/12">
        <carousel
          ref="myCarousel"
          :wrapAround="true"          
          :items-to-show="1" 
          :autoplay="6000" 
          :transition="2000"
          class="relative w-11/12 h-full mx-auto mask">
          <slide v-for="(slide, index) in testimoniesslides" :key="index" class="relative flex items-center justify-center w-full h-full py-10">
            <blockquote class="max-w-screen-lg mx-auto text-center 2xl:max-w-screen-md md:max-w-screen-sm">
              <p class="tracking-wide hyphens-auto text-accent2 text-3xl font-[200] max-sm:text-[14px] text-jusify" style="text-align-last: center">{{ slide.content }}</p>
            </blockquote>
            <figcaption class="flex items-center justify-center gap-2 mt-6">
              <cite class="text-accent2 font-[400]">{{ slide.ceo }}</cite>
              <img :src="slide.icon" :alt="slide.title" width="40" height="40" class="rounded-[8px]" loading="lazy" />
            </figcaption>
          </slide>    
          <template #addons>
              <Pagination />
          </template>            
        </carousel>
      <!-- Navigation arrows -->
      <div class="absolute left-0 items-center justify-between hidden w-full h-full px-6 mx-auto md:flex -top-10 z-2">
        <button aria-label="go to the next testimony" @click="myCarousel.prev()" class="text-accent2 hover:text-accent1 text-2xl w-[44px] h-[44px] cursor-pointer aspect-square grid place-content-center border-2 border-accent2 hover:border-accent1 rounded-full"> 🡠 </button>            
        <button aria-label="go to the prev testimony" @click="myCarousel.next()" class="text-accent2 hover:text-accent1 text-2xl w-[44px] h-[44px] cursor-pointer aspect-square grid place-content-center border-2 border-accent2 hover:border-accent1 rounded-full"> 🡢 </button>
      </div> 
    </div>
  </section>
</template>
