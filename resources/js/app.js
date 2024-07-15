import './assets/css/index.css';
 
import { createApp } from 'vue';
import { createHead } from '@unhead/vue'
import { MotionPlugin } from '@vueuse/motion'
import { VueRecaptchaPlugin } from 'vue-recaptcha/head'

const app = createApp({});
const head = createHead();

app.use(head);
app.use(MotionPlugin);
app.use(VueRecaptchaPlugin, {
  v2SiteKey: '6LcX3AsqAAAAAKG0sYoZ3G3oQxqvLE8VeXHfnN_P',
});
app.mount('#app');