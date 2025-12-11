<template>
  <section id="dtf-mayor" class="premium-section py-5">
    <div class="container py-4 position-relative">
      <!-- Decorative Elements -->
      <div class="section-orb section-orb-1"></div>
      <div class="section-orb section-orb-2"></div>
      
      <!-- Header -->
      <div class="text-center mb-5 position-relative">
        <div class="section-badge mb-4">
          <span>🏆 PROGRAMA EXCLUSIVO</span>
        </div>
        <h2 class="section-title mb-3">DTF POR MAYOR</h2>
        <h3 class="section-subtitle mb-4">DTF Mayorista para Grandes Clientes</h3>
        <p class="section-description mx-auto">
          En Digitaltex ofrecemos un sistema exclusivo de estampado DTF por Metro pensado para confeccionistas, marcas, talleres y empresas que producen en volumen.
        </p>
      </div>

      <!-- Beneficios -->
      <div class="text-center mb-4">
        <h3 class="gallery-title">📦 Beneficios del Cliente Mayorista</h3>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="benefit-card">
            <div class="benefit-icon">💬</div>
            <h3 class="benefit-title">Contacto Directo</h3>
            <p class="benefit-text">Comunicación exclusiva con nuestro equipo de producción y comercial.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="benefit-card">
            <div class="benefit-icon">📆</div>
            <h3 class="benefit-title">Pedidos los 7 días</h3>
            <p class="benefit-text">Podés cargar tus archivos y ordenes incluso fines de semana y feriados.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="benefit-card">
            <div class="benefit-icon">💸</div>
            <h3 class="benefit-title">Precios Exclusivos</h3>
            <p class="benefit-text">Accedé a precios diferenciales manteniendo cierta constancia y volumen mensual.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="benefit-card">
            <div class="benefit-icon">🔁</div>
            <h3 class="benefit-title">Constancia Premiada</h3>
            <p class="benefit-text">Realizando pedidos cada 30 días mantenés tu nivel y beneficios activos.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="benefit-card">
            <div class="benefit-icon">📥</div>
            <h3 class="benefit-title">Cargar Adelantos</h3>
            <p class="benefit-text">Subí dinero desde el sistema y usalo como crédito para pedidos posteriores.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="benefit-card">
            <div class="benefit-icon">🚚</div>
            <h3 class="benefit-title">Producción Ágil</h3>
            <p class="benefit-text">Al cargar tus archivos desde el sistema, tu orden entra directamente en la cola de impresión.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
      </div>

      <!-- Niveles -->
      <div class="text-center mb-4">
        <h3 class="gallery-title">🚀 Niveles de Cliente Mayorista</h3>
        <p class="section-description mx-auto mb-5">
          Nuestro sistema premia tu constancia y compromiso con niveles progresivos según tus metros estampados por mes. Cuanto más estampás, más beneficios tenés:
        </p>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-12 col-md-4">
          <div class="level-card level-neo">
            <div class="level-header">
              <span class="level-badge level-badge-neo">NIVEL INICIAL</span>
              <div class="level-icon">🟣</div>
            </div>
            <h3 class="level-title">Neo Iniciado</h3>
            <div class="level-meters">Desde <strong>20</strong> metros/mes</div>
            <p class="level-description">Ideal para marcas pequeñas y talleres independientes.</p>
            <div class="level-shine"></div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="level-card level-pioneer">
            <div class="level-header">
              <span class="level-badge level-badge-pioneer">NIVEL INTERMEDIO</span>
              <div class="level-icon">🔶</div>
            </div>
            <h3 class="level-title">Pionero</h3>
            <div class="level-meters">Desde <strong>50</strong> metros/mes</div>
            <p class="level-description">Prioridad en producción y mejoras en precios.</p>
            <div class="level-shine"></div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="level-card level-master">
            <div class="level-header">
              <span class="level-badge level-badge-master">NIVEL PREMIUM</span>
              <div class="level-icon">🔷</div>
            </div>
            <h3 class="level-title">Maestro</h3>
            <div class="level-meters">Desde <strong>100</strong> metros/mes</div>
            <p class="level-description">Asignación de asesor personalizado y canal directo.</p>
            <div class="level-shine"></div>
          </div>
        </div>
      </div>

      <!-- CTA Final -->
      <div class="final-cta text-center">
        <h3 class="cta-title">¿Querés ser Cliente Mayorista?</h3>
        <p class="cta-description">
          Empezá a producir con nosotros desde cualquier lugar del país. DTF de alta calidad desde Mendoza y Buenos Aires para toda Argentina.
        </p>
        <a href="https://dtf.stamp" target="_blank" class="cta-button">
          <span>Ir al Producto DTF</span>
          <span class="cta-icon">💥</span>
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.premium-section {
  background: transparent;
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
  background: #8b5cf6;
  top: 5%;
  left: -15%;
  animation: float 12s ease-in-out infinite;
}

