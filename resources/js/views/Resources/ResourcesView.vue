<script setup>
// import banner from 'images/banners/resources.webp'
import InnerHero from '../../components/InnerHero.vue'
import InsideBody from '../../components/InsideBody.vue'
import { getFeaturedBlogPosts, getFeaturedIndustryInsights } from '../../utils/api_functions'
import OneImageTextFlex from '../../components/OneImageTextFlex.vue'
import { defineAsyncComponent } from 'vue'
const PostsCarousel = defineAsyncComponent(() =>
  import('../../components/PostsCarousel.vue')
)
import { ref, onMounted } from 'vue';

const blogposts = ref([]);
const industryInsights = ref([]);
console.log('blogposts', blogposts)
console.log('industryInsights', industryInsights)
const fetchData = async () => {
  blogposts.value = await getFeaturedBlogPosts();
  industryInsights.value = await getFeaturedIndustryInsights();
};

onMounted(() => {
  fetchData();
});

const whitepaper ={ 
    id: 1, 
    title: 'Explore Our Whitepapers', 
    description: 'Dive deeper into key industry topics with our whitepapers. Gain valuable insights and actionable strategies to address complex challenges and drive business growth.', 
    image:'/images/insidepages/resources/whitepapers.webp' 
};
// const industryInsights = [
//   { 
//     id: 1, 
//     title: 'Increasing Efficiency in Food Production with IoT', 
//     summary: 'Explore how IoT technology is optimizing food production processes and ensuring quality and safety standards.', 
//     to: 'https://example.com/food-iot-insights', 
//     target: '_blank', 
//     date: '2024-04-26',
//     category: "Food & Beverage"
//   },
//   { 
//     id: 2, 
//     title: 'Software Solutions and Digital Services for Water Management', 
//     summary: 'Discover innovative technologies and strategies for efficient water management and wastewater treatment.', 
//     to: 'https://example.com/water-management-insights', 
//     target: '_blank', 
//     date: '2024-04-25',
//     category: "Water & Wastewater"
//   },
//   { 
//     id: 3, 
//     title: 'Building Sustainable Infrastructure for Smart Cities', 
//     summary: 'Learn about the integration of IoT and data analytics in urban planning to create smarter and more sustainable cities.', 
//     to: 'https://example.com/smart-cities-insights', 
//     target: '_blank', 
//     date: '2024-04-24',
//     category: "Smart Cities"
//   },
//   { 
//     id: 4, 
//     title: 'Digital Transformation in the Oil & Gas Industry', 
//     summary: 'Explore how digital technologies such as AI and automation are revolutionizing operations and improving safety in the oil and gas sector.', 
//     to: 'https://example.com/oil-gas-insights', 
//     target: '_blank', 
//     date: '2024-04-23',
//     category: "Oil & Gas"
//   },
//   { 
//     id: 5, 
//     title: 'Innovations in Chemical Manufacturing', 
//     summary: 'Discover the latest advancements in chemical manufacturing processes and how they are driving efficiency and sustainability.', 
//     to: 'https://example.com/chemicals-insights', 
//     target: '_blank', 
//     date: '2024-04-22',
//     category: "Chemicals"
//   }
// ]
</script>

<template>
    <head>
      <title>AITS - Resources</title>
      <meta name="description" content="Got a knack for reading? Gain access to free resources including whitepapers, industry insights, educational blogs, and specialized webinars."/>
    </head>
    <InnerHero pagebanner="images/banners/resources.webp" pagetitle="Resources" pagedescription="Need some resources to explore the complex world of software solutions and digital services? Welcome to the home of the latest industry news, insights, trends, and much more."/>
    <section class="relative -mt-40">
      <PostsCarousel sectionid="blog" sectiontitle="Blog" sectiondescription="Stay informed with the latest trends and developments in industrial automation. Explore our blog for thought-provoking articles, expert opinions, and practical tips to help your business stay ahead of the curve." :data='blogposts'/>   
      <OneImageTextFlex sectionid="whitepapers" sectiontitle="Whitepapers" :item="whitepaper" reverse/>
      <PostsCarousel sectionid="industry-insights" sectiontitle="Industry Insights" sectiondescription="Access exclusive industry insights and reports to stay informed about the latest news, developments, and opportunities in your sector. Stay ahead of the competition with actionable intelligence from AITS." :data='industryInsights'/>
      <!-- <WebinarsList sectiontitle="Webinars" :data='webinars'/> -->
      <InsideBody/>
    </section>    
</template>