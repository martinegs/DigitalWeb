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

      <!-- Products Grid -->
      <div class="row g-4">
        <div
          v-for="product in products"
          :key="product.id"
          class="col-12 col-sm-6 col-lg-3"
        >
          <div class="card border-0 shadow h-100">
            <div class="card-body p-4">
              <!-- Icon/Badge -->
              <div class="d-flex justify-content-between align-items-start mb-3">
                <div class="fs-1">{{ product.icon }}</div>
                <span
                  v-if="product.badge"
                  :class="['badge px-3 py-2 fw-bold small', product.badgeColor]"
                >
                  {{ product.badge }}
                </span>
              </div>

              <!-- Title -->
              <h3 class="h5 fw-bold mb-3" style="color: #0f172a;">
                {{ product.title }}
              </h3>

              <!-- Description -->
              <p class="text-muted small mb-3">
                {{ product.description }}
              </p>

              <!-- Features -->
              <ul class="list-unstyled mb-4">
                <li
                  v-for="feature in product.features"
                  :key="feature"
                  class="d-flex align-items-start mb-2 small"
                >
                  <svg class="flex-shrink-0 me-2 mt-1" style="width: 1.25rem; height: 1.25rem; color: #06b6d4;" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-muted">{{ feature }}</span>
                </li>
              </ul>

              <!-- Button -->
              <button class="btn w-100 text-white fw-semibold" style="background-color: #0f172a;">
                Consultar
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Info -->
      <div class="mt-5 text-white rounded-3 p-5 text-center" style="background: linear-gradient(90deg, #0f172a 0%, #1e293b 100%);">
        <h3 class="h4 fw-bold mb-3">¿No encontrás lo que buscás?</h3>
        <p class="mb-4">
          Trabajamos con una amplia variedad de telas y materiales. Consultanos por tu proyecto específico.
        </p>
        <button class="btn btn-light fw-bold px-5 py-2 rounded-pill" style="color: #0f172a;">
          Contactar a un Especialista
        </button>
      </div>
    </div>
  </section>
</template>

<script setup>
const products = [
  {
    id: 1,
    icon: '📄',
    title: 'Papel de Sublimación',
    description: 'Papel de alta calidad para sublimación, disponible en diferentes gramajes y tamaños.',
    badge: 'En Stock',
    badgeColor: 'bg-success-subtle text-success',
    features: [
      'Impresión en el acto',
      'Tamaños A4, A3 y rollos',
      'Alta transferencia de color',
      'Compatible con todas las impresoras'
    ]
  },
  {
    id: 2,
    icon: '👕',
    title: 'Jersey Set Poliéster',
    description: 'Tela jersey 100% poliéster, ideal para sublimación. Perfecta para indumentaria deportiva.',
    badge: 'Popular',
    badgeColor: 'bg-info text-white',
    features: [
      '100% Poliéster',
      'Ancho: 1.50m',
      'Tacto suave',
      'Colores brillantes'
    ]
  },
  {
    id: 3,
    icon: '🧵',
    title: 'Jersey Spun',
    description: 'Jersey spun de alta calidad con excelente caída y confort. Ideal para moda urbana.',
    badge: 'Premium',
    badgeColor: 'bg-primary text-white',
    features: [
      'Mezcla premium',
      'Resistente y duradero',
      'Variedad de colores',
      'Ideal para estampado'
    ]
  },
  {
    id: 4,
    icon: '🎨',
    title: 'Diseño de Moda Digital',
    description: 'Servicio de diseño personalizado para tu marca. Desde bocetos hasta archivos listos para producción.',
    badge: 'Servicio',
    badgeColor: 'bg-warning-subtle text-warning',
    features: [
      'Diseños personalizados',
      'Archivos listos para imprimir',
      'Asesoramiento de color',
      'Revisiones incluidas'
    ]
  }
]
</script>
