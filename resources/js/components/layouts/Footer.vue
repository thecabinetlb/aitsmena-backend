<script setup>
const footerlinks = [
  { id: 1, 
    name: 'Quick Links',
    to:'',
    submenu: [
    { id: 1, name: "Home", to:"/" },
    { id: 2, name: 'About', to: '/about' },
    { id: 3, name: 'Contact ', to: '/contact' },
    { id: 3, name: 'Industries ', to: '/industries' },
  ]
  },
  {
    id: 2, 
    name: 'Resources', 
    to: '/resources',
    submenu: [
      { id: 1, name: 'Blog', to:'#blog' },
      { id: 2, name: 'Whitepapers', to:'#whitepapers' },
      // { id: 3, name: 'Webinars', to:'#webinars' },
      { id: 3, name: 'Industry Insights', to:'#industry-insights' }
    ]
  },
  {
    id: 3, 
    name: 'Careers', 
    to: '/careers',
    submenu: [
      { id: 1, name: 'Job Openings', to:'#jobs-openings' },
      { id: 2, name: 'Internship Opportunities', to:'#internship-opportunities' },
      { id: 3, name: 'Employee Benefits', to:'#employee-benefits' }
    ]
  }
]
const sociallinks = [
  { id: 1, name:'Linkedin', to: 'https://www.linkedin.com/company/aitsmena/', target:"_blank", icon:'/images/socials/linkedin.svg' },
  { id: 2, name:'Facebook', to: 'https://www.facebook.com/people/AITS/100057457570552/', target:"_blank", icon:'/images/socials/facebook.svg' },
  { id: 3, name:'X', to: 'https://twitter.com/AITSglobal', target:"_blank", icon:'/images/socials/x.svg' },
  { id: 4, name:'Youtube', to: 'https://www.youtube.com/channel/UC2e3BlBOc1EfhuxlBAaLQNw', target:"_blank", icon:'/images/socials/youtube.svg' }
];
</script>

<template>
    <footer class="relative flex flex-col items-center justify-center gap-10 pt-20 sm:pt-40">
      <div class="flex items-center justify-center w-11/12 gap-3 p-6 mx-auto max-sm:flex-wrap 2xl:w-8/12 lg:w-10/12 rounded-[16px] bg-bg">
        <input type="text" id="email" placeholder="example@gmail.com" class="md:w-6/12 w-full block px-4 py-3 bg-gradient-to-r from-accent1/10 to-accent1/20 backdrop-blur-[16px] rounded-[16px] text-accent1 bg-transparent border border-accent2 appearance-none focus:outline-none focus:ring-0 focus:border-bg2 peer"/>
        <div href="/" class="block w-fit cursor-pointer px-4 py-3 max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125">Subscribe</div>
          <!-- <a id="subscribe-to-newsletter" aria-label="subscribe to newsletter" href="/" class="relative z-[4] block w-fit cursor-pointer px-4 py-3 max-sm:text-[14px] font-[200] text-center rounded-[8px] text-accent1 bg-bg2 hover:brightness-125">Subscribe</a> -->
      </div>
      <div class="flex flex-wrap justify-between w-11/12 gap-6 px-6 my-10 lg:gap-0 2xl:w-8/12 lg:w-10/12">
            <div class="flex flex-col w-full gap-2 mb-10 lg:w-4/12 lg:mb-0">
              <img src="/AITSLogoWithSloganBig.webp" alt="AITS - An IBI Company" width="164" height="43" center cover responsive loading="lazy" class="-ms-4"/>
              <p class="tracking-wide text-accent2 font-[200] max-sm:text-[14px] text-justify">Stay connected with AITS on social media for the latest updates, news, and insights. Follow
              us on LinkedIn, Twitter, Facebook, and Instagram to join the conversation and stay informed.</p>
              <div class="relative z-[2] flex items-center gap-2">
                <a v-for="(item, key) in sociallinks" :key="key" :id="'go-to-' + item.name" :href="item.to" :target="item.target" class="w-8 aspect-square font-[200] bg-bg2 text-accent1 hover:brightness-125 rounded-[8px] p-2 flex items-center justify-center">
                    <img :src="item.icon" :alt="'AITS' + item.name" center cover responsive class="w-full h-full" loading="lazy"/>
                </a>
              </div>
            </div>
            <ul role="list" class="flex flex-wrap justify-between w-full lg:w-7/12 gap-y-3 list-style-none">
              <li v-for="(item, key) in footerlinks" :key="key" class="w-full sm:w-1/2 md:w-1/3">
                <h1 class="text-lg font-[400] text-accent1 mb-3">
                    {{ item.name }}
                </h1>            
                <div v-for="(subitem, subkey) in item.submenu" :key="subkey" class="pb-3">
                    <a :id="subitem.name" :aria-label="'go to ' + subitem.name" :href="item.to + subitem?.to" 
                    class="font-[200] text-accent1 hover:brightness-75 max-sm:text-[14px]">
                    {{ subitem.name }}</a>
                </div>                
              </li>
            </ul>
      </div>
      <!-- pattern -->
      <img src="/images/patterns/patternfooter.svg" alt="AITS" width="446" height="643" center cover responsive loading="lazy"
      class="absolute left-0 top-[100%] transform -translate-y-[100%] opacity-75"/>       
     
      <div class="text-center min-h-[50px] w-full flex flex-col items-center justify-center bg-footer-noise bg-cover bg-center">
      <p class="tracking-wide text-accent1 max-sm:text-[14px]">Copyright @ AITS All Rights Reserved.</p>
      </div>
    </footer>
</template> 
