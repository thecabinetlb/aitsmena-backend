<script setup>
import PostsList from '../../../components/PostsList.vue';
import { getBlogPosts } from '../../../utils/api_functions'
import { ref, onMounted } from 'vue';

const blogposts = ref([]);
console.log('blogposts', blogposts)
const fetchBlogPosts = async () => {
  blogposts.value = await getBlogPosts();
};

onMounted(() => {
  fetchBlogPosts();
});
</script>
<template>
  <PostsList sectiontitle="All Blogs" category="blog" sectiondescription="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim quis nostrud exercitation ullamco laboris nisi ut aliquip." :data='blogposts'/>
</template>