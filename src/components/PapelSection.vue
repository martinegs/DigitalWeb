<template>
  <section id="papel" class="premium-section py-5">
    <div class="container py-4 position-relative">
      <!-- Decorative Elements -->
      <div class="section-orb section-orb-1"></div>
      <div class="section-orb section-orb-2"></div>
      
      <!-- Header -->
      <div class="text-center mb-5 position-relative">
        <div class="section-badge mb-4">
          <span>📄 INSUMOS PROFESIONALES</span>
        </div>
        <h2 class="section-title mb-3">Papel Para Sublimación</h2>
        <h3 class="section-subtitle mb-4">Papel de Sublimación por Rollo en Buenos Aires</h3>
        <p class="section-description mx-auto">
          Venta exclusiva de papel impreso para sublimación en rollos de 1.55 metros de ancho, ideal para producciones textiles full print y calandra industrial.
        </p>
      </div>

      <!-- Features Grid -->
      <div class="row g-4 mb-5">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="feature-card">
            <div class="feature-icon">📦</div>
            <h3 class="feature-title">Stock Permanente</h3>
            <p class="feature-text">Papel para sublimación por rollo. Ideal para producciones continuas y trabajos profesionales.</p>
            <div class="feature-number">01</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="feature-card">
            <div class="feature-icon">🔥</div>
            <h3 class="feature-title">Alta Resistencia</h3>
            <p class="feature-text">Formulado para soportar altas temperaturas de calandras industriales y planchas grandes.</p>
            <div class="feature-number">02</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="feature-card">
            <div class="feature-icon">🎨</div>
            <h3 class="feature-title">Calidad de Impresión</h3>
            <p class="feature-text">Colores intensos y definidos. Perfecto para sublimación en tela poliéster o mezclas.</p>
            <div class="feature-number">03</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="feature-card">
            <div class="feature-icon">📏</div>
            <h3 class="feature-title">Rollo de 1.55m</h3>
            <p class="feature-text">Impresión continua a todo lo ancho. Pensado para calandrado y corte en partes full print.</p>
            <div class="feature-number">04</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="feature-card">
            <div class="feature-icon">⚡</div>
            <h3 class="feature-title">Entrega Inmediata</h3>
            <p class="feature-text">Retirá en el acto desde nuestro local en Villa Luzuriaga (La Matanza).</p>
            <div class="feature-number">05</div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="feature-card">
            <div class="feature-icon">📍</div>
            <h3 class="feature-title">Zona Oeste – Buenos Aires</h3>
            <p class="feature-text">Asesoramiento personalizado y atención sin turno para profesionales textiles.</p>
            <div class="feature-number">06</div>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="cta-card">
            <div class="cta-card-inner p-5 text-center">
              <div class="cta-badge mb-3">🛒 COMPRAR AHORA</div>
              <h3 class="cta-title">Comprá Tu Rollo de Papel Sublimado</h3>
              <p class="cta-text">
                Asesorate con nosotros para elegir el mejor papel según tu tipo de producción textil.
              </p>
              <a
                href="https://wa.me/5491141700467?text=Hola%20Digitaltex%2C%20quiero%20consultar%20por%20papel%20de%20sublimaci%C3%B3n"
                target="_blank"
                class="whatsapp-btn"
              >
                <span class="wa-icon">📲</span>
                <span>Consultanos por WhatsApp</span>
                <span class="wa-arrow">→</span>
              </a>
            </div>
            <div class="cta-card-glow"></div>
          </div>
        </div>
      </div>

      <!-- Why Choose Us -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="why-card">
            <div class="why-card-inner p-5">
              <div class="why-icon">✨</div>
              <h3 class="why-title">¿Por Qué Elegir Nuestro Papel de Sublimación?</h3>
              <p class="why-text">
                Porque trabajamos con los mejores insumos, garantizamos colores brillantes, trazabilidad de producción y asesoramiento constante a talleres, diseñadores y confeccionistas. Ideal para remeras, camperas, indumentaria deportiva, pañuelos, y más.
              </p>
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
  width: 400px;
  height: 400px;
  background: #f59e0b;
  top: 10%;
  left: -10%;
  animation: float 12s ease-in-out infinite;
}

