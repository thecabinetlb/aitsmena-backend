import './assets/css/index.css';
import axios from 'axios';

import { createApp } from 'vue';
import { createHead } from '@unhead/vue';
import { MotionPlugin } from '@vueuse/motion';
import { VueRecaptchaPlugin } from 'vue-recaptcha/head';
import router from './router/index';

import Header from './components/layouts/Header.vue';
import Footer from './components/layouts/Footer.vue';

import HomeView from './views/HomeView.vue';
import ContactView from './views/ContactView.vue';
import AboutView from './views/AboutView.vue';
import IndustriesView from './views/Industries/IndustriesView.vue';
import CareersView from './views/CareersView.vue';
import ResourcesView from './views/Resources/ResourcesView.vue';
import StoriesPostDetailsView from './views/Industries/StoriesPostDetailsView.vue';
import BlogView from './views/Resources/Blog/BlogView.vue';
import BlogPostDetailsView from './views/Resources/Blog/BlogPostDetailsView.vue';
import IndustryInsightsView from './views/Resources/IndustryInsights/IndustryInsightsView.vue';
import IndustryInsightsPostDetailsView from './views/Resources/IndustryInsights/IndustryInsightsPostDetailsView.vue';

const createMyApp = (siteKey) => {
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
    app.component('industry-insights-view', IndustryInsightsView);
    app.component('industry-insights-post-details-view', IndustryInsightsPostDetailsView);

    app.use(head);
    app.use(MotionPlugin);
    app.use(VueRecaptchaPlugin, {
        v2SiteKey: siteKey,
    });
    app.use(router);

    app.mount('#app');
};

// Fetch the reCAPTCHA site key before initializing the app
axios.get('/api/v1/recaptcha-config').then(response => {
    const siteKey = response.data.v2SiteKey;
    createMyApp(siteKey);
}).catch(error => {
    console.error('Failed to load reCAPTCHA site key:', error);
});
