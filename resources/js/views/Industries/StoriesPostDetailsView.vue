<script setup>
import PostDetails from '../../components/PostDetails.vue'
import { getSuccessStoryById } from '../../utils/api'
import { useRoute } from 'vue-router'

const route = useRoute()

const successStory = getSuccessStoryById(route.params.id)
</script>
<template>
    <PostDetails sectiontitle="Success Stories Details" :item="successStory"/>
</template>