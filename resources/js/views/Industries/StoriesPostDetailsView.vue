<script setup>
import PostDetails from '../../components/PostDetails.vue'
import { getSuccessStoryBySlug } from '../../utils/api'
import { useRoute } from 'vue-router'

const route = useRoute()

const successStory = getSuccessStoryBySlug(route.params.slug)
</script>
<template>
    <PostDetails sectiontitle="Success Stories Details" :item="successStory"/>
</template>