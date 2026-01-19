<template>
  <!-- Cart Button -->
  <button @click="toggleCart" class="cart-button" :class="{ 'has-items': cartCount > 0 }">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
    <span v-if="cartCount > 0" class="cart-badge">{{ cartCount }}</span>
  </button>

  <!-- Cart Sidebar -->
  <Transition name="cart-slide">
    <div v-if="isOpen" class="cart-overlay" @click="closeCart">
      <div class="cart-sidebar" @click.stop>
        <!-- Header -->
        <div class="cart-header">
          <h3 class="cart-title">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16" class="me-2">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            Carrito de Compras
          </h3>
          <button @click="closeCart" class="cart-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
          </button>
        </div>

        <!-- Empty State -->
        <div v-if="cartItems.length === 0" class="cart-empty">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" viewBox="0 0 16 16" class="empty-icon">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
          <h4>Tu carrito está vacío</h4>
          <p>Agrega productos para comenzar tu compra</p>
        </div>

        <!-- Cart Items -->
        <div v-else class="cart-items">
          <TransitionGroup name="cart-item">
            <div v-for="item in cartItems" :key="item.id" class="cart-item">
              <!-- Image -->
              <div class="item-image">
                <img 
                  v-if="item.image" 
                  :src="`http://localhost:8000/storage/${item.image}`" 
                  :alt="item.name"
                />
                <div v-else class="image-placeholder">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                  </svg>
                </div>
              </div>

              <!-- Details -->
              <div class="item-details">
                <h4 class="item-name">{{ item.name }}</h4>
                <p v-if="item.category" class="item-category">{{ item.category }}</p>
                <div class="item-price">${{ formatPrice(item.price) }}</div>
              </div>

              <!-- Quantity Controls -->
              <div class="item-controls">
                <div class="quantity-control">
                  <button @click="decreaseQuantity(item.id)" class="qty-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                    </svg>
                  </button>
                  <span class="quantity">{{ item.quantity }}</span>
                  <button @click="increaseQuantity(item.id)" class="qty-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                  </button>
                </div>
                <button @click="removeItem(item.id)" class="remove-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
                </button>
              </div>
            </div>
          </TransitionGroup>
        </div>

        <!-- Footer -->
        <div v-if="cartItems.length > 0" class="cart-footer">
          <div class="total-row">
            <span class="total-label">Subtotal</span>
            <span class="total-amount">${{ formatPrice(cartTotal) }}</span>
          </div>
          <div class="cart-actions">
            <button @click="clearCart" class="btn-clear">
              Vaciar Carrito
            </button>
            <a href="#contacto" @click="closeCart" class="btn-checkout">
              Solicitar Cotización
            </a>
          </div>
          <p class="cart-note">
            Los precios son estimados. Contactanos para una cotización exacta.
          </p>
        </div>
      </div>
    </div>
  </Transition>
</template>

<script setup>
import { ref, computed } from 'vue'

const isOpen = ref(false)
const cartItems = ref([])

const cartCount = computed(() => {
  return cartItems.value.reduce((total, item) => total + item.quantity, 0)
})

const cartTotal = computed(() => {
  return cartItems.value.reduce((total, item) => total + (item.price * item.quantity), 0)
})

const toggleCart = () => {
  isOpen.value = !isOpen.value
}

const closeCart = () => {
  isOpen.value = false
}

const addToCart = (product, quantity = 1) => {
  const existingItem = cartItems.value.find(item => item.id === product.id)
  
  if (existingItem) {
    existingItem.quantity += quantity
  } else {
    cartItems.value.push({
      ...product,
      quantity: quantity
    })
  }
}

const removeItem = (id) => {
  cartItems.value = cartItems.value.filter(item => item.id !== id)
}

const increaseQuantity = (id) => {
  const item = cartItems.value.find(item => item.id === id)
  if (item) {
    item.quantity++
  }
}

const decreaseQuantity = (id) => {
  const item = cartItems.value.find(item => item.id === id)
  if (item) {
    if (item.quantity > 1) {
      item.quantity--
    } else {
      removeItem(id)
    }
  }
}

const clearCart = () => {
  if (confirm('¿Estás seguro de que quieres vaciar el carrito?')) {
    cartItems.value = []
  }
}

const formatPrice = (price) => {
  return Number(price).toLocaleString('es-AR', {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2
  })
}

// Exponer método para agregar al carrito desde otros componentes
defineExpose({
  addToCart
})
</script>

<style scoped>
/* Cart Button */
.cart-button {
  position: fixed;
  bottom: 2rem;
  right: 2rem;
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
  border: none;
  border-radius: 50%;
  color: white;
  cursor: pointer;
  box-shadow: 0 10px 25px rgba(6, 182, 212, 0.4);
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 999;
}

.cart-button:hover {
  transform: scale(1.1) translateY(-2px);
  box-shadow: 0 15px 35px rgba(6, 182, 212, 0.5);
}

.cart-button.has-items {
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0%, 100% {
    box-shadow: 0 10px 25px rgba(6, 182, 212, 0.4);
  }
  50% {
    box-shadow: 0 10px 35px rgba(6, 182, 212, 0.6);
  }
}

.cart-badge {
  position: absolute;
  top: -5px;
  right: -5px;
  background: #ef4444;
  color: white;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.75rem;
  font-weight: 700;
  border: 3px solid white;
}

