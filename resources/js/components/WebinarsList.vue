<script setup>
defineProps({
    sectiontitle: String,
    sectiondescription: String,
    data: Array
})
</script>

<template>
    <section id="webinars" class="w-11/12 pt-40 mx-auto 2xl:w-8/12 lg:w-10/12">
        <h1 class="text-accent1 font-[200] text-lg uppercase">Upcomming Events</h1>
        <hr class="w-full h-4 mt-3 text-accent2"/>          
        <!-- <div class="w-full my-10">
            <h1 class="font-[500] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] uppercase mb-10">{{ sectiontitle }}</h1>
            <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify">{{ sectiondescription }}</p>
        </div> -->
        <ul role="list" class="flex flex-col items-center gap-3 mt-10 list-style-none">
            <li v-for="(item, key) in data" :key="key" class="relative w-full group sm:min-h-[135px]">
            <div class="w-full h-full absolute -inset-0 bg-gradient-to-br from-accent1/10 to-accent1/30 group-hover:from-bg2/50 group-hover:to-bg2 rounded-[16px] opacity-35 group-hover:opacity-50 transform duration-400 group-hover:duration-600"></div>
                <div class="p-6 w-full h-full relative flex max-sm:flex-wrap items-center gap-3 rounded-[16px] md:bg-extended-noise bg-noise bg-opacity-10 bg-cover bg-center border-2 border-bg2">
                    <h1 class="w-full text-center sm:w-3/12"><span class="font-[400] 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] text-accent1">{{ item.date.day }}</span><br/>
                    <span class="font-[200] text-accent2">{{ item.date.month }} {{ item.date.year }}</span></h1>                        
                    <div class="w-full sm:w-7/12">
                        <h2 class="2xl:text-2xl lg:text-xl sm:text-lg text-accent1 font-[500] mb-3">{{ item.title }}</h2>
                        <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify">{{ item.description }}</p>
                        <!-- <a :id="'go-to-' + item.title + '-page'" :aria-label="'apply for' + item.title" :to="item.to" :target="item.target" class="ms-auto me-0 block w-fit cursor-pointer px-4 py-3 max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125">Secure Your Spot</a> -->
                    </div>
                    <a v-if="item.to" :id="'go-to-' + item.title + 'webinars-page'" :aria-label="'go to ' + item.title" :to="item.to" class="w-full cursor-pointer sm:w-2/12">
                        <div class="hover:text-accent1 text-xl text-accent2 w-[34px] h-[34px] cursor-pointer aspect-square grid place-content-center mt-auto mb-auto sm:m-auto ms-auto me-0 border-2 border-accent2 hover:border-accent1 rounded-full"> 🡥 </div>             
                    </a>
                </div>
            </li>
        </ul>
    </section>
</template>

