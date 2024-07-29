<script setup>
import { ref } from 'vue'
const navlinks = [
  { id: 1, name: 'Home', to: '/' },
  { id: 2, name: 'About', to: '/about' },
  {
  id: 3,
  name: "Industries",
  to: '/industries'
  },
  { 
    id: 4, 
    name: 'Resources', 
    to: '/resources',
    submenu: [
      { id: 4, name: 'Blog', to:'/resources#blog' },
      { id: 5, name: 'Whitepapers', to:'/resources#whitepapers' },
      // { id: 6, name: 'Webinars', to:'#webinars' },
      { id: 7, name: 'Industry Insights', to:'/resources#industry-insights' }
    ]
  },
  { 
    id: 5, 
    name: 'Careers', 
    to: '/careers',
    submenu: [
      { id: 8, name: 'Job Openings', to:'/careers#jobs-openings' },
      { id: 9, name: 'Internship Opportunities', to:'/careers#internship-opportunities' },
      { id: 10, name: 'Employee Benefits', to:'/careers#employee-benefits' }
    ]
  },
  { id: 6, name: 'Contact', to: '/contact' },
]

const hasSubMenu = ref(false)
const openSubMenu = ref(null)
const isOpen = ref(false)
const isClicked = ref(null)


const toggleSubMenu = (item) => {
  hasSubMenu.value = item.submenu ? true : false
  isOpen.value = hasSubMenu.value ? true : false
  openSubMenu.value = openSubMenu.value !== item.id ? item.id : null
}

const toggleOpen = () => {
  isOpen.value = !isOpen.value
}
</script>
<template>
  <header class="fixed left-1/2 transform bg-bg/90 -translate-x-1/2 top-0 h-[67px] z-[9] 2xl:w-8/12 lg:w-10/12 w-11/12 lg:flex justify-between items-center mx-auto px-6 rounded-b-[16px]" 
    :class="{'h-fit' : isOpen}">
    <a id="Home" aria-label="go to home" href="/">
      <img src="/AITSLogoWithSloganBig.webp" alt="AITS - An IBI Company" width="164" height="43" cover center responsive loading="eager" class="max-lg:my-[20px] -ms-4"/>    
    </a>
    <!-- Desktop -->
    <nav class="items-center justify-end hidden w-8/12 h-full gap-2.5 lg:flex">
      <div v-for="(item, key) in navlinks" :key="key" class="relative">
        <a :id="item.name + (openSubMenu === item.id ? '-active' : '')" :aria-label="'go to ' + item.name" :href="item.to" 
        :activeClass="'bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] rounded-[8px]'"
        :exactActiveClass="'bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] rounded-[8px]'"
        class="py-2 px-3 cursor-pointer text-lg font-[400] text-accent1 hover:bg-gradient-to-r hover:from-accent1/10 hover:to-accent1/20 hover:backdrop-blur-[16px] hover:rounded-[8px]"
        @mouseenter="openSubMenu = item.id, hasSubMenu = item.submenu ? true : false">
          {{ item.name }}
        </a>
        <nav v-if="hasSubMenu && openSubMenu === item.id" class="w-[290px] h-fit absolute left-0 top-[50px] p-6 rounded-[16px] bg-bg/90"
        @mouseleave="hasSubMenu = false">
          <div v-for="(subitem, subkey) in item.submenu" :key="subkey" class="hover:text-accent1/70 cursor-pointer font-[400] text-accent1 text-lg pb-3 drop-shadow-md"  
          @click="isClicked = subitem.id">
            <a :id="subitem.name + (isClicked === subitem.id ? '-active' : '')" :aria-label="'go to ' + subitem.name" :href="subitem.to"
            :class="{'text-accent1/70' : isClicked === subitem.id}">
              {{ subitem.name }}
            </a>            
          </div>
        </nav>
      </div> 
    </nav>   
    <!-- Mobile -->
    <button :id="!isOpen ? 'open-menu' : 'close-menu'" :aria-label="!isOpen ? 'open menu' : 'close menu'" class="absolute flex items-center justify-center w-6 h-6 lg:hidden right-6 top-6" @click="toggleOpen">
      <svg v-if="!isOpen" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100%" height="100%" fill="white" viewBox="0 0 50 50">
      <path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 L 0 7.5 z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 L 0 22.5 z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 L 0 37.5 z"></path>
      </svg>   
      <Transition>
      <h1 v-if="isOpen" class="text-2xl text-accent1">&#10005;</h1>
      </Transition>
    </button>
    <nav v-if="isOpen" class="w-full py-5 mt-5 space-y-4 lg:hidden">
      <div v-for="(item, key) in navlinks" :key="key">
        <a :id="item.name + (isClicked === item.id ? '-active' : '')" :aria-label="'go to ' + item.name" :href="item.to" class="cursor-pointer font-[400] text-accent1 drop-shadow-md"
        :activeClass="'text-accent1/70'"
        :exactActiveClass="'text-accent1/70'"
        @click="toggleSubMenu(item)">
          {{ item.name }}
        </a>
        <nav v-if="hasSubMenu && openSubMenu === item.id" class="mt-3 w-full p-4 rounded-[16px] bg-bg/70">
            <div v-for="(subitem, subkey) in item.submenu" :key="subkey" class="hover:text-accent1/70 cursor-pointer font-[400] text-accent1 pb-3 drop-shadow-md">
              <a :id="subitem.name + (isClicked === subitem.id ? '-active' : '')" :aria-label="'go to ' + subitem.name" :href="subitem.to"        
              @click="isClicked = subitem.id, isOpen = null"
            :class="{'text-accent1/70' : isClicked === subitem.id}">{{ subitem.name }}</a>
            </div>
        </nav>
      </div>
    </nav>
  </header> 
</template>
<!-- 'bg-bg/70' : changecolor || isOpen || hasSubMenu} -->