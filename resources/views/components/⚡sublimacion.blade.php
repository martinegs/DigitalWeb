<template>
  <section id="sublimacion" class="premium-section">
    <div class="container">
      <!-- Section Header -->
      <div class="section-header">
        <div class="section-badge">
          <span>🔥</span> Servicio Principal
        </div>
        <h2 class="section-title">
          Sublimación por <span class="highlight">Calandra</span>
        </h2>
        <p class="section-description">
          El método más conveniente, rápido y seguro para sublimar tus telas. Una sola calandra produce más de 1000 metros lineales diarios con acabado profesional.
        </p>
      </div>

      <!-- Features Grid -->
      <div class="row g-4 mb-5">
        <div class="col-12 col-md-4">
          <div class="premium-card text-center h-100">
            <div class="card-icon mx-auto">📏</div>
            <h3 class="card-title">Ancho de Impresión</h3>
            <p class="card-description">Hasta 1,55 metros de ancho continuo. El largo depende del rollo de tela que traigas.</p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="premium-card text-center h-100">
            <div class="card-icon mx-auto">📐</div>
            <h3 class="card-title">Cantidad Mínima</h3>
            <p class="card-description">Desde 5 metros lineales para mantener la tensión perfecta durante el proceso.</p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="premium-card text-center h-100">
            <div class="card-icon mx-auto">🧵</div>
            <h3 class="card-title">Telas Compatibles</h3>
            <p class="card-description">Blancas o claras con +70% poliéster: lanilla, lycra, microfibra, friza, voile y más.</p>
          </div>
        </div>
      </div>

      <!-- Video Section -->
      <div class="mb-5">
        <div class="text-center mb-4">
          <h3 class="h3 fw-bold text-white mb-2">Mirá el Proceso en Acción</h3>
          <p class="text-white-50">Conocé cómo se realiza el calandreado textil profesional</p>
        </div>
        <div class="video-wrapper mx-auto" style="max-width: 900px;">
          <div class="ratio ratio-16x9">
            <iframe 
              src="https://www.youtube.com/embed/QQjuz9kEo70" 
              title="Sublimación por Calandra" 
              allowfullscreen
              style="border-radius: 20px; border: 1px solid rgba(6, 182, 212, 0.2);"
            ></iframe>
          </div>
        </div>
      </div>

      <!-- Why Calandra -->
      <div class="cta-box mb-5">
        <h3 class="cta-title">¿Por qué sublimar con calandra?</h3>
        <p class="cta-description">
          A diferencia del planchado tradicional, el calandreado no compacta las fibras. Esto significa colores más intensos, mayor durabilidad y un acabado suave y profesional.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-4 mt-4">
          <div class="text-center">
            <div class="stat-value">+1000</div>
            <div class="stat-label">Metros/día</div>
          </div>
          <div class="text-center">
            <div class="stat-value">1.55m</div>
            <div class="stat-label">Ancho máx.</div>
          </div>
          <div class="text-center">
            <div class="stat-value">100%</div>
            <div class="stat-label">Calidad</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.premium-section {
  position: relative;
  padding: 60px 0;
  background: transparent;
}

.video-wrapper {
  position: relative;
}

.video-wrapper::before {
  content: '';
  position: absolute;
  top: -10px;
  left: -10px;
  right: -10px;
  bottom: -10px;
  background: linear-gradient(135deg, rgba(6, 182, 212, 0.2), rgba(139, 92, 246, 0.2));
  border-radius: 28px;
  z-index: -1;
  opacity: 0.5;
}
</style>
