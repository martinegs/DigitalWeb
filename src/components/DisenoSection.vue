<template>
  <section id="diseno" class="premium-section py-5">
    <div class="container py-4 position-relative">
      <!-- Decorative Elements -->
      <div class="section-orb section-orb-1"></div>
      <div class="section-orb section-orb-2"></div>
      
      <!-- Header -->
      <div class="text-center mb-5 position-relative">
        <div class="section-badge mb-4">
          <span>✂️ MOLDERÍA DIGITAL</span>
        </div>
        <h2 class="section-title mb-3">Diseño de Moda Digital</h2>
        <h3 class="section-subtitle-accent mb-4">Moldería Digital Sublimada</h3>
        <p class="section-description mx-auto">
          Confeccioná prendas únicas con nuestras plantillas digitales para moda deportiva, urbana y personalizada.
        </p>
      </div>

      <!-- Molde Principal -->
      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="main-card">
            <div class="main-card-inner p-5">
              <div class="card-badge mb-3">⭐ MOLDE DESTACADO</div>
              <h3 class="card-title-dark mb-4">Molde de Camiseta de Fútbol</h3>
              <p class="card-text-dark mb-4">
                Perfecto para trabajar con telas sublimadas. Incluye talles para adultos y niños, márgenes de costura y cortes listos para confeccionar.
              </p>
              
              <div class="warning-box">
                <span class="warning-icon">⚠️</span>
                <div>
                  <strong>Tené en cuenta:</strong> La tela puede encoger hasta un 5% durante la sublimación.
                </div>
              </div>

              <div class="tips-box mt-4">
                <h4 class="tips-title">🧵 Recomendaciones Útiles</h4>
                <p class="tips-text">
                  Es ideal usar rip para cuellos y puños. Evitá sublimar prendas armadas para mejorar la calidad y evitar zonas sin color.
                </p>
              </div>

              <div class="text-center mt-4">
                <span class="card-label">Moldería fútbol</span>
              </div>
            </div>
            <div class="main-card-glow"></div>
          </div>
        </div>
      </div>

      <!-- Galería de Moldes -->
      <div class="text-center mb-4">
        <h3 class="gallery-title">Galería de Moldes Disponibles</h3>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="mold-card">
            <div class="mold-icon">👚</div>
            <h4 class="mold-title">Top Deportivo</h4>
            <p class="mold-subtitle">Top deportivo</p>
            <div class="mold-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="mold-card">
            <div class="mold-icon">🧥</div>
            <h4 class="mold-title">Campera Manga Ranglan</h4>
            <p class="mold-subtitle">Campera Ranglan</p>
            <div class="mold-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="mold-card">
            <div class="mold-icon">👕</div>
            <h4 class="mold-title">Remera Mangas Cortas</h4>
            <p class="mold-subtitle">Remera manga corta</p>
            <div class="mold-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="mold-card">
            <div class="mold-icon">👖</div>
            <h4 class="mold-title">Calzas Largas</h4>
            <p class="mold-subtitle">Calza deportiva</p>
            <div class="mold-glow"></div>
          </div>
        </div>
      </div>

      <!-- Preparación de Archivos -->
      <div class="text-center mb-4">
        <h3 class="gallery-title">Preparación de Archivos para Impresión</h3>
        <p class="section-label"><em>Plantilla de diseño para sublimación</em></p>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="tips-card">
            <div class="tips-card-inner p-5">
              <h4 class="card-title-dark mb-4">Tips para Sublimación y Corte</h4>
              <ul class="tips-list">
                <li class="tip-item">
                  <span class="tip-check">✓</span>
                  <span>El ancho máximo de impresión es 1,55m</span>
                </li>
                <li class="tip-item">
                  <span class="tip-check">✓</span>
                  <span>Usá formatos: PDF, AI, EPS o JPG</span>
                </li>
                <li class="tip-item">
                  <span class="tip-check">✓</span>
                  <span>Verificá el rebote de la tela antes del corte</span>
                </li>
                <li class="tip-item">
                  <span class="tip-check">✓</span>
                  <span>Revisá la carta de colores para mantener coherencia visual</span>
                </li>
                <li class="tip-item">
                  <span class="tip-check">✓</span>
                  <span>Armá tu archivo según el orden de planchado</span>
                </li>
              </ul>

              <div class="text-center mt-5">
                <a href="#contacto" class="cta-button">
                  <span class="cta-icon">💬</span>
                  Consultar por WhatsApp
                  <span class="cta-arrow">→</span>
                </a>
              </div>
            </div>
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
  background: #0f172a;
  position: relative;
  overflow: hidden;
}

.section-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(100px);
  opacity: 0.1;
  pointer-events: none;
}

.section-orb-1 {
  width: 500px;
  height: 500px;
  background: #06b6d4;
  top: 10%;
  right: -15%;
  animation: float 12s ease-in-out infinite;
}

.section-orb-2 {
  width: 400px;
  height: 400px;
  background: #a855f7;
  bottom: 10%;
  left: -10%;
  animation: float 15s ease-in-out infinite reverse;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0); }
  50% { transform: translate(30px, -30px); }
}

.section-badge {
  display: inline-block;
  padding: 0.5rem 1.5rem;
  background: rgba(6, 182, 212, 0.1);
  border: 1px solid rgba(6, 182, 212, 0.3);
  border-radius: 50px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #22d3ee;
  letter-spacing: 1px;
}

