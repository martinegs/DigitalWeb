<template>
  <section id="productos" class="py-5" style="background: transparent;">
    <div class="container py-5">
      <!-- Header -->
      <div class="text-center mb-5">
        <h2 class="display-4 fw-bold mb-3 text-white">
          Nuestros Productos
        </h2>
        <p class="lead text-white-50">Materiales de primera calidad</p>
      </div>

      <!-- Loading State -->
      <div v-if="loading" class="text-center py-5">
        <div class="spinner-border text-light" role="status">
          <span class="visually-hidden">Cargando...</span>
        </div>
      </div>

      <!-- Error State -->
      <div v-else-if="error" class="alert alert-danger" role="alert">
        {{ error }}
      </div>

      <!-- Products Grid -->
      <div v-else class="row g-4">
        <div
          v-for="product in activeProducts"
          :key="product.id"
          class="col-12 col-sm-6 col-lg-3"
        >
          <div class="product-card h-100">
            <!-- Image -->
            <div class="product-image">
              <img 
                v-if="product.image" 
                :src="`http://localhost:8000/storage/${product.image}`" 
                :alt="product.name"
                class="w-100 h-100 object-fit-cover"
              />
              <div v-else class="image-placeholder">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                  <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                </svg>
              </div>
            </div>

            <!-- Content -->
            <div class="product-content">
              <!-- Category Badge -->
              <div v-if="product.category" class="category-badge mb-2">
                {{ product.category }}
              </div>

              <!-- Title -->
              <h3 class="product-title mb-2">
                {{ product.name }}
              </h3>

              <!-- Description -->
              <p class="product-description mb-3">
                {{ product.description || 'Sin descripción disponible' }}
              </p>

              <!-- Price -->
              <div class="mb-3">
                <div class="product-price">
                  ${{ formatPrice(product.price) }}
                </div>
              </div>

              <!-- Quantity Selector -->
              <div class="quantity-selector mb-3">
                <label class="quantity-label">Cantidad:</label>
                <div class="quantity-input-group">
                  <button @click="decreaseQty(product.id)" class="qty-btn-product">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                    </svg>
                  </button>
                  <input 
                    type="number" 
                    v-model.number="productQuantities[product.id]" 
                    min="1" 
                    class="qty-input"
                  />
                  <button @click="increaseQty(product.id)" class="qty-btn-product">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Action Button -->
              <button 
                @click="addToCart(product)"
                class="btn btn-product w-100"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16" class="me-2">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                Agregar al Carrito
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Empty State -->
      <div v-if="!loading && !error && activeProducts.length === 0" class="text-center py-5">
        <p class="text-white-50">No hay productos disponibles en este momento.</p>
      </div>

      <!-- Additional Info -->
      <div class="mt-5 text-white rounded-3 p-5 text-center cta-box">
        <h3 class="h4 fw-bold mb-3">¿No encontrás lo que buscás?</h3>
        <p class="mb-4">
          Trabajamos con una amplia variedad de telas y materiales. Consultanos por tu proyecto específico.
        </p>
        <a href="#contacto" class="btn btn-light fw-bold px-5 py-2 rounded-pill" style="color: #0f172a;">
          Contactar a un Especialista
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, computed, inject, watch } from 'vue'
import { productsAPI } from '../services/api'

const products = ref([])
const loading = ref(false)
const error = ref(null)
const productQuantities = ref({})

// Inyectar la función addToCart del carrito
const addToCartFn = inject('addToCart')

// Filtrar solo productos activos
const activeProducts = computed(() => {
  return products.value.filter(product => product.is_active)
})

// Inicializar cantidades cuando se cargan los productos
watch(products, (newProducts) => {
  newProducts.forEach(product => {
    if (!productQuantities.value[product.id]) {
      productQuantities.value[product.id] = 1
    }
  })
}, { immediate: true })

const formatPrice = (price) => {
  return Number(price).toLocaleString('es-AR', {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2
  })
}

const increaseQty = (productId) => {
  productQuantities.value[productId] = (productQuantities.value[productId] || 1) + 1
}

const decreaseQty = (productId) => {
  if (productQuantities.value[productId] > 1) {
    productQuantities.value[productId]--
  }
}

