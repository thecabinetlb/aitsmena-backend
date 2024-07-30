<script setup>
import PostDetails from '../../../components/PostDetails.vue'
import { getBlogPostBySlug } from '../../../utils/api'
import { useRoute } from 'vue-router'
import { ref, onMounted } from 'vue';

const route = useRoute()
const blogpost = ref({});

const fetchBlogPost = async () => {
  blogpost.value = await getBlogPostBySlug(route.params.slug);
};

onMounted(() => {
  fetchBlogPost();
});
console.log("slug", route.params.slug)
</script>
<template>
    <PostDetails sectiontitle="Blog Post Details" :item="blogpost"/>
</template>