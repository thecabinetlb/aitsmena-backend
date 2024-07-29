<script setup>
import icon1 from '/images/socials/twitter.svg'
import icon2 from '/images/socials/instagram.svg'
import icon3 from '/images/socials/discord.svg'
import { ref } from 'vue'
const isOpen = ref(false)

const toggleModal = () => {
  isOpen.value = !isOpen.value
}

const sociallinks = [
{ id: 1, name:'Twiiter(X)', to: '/', target:"_blank", icon:icon1 },
{ id: 2, name:'Instagram', to: '/', target:"_blank", icon:icon2 },
{ id: 3, name:'Discord', to: '/', target:"_blank", icon:icon3 }
];
</script>
<style>
/* we will explain what these classes do next! */
.v-enter-active,
.v-leave-active {
  transition: opacity 0.10s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
</style>
<template>
    <button :aria-label="{'open contact info menu' : !isOpen, 'close contact info menu' : isOpen}" 
    class="cursor-pointer fixed z-[10] right-0 top-1/2 transform -translate-y-1/2 flex flex-col items-center justify-center w-12 h-10 border border-r-none rounded-l-full border-accent1/30 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] text-accent1"
    :class="{ 'sm:-translate-x-80 -translate-x-64' : isOpen }" @click="toggleModal">
        <svg v-if="!isOpen" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 mx-auto">
        <path d="M7.67917 13.1666L30 13.1666L30 16.8333L7.67917 16.8333L17.9458 27.1L15.3333 29.6666L0.666667 15L15.3333 0.333291L17.9458 2.89996L7.67917 13.1666Z" fill="white"/>
        </svg>
            <h1 v-if="isOpen" class="text-xl text-accent1">&#10005;</h1>
    </button>
    <Teleport to="#portals">
        <Transition>
        <div v-if="isOpen" class="sm:w-80 w-64 sm:aspect-square p-6 fixed z-[9] right-0 top-1/2 transform -translate-y-1/2 border border-accent1/30 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] space-y-6 rounded-[16px]">
            <h1 class="text-lg text-accent1 font-[400] h-1/4">Contact Info</h1>
            <ul role="list" class="space-y-6 list-style-none h-2/4">
                <li class="text-accent1 font-[200] flex gap-2 max-sm:text-[14px]">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 5.49999C12.103 5.49999 13 6.39699 13 8.49999H15C15 5.27499 13.225 3.49999 10 3.49999V5.49999ZM13.422 10.943C13.2299 10.7683 12.9774 10.6752 12.7178 10.6832C12.4583 10.6912 12.212 10.7998 12.031 10.986L9.63804 13.447C9.06204 13.337 7.90404 12.976 6.71204 11.787C5.52004 10.594 5.15904 9.43299 5.05204 8.861L7.51104 6.46699C7.69745 6.28612 7.80617 6.03982 7.8142 5.7802C7.82223 5.52059 7.72892 5.26804 7.55404 5.07599L3.85904 1.01299C3.68408 0.820352 3.44092 0.703499 3.18119 0.687255C2.92146 0.67101 2.66564 0.756653 2.46804 0.925995L0.298038 2.78699C0.125149 2.96051 0.0219574 3.19145 0.00803782 3.43599C-0.00696218 3.68599 -0.292962 9.608 4.29904 14.202C8.30504 18.207 13.323 18.5 14.705 18.5C14.907 18.5 15.031 18.494 15.064 18.492C15.3086 18.4783 15.5394 18.3747 15.712 18.201L17.572 16.03C17.7415 15.8325 17.8273 15.5768 17.8113 15.317C17.7952 15.0573 17.6785 14.8141 17.486 14.639L13.422 10.943Z" fill="white"/>
                    </svg>
                    +1012 3456 789
                </li>
                <li class="text-accent1 font-[200] flex gap-2 max-sm:text-[14px]">
                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 0H0V16H20V0ZM18 4L10 9L2 4V2L10 7L18 2V4Z" fill="white"/>
                    </svg>
                    AITS@gmail.com
                </li>
                <li class="text-accent1 font-[200] flex gap-2 max-sm:text-[14px]">
                    <svg width="17" height="21" viewBox="0 0 17 21" fill="none" class="w-[30px] aspect-square" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.25001 0C6.06276 0.00258035 3.96584 0.872603 2.41923 2.41922C0.872612 3.96584 0.00258913 6.06276 8.77716e-06 8.25C-0.00261089 10.0374 0.581244 11.7763 1.66201 13.2C1.66201 13.2 1.88701 13.4962 1.92376 13.539L8.25001 21L14.5793 13.5353C14.6123 13.4955 14.838 13.2 14.838 13.2L14.8388 13.1978C15.919 11.7747 16.5026 10.0366 16.5 8.25C16.4974 6.06276 15.6274 3.96584 14.0808 2.41922C12.5342 0.872603 10.4373 0.00258035 8.25001 0ZM8.25001 11.25C7.65666 11.25 7.07665 11.0741 6.5833 10.7444C6.08995 10.4148 5.70543 9.94623 5.47837 9.39805C5.25131 8.84987 5.1919 8.24667 5.30765 7.66473C5.42341 7.08279 5.70913 6.54824 6.12869 6.12868C6.54825 5.70912 7.08279 5.4234 7.66474 5.30764C8.24668 5.19189 8.84988 5.2513 9.39806 5.47836C9.94624 5.70542 10.4148 6.08994 10.7444 6.58329C11.0741 7.07664 11.25 7.65666 11.25 8.25C11.249 9.04534 10.9326 9.80783 10.3702 10.3702C9.80784 10.9326 9.04535 11.249 8.25001 11.25Z" fill="white"/>
                    </svg>
                    132 Lorum Ipsum Street, Lorum Ipsum 02156 Lorum Ipsum
                </li>
            </ul>
            <div class="flex flex-wrap items-center justify-between gap-y-3 lg:gap-3 place-content-end h-1/4">
                <div class="flex items-center justify-between gap-2">
                <a v-for="(item, key) in sociallinks" :key="key" :id="'go-to-' +item.name" :href="item.to" :target="item.target" class="w-10 aspect-square font-[200] bg-bg2 text-accent1 hover:brightness-115 rounded-[8px] p-1 flex items-center justify-center">
                    <img :src="item.icon" :alt="'AITS' + item.name" center cover responsive  loading="lazy"/>
                </a>                    
                </div>
                <button aria-label="go to contact form page" class="cursor-pointer p-2 text-center rounded-[8px] text-accent1 bg-bg2 font-[200] hover:brightness-115 max-sm:text-[14px]">Get in Touch</button>
            </div>
        </div>
        </Transition>
    </Teleport>
</template>