const addToCart = (product) => {
  const quantity = productQuantities.value[product.id] || 1
  if (addToCartFn) {
    addToCartFn(product, quantity)
    // Reset quantity to 1 after adding
    productQuantities.value[product.id] = 1
  }
}

const loadProducts = async () => {
  loading.value = true
  error.value = null
  
  try {
    const response = await productsAPI.getAll()
    products.value = response.data.products || []
  } catch (err) {
    console.error('Error al cargar productos:', err)
    error.value = 'No se pudieron cargar los productos. Por favor, intenta más tarde.'
  } finally {
    loading.value = false
  }
}

onMounted(() => {
  loadProducts()
})
</script>

<style scoped>
.product-card {
  background: white;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
}

.product-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.product-image {
  width: 100%;
  height: 220px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  position: relative;
  overflow: hidden;
}

.product-image img {
  transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
  transform: scale(1.1);
}

.image-placeholder {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(255, 255, 255, 0.5);
}

.product-content {
  padding: 1.5rem;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.category-badge {
  display: inline-block;
  font-size: 0.75rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: #06b6d4;
  background: #ecfeff;
  padding: 0.25rem 0.75rem;
  border-radius: 9999px;
  width: fit-content;
}

.product-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 0.5rem;
  line-height: 1.3;
}

.product-description {
  font-size: 0.875rem;
  color: #64748b;
  line-height: 1.6;
  flex: 1;
}

.product-price {
  font-size: 1.5rem;
  font-weight: 700;
  color: #0f172a;
}

.stock-badge {
  font-size: 0.75rem;
  font-weight: 600;
  color: #059669;
  background: #d1fae5;
  padding: 0.25rem 0.75rem;
  border-radius: 9999px;
  display: flex;
  align-items: center;
}

.stock-badge.out-of-stock {
  color: #dc2626;
  background: #fee2e2;
}

.btn-product {
  background: linear-gradient(135deg, #06b6d4 0%, #0ea5e9 100%);
  color: white;
  font-weight: 600;
  padding: 0.875rem 1.5rem;
  border-radius: 10px;
  border: none;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  box-shadow: 0 4px 6px -1px rgba(6, 182, 212, 0.3);
  font-size: 0.95rem;
  letter-spacing: 0.3px;
}

.btn-product:hover {
  background: linear-gradient(135deg, #0ea5e9 0%, #06b6d4 100%);
  transform: translateY(-2px);
  box-shadow: 0 10px 20px -3px rgba(6, 182, 212, 0.4);
  color: white;
}

.quantity-selector {
  border-top: 1px solid #e2e8f0;
  padding-top: 1rem;
}

.quantity-label {
  font-size: 0.875rem;
  font-weight: 600;
  color: #475569;
  margin-bottom: 0.5rem;
  display: block;
}

.quantity-input-group {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background: #f8fafc;
  border-radius: 8px;
  padding: 0.5rem;
  border: 1px solid #e2e8f0;
}

.qty-btn-product {
  width: 32px;
  height: 32px;
  border: none;
  background: #0f172a;
  color: white;
  border-radius: 6px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s ease;
  flex-shrink: 0;
}

.qty-btn-product:hover {
  background: #1e293b;
  transform: scale(1.05);
}

.qty-input {
  flex: 1;
  text-align: center;
  border: none;
  background: white;
  font-weight: 600;
  color: #0f172a;
  font-size: 1rem;
  padding: 0.5rem;
  border-radius: 6px;
  width: 100%;
}

.qty-input:focus {
  outline: 2px solid #06b6d4;
  outline-offset: 2px;
}

/* Remove arrows from number input */
.qty-input::-webkit-outer-spin-button,
.qty-input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.qty-input[type=number] {
  -moz-appearance: textfield;
}

.cta-box {
  background: linear-gradient(90deg, #0f172a 0%, #1e293b 100%);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Responsive */
@media (max-width: 768px) {
  .product-image {
    height: 180px;
  }
  
  .product-title {
    font-size: 1.1rem;
  }
  
  .product-price {
    font-size: 1.25rem;
  }
}
</style>
