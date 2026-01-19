import { createRouter, createWebHistory } from 'vue-router'
import { useAuth } from '../composables/useAuth'
import MainSite from '../views/MainSite.vue'
import AdminLogin from '../views/AdminLogin.vue'
import AdminDashboard from '../views/AdminDashboard.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: MainSite
  },
  {
    path: '/admin/login',
    name: 'AdminLogin',
    component: AdminLogin,
    meta: { guest: true }
  },
  {
    path: '/admin/dashboard',
    name: 'AdminDashboard',
    component: AdminDashboard,
    meta: { requiresAuth: true }
  }
]

const router = createRouter({
  history: createWebHistory('/DigitalWeb/'),
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else if (to.hash) {
      return {
        el: to.hash,
        behavior: 'smooth'
      }
    } else {
      return { top: 0 }
    }
  }
})

// Guard de navegación para rutas protegidas
router.beforeEach((to, from, next) => {
  const { isAuthenticated } = useAuth()

  // Si la ruta requiere autenticación
  if (to.meta.requiresAuth && !isAuthenticated.value) {
    next('/admin/login')
  }
  // Si es una ruta de invitado y está autenticado
  else if (to.meta.guest && isAuthenticated.value) {
    next('/admin/dashboard')
  }
  // Permitir navegación
  else {
    next()
  }
})

export default router
