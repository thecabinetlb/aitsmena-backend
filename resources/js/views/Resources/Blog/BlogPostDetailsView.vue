<script setup>
import PostDetails from '../../../components/PostDetails.vue'
import { getBlogPostBySlug } from '../../../utils/api'
import { useRoute } from 'vue-router'
// defineProps({
//   slug: String

const route = useRoute()
console.log("slug", route.params.slug)
const blogpost = getBlogPostBySlug(route.params.slug)
</script>
<template>
    <PostDetails sectiontitle="Blog Post Details" :item="blogpost"/>
</template>