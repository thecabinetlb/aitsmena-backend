import './assets/css/index.css';

import { createApp } from 'vue';
import { createHead } from '@unhead/vue';
import { MotionPlugin } from '@vueuse/motion';
import { VueRecaptchaPlugin } from 'vue-recaptcha/head';
import App from './App.vue';
import router from './router/index';

const app = createApp(App);
const head = createHead();

app.use(head);
app.use(MotionPlugin);
app.use(VueRecaptchaPlugin, {
  v2SiteKey: '6LcX3AsqAAAAAKG0sYoZ3G3oQxqvLE8VeXHfnN_P',
});

app.use(router);

app.mount('#app');
