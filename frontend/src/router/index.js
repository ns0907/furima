import { createRouter, createWebHistory } from 'vue-router'
import Top from '@/components/Top.vue'

const routes = [
  {
    path: '/',
    name: 'top',
    component: Top,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
