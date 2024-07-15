<script setup>
import Header from './components/layouts/Header.vue'
// import FloatingMenu from './components/layouts/FloatingMenu.vue'
import Footer from './components/layouts/Footer.vue';
</script>

<template>
  <main>
  <Header/>
  <RouterView/>
  <Footer/>
  </main>
</template>