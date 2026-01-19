import { ref, computed } from 'vue'
import { authAPI } from '../services/api'

const user = ref(null)
const token = ref(null)
const loading = ref(false)
const error = ref(null)

// Cargar usuario desde localStorage al iniciar
const savedToken = localStorage.getItem('admin_token')
const savedUser = localStorage.getItem('admin_user')

if (savedToken && savedUser) {
  token.value = savedToken
  user.value = JSON.parse(savedUser)
}

export function useAuth() {
  const isAuthenticated = computed(() => !!token.value)

  const login = async (credentials) => {
    loading.value = true
    error.value = null
    try {
      const response = await authAPI.login(credentials)
      token.value = response.data.token
      user.value = response.data.user
      
      // Guardar en localStorage
      localStorage.setItem('admin_token', response.data.token)
      localStorage.setItem('admin_user', JSON.stringify(response.data.user))
      
      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Error al iniciar sesión'
      throw err
    } finally {
      loading.value = false
    }
  }

  const logout = async () => {
    loading.value = true
    try {
      await authAPI.logout()
    } catch (err) {
      console.error('Error al cerrar sesión:', err)
    } finally {
      // Limpiar estado
      token.value = null
      user.value = null
      localStorage.removeItem('admin_token')
      localStorage.removeItem('admin_user')
      loading.value = false
    }
  }

  const checkAuth = async () => {
    if (!token.value) return false
    
    try {
      const response = await authAPI.me()
      user.value = response.data.user
      return true
    } catch (err) {
      // Token inválido
      logout()
      return false
    }
  }

  return {
    user,
    token,
    loading,
    error,
    isAuthenticated,
    login,
    logout,
    checkAuth
  }
}
