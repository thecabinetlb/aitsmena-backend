<script setup>
defineProps({
    data: Array
})
</script>
<template>
    <section class="w-11/12 h-full pt-40 mx-auto 2xl:w-8/12 lg:w-10/12">
        <h1 class="text-accent1 font-[200] text-lg uppercase">Industries we serve</h1>
        <hr class="w-full h-4 mt-3 text-accent2"/>
        <ul role="list" class="flex flex-col items-center gap-3 mt-10 list-style-none">
            <li v-for="(item, key) in data" :key="key" class="group bg-extended-noise bg-cover bg-center p-6 flex max-sm:flex-wrap items-center gap-3 w-full h-full relative rounded-[16px] border-2 border-bg2/30 goup-hover:border-bg2">
            <div class="w-full h-full absolute inset-0 bg-gradient-to-br from-accent1/10 to-accent1/30 group-hover:from-bg2/50 group-hover:to-bg2 rounded-[16px] opacity-35 group-hover:opacity-50 transform duration-400 group-hover:duration-600"></div>
                <div class="flex flex-col items-center justify-center w-full gap-3 sm:w-3/12">
                    <img :src="item.icon" :alt="item.title" width="94" height="94" center cover responsive loading="lazy" class="w-[54px] aspect-square"/>
                    <h2 class="2xl:text-2xl lg:text-xl sm:text-lg text-accent1 text-center font-[400]">{{ item.title }}</h2>                        
                </div>
                <div class="w-full sm:w-9/12">
                    <p class="tracking-wide hyphens-auto text-accent2 font-[200] max-sm:text-[14px] text-justify mb-3">{{ item.description }}</p>
                </div>
                <!-- <a v-if="item.to" :id="'go-to-' + item.title + '-page'" :aria-label="'go to ' + item.title" :to="item.to" class="w-full h-full cursor-pointer sm:w-2/12">
                    <img src="/arrowleft.svg" alt="AITS" width="34" height="41"  class="ease-linear delay-300 transform sm:mx-auto ms-auto me-0 hover:translate-x-3" cover center responsive loading="lazy"/>    
                </a> -->
            </li>
        </ul>
    </section>
</template>
<!-- shadow-[4px_-4px_25px_-12px_rgba(50,82,123)]  shadow-[4px_-4px_25px_-12px_rgba(50,82,123)]-->