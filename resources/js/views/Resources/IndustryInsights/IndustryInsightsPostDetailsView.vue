<script setup>
import { ref, onMounted } from 'vue';
import { getIndustryInsightsBySlug } from '../../../utils/api_functions';
import PostDetails from '../../../components/PostDetails.vue';

const props = defineProps({
  initialSlug: String
});

const industryinsightspost = ref([]);

const fetchIndustryInsights = async (slug) => {
  try {
    const response = await getIndustryInsightsBySlug(slug);
    if (response && slug) {
      industryinsightspost.value = response[0];
      console.log("industryinsightspost", response[0]);
    } else {
    }
  } catch (error) {
  }
};

onMounted(() => {
  if (props.initialSlug) {
    fetchIndustryInsights(props.initialSlug);
  } else {
    console.error('No slug found');
  }
});
</script>
<template>
    <PostDetails sectiontitle="Industry Insights Post Details" :item="industryinsightspost"/>
</template>