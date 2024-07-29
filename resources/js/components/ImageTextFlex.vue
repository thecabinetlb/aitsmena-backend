<script setup>
defineProps({
    sectionid: String,
    sectiontitle: String,
    sectiondescription: String,
    data: Array
})
</script>
<template>
    <section :id="sectionid" class="w-11/12 px-6 pt-40 mx-auto 2xl:w-8/12 lg:w-10/12">
      <h1 class="font-[500] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] uppercase mb-6">{{ sectiontitle }}</h1>
      <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify">{{ sectiondescription }}</p>
      <div v-for="(item, key) in data" :key="key" class="flex flex-wrap items-center justify-center w-full gap-6 mt-10 lg:gap-3 lg:justify-between" 
      v-motion
        :initial="{
          opacity: 0,
          y: 100,
        }"
        :visibleOnce="{
          opacity: 1,
          y: 0,
          transition: {
            type: 'spring',
            stiffness: '100',
            delay: 100,
          },
        }">
        <img :src="item.image" :alt="item.title" width="391" height="290" center cover responsive loading="lazy"/>    
        <div class="w-full lg:w-6/12">
          <h2 class="font-[200] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] uppercase mb-6">{{ item.title }}</h2>
          <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify mb-6">{{ item.description }}</p>
          <!-- <a v-if="item.to" :id="'go-to-' + item.title + '-page'" :aria-label="'go to ' + item.title" :to="item.to" class="cursor-pointer px-4 py-3 w-fit block max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125">Browse</a> -->
        </div>
      </div>
    </section>
</template>