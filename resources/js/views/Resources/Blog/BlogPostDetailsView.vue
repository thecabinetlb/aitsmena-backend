<script setup>
import { ref, onMounted } from 'vue';
import { getBlogPostBySlug } from '../../../utils/api_functions';
import PostDetails from '../../../components/PostDetails.vue';

const props = defineProps({
  initialSlug: String
});

const blogpost = ref([]);

const fetchBlogPost = async (slug) => {
  try {
    const response = await getBlogPostBySlug(slug);
    console.log("API Response:", response);
    if (response && slug) {
      blogpost.value = response[0];
      console.log("blogpost", response[0]);
    } else {
      console.error('No data found in response');
    }
  } catch (error) {
    console.error('Error fetching blog post:', error);
  }
};

onMounted(() => {
  if (props.initialSlug) {
    fetchBlogPost(props.initialSlug);
  } else {
    console.error('No slug found');
  }
});

console.log("Initial slug:", props.initialSlug);
</script>
<template>
    <PostDetails sectiontitle="Blog Post Details" :item="blogpost"/>
</template>
<!-- :title="blogpost.title"
:published_at="blogpost.published_at"
:thumbnail="blogpost.thumbnail"
:body="blogpost.body"
/> -->