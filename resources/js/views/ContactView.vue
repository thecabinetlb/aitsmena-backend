<script setup>
import InnerHero from '../components/InnerHero.vue';
import InsideBody from '../components/InsideBody.vue';
import TextGrid from '../components/TextGrid.vue';
import { defineAsyncComponent } from 'vue'
const ContactForm = defineAsyncComponent(() =>
  import('../components/ContactForm.vue')
)
const locations = [
{
    id: 1,
    title: 'Al Reem Island, Abu Dhabi, UAE',
    address: '3003 Addax Tower',
    phone: '+971 (2) 222 2130',
    poBox: 'PO Box 3628',
    email: 'info@aitsmena.com',
    website: 'https://aitsmena.com/'
  },
  {
    id: 2,
    title: 'Dubai Digital Park',
    address: 'A6 building, 401 Office Silicon Oasis, Dubai, UAE',
    phone: '+971 4 344 4901',
    fax: '+971 4 344 4902',
    poBox: 'PO Box: 342112',
    email: 'info@aitsmena.com',
    website: 'https://aitsmena.com/'
  },
  {
    id:3,
    address: 'Sulimaniyah Office Building, Office no.214, 3132 Prince Sultan Bin Abdulaziz Road, Sulimaniyah, Riyad, Kingdom of Saudi Arabia.',
    phone: '+966 114314440',
    fax: '+966 114314440',
    email: 'info@aitsmena.com',
    website: 'https://aitsmena.com/'  
  }  
]


</script>

<template>
    <head>
      <title>AITS - Contact Us Today</title>
      <meta name="description" content="Would you like to get in touch? Fill out the contact form with any inquiries you have and one of our AITS experts will respond as soon as possible."/>
    </head>
    <InnerHero pagebanner="public/images/banners/contect.webp" pagetitle="Contact" pagedescription="Get in touch to learn more about our industry software solutions, digital services and how you can take your business a step further!"/>
    <div class="relative">
        <ContactForm/>
        <TextGrid sectiontitle="Office Location" :data="locations"/>
         <!-- sectiondescription="Need assistance with sales or support? Get in touch with our dedicated sales and support team for personalized assistance and expert guidance. Find the nearest AITS office and get in touch with us to schedule a consultation or learn more about our solutions and services. We have offices located across the Gulf region to serve you better." -->
        <InsideBody/>        
    </div>
</template>