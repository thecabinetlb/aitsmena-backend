<script setup>
import PostDetails from '../../../components/PostDetails.vue'
import { getIndustryInsightsBySlug } from '../../../utils/api_functions'
import { useRoute } from 'vue-router'
import { ref, onMounted } from 'vue';

const route = useRoute()
const industryinsightspost = ref({});

onMounted(() => {
  if(route.params.slug){
    getIndustryInsightsBySlug(route.params.slug);
  }
});
console.log("slug", route.params.slug)
</script>
<template>
    <PostDetails sectiontitle="Industry Insights Post Details" :item="industryinsightspost"/>
</template>