/* Cart Overlay */
.cart-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
  backdrop-filter: blur(4px);
  z-index: 1000;
  display: flex;
  justify-content: flex-end;
}

/* Cart Sidebar */
.cart-sidebar {
  width: 100%;
  max-width: 450px;
  background: white;
  height: 100vh;
  display: flex;
  flex-direction: column;
  box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
}

/* Header */
.cart-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.5rem;
  border-bottom: 2px solid #f1f5f9;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  color: white;
}

.cart-title {
  margin: 0;
  font-size: 1.25rem;
  font-weight: 700;
  display: flex;
  align-items: center;
}

.cart-close {
  background: rgba(255, 255, 255, 0.1);
  border: none;
  width: 40px;
  height: 40px;
  border-radius: 8px;
  color: white;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.cart-close:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: rotate(90deg);
}

/* Empty State */
.cart-empty {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 3rem 2rem;
  text-align: center;
}

.empty-icon {
  color: #cbd5e1;
  margin-bottom: 1.5rem;
}

.cart-empty h4 {
  font-size: 1.25rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 0.5rem;
}

.cart-empty p {
  color: #64748b;
  margin: 0;
}

/* Cart Items */
.cart-items {
  flex: 1;
  overflow-y: auto;
  padding: 1rem;
}

.cart-item {
  display: flex;
  gap: 1rem;
  padding: 1rem;
  background: #f8fafc;
  border-radius: 12px;
  margin-bottom: 1rem;
  transition: all 0.3s ease;
}

.cart-item:hover {
  background: #f1f5f9;
  transform: translateX(-4px);
}

.item-image {
  width: 80px;
  height: 80px;
  border-radius: 8px;
  overflow: hidden;
  flex-shrink: 0;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.item-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.image-placeholder {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(255, 255, 255, 0.5);
}

.item-details {
  flex: 1;
  min-width: 0;
}

.item-name {
  font-size: 0.95rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0 0 0.25rem 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.item-category {
  font-size: 0.75rem;
  color: #06b6d4;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 0.05em;
  margin: 0 0 0.5rem 0;
}

.item-price {
  font-size: 1.1rem;
  font-weight: 700;
  color: #0f172a;
}

.item-controls {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
  align-items: flex-end;
}

.quantity-control {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background: white;
  border-radius: 8px;
  padding: 0.25rem;
  border: 1px solid #e2e8f0;
}

.qty-btn {
  width: 28px;
  height: 28px;
  border: none;
  background: #0f172a;
  color: white;
  border-radius: 6px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s ease;
}

.qty-btn:hover {
  background: #1e293b;
  transform: scale(1.1);
}

.quantity {
  min-width: 30px;
  text-align: center;
  font-weight: 600;
  color: #0f172a;
}

.remove-btn {
  background: #fee2e2;
  border: none;
  width: 36px;
  height: 36px;
  border-radius: 8px;
  color: #dc2626;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.remove-btn:hover {
  background: #fecaca;
  transform: scale(1.1);
}

/* Footer */
.cart-footer {
  border-top: 2px solid #f1f5f9;
  padding: 1.5rem;
  background: white;
}

.total-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid #e2e8f0;
}

.total-label {
  font-size: 1.1rem;
  font-weight: 600;
  color: #64748b;
}

.total-amount {
  font-size: 1.75rem;
  font-weight: 700;
  color: #0f172a;
}

.cart-actions {
  display: flex;
  gap: 0.75rem;
  margin-bottom: 1rem;
}

.btn-clear {
  flex: 1;
  padding: 0.875rem;
  border: 2px solid #e2e8f0;
  background: white;
  color: #64748b;
  font-weight: 600;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-clear:hover {
  border-color: #cbd5e1;
  background: #f8fafc;
}

.btn-checkout {
  flex: 2;
  padding: 0.875rem;
  background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
  color: white;
  font-weight: 700;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: center;
}

.btn-checkout:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 20px rgba(6, 182, 212, 0.3);
  color: white;
}

.cart-note {
  font-size: 0.8rem;
  color: #64748b;
  text-align: center;
  margin: 0;
  font-style: italic;
}

/* Animations */
.cart-slide-enter-active,
.cart-slide-leave-active {
  transition: all 0.3s ease;
}

.cart-slide-enter-active .cart-sidebar,
.cart-slide-leave-active .cart-sidebar {
  transition: transform 0.3s ease;
}

.cart-slide-enter-from,
.cart-slide-leave-to {
  opacity: 0;
}

.cart-slide-enter-from .cart-sidebar {
  transform: translateX(100%);
}

.cart-slide-leave-to .cart-sidebar {
  transform: translateX(100%);
}

.cart-item-enter-active,
.cart-item-leave-active {
  transition: all 0.3s ease;
}

.cart-item-enter-from {
  opacity: 0;
  transform: translateX(30px);
}

.cart-item-leave-to {
  opacity: 0;
  transform: translateX(-30px);
}

/* Responsive */
@media (max-width: 768px) {
  .cart-sidebar {
    max-width: 100%;
  }
  
  .cart-button {
    bottom: 1.5rem;
    right: 1.5rem;
    width: 56px;
    height: 56px;
  }
}
</style>