.section-title {
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 800;
  background: linear-gradient(135deg, #fff 0%, #06b6d4 50%, #22d3ee 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.section-subtitle-accent {
  font-size: 1.5rem;
  font-weight: 700;
  color: #a855f7;
}

.section-description {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.7);
  max-width: 900px;
  line-height: 1.7;
}

.section-label {
  color: rgba(255, 255, 255, 0.5);
  font-size: 0.95rem;
}

/* Main Card */
.main-card {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
}

.main-card-inner {
  background: linear-gradient(135deg, #fff 0%, #f8fafc 100%);
  border-radius: 24px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  position: relative;
  z-index: 1;
}

.main-card-glow {
  position: absolute;
  inset: -2px;
  background: linear-gradient(135deg, #06b6d4, #a855f7, #2563eb);
  border-radius: 24px;
  z-index: 0;
  opacity: 0.5;
  filter: blur(8px);
  animation: glow-pulse 3s ease-in-out infinite;
}

@keyframes glow-pulse {
  0%, 100% { opacity: 0.3; }
  50% { opacity: 0.6; }
}

.card-badge {
  display: inline-block;
  padding: 0.4rem 1rem;
  background: linear-gradient(135deg, #06b6d4, #2563eb);
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 700;
  color: white;
  letter-spacing: 0.5px;
}

.card-title-dark {
  font-size: 1.5rem;
  font-weight: 800;
  color: #0f172a;
}

.card-text-dark {
  color: #475569;
  font-size: 1rem;
  line-height: 1.7;
}

.warning-box {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  padding: 1rem 1.5rem;
  background: linear-gradient(135deg, rgba(251, 191, 36, 0.1), rgba(251, 191, 36, 0.05));
  border: 1px solid rgba(251, 191, 36, 0.3);
  border-radius: 12px;
  color: #92400e;
}

.warning-icon {
  font-size: 1.5rem;
}

.tips-box {
  padding: 1.5rem;
  background: linear-gradient(135deg, rgba(6, 182, 212, 0.05), rgba(37, 99, 235, 0.05));
  border: 1px solid rgba(6, 182, 212, 0.2);
  border-radius: 12px;
}

.tips-title {
  font-size: 1.1rem;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 0.75rem;
}

.tips-text {
  color: #475569;
  margin: 0;
  line-height: 1.6;
}

.card-label {
  display: inline-block;
  padding: 0.3rem 1rem;
  background: rgba(15, 23, 42, 0.05);
  border-radius: 20px;
  font-size: 0.85rem;
  color: #64748b;
  font-style: italic;
}

/* Gallery Title */
.gallery-title {
  font-size: 1.75rem;
  font-weight: 800;
  color: white;
  margin-bottom: 1rem;
}

/* Mold Cards */
.mold-card {
  position: relative;
  padding: 2rem 1.5rem;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  text-align: center;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  overflow: hidden;
  height: 100%;
}

.mold-card:hover {
  transform: translateY(-10px);
  border-color: rgba(6, 182, 212, 0.5);
  background: rgba(6, 182, 212, 0.05);
}

.mold-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 120px;
  height: 120px;
  background: radial-gradient(circle, rgba(6, 182, 212, 0.4), transparent);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: opacity 0.4s ease;
  pointer-events: none;
}

.mold-card:hover .mold-glow {
  opacity: 1;
}

.mold-icon {
  font-size: 3.5rem;
  margin-bottom: 1rem;
  filter: drop-shadow(0 0 15px rgba(6, 182, 212, 0.4));
}

.mold-title {
  font-size: 1rem;
  font-weight: 700;
  color: white;
  margin-bottom: 0.5rem;
}

.mold-subtitle {
  font-size: 0.85rem;
  color: rgba(255, 255, 255, 0.5);
  margin: 0;
}

/* Tips Card */
.tips-card {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
}

.tips-card-inner {
  background: linear-gradient(135deg, #fff 0%, #f8fafc 100%);
  border-radius: 24px;
  border: 1px solid rgba(6, 182, 212, 0.2);
}

.tips-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.tip-item {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  margin-bottom: 1rem;
  padding: 0.75rem 1rem;
  background: rgba(6, 182, 212, 0.03);
  border-radius: 10px;
  transition: all 0.3s ease;
}

.tip-item:hover {
  background: rgba(6, 182, 212, 0.08);
  transform: translateX(5px);
}

.tip-check {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 24px;
  height: 24px;
  background: linear-gradient(135deg, #06b6d4, #22d3ee);
  border-radius: 50%;
  color: white;
  font-size: 0.75rem;
  font-weight: 700;
  flex-shrink: 0;
}

.tip-item span:last-child {
  color: #475569;
  line-height: 1.5;
}

/* CTA Button */
.cta-button {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 1rem 2.5rem;
  background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
  border: none;
  border-radius: 50px;
  font-size: 1rem;
  font-weight: 700;
  color: white;
  text-decoration: none;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  box-shadow: 0 4px 20px rgba(37, 211, 102, 0.3);
  position: relative;
  overflow: hidden;
}

.cta-button::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: left 0.5s ease;
}

.cta-button:hover::before {
  left: 100%;
}

.cta-button:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 8px 30px rgba(37, 211, 102, 0.5);
  color: white;
}

.cta-icon {
  font-size: 1.2rem;
}

.cta-arrow {
  transition: transform 0.3s ease;
}

.cta-button:hover .cta-arrow {
  transform: translateX(5px);
}
</style>
