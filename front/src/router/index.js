import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/users/Home.vue')
    },
    {
      path: '/create',
      name: 'create',
      component: () => import('../views/users/CreateView.vue')
    }
  ]
})

export default router
