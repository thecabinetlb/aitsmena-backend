<script setup>
defineProps({
    pagebanner: String,
    pagetitle: String,
    pagedescription: String,
    sectionid: String,
    isAbout: Boolean,
    hyphen: Boolean
})
</script>
<template>
    <section class="relative flex flex-col justify-center items-center -mt-[40px] md:h-[90vh] min-h-[70vh]">
        <img :src="pagebanner" :alt="'AITS' + pagetitle" width="1140" height="718" center cover responsive loading="eager" class="absolute inset-0 z-[-1] w-full h-full aspect-[1.59/1]"/>
        <div class="absolute w-11/12 mx-auto md:transform md:-translate-y-1/2 md:top-1/2 z-[1] 2xl:w-8/12 lg:w-10/12 top-2/3 -translate-y-2/3">
            <div class="md:h-[85%] min-h-[40vh] space-y-6 rounded-[16px] flex flex-col justify-center p-6 items-center mx-auto bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px]">
                <img v-if="isAbout" src="/AITSLogoWithSlogan.webp" alt="AITs - An IBI Company" width="443" height="148" cover center responsive loading="eager" class="transform scale-95"/>    
                <h1 v-else class="font-[400] text-accent1 2xl:text-6xl lg:text-5xl md:text-4xl text-[30px] text-center uppercase">{{ pagetitle }}</h1>
                <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify mx-auto lg:w-8/12" style="text-align-last: center;"  :class="{'hyphens-auto' : hyphen}">{{ pagedescription }}</p>
                <!-- <a v-if="isIndustries" id="go-to-contact-page" aria-label="go to contact page" to="/contact" class="block relative z-[2] cursor-pointer px-4 py-3 max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125">Discover Our Solutions</a> -->
            </div>
        </div>
        <!-- Highlights -->
            <!-- top left -->
            <img src="/images/banners/elements/topleft.webp" alt="AITS" width="909" height="683" center cover responsive loading="lazy"
            class="absolute inset-0 z-1"/>

            <!-- top right -->
            <img src="/images/banners/elements/topright.webp" alt="AITS" width="1232" height="792" center cover responsive loading="lazy"
            class="absolute top-0 right-0 z-1"/> 

            <!-- bottom right -->
            <img src="/images/banners/elements/bottomright.webp" alt="AITS" width="728" height="1074" center cover responsive loading="lazy"
            class="absolute bottom-0 right-0 z-1"/>
    </section>
</template>