.section-orb-2 {
  width: 350px;
  height: 350px;
  background: #06b6d4;
  bottom: 20%;
  right: -10%;
  animation: float 15s ease-in-out infinite reverse;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0); }
  50% { transform: translate(30px, -30px); }
}

.section-badge {
  display: inline-block;
  padding: 0.5rem 1.5rem;
  background: rgba(245, 158, 11, 0.1);
  border: 1px solid rgba(245, 158, 11, 0.3);
  border-radius: 50px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #fbbf24;
  letter-spacing: 1px;
}

.section-title {
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 800;
  background: linear-gradient(135deg, #fff 0%, #f59e0b 50%, #fbbf24 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.section-subtitle {
  font-size: 1.3rem;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.9);
}

.section-description {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.6);
  max-width: 900px;
  line-height: 1.7;
}

/* Feature Cards */
.feature-card {
  position: relative;
  padding: 2rem;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  text-align: center;
  transition: all 0.4s ease;
  overflow: hidden;
  height: 100%;
}

.feature-card:hover {
  transform: translateY(-8px);
  border-color: rgba(245, 158, 11, 0.4);
  background: rgba(245, 158, 11, 0.05);
}

.feature-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
  filter: drop-shadow(0 0 10px rgba(245, 158, 11, 0.4));
}

.feature-title {
  font-size: 1.1rem;
  font-weight: 700;
  color: white;
  margin-bottom: 0.75rem;
}

.feature-text {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.6);
  margin: 0;
  line-height: 1.5;
}

.feature-number {
  position: absolute;
  bottom: 1rem;
  right: 1.5rem;
  font-size: 3rem;
  font-weight: 900;
  color: rgba(245, 158, 11, 0.1);
  line-height: 1;
}

/* CTA Card */
.cta-card {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
}

.cta-card-inner {
  background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(6, 182, 212, 0.05));
  border: 1px solid rgba(245, 158, 11, 0.3);
  border-radius: 24px;
  backdrop-filter: blur(20px);
  position: relative;
  z-index: 1;
}

.cta-card-glow {
  position: absolute;
  inset: -2px;
  background: linear-gradient(135deg, #f59e0b, #06b6d4);
  border-radius: 24px;
  z-index: 0;
  opacity: 0.2;
  filter: blur(15px);
}

.cta-badge {
  display: inline-block;
  padding: 0.4rem 1rem;
  background: linear-gradient(135deg, #f59e0b, #fbbf24);
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 700;
  color: #0f172a;
}

.cta-title {
  font-size: 1.75rem;
  font-weight: 800;
  color: white;
  margin: 1rem 0;
}

.cta-text {
  color: rgba(255, 255, 255, 0.7);
  max-width: 600px;
  margin: 0 auto 1.5rem;
}

/* WhatsApp Button */
.whatsapp-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 1rem 2rem;
  background: linear-gradient(135deg, #25D366, #128C7E);
  border-radius: 50px;
  text-decoration: none;
  color: white;
  font-weight: 700;
  transition: all 0.4s ease;
  box-shadow: 0 4px 20px rgba(37, 211, 102, 0.3);
}

.whatsapp-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 30px rgba(37, 211, 102, 0.5);
  color: white;
}

.wa-icon {
  font-size: 1.2rem;
}

.wa-arrow {
  transition: transform 0.3s ease;
}

.whatsapp-btn:hover .wa-arrow {
  transform: translateX(5px);
}

/* Why Card */
.why-card {
  border-radius: 20px;
  overflow: hidden;
}

.why-card-inner {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  text-align: center;
}

.why-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.why-title {
  font-size: 1.5rem;
  font-weight: 800;
  color: white;
  margin-bottom: 1rem;
}

.why-text {
  color: rgba(255, 255, 255, 0.6);
  max-width: 800px;
  margin: 0 auto;
  line-height: 1.7;
}
</style>