.section-orb-2 {
  width: 400px;
  height: 400px;
  background: #06b6d4;
  bottom: 15%;
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
  background: rgba(139, 92, 246, 0.1);
  border: 1px solid rgba(139, 92, 246, 0.3);
  border-radius: 50px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #a78bfa;
  letter-spacing: 1px;
}

.section-title {
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 900;
  background: linear-gradient(135deg, #fff 0%, #8b5cf6 50%, #a78bfa 100%);
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

.gallery-title {
  font-size: 1.5rem;
  font-weight: 800;
  color: white;
  margin-bottom: 1.5rem;
}

/* Benefit Cards */
.benefit-card {
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

.benefit-card:hover {
  transform: translateY(-8px);
  border-color: rgba(139, 92, 246, 0.4);
  background: rgba(139, 92, 246, 0.05);
}

.benefit-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 120px;
  height: 120px;
  background: radial-gradient(circle, rgba(139, 92, 246, 0.4), transparent);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: opacity 0.4s ease;
}

.benefit-card:hover .benefit-glow {
  opacity: 1;
}

.benefit-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
  filter: drop-shadow(0 0 10px rgba(139, 92, 246, 0.4));
}

.benefit-title {
  font-size: 1.1rem;
  font-weight: 700;
  color: white;
  margin-bottom: 0.75rem;
}

.benefit-text {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.6);
  margin: 0;
  line-height: 1.5;
}

/* Level Cards */
.level-card {
  position: relative;
  padding: 2.5rem 2rem;
  border-radius: 24px;
  text-align: center;
  transition: all 0.4s ease;
  overflow: hidden;
  height: 100%;
}

.level-card:hover {
  transform: translateY(-10px) scale(1.02);
}

.level-neo {
  background: linear-gradient(180deg, rgba(168, 85, 247, 0.1), rgba(168, 85, 247, 0.02));
  border: 2px solid rgba(168, 85, 247, 0.3);
}

.level-neo:hover {
  border-color: rgba(168, 85, 247, 0.6);
  box-shadow: 0 20px 40px rgba(168, 85, 247, 0.2);
}

.level-pioneer {
  background: linear-gradient(180deg, rgba(251, 146, 60, 0.1), rgba(251, 146, 60, 0.02));
  border: 2px solid rgba(251, 146, 60, 0.3);
}

.level-pioneer:hover {
  border-color: rgba(251, 146, 60, 0.6);
  box-shadow: 0 20px 40px rgba(251, 146, 60, 0.2);
}

.level-master {
  background: linear-gradient(180deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.02));
  border: 2px solid rgba(59, 130, 246, 0.3);
}

.level-master:hover {
  border-color: rgba(59, 130, 246, 0.6);
  box-shadow: 0 20px 40px rgba(59, 130, 246, 0.2);
}

.level-header {
  margin-bottom: 1rem;
}

.level-badge {
  display: inline-block;
  padding: 0.3rem 0.8rem;
  border-radius: 20px;
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  margin-bottom: 0.75rem;
}

.level-badge-neo {
  background: rgba(168, 85, 247, 0.2);
  color: #c084fc;
}

.level-badge-pioneer {
  background: rgba(251, 146, 60, 0.2);
  color: #fb923c;
}

.level-badge-master {
  background: rgba(59, 130, 246, 0.2);
  color: #60a5fa;
}

.level-icon {
  font-size: 3rem;
  margin: 0.5rem 0;
}

.level-title {
  font-size: 1.5rem;
  font-weight: 800;
  color: white;
  margin-bottom: 0.5rem;
}

.level-meters {
  font-size: 1rem;
  color: rgba(255, 255, 255, 0.7);
  margin-bottom: 1rem;
}

.level-meters strong {
  font-size: 1.5rem;
  color: white;
}

.level-description {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.5);
  margin: 0;
}

.level-shine {
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, transparent, rgba(255,255,255,0.05), transparent);
  transform: rotate(45deg);
  transition: transform 0.6s ease;
}

.level-card:hover .level-shine {
  transform: rotate(45deg) translateX(100%);
}

/* Final CTA */
.final-cta {
  padding: 3rem;
  background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(6, 182, 212, 0.05));
  border: 1px solid rgba(139, 92, 246, 0.2);
  border-radius: 24px;
}

.cta-title {
  font-size: 1.75rem;
  font-weight: 800;
  color: white;
  margin-bottom: 0.75rem;
}

.cta-description {
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: 1.5rem;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.cta-button {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 1rem 2.5rem;
  background: linear-gradient(135deg, #06b6d4, #0891b2);
  border: none;
  border-radius: 50px;
  font-size: 1.1rem;
  font-weight: 700;
  color: white;
  text-decoration: none;
  transition: all 0.4s ease;
  box-shadow: 0 4px 20px rgba(6, 182, 212, 0.3);
}

.cta-button:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 8px 30px rgba(6, 182, 212, 0.5);
  color: white;
}

.cta-icon {
  animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.2); }
}
</style>
