<script setup>
// import { RouterLink } from 'vue-router';

defineProps({
    category: String,
    sectiontitle: String,
    sectiondescription: String,
    data: Array
})
</script>

<template>
    <section class="w-11/12 py-40 mx-auto 2xl:w-8/12 lg:w-10/12">
        <h1 class="font-[500] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] uppercase mb-6">{{ sectiontitle }}</h1>
        <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify">{{ sectiondescription }}</p>
        <ul role="list" class="grid grid-cols-3 gap-6 mt-10 lg:gap-3 list-style-none">
            <li v-for="(item, key) in data" :key="key" class="flex-grow lg:col-span-1 ms:col-span-2 col-span-3 w-full relative group sm:min-h-[135px] rounded-[16px] border-2 border-bg2">
                <img :src="item.thumbnail" :alt="item.title" center cover responsive loading="eager" class="aspect-video bg-gradient-to-t from-[#1E364D] to-[#1E364D]/10 rounded-t-[16px]"/>
                <div class="flex flex-col gap-3 p-6 lg:gap-6">
                    <h3 class="text-accent2 font-[200] max-sm:text-[14px]">{{ item.date }}</h3>
                    <h2 class="text-accent1 font-[400] sm:text-lg">{{ item.title }}</h2>
                    <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify">{{ item.summary }}</p>
                    <a :id="'go-to-' + item.title + '-page'" :aria-label="'read more about' + item.title" :href="'/resources/' + category + '/' + item.slug" class="cursor-pointer px-4 py-3 mt-auto mb-0 ms-auto me-0 w-fit block max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125">Read More</a>
                </div>
            </li>
        </ul>
    </section>
</template>

