<template>
  <nav class="custom-navbar fixed-top">
    <div class="nav-container">
      <a class="nav-logo" href="#inicio" @click.prevent="scrollToSection('inicio')">
        <img src="/logo-login.png" alt="DigitalTex" />
        <span class="logo-glow"></span>
      </a>
      
      <div class="nav-links">
        <a 
          v-for="link in navLinks" 
          :key="link.id"
          :href="`#${link.id}`"
          @click.prevent="scrollToSection(link.id)"
          class="nav-link"
          :class="{ 'active': activeSection === link.id }"
        >
          <span class="link-text">{{ link.label }}</span>
          <span class="link-indicator"></span>
        </a>
      </div>

      <button class="nav-cta" @click="scrollToSection('contacto')">
        Contactar
      </button>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const activeSection = ref('')

const navLinks = [
  { id: 'sublimacion', label: 'Sublimación' },
  { id: 'diseno', label: 'Diseño' },
  { id: 'sistema', label: 'Sistema' },
  { id: 'telas', label: 'Telas' },
  { id: 'papel', label: 'Papel' },
  { id: 'dtf', label: 'DTF' },
  { id: 'dtf-mayor', label: 'Mayorista' },
  { id: 'remeras', label: 'Remeras' },
  { id: 'productos', label: 'Productos' }
]

const scrollToSection = (id) => {
  const element = document.getElementById(id)
  if (element) {
    const offset = 80
    const elementPosition = element.getBoundingClientRect().top
    const offsetPosition = elementPosition + window.pageYOffset - offset

    window.scrollTo({
      top: offsetPosition,
      behavior: 'smooth'
    })
  }
}

const handleScroll = () => {
  const sections = navLinks.map(link => document.getElementById(link.id))
  const scrollPos = window.scrollY + 150

  for (let i = sections.length - 1; i >= 0; i--) {
    const section = sections[i]
    if (section && section.offsetTop <= scrollPos) {
      activeSection.value = navLinks[i].id
      break
    }
  }
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
  handleScroll()
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<style scoped>
.custom-navbar {
  background: rgba(3, 7, 18, 0.8);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  padding: 12px 0;
  z-index: 9999;
  transition: all 0.3s ease;
}

.custom-navbar:hover {
  background: rgba(3, 7, 18, 0.95);
}

.nav-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.nav-logo {
  position: relative;
  display: flex;
  align-items: center;
  text-decoration: none;
}

.nav-logo img {
  height: 38px;
  width: auto;
  object-fit: contain;
  transition: all 0.3s ease;
}

.nav-logo:hover img {
  transform: scale(1.05);
  filter: drop-shadow(0 0 10px rgba(6, 182, 212, 0.5));
}

.logo-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  background: radial-gradient(circle, rgba(6, 182, 212, 0.3) 0%, transparent 70%);
  border-radius: 50%;
  opacity: 0;
  transition: opacity 0.3s ease;
  pointer-events: none;
}

.nav-logo:hover .logo-glow {
  opacity: 1;
}

.nav-links {
  display: flex;
  align-items: center;
  gap: 4px;
}

.nav-link {
  position: relative;
  padding: 10px 14px;
  color: #94a3b8;
  font-size: 0.85rem;
  font-weight: 500;
  text-decoration: none;
  border-radius: 8px;
  transition: all 0.3s ease;
  overflow: hidden;
}

.nav-link:hover {
  color: #f8fafc;
  background: rgba(255, 255, 255, 0.05);
}

.nav-link.active {
  color: #22d3ee;
}

.link-text {
  position: relative;
  z-index: 1;
}

.link-indicator {
  position: absolute;
  bottom: 4px;
  left: 50%;
  transform: translateX(-50%) scaleX(0);
  width: 20px;
  height: 2px;
  background: linear-gradient(90deg, #06b6d4, #8b5cf6);
  border-radius: 2px;
  transition: transform 0.3s ease;
}

.nav-link:hover .link-indicator,
.nav-link.active .link-indicator {
  transform: translateX(-50%) scaleX(1);
}

.nav-cta {
  padding: 10px 24px;
  background: linear-gradient(135deg, #06b6d4 0%, #8b5cf6 100%);
  border: none;
  border-radius: 50px;
  color: white;
  font-size: 0.85rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 2px 10px rgba(6, 182, 212, 0.3);
}

.nav-cta:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 20px rgba(6, 182, 212, 0.5);
}

/* Mobile responsiveness */
@media (max-width: 1200px) {
  .nav-link {
    padding: 8px 10px;
    font-size: 0.8rem;
  }
}

@media (max-width: 992px) {
  .nav-links {
    display: none;
  }
  
  .nav-cta {
    display: block;
  }
}
</style>
