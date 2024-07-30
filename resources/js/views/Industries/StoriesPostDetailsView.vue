<script setup>
import PostDetails from '../../components/PostDetails.vue'
import { getSuccessStoryBySlug } from '../../utils/api_functions'
import { useRoute } from 'vue-router'
import { ref,onMounted } from 'vue'

const route = useRoute()
const blogpost = ref([]);

const fetchSuccessStory = async () => {
  blogpost.value = await getSuccessStoryBySlug(route.params.slug);
};

onMounted(() => {
  fetchSuccessStory();
});
console.log("slug", route.params.slug)
</script>
<template>
    <PostDetails sectiontitle="Success Stories Details" :item="successStory"/>
</template>