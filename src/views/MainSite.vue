<script setup>
import { ref, provide } from 'vue'
import Navbar from '../components/Navbar.vue'
import HeroSection from '../components/HeroSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import DisenoSection from '../components/DisenoSection.vue'
import SistemaSection from '../components/SistemaSection.vue'
import TelasSection from '../components/TelasSection.vue'
import PapelSection from '../components/PapelSection.vue'
import DTFSection from '../components/DTFSection.vue'
import DTFMayorSection from '../components/DTFMayorSection.vue'
import RemerasSection from '../components/RemerasSection.vue'
import ProductsSection from '../components/ProductsSection.vue'
import ContactSection from '../components/ContactSection.vue'
import FooterSection from '../components/FooterSection.vue'
import ShoppingCart from '../components/ShoppingCart.vue'

const cartRef = ref(null)

// Proveer función addToCart a los componentes hijos
provide('addToCart', (product, quantity = 1) => {
  if (cartRef.value) {
    cartRef.value.addToCart(product, quantity)
  }
})
</script>

<template>
  <div class="app">
    <Navbar />
    <HeroSection />
    <!-- Orden según menú: Sublimacion, Diseño, Sistema, Telas, Papel, DTF, DTF Mayor, Remeras -->
    <ServicesSection />
    <DisenoSection />
    <SistemaSection />
    <TelasSection />
    <PapelSection />
    <DTFSection />
    <DTFMayorSection />
    <RemerasSection />
    <ProductsSection />
    <ContactSection />
    <FooterSection />
    
    <!-- Shopping Cart -->
    <ShoppingCart ref="cartRef" />
  </div>
</template>

<style scoped>
.app {
  scroll-behavior: smooth;
  background: #0f172a;
  min-height: 100vh;
  padding-top: 70px;
  position: relative;
}

/* Professional background pattern */
.app::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: 
    radial-gradient(ellipse 100% 80% at 10% 0%, rgba(6, 182, 212, 0.07), transparent 50%),
    radial-gradient(ellipse 80% 60% at 90% 20%, rgba(37, 99, 235, 0.05), transparent 50%),
    radial-gradient(ellipse 60% 40% at 50% 100%, rgba(139, 92, 246, 0.04), transparent 50%);
  pointer-events: none;
  z-index: 0;
}

/* Subtle grid pattern overlay */
.app::after {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: 
    linear-gradient(rgba(6, 182, 212, 0.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(6, 182, 212, 0.03) 1px, transparent 1px);
  background-size: 60px 60px;
  pointer-events: none;
  z-index: 0;
  opacity: 0.5;
}

.app :deep(section) {
  margin-bottom: 0;
  background: transparent !important;
  position: relative;
  z-index: 1;
}

.app :deep(section:not(:last-child))::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 60%;
  max-width: 800px;
  height: 1px;
  background: linear-gradient(90deg, 
    transparent 0%, 
    rgba(6, 182, 212, 0.6) 25%, 
    rgba(37, 99, 235, 0.8) 50%, 
    rgba(6, 182, 212, 0.6) 75%, 
    transparent 100%
  );
  box-shadow: 
    0 0 8px rgba(6, 182, 212, 0.4),
    0 0 16px rgba(6, 182, 212, 0.2);
}
</style>
