<script setup>
import Hero from '../components/Hero.vue'
import Contact from '../components/Contact.vue'
import OneImageTextFlex from '../components/OneImageTextFlex.vue'
// import { useHead } from '@unhead/vue'
 
// // Replace placeholders with actual content
// const title = 'AITS - Industrial Software Solutions And Digital Services Tailored To Your Business';
// const description = 'AITS transforms businesses like yours through innovative tech solutions tailored to your unique needs. Book your free consultation call to get started!';
// const ogImage = 'https://aitsmena-test.netlify.app/aits-open-graph_v1.jpg';
// const ogUrl = 'https://aitsmena-test.netlify.app'; // Replace with your website URL

// useHead({ 
//   title,
//   description,
//   ogTitle: title, // Consider using the same title for consistency
//   ogDescription: description,
//   ogImage,
//   ogUrl,
//   ogType: 'website', // Recommended for most website content
//   twitterTitle: title, // Consider using the same title for consistency
//   twitterDescription: description,
//   twitterImage: ogImage, // Assuming the same image is suitable for Twitter
//   twitterCard: 'summary',
// })
const missionandvission =
  {
    title: "A Vision In Sight",
    description: "AITS strives to be the leading industrial software innovator in the Gulf region. How? By delivering cutting-edge software solutions and digital services, digital threads, and connected workers. It takes a thrill for innovation and excellence to empower organizations in reaching new heights of success.",
    image: "/images/hero/missionandvision/vision_v1.webp",
}
const valuesandcommitments =
{
  title: "You Have",
  title2: "Our Word",
  description: "No company can operate without a set of core values that shape its culture and defines who it is. As for us? We believe in integrity, collaboration, and continuous improvement. Our commitment to enhance positive transformation in the industrial landscape creates an environment where our dedicated team can thrive. This enables us to better serve our clients and contribute to a brighter, more sustainable future.",
  image: "/images/hero/values/values_v1.webp",
}  
  
</script>
<template>
  <Hero/>
  <OneImageTextFlex sectiontitle="Mission and Vision" :item="missionandvission" 
  v-motion
  :initial="{
    opacity: 0,
    y: 100,
  }"
  :visibleOnce="{
    opacity: 1,
    y: 0,
    transition: {
      type: 'spring',
      stiffness: '100',
      delay: 100,
    },
  }"/>
  <OneImageTextFlex  sectiontitle="Values and Commitments" :item="valuesandcommitments" reverse 
  v-motion
  :initial="{
    opacity: 0,
    y: 100,
  }"
  :visibleOnce="{
    opacity: 1,
    y: 0,
    transition: {
      type: 'spring',
      stiffness: '100',
      delay: 100,
    },
  }"/>
  <!-- <IndustriesList/> -->
  <Contact/>
</template>
