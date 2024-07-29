import './assets/css/index.css';

import { createApp } from 'vue';
import { createHead } from '@unhead/vue';
import { MotionPlugin } from '@vueuse/motion';
import { VueRecaptchaPlugin } from 'vue-recaptcha/head';
import router from './router/index';

import Header from './components/layouts/Header.vue'
import Footer from './components/layouts/Footer.vue'

import HomeView from './views/HomeView.vue'
import ContactView from './views/ContactView.vue'
import AboutView from './views/AboutView.vue'
import IndustriesView from './views/Industries/IndustriesView.vue'
import CareersView from './views/CareersView.vue'
import ResourcesView from './views/Resources/ResourcesView.vue'
import StoriesPostDetailsView from './views/Industries/StoriesPostDetailsView.vue'
import BlogView from './views/Resources/Blog/BlogView.vue'
import BlogPostDetailsView from './views/Resources/Blog/BlogPostDetailsView.vue'

const app = createApp({});
const head = createHead();

app.component('header-layout', Header);
app.component('footer-layout', Footer);
app.component('home-view', HomeView);
app.component('contact-view', ContactView);
app.component('about-view', AboutView);
app.component('industries-view', IndustriesView);
app.component('careers-view', CareersView);
app.component('resources-view', ResourcesView);
app.component('stories-post-details-view', StoriesPostDetailsView);
app.component('blog-view', BlogView);
app.component('blog-post-details-view', BlogPostDetailsView);

app.use(head);
app.use(MotionPlugin);
app.use(VueRecaptchaPlugin, {
  v2SiteKey: '6LcX3AsqAAAAAKG0sYoZ3G3oQxqvLE8VeXHfnN_P',
});

app.use(router);

app.mount('#app');
