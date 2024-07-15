<script setup>
import { ref } from 'vue'
defineProps({
    data: Array
})
const openDetails = ref(0)

</script>
<template>
    <section class="w-11/12 mx-auto 2xl:w-8/12 lg:w-10/12">
        <h1 class="text-accent1 font-[200] text-lg uppercase"> Industries we serve</h1>
        <hr class="w-full h-4 mt-3 text-accent2"/>
        <div class="grid relative w-full justify-center items-center grid-cols-2 md:grid-cols-4 2xl:grid-cols-7 gap-6 md:mb-[194px] mt-10 max-md:pb-10"> 
            <div v-for="(item, key) in data" :key="key" @click="openDetails = key"
            class="relative p-6 cursor-pointer flex flex-col gap-3 justify-center items-center col-span-1 text-center aspect-square rounded-[16px] border-2 bg-noise bg-opacity-50 bg-cover bg-center"
            :class="{'border-bg2/30' : openDetails === key, 'border-bg2' : openDetails !== key}">
            <div class="absolute inset-0 w-full h-full rounded-[16px] bg-gradient-to-br transform duration-300 z-[-1]"
            :class="{'from-bg2/50 to-bg2 bg-opacity-75' : openDetails === key, 'from-accent1/10 to-accent1/30 bg-opacity-50' : openDetails != key}"></div>
                <img :src="item.icon" :alt="item.title" width="94" height="94" center cover responsive loading="lazy" class="max-sm:w-[54px] aspect-square mx-auto"/>
                <h2 class="max-sm:text-[14px] text-accent1 font-[400] h-[48px]">{{ item.title }}</h2>
            </div>
            <!-- Desktop -->
            <p v-for="(item, key) in data" :key="key" v-show="openDetails === key" class="traking-wide md:block absolute hidden 2xl:left-1/2 2xl:transform 2xl:-translate-x-1/2 2xl:w-9/12 2xl:px-6 top-[100%] my-10 md:h-[194px] font-[200] max-sm:text-[14px] text-justify text-accent2" style="text-align-last: center;">{{ item.description }}</p>
        </div>
        <!-- Mobile -->
        <p v-show="openDetails === key"  v-for="(item, key) in data" :key="key" class="traking-wide font-[200] max-sm:text-[14px] text-justify text-accent2 pb-10 mt-10 md:hidden" style="text-align-last: center;">{{ item.description }}</p>
    </section>
</template>