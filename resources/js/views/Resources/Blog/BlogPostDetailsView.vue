<script setup>
import PostDetails from '../../../components/PostDetails.vue'
import { getBlogPostBySlug } from '../../../utils/api_functions'
import { useRoute } from 'vue-router'
import { ref, onMounted } from 'vue';

const route = useRoute()
const blogpost = ref({});

onMounted(() => {
  if(route.params.slug){
    getBlogPostBySlug(route.params.slug);
  }
});
console.log("slug", route.params.slug)
</script>
<template>
    <PostDetails sectiontitle="Blog Post Details" :item="blogpost"/>
</template>