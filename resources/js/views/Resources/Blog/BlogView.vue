<script setup>
import PostsList from '../../../components/PostsList.vue';
import { getBlogPosts } from '../../../utils/api'
const blogposts = getBlogPosts()

</script>
<template>
  <PostsList sectiontitle="All Blogs" category="blog" sectiondescription="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip." :data='blogposts'/>
</template>