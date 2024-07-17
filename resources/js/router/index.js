import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ContactView from '../views/ContactView.vue'
import AboutView from '../views/AboutView.vue'
import IndustriesView from '../views/Industries/IndustriesView.vue'
import CareersView from '../views/CareersView.vue'
import ResourcesView from '../views/Resources/ResourcesView.vue'
import StoriesPostDetailsView from '../views/Industries/StoriesPostDetailsView.vue'
import BlogView from '../views/Resources/Blog/BlogView.vue'
import BlogPostDetailsView from '../views/Resources/Blog/BlogPostDetailsView.vue'

const routes = [
  { path: '/', component: HomeView},
  { path: '/about', component: AboutView },
  { path: '/contact', component: ContactView },
  { path: '/industries', component: IndustriesView},
  { path: '/careers', component: CareersView },
  { path: '/resources', component: ResourcesView },
  { path: '/resources/blog', component: BlogView },
  { path: '/resources/blog/:slug', component: BlogPostDetailsView, props: true },
  { path: '/industries/success-stories/:slug', component: StoriesPostDetailsView }
]
 
const router = createRouter({
  history: createWebHistory(),
  routes,
    scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
        return savedPosition
    } else if (to.hash) {
        return {
          el: to.hash,
          behavior: 'smooth',
      }
    }
      return { top: 0,  behavior: 'smooth' }
  }  
})
export default router