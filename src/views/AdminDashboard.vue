<template>
  <div class="admin-dashboard">
    <!-- Navbar Admin -->
    <nav class="admin-navbar">
      <div class="navbar-content">
        <div class="navbar-brand">
          <span class="brand-icon">⚙️</span>
          <span class="brand-text">Admin Panel</span>
        </div>
        <div class="navbar-actions">
          <span class="user-info">👤 {{ user?.name }}</span>
          <button @click="handleLogout" class="logout-btn">
            Cerrar Sesión
          </button>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="dashboard-content">
      <div class="container">
        <!-- Tabs -->
        <div class="tabs-container">
          <button 
            @click="activeTab = 'products'" 
            :class="['tab-button', { 'active': activeTab === 'products' }]"
          >
            📦 Productos
          </button>
          <button 
            @click="activeTab = 'categories'" 
            :class="['tab-button', { 'active': activeTab === 'categories' }]"
          >
            🏷️ Categorías
          </button>
        </div>

        <!-- PRODUCTOS TAB -->
        <div v-show="activeTab === 'products'">
          <!-- Header -->
          <div class="dashboard-header">
            <div>
              <h1 class="page-title">Gestión de Productos</h1>
              <p class="page-subtitle">Administra el catálogo de productos</p>
            </div>
            <button @click="showProductModal = true; editingProduct = null" class="btn-primary">
              ➕ Nuevo Producto
            </button>
          </div>

        <!-- Loading -->
        <div v-if="loading" class="loading-state">
          <div class="spinner-large"></div>
          <p>Cargando productos...</p>
        </div>

        <!-- Products Table -->
        <div v-else class="products-table-container">
          <table class="products-table">
            <thead>
              <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="product in products" :key="product.id">
                <td>
                  <div class="product-image">
                    <img 
                      v-if="product.image" 
                      :src="`http://localhost:8000/storage/${product.image}`" 
                      :alt="product.name"
                    />
                    <div v-else class="no-image">📦</div>
                  </div>
                </td>
                <td class="product-name">{{ product.name }}</td>
                <td>
                  <span class="category-badge">{{ product.category || 'Sin categoría' }}</span>
                </td>
                <td class="product-price">${{ product.price }}</td>
                <td class="product-stock">{{ product.stock }}</td>
                <td>
                  <span :class="['status-badge', product.is_active ? 'status-active' : 'status-inactive']">
                    {{ product.is_active ? 'Activo' : 'Inactivo' }}
                  </span>
                </td>
                <td class="actions-cell">
                  <button @click="editProduct(product)" class="btn-edit" title="Editar">
                    ✏️
                  </button>
                  <button @click="deleteProduct(product.id)" class="btn-delete" title="Eliminar">
                    🗑️
                  </button>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- Empty State -->
          <div v-if="!products.length" class="empty-state">
            <div class="empty-icon">📦</div>
            <h3>No hay productos</h3>
            <p>Comienza agregando tu primer producto</p>
          </div>
        </div>
      </div>

      <!-- CATEGORÍAS TAB -->
      <div v-show="activeTab === 'categories'">
        <!-- Header -->
        <div class="dashboard-header">
          <div>
            <h1 class="page-title">Gestión de Categorías</h1>
            <p class="page-subtitle">Administra las categorías de productos</p>
          </div>
          <button @click="showCategoryModal = true; editingCategory = null" class="btn-primary">
            ➕ Nueva Categoría
          </button>
        </div>

        <!-- Categories Table -->
        <div class="products-table-container">
          <table class="products-table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="category in categories" :key="category.id">
                <td class="product-name">{{ category.name }}</td>
                <td>{{ category.description || '-' }}</td>
                <td>
                  <span :class="['status-badge', category.is_active ? 'status-active' : 'status-inactive']">
                    {{ category.is_active ? 'Activa' : 'Inactiva' }}
                  </span>
                </td>
                <td class="actions-cell">
                  <button @click="editCategory(category)" class="btn-edit" title="Editar">
                    ✏️
                  </button>
                  <button @click="deleteCategory(category.id)" class="btn-delete" title="Eliminar">
                    🗑️
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>

    <!-- Product Modal -->
    <div v-if="showProductModal" class="modal-overlay" @click.self="closeModal">
      <div class="modal-content">
        <div class="modal-header">
          <h2>{{ editingProduct ? 'Editar Producto' : 'Nuevo Producto' }}</h2>
          <button @click="closeModal" class="modal-close">✕</button>
        </div>
        
        <form @submit.prevent="saveProduct" class="product-form">
          <div class="form-row">
            <div class="form-group">
              <label>Nombre *</label>
              <input v-model="productForm.name" type="text" required class="form-control" />
            </div>
            
            <div class="form-group">
              <label>Categoría</label>
              <select v-model="productForm.category" class="form-control">
                <option value="">Sin categoría</option>
                <option v-for="cat in activeCategories" :key="cat.id" :value="cat.name">
                  {{ cat.name }}
                </option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Descripción</label>
            <textarea v-model="productForm.description" rows="3" class="form-control"></textarea>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label>Precio *</label>
              <input v-model="productForm.price" type="number" step="0.01" required class="form-control" />
            </div>
            
            <div class="form-group">
              <label>¿Stock infinito?</label>
              <label class="checkbox-label checkbox-large">
                <input v-model="productForm.infinite_stock" type="checkbox" class="checkbox-big" />
              </label>
            </div>

            <div class="form-group">
              <label>Stock</label>
              <input 
                v-if="productForm.infinite_stock"
                type="text" 
                value="∞ Infinito" 
                class="form-control"
                disabled
                readonly
              />
              <input 
                v-else
                v-model="productForm.stock" 
                type="number" 
                min="0" 
                class="form-control"
                placeholder="0"
              />
            </div>
          </div>

          <div class="form-group">
            <label>Imagen</label>
            <input @change="handleImageChange" type="file" accept="image/*" class="form-control" />
            <div v-if="imagePreview" class="image-preview">
              <img :src="imagePreview" alt="Preview" />
            </div>
          </div>

          <div class="form-group">
            <label class="checkbox-label">
              <input v-model="productForm.is_active" type="checkbox" />
              <span>Producto activo</span>
            </label>
          </div>

          <div class="modal-footer">
            <button type="button" @click="closeModal" class="btn-secondary">
              Cancelar
            </button>
            <button type="submit" class="btn-primary" :disabled="saving">
              {{ saving ? 'Guardando...' : 'Guardar' }}
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Category Modal -->
    <div v-if="showCategoryModal" class="modal-overlay" @click.self="closeCategoryModal">
      <div class="modal-content">
        <div class="modal-header">
          <h2>{{ editingCategory ? 'Editar Categoría' : 'Nueva Categoría' }}</h2>
          <button @click="closeCategoryModal" class="modal-close">✕</button>
        </div>
        
        <form @submit.prevent="saveCategory" class="product-form">
          <div class="form-group">
            <label>Nombre *</label>
            <input v-model="categoryForm.name" type="text" required class="form-control" />
          </div>

          <div class="form-group">
            <label>Descripción</label>
            <textarea v-model="categoryForm.description" rows="3" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label class="checkbox-label">
              <input v-model="categoryForm.is_active" type="checkbox" />
              <span>Categoría activa</span>
            </label>
          </div>

          <div class="modal-footer">
            <button type="button" @click="closeCategoryModal" class="btn-secondary">
              Cancelar
            </button>
            <button type="submit" class="btn-primary" :disabled="saving">
              {{ saving ? 'Guardando...' : 'Guardar' }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue'
import { useRouter } from 'vue-router'
import { useAuth } from '../composables/useAuth'
import { productsAPI, categoriesAPI } from '../services/api'

const router = useRouter()
const { user, logout } = useAuth()

const activeTab = ref('products')
const products = ref([])
const categories = ref([])
const loading = ref(false)
const saving = ref(false)
const showProductModal = ref(false)
const showCategoryModal = ref(false)
const editingProduct = ref(null)
const editingCategory = ref(null)
const imagePreview = ref(null)

const activeCategories = computed(() => {
  return categories.value.filter(cat => cat.is_active)
})

const productForm = ref({
  name: '',
  description: '',
  price: '',
  category: '',
  image: null,
  stock: 0,
  infinite_stock: false,
  is_active: true
})

const categoryForm = ref({
  name: '',
  description: '',
  is_active: true
})

const loadProducts = async () => {
  loading.value = true
  try {
    const response = await productsAPI.getAll()
    products.value = response.data.products
  } catch (error) {
    console.error('Error al cargar productos:', error)
    alert('Error al cargar productos')
  } finally {
    loading.value = false
  }
}

const editProduct = (product) => {
  editingProduct.value = product
  productForm.value = {
    name: product.name,
    description: product.description || '',
    price: product.price,
    category: product.category || '',
    image: null,
    stock: product.stock >= 999999 ? 0 : (product.stock || 0), // Si es infinito, mostrar 0 en el campo
    infinite_stock: product.has_stock === true || product.stock >= 999999, // has_stock true o stock infinito
    is_active: product.is_active
  }
  if (product.image) {
    imagePreview.value = `http://localhost:8000/storage/${product.image}`
  }
  showProductModal.value = true
}

const saveProduct = async () => {
  saving.value = true
  try {
    // Validar que los campos requeridos estén completos
    if (!productForm.value.name || !productForm.value.price) {
      alert('Por favor completa los campos obligatorios (Nombre y Precio)')
      saving.value = false
      return
    }

    const formData = { ...productForm.value }
    
    // Limpiar campos vacíos excepto image
    if (!formData.description) delete formData.description
    if (!formData.category) delete formData.category
    
    // Convertir infinite_stock a has_stock (invertir lógica)
    // Si infinite_stock = true, significa que has_stock = true (stock infinito)
    const infiniteStock = formData.infinite_stock === true || formData.infinite_stock === 'true' || formData.infinite_stock === 1
    formData.has_stock = infiniteStock
    delete formData.infinite_stock
    
    // Si tiene stock infinito, guardar 999999 en BD (número muy grande)
    if (infiniteStock) {
      formData.stock = 999999
    } else if (!formData.stock || formData.stock < 0) {
      formData.stock = 0
    }
    
    // Asegurar que is_active sea booleano
    formData.is_active = formData.is_active === true || formData.is_active === 'true' || formData.is_active === 1
    
    console.log('Datos a enviar:', formData)
    console.log('Tipo de is_active:', typeof formData.is_active, formData.is_active)
    console.log('Tipo de has_stock:', typeof formData.has_stock, formData.has_stock)
    console.log('Tipo de image:', typeof formData.image, formData.image)
    
    if (editingProduct.value) {
      await productsAPI.update(editingProduct.value.id, formData)
    } else {
      await productsAPI.create(formData)
    }
    
    await loadProducts()
    closeModal()
  } catch (error) {
    console.error('Error al guardar producto:', error)
    const errorMsg = error.response?.data?.message || 'Error al guardar producto'
    alert(errorMsg)
  } finally {
    saving.value = false
  }
}

const deleteProduct = async (id) => {
  if (!confirm('¿Estás seguro de eliminar este producto?')) return
  
  try {
    await productsAPI.delete(id)
    await loadProducts()
  } catch (error) {
    console.error('Error al eliminar producto:', error)
    alert('Error al eliminar producto')
  }
}

const handleImageChange = (event) => {
  const file = event.target.files[0]
  if (file) {
    productForm.value.image = file
    
    const reader = new FileReader()
    reader.onload = (e) => {
      imagePreview.value = e.target.result
    }
    reader.readAsDataURL(file)
  }
}

const closeModal = () => {
  showProductModal.value = false
  editingProduct.value = null
  imagePreview.value = null
  productForm.value = {
    name: '',
    description: '',
    price: '',
    category: '',
    image: null,
    stock: 0,
    infinite_stock: false,
    is_active: true
  }
}

const handleLogout = async () => {
  await logout()
  router.push('/admin/login')
}

// Categorías
const loadCategories = async () => {
  try {
    const response = await categoriesAPI.getAll()
    categories.value = response.data.categories
  } catch (error) {
    console.error('Error al cargar categorías:', error)
  }
}

const editCategory = (category) => {
  editingCategory.value = category
  categoryForm.value = {
    name: category.name,
    description: category.description || '',
    is_active: category.is_active
  }
  showCategoryModal.value = true
}

const saveCategory = async () => {
  saving.value = true
  try {
    if (!categoryForm.value.name) {
      alert('Por favor completa el nombre de la categoría')
      saving.value = false
      return
    }

    const formData = { ...categoryForm.value }
    formData.is_active = formData.is_active === true || formData.is_active === 'true' || formData.is_active === 1

    if (editingCategory.value) {
      await categoriesAPI.update(editingCategory.value.id, formData)
    } else {
      await categoriesAPI.create(formData)
    }

    await loadCategories()
    closeCategoryModal()
  } catch (error) {
    console.error('Error al guardar categoría:', error)
    const errorMsg = error.response?.data?.message || 'Error al guardar categoría'
    alert(errorMsg)
  } finally {
    saving.value = false
  }
}

const deleteCategory = async (id) => {
  if (!confirm('¿Estás seguro de que quieres eliminar esta categoría?')) return

  try {
    await categoriesAPI.delete(id)
    await loadCategories()
  } catch (error) {
    console.error('Error al eliminar categoría:', error)
    const errorMsg = error.response?.data?.message || 'Error al eliminar categoría'
    alert(errorMsg)
  }
}

const closeCategoryModal = () => {
  showCategoryModal.value = false
  editingCategory.value = null
  categoryForm.value = {
    name: '',
    description: '',
    is_active: true
  }
}

onMounted(() => {
  loadProducts()
  loadCategories()
})
</script>

<style scoped>
.admin-dashboard {
  min-height: 100vh;
  background: #0f172a;
}

/* Navbar */
.admin-navbar {
  background: rgba(15, 23, 42, 0.95);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  position: sticky;
  top: 0;
  z-index: 100;
}

.navbar-content {
  max-width: 1400px;
  margin: 0 auto;
  padding: 1rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar-brand {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  font-size: 1.25rem;
  font-weight: 700;
  color: white;
}

.brand-icon {
  font-size: 1.5rem;
}

.navbar-actions {
  display: flex;
  align-items: center;
  gap: 1.5rem;
}

.user-info {
  color: rgba(255, 255, 255, 0.7);
  font-size: 0.9rem;
}

.logout-btn {
  padding: 0.5rem 1.25rem;
  background: rgba(239, 68, 68, 0.2);
  border: 1px solid rgba(239, 68, 68, 0.3);
  color: #fca5a5;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.logout-btn:hover {
  background: rgba(239, 68, 68, 0.3);
  border-color: rgba(239, 68, 68, 0.5);
}

/* Dashboard Content */
.dashboard-content {
  padding: 2rem;
}

.container {
  max-width: 1400px;
  margin: 0 auto;
}

.dashboard-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 2rem;
}

.page-title {
  font-size: 2rem;
  font-weight: 800;
  color: white;
  margin-bottom: 0.5rem;
}

.page-subtitle {
  color: rgba(255, 255, 255, 0.6);
}

.btn-primary {
  padding: 0.75rem 1.5rem;
  background: linear-gradient(135deg, #06b6d4, #8b5cf6);
  border: none;
  border-radius: 10px;
  color: white;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(6, 182, 212, 0.4);
}

/* Loading State */
.loading-state {
  text-align: center;
  padding: 4rem;
  color: rgba(255, 255, 255, 0.6);
}

.spinner-large {
  width: 50px;
  height: 50px;
  border: 4px solid rgba(255, 255, 255, 0.1);
  border-top-color: #06b6d4;
  border-radius: 50%;
  animation: spin 0.8s linear infinite;
  margin: 0 auto 1rem;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

/* Products Table */
.products-table-container {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 16px;
  overflow: hidden;
}

.products-table {
  width: 100%;
  border-collapse: collapse;
}

.products-table thead {
  background: rgba(255, 255, 255, 0.05);
}

.products-table th {
  padding: 1rem;
  text-align: left;
  color: rgba(255, 255, 255, 0.9);
  font-weight: 600;
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.products-table td {
  padding: 1rem;
  color: rgba(255, 255, 255, 0.8);
  border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.product-image {
  width: 60px;
  height: 60px;
  border-radius: 8px;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.05);
  display: flex;
  align-items: center;
  justify-content: center;
}

.product-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.no-image {
  font-size: 1.5rem;
}

.product-name {
  font-weight: 600;
  color: white;
}

.product-price {
  font-weight: 700;
  color: #06b6d4;
}

.category-badge {
  display: inline-block;
  padding: 0.25rem 0.75rem;
  background: rgba(139, 92, 246, 0.2);
  border: 1px solid rgba(139, 92, 246, 0.3);
  color: #c4b5fd;
  border-radius: 20px;
  font-size: 0.85rem;
}

.status-badge {
  display: inline-block;
  padding: 0.25rem 0.75rem;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
}

.status-active {
  background: rgba(34, 197, 94, 0.2);
  border: 1px solid rgba(34, 197, 94, 0.3);
  color: #86efac;
}

.status-inactive {
  background: rgba(156, 163, 175, 0.2);
  border: 1px solid rgba(156, 163, 175, 0.3);
  color: #d1d5db;
}

.actions-cell {
  display: flex;
  gap: 0.5rem;
}

.btn-edit, .btn-delete {
  padding: 0.5rem;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 1.1rem;
}

.btn-edit {
  background: rgba(59, 130, 246, 0.2);
  border: 1px solid rgba(59, 130, 246, 0.3);
}

.btn-edit:hover {
  background: rgba(59, 130, 246, 0.3);
}

.btn-delete {
  background: rgba(239, 68, 68, 0.2);
  border: 1px solid rgba(239, 68, 68, 0.3);
}

.btn-delete:hover {
  background: rgba(239, 68, 68, 0.3);
}

/* Empty State */
.empty-state {
  text-align: center;
  padding: 4rem 2rem;
  color: rgba(255, 255, 255, 0.6);
}

.empty-icon {
  font-size: 4rem;
  margin-bottom: 1rem;
  opacity: 0.5;
}

/* Modal */
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(4px);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
  padding: 2rem;
  animation: fadeIn 0.2s ease;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes slideUp {
  from {
    transform: translateY(20px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.modal-content {
  background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
  border-radius: 20px;
  width: 100%;
  max-width: 650px;
  max-height: 90vh;
  overflow: hidden;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5),
              0 0 0 1px rgba(255, 255, 255, 0.1);
  animation: slideUp 0.3s ease;
}

.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 2rem 2rem 1.5rem 2rem;
  background: linear-gradient(135deg, rgba(6, 182, 212, 0.15) 0%, rgba(139, 92, 246, 0.1) 100%);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  position: relative;
  overflow: hidden;
}

.modal-header::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: linear-gradient(90deg, #06b6d4, #8b5cf6);
}

.modal-header h2 {
  color: white;
  font-size: 1.75rem;
  font-weight: 700;
  letter-spacing: -0.5px;
}

.modal-close {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.7);
  font-size: 1.5rem;
  cursor: pointer;
  padding: 0.5rem;
  line-height: 1;
  width: 40px;
  height: 40px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.modal-close:hover {
  color: white;
  background: rgba(239, 68, 68, 0.2);
  border-color: rgba(239, 68, 68, 0.3);
  transform: rotate(90deg);
}

.product-form {
  padding: 2rem;
  max-height: calc(90vh - 180px);
  overflow-y: auto;
}

.form-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.25rem;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group label {
  display: block;
  color: rgba(255, 255, 255, 0.95);
  font-weight: 600;
  margin-bottom: 0.6rem;
  font-size: 0.95rem;
  letter-spacing: 0.3px;
}

.form-control {
  width: 100%;
  padding: 0.85rem 1rem;
  background: rgba(255, 255, 255, 0.06);
  border: 1.5px solid rgba(255, 255, 255, 0.12);
  border-radius: 10px;
  color: white;
  font-size: 1rem;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.form-control:hover {
  border-color: rgba(6, 182, 212, 0.3);
  background: rgba(255, 255, 255, 0.08);
}

.form-control:focus {
  outline: none;
  border-color: #06b6d4;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.1);
}

textarea.form-control {
  resize: vertical;
}

.checkbox-label {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  cursor: pointer;
}

.checkbox-label input[type="checkbox"] {
  width: 20px;
  height: 20px;
  cursor: pointer;
  accent-color: #06b6d4;
}

.checkbox-large {
  padding: 0.85rem 1rem;
  background: rgba(6, 182, 212, 0.1);
  border-radius: 10px;
  border: 1.5px solid rgba(6, 182, 212, 0.3);
  transition: all 0.3s ease;
  height: 52px;
  display: flex;
  align-items: center;
}

.checkbox-large:hover {
  background: rgba(6, 182, 212, 0.15);
  border-color: rgba(6, 182, 212, 0.5);
}

.checkbox-big {
  width: 24px !important;
  height: 24px !important;
  cursor: pointer;
}

.checkbox-text-large {
  font-size: 1.1rem;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.95);
}

.form-control:disabled {
  background: linear-gradient(135deg, rgba(6, 182, 212, 0.15) 0%, rgba(6, 182, 212, 0.08) 100%);
  border: 1.5px solid rgba(6, 182, 212, 0.35);
  color: #06b6d4;
  cursor: not-allowed;
  font-weight: 700;
  text-align: center;
  font-size: 1.1rem;
  letter-spacing: 1px;
}

.form-control:disabled::placeholder {
  color: rgba(6, 182, 212, 0.8);
  font-weight: 600;
}

.image-preview {
  margin-top: 1rem;
  border-radius: 8px;
  overflow: hidden;
  max-width: 200px;
}

.image-preview img {
  width: 100%;
  height: auto;
  display: block;
}

.modal-footer {
  display: flex;
  justify-content: flex-end;
  gap: 1rem;
  padding: 1.5rem;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.btn-secondary {
  padding: 0.75rem 1.5rem;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.8);
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-secondary:hover {
  background: rgba(255, 255, 255, 0.08);
}

/* Tabs */
.tabs-container {
  display: flex;
  gap: 0.5rem;
  margin-bottom: 2rem;
  border-bottom: 2px solid rgba(255, 255, 255, 0.1);
}

.tab-button {
  padding: 1rem 2rem;
  background: none;
  border: none;
  color: rgba(255, 255, 255, 0.6);
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  border-bottom: 3px solid transparent;
  transition: all 0.3s ease;
  font-family: inherit;
}

.tab-button:hover {
  color: white;
  background: rgba(255, 255, 255, 0.05);
}

.tab-button.active {
  color: #06b6d4;
  border-bottom-color: #06b6d4;
}

.form-text {
  display: block;
  margin-top: 0.5rem;
  font-size: 0.875rem;
  color: rgba(255, 255, 255, 0.5);
  font-style: italic;
}

select.form-control {
  cursor: pointer;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23ffffff' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 12px;
  padding-right: 2.5rem;
  appearance: none;
}

select.form-control option {
  background: #1e293b;
  color: white;
  padding: 0.5rem;
}

@media (max-width: 768px) {
  .form-row {
    grid-template-columns: 1fr;
  }

  .dashboard-header {
    flex-direction: column;
    gap: 1rem;
  }

  .products-table {
    font-size: 0.85rem;
  }

  .products-table th,
  .products-table td {
    padding: 0.75rem 0.5rem;
  }
}
</style>
