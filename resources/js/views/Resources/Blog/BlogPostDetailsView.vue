<script setup>
import PostDetails from '../../../components/PostDetails.vue'
import { getBlogPostById } from '../../../utils/api'
import { useRoute } from 'vue-router'
defineProps({
  slug: String
})
const route = useRoute()

const blogpost = getBlogPostById(route.params.slug)
</script>
<template>
    <PostDetails sectiontitle="Blog Post Details" :item="blogpost"/>
</template>