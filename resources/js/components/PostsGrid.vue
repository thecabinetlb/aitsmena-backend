<script setup>
defineProps({
    sectionid: String,
    sectiontitle: String,
    sectiondescription: String,
    data: Array
})
</script>


<template>
    <section :id="sectionid" class="flex flex-wrap items-center justify-between w-11/12 gap-6 pt-40 mx-auto lg:gap-3 2xl:w-8/12 lg:w-10/12">
        <div class="w-full lg:w-6/12">
            <h1 class="font-[200] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] uppercase mb-6">{{ sectiontitle }}</h1>
            <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify mb-6">{{ sectiondescription }}</p>
            <!-- <div class="cursor-pointer px-4 py-3 w-fit max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125 mt-auto mb-0"> Browse All </div>              -->
            <!-- <a id="'go-to-success-stories-page'" aria-label="go to success stories page" to="/industries/success-stories" class="block cursor-pointer px-4 py-3 w-fit max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125 mt-auto mb-0">Browse All</a> -->
        </div> 
        <div class="grid w-full h-full grid-cols-2 gap-3 lg:w-5/12">
            <div v-for="item in data" :key="key" class="xl:col-span-1 lg:col-span-2 md:col-span-1 col-span-2 w-full rounded-[16px] border-2 border-bg2">
                <div class="relative w-full h-32 bg-gradient-to-t from-[#1E364D] to-[#1E364D]/10 rounded-t-[16px]">
                    <!-- image should go here -->
                    <div class="absolute inset-3 w-1/4 h-fit bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] rounded-[8px]">
                        <img :src="item.logo" :alt="item.title" width="100%" height="100%" center cover responsive loading="lazy" class="mx-auto aspect-1.72/1 scale-125"/>    
                    </div>
                </div>
                <div class="p-3">
                    <h3 class="font-[200] max-sm:text-[14px] rounded-[16px] text-accent1 border-b-accent1 mb-3 underline">{{ item.industry }}</h3>
                    <h2 class="text-accent1 font-[400] sm:text-lg 2xl:min-h-[143px] min-h-[48px]">{{ item.title }}</h2>
                    <!-- <div class="hover:text-accent1 text-accent2 w-[34px] sm:h-[34px] cursor-pointer aspect-square grid mt-[6px] place-content-center ms-auto me-0 border-2 border-accent2 hover:border-accent1 text-xl rounded-full"> 🡥 </div>              -->
                    <!-- <a :id="'go-to-' + item.title + '-page'" :aria-label="'read more ' + item.title" :to="'/industries/success-stories/' + item.id" class="hover:text-accent1 text-accent2 w-[34px] h-[34px] cursor-pointer grid place-content-center ms-auto me-0 border-2 border-accent2 hover:border-accent1 text-xl rounded-full"> 🡥 </a>-->
                    <!-- <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify">{{ item.summary }}</p> -->
                </div>
            </div>
        </div>
    </section>
</template>