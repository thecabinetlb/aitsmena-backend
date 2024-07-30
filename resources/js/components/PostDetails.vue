<script setup>
defineProps({
    sectiontitle: String,
    item: Object,
})
</script>
<template>
    <section class="w-11/12 py-40 mx-auto 2xl:w-8/12 lg:w-10/12 text-accent2">
        <h1 class="text-accent1 font-[200] text-lg uppercase">{{sectiontitle}}</h1>
        <hr class="w-full h-4 mt-3 text-accent2"/>
        <div class="flex flex-col gap-3 mt-10">
            <div class="w-full h-40 bg-gradient-to-t from-[#1E364D] to-[#1E364D]/10 rounded-t-[16px]"></div>
            <!-- <img :src="image" :alt="title" width="391" height="290" center cover responsive loading="eager"/>-->
            <h1 class="font-[200] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px]">{{ item.title }}</h1>
            <h3 class="text-accent2 font-[200] max-sm:text-[14px]">{{ item.published_at }}</h3>
           {{ item.body }}
        </div>
    </section>
</template>