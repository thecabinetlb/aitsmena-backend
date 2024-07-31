<script setup>
import PostsList from '../../../components/PostsList.vue';
import { getIndustryInsights } from '../../../utils/api_functions'
import { ref, onMounted } from 'vue';

const industryInsights = ref([]);
console.log('industryInsights', industryInsights)
const fetchData = async () => {
  industryInsights.value = await getIndustryInsights();
};

onMounted(() => {
  fetchData();
});
</script>
<template>
  <PostsList sectiontitle="All Industry Insights" category="industry-insights" sectiondescription="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip." :data='industryInsights'/>
</template>