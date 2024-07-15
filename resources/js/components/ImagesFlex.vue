<script setup>
defineProps({
    sectiontitle: String,
    data: Array
})
</script>
<template>
    <section class="w-11/12 h-full pt-40 mx-auto 2xl:w-8/12 lg:w-10/12">
        <h1 class="text-accent1 font-[200] text-lg uppercase"> {{ sectiontitle }}</h1>
        <hr class="w-full h-4 mt-3 text-accent2"/>
        <ul role="list" class="flex flex-wrap mt-10 justify-center lg;justify-between md:gap-3 gap-6 list-style-none">
            <li v-for="(item, key) in data" :key="key" class="relative lg:w-[32%] md:w-[49%] w-full flex-grow rounded-[16px]">
                <img :src="item.image" :alt="item.title" width="100%" height="100%" center cover responsive loading="lazy" class="mx-auto rounded-[16px] aspect-0.88/1"/>    
                <div class="w-full h-full absolute inset-0 bg-gradient-to-t from-bg/75 to-bg/10 rounded-[16px]"/>
                <div class="p-6 w-10/12 h-fit absolute left-1/2 transform -translate-x-1/2 bottom-[8.333333%] rounded-[16px] bg-gradient-to-br from-accent1/10 to-accent1/30 backdrop-blur-[16px]">
                    <h2 class="2xl:text-2xl lg:text-xl sm:text-lg text-accent1 font-[500] mb-3">{{ item.name }}</h2>
                    <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px]">{{ item.jobtitle }}</p>
                </div>
            </li>
        </ul>    
    </section>
</template>

