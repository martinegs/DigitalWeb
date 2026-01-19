import axios from 'axios'

const api = axios.create({
  baseURL: 'http://localhost:8000/api',
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
})

// Interceptor para añadir token a las peticiones
api.interceptors.request.use(
  (config) => {
    const token = localStorage.getItem('admin_token')
    if (token) {
      config.headers.Authorization = `Bearer ${token}`
    }
    return config
  },
  (error) => {
    return Promise.reject(error)
  }
)

// Interceptor para manejar errores de respuesta
api.interceptors.response.use(
  (response) => response,
  (error) => {
    if (error.response?.status === 401) {
      localStorage.removeItem('admin_token')
      localStorage.removeItem('admin_user')
      window.location.href = '/admin/login'
    }
    return Promise.reject(error)
  }
)

// Auth API
export const authAPI = {
  login: (credentials) => api.post('/admin/login', credentials),
  logout: () => api.post('/admin/logout'),
  me: () => api.get('/admin/me')
}

// Products API
export const productsAPI = {
  getAll: () => api.get('/admin/products'),
  get: (id) => api.get(`/admin/products/${id}`),
  create: (data) => {
    // Si hay imagen, usar FormData, sino usar JSON
    if (data.image instanceof File) {
      const formData = new FormData()
      Object.keys(data).forEach(key => {
        if (data[key] !== null && data[key] !== undefined) {
          // Convertir booleanos a 1 o 0 para FormData
          if (typeof data[key] === 'boolean') {
            formData.append(key, data[key] ? 1 : 0)
          } else {
            formData.append(key, data[key])
          }
        }
      })
      return api.post('/admin/products', formData, {
        headers: { 'Content-Type': 'multipart/form-data' }
      })
    } else {
      // Enviar como JSON
      const jsonData = { ...data }
      delete jsonData.image
      return api.post('/admin/products', jsonData)
    }
  },
  update: (id, data) => {
    // Si hay imagen, usar FormData, sino usar JSON
    if (data.image instanceof File) {
      const formData = new FormData()
      Object.keys(data).forEach(key => {
        if (data[key] !== null && data[key] !== undefined) {
          // Convertir booleanos a 1 o 0 para FormData
          if (typeof data[key] === 'boolean') {
            formData.append(key, data[key] ? 1 : 0)
          } else {
            formData.append(key, data[key])
          }
        }
      })
      formData.append('_method', 'PUT')
      return api.post(`/admin/products/${id}`, formData, {
        headers: { 'Content-Type': 'multipart/form-data' }
      })
    } else {
      // Enviar como JSON con PUT
      const jsonData = { ...data }
      delete jsonData.image
      return api.put(`/admin/products/${id}`, jsonData)
    }
  },
  delete: (id) => api.delete(`/admin/products/${id}`)
}

// Categories API
export const categoriesAPI = {
  getAll: () => api.get('/admin/categories'),
  get: (id) => api.get(`/admin/categories/${id}`),
  create: (data) => api.post('/admin/categories', data),
  update: (id, data) => api.put(`/admin/categories/${id}`, data),
  delete: (id) => api.delete(`/admin/categories/${id}`)
}

// Public Products API
export const publicProductsAPI = {
  getAll: () => api.get('/products'),
  get: (id) => api.get(`/products/${id}`)
}

export default api
