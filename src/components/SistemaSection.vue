<template>
  <section id="sistema" class="premium-section py-5">
    <div class="container py-4 position-relative">
      <!-- Decorative Elements -->
      <div class="section-orb section-orb-1"></div>
      <div class="section-orb section-orb-2"></div>
      
      <!-- Header -->
      <div class="text-center mb-5 position-relative">
        <div class="section-badge mb-4">
          <span>🖥️ SISTEMA ONLINE</span>
        </div>
        <h2 class="section-title mb-3">Sistema Para Sublimar</h2>
        <h3 class="section-subtitle mb-4">Sistema para Cargar Trabajos y Seguir tu Pedido</h3>
        <p class="section-description mx-auto">
          Ingresá a nuestro sistema para cargar tus trabajos, hacer seguimiento en tiempo real, y tener control de tus estampas de principio a fin.
        </p>
      </div>

      <!-- Acceso al Panel -->
      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="access-card">
            <div class="access-card-inner p-5 text-center">
              <div class="access-icon mb-4">
                <span>🔐</span>
              </div>
              <h3 class="access-title mb-4">Accedé a tu Panel</h3>
              <p class="access-text mb-4">
                Solo necesitás tu email y tu número de DNI o CUIT para acceder al sistema. Desde allí vas a poder cargar pedidos, consultar tu saldo, y ver todo el avance.
              </p>
              <button class="access-button">
                <span class="button-icon">→</span>
                Ir al Sistema
                <span class="button-shine"></span>
              </button>
            </div>
            <div class="access-card-glow"></div>
          </div>
        </div>
      </div>

      <!-- FAQ Cards -->
      <div class="row g-4 mb-5">
        <div class="col-12 col-md-4">
          <div class="faq-card">
            <div class="faq-icon">📤</div>
            <h3 class="faq-title">¿Cómo cargo un trabajo?</h3>
            <p class="faq-text">
              Ingresá a tu cuenta y hacé clic en «Cargar Pedido». Subí tu archivo, elegí el tipo de estampado, cantidad de metros y ¡listo!
            </p>
            <div class="faq-number">01</div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="faq-card">
            <div class="faq-icon">💰</div>
            <h3 class="faq-title">¿Cómo se carga saldo?</h3>
            <p class="faq-text">
              Desde el sistema vas a poder generar un link de pago por Mercado Pago o cargar tu número de operación manualmente. El saldo se acredita y podés usarlo inmediatamente.
            </p>
            <div class="faq-number">02</div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="faq-card faq-card-status">
            <div class="faq-icon">📊</div>
            <h3 class="faq-title">Estados del Pedido</h3>
            <ul class="status-list">
              <li><span class="status-dot status-open"></span><strong>Abierto:</strong> Pedido cargado, esperando confirmación.</li>
              <li><span class="status-dot status-ready"></span><strong>Listo:</strong> Revisado, aprobado y listo para máquina.</li>
              <li><span class="status-dot status-printed"></span><strong>Impreso:</strong> Ya fue impreso. Pronto a despachar.</li>
              <li><span class="status-dot status-done"></span><strong>Finalizado:</strong> Entregado o despachado. ¡Gracias!</li>
            </ul>
            <div class="faq-number">03</div>
          </div>
        </div>
      </div>

      <!-- Estado de Cuenta -->
      <div class="text-center mb-4">
        <h3 class="gallery-title">Sistema de Sublimación</h3>
        <p class="section-label">Tu Estado de Cuenta y Pedidos</p>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="status-card">
            <div class="status-card-inner p-5 text-center">
              <div class="status-features">
                <div class="status-feature">
                  <span class="feature-icon">📋</span>
                  <span class="feature-text">Historial de Pedidos</span>
                </div>
                <div class="status-feature">
                  <span class="feature-icon">💵</span>
                  <span class="feature-text">Saldo Disponible</span>
                </div>
                <div class="status-feature">
                  <span class="feature-icon">📈</span>
                  <span class="feature-text">Estadísticas</span>
                </div>
              </div>
              <p class="status-text mt-4">
                Podés ver en todo momento tu estado de cuenta y los pedidos actuales, pendientes y finalizados. ¡Organización total!
              </p>
              <span class="card-label">Panel General</span>
            </div>
          </div>
        </div>
      </div>

      <!-- WhatsApp Contact -->
      <div class="text-center mb-4">
        <h3 class="gallery-title mb-3">¿Tenés dudas? Escribinos</h3>
        <p class="section-description mb-4">Elegí tu sucursal y hablá directo con nosotros por WhatsApp.</p>
      </div>

      <div class="text-center whatsapp-buttons">
        <a
          href="https://wa.me/5492616945791?text=Hola%20Digitaltex%2C%20tengo%20dudas%20sobre%20el%20sistema"
          target="_blank"
          class="whatsapp-btn"
        >
          <span class="wa-icon">📍</span>
          <span class="wa-text">Mendoza</span>
          <span class="wa-arrow">→</span>
        </a>
        <a
          href="https://wa.me/5491141700467?text=Hola%20Digitaltex%2C%20tengo%20dudas%20sobre%20el%20sistema"
          target="_blank"
          class="whatsapp-btn"
        >
          <span class="wa-icon">📍</span>
          <span class="wa-text">Buenos Aires</span>
          <span class="wa-arrow">→</span>
        </a>
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
  background: #2563eb;
  top: 5%;
  left: -10%;
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
  background: rgba(37, 99, 235, 0.1);
  border: 1px solid rgba(37, 99, 235, 0.3);
  border-radius: 50px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #60a5fa;
  letter-spacing: 1px;
}

.section-title {
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 800;
  background: linear-gradient(135deg, #fff 0%, #2563eb 50%, #60a5fa 100%);
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

.section-label {
  color: rgba(255, 255, 255, 0.5);
  font-size: 0.95rem;
}

.gallery-title {
  font-size: 1.75rem;
  font-weight: 800;
  color: white;
}

/* Access Card */
.access-card {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
}

.access-card-inner {
  background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(6, 182, 212, 0.05));
  border: 1px solid rgba(37, 99, 235, 0.3);
  border-radius: 24px;
  backdrop-filter: blur(20px);
  position: relative;
  z-index: 1;
}

.access-card-glow {
  position: absolute;
  inset: -2px;
  background: linear-gradient(135deg, #2563eb, #06b6d4);
  border-radius: 24px;
  z-index: 0;
  opacity: 0.2;
  filter: blur(15px);
}

.access-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, rgba(37, 99, 235, 0.2), rgba(6, 182, 212, 0.2));
  border: 2px solid rgba(37, 99, 235, 0.3);
  border-radius: 50%;
  font-size: 2.5rem;
}

.access-title {
  font-size: 1.75rem;
  font-weight: 800;
  color: white;
}

.access-text {
  color: rgba(255, 255, 255, 0.7);
  font-size: 1.05rem;
  max-width: 600px;
  margin: 0 auto;
}

.access-button {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 1rem 2.5rem;
  background: linear-gradient(135deg, #2563eb, #06b6d4);
  border: none;
  border-radius: 50px;
  font-size: 1.1rem;
  font-weight: 700;
  color: white;
  cursor: pointer;
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(37, 99, 235, 0.4);
}

.access-button:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 8px 30px rgba(37, 99, 235, 0.5);
}

.button-icon {
  transition: transform 0.3s ease;
}

.access-button:hover .button-icon {
  transform: translateX(-3px);
}

/* FAQ Cards */
.faq-card {
  position: relative;
  padding: 2rem;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  transition: all 0.4s ease;
  overflow: hidden;
  height: 100%;
}

.faq-card:hover {
  transform: translateY(-8px);
  border-color: rgba(37, 99, 235, 0.4);
  background: rgba(37, 99, 235, 0.05);
}

.faq-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
  filter: drop-shadow(0 0 10px rgba(37, 99, 235, 0.4));
}

.faq-title {
  font-size: 1.1rem;
  font-weight: 700;
  color: white;
  margin-bottom: 1rem;
}

.faq-text {
  color: rgba(255, 255, 255, 0.6);
  font-size: 0.95rem;
  line-height: 1.6;
  margin: 0;
}

.faq-number {
  position: absolute;
  bottom: 1rem;
  right: 1.5rem;
  font-size: 3rem;
  font-weight: 900;
  color: rgba(37, 99, 235, 0.1);
  line-height: 1;
}

/* Status List */
.status-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.status-list li {
  display: flex;
  align-items: flex-start;
  gap: 0.5rem;
  font-size: 0.85rem;
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: 0.6rem;
}

.status-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  margin-top: 6px;
  flex-shrink: 0;
}

.status-open { background: #fbbf24; }
.status-ready { background: #60a5fa; }
.status-printed { background: #a855f7; }
.status-done { background: #22c55e; }

/* Status Card */
.status-card {
  border-radius: 20px;
  overflow: hidden;
}

.status-card-inner {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
}

.status-features {
  display: flex;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
}

.status-feature {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  padding: 0.75rem 1.5rem;
  background: rgba(37, 99, 235, 0.1);
  border: 1px solid rgba(37, 99, 235, 0.2);
  border-radius: 50px;
}

.feature-icon {
  font-size: 1.25rem;
}

.feature-text {
  color: rgba(255, 255, 255, 0.8);
  font-weight: 600;
  font-size: 0.9rem;
}

.status-text {
  color: rgba(255, 255, 255, 0.6);
  max-width: 500px;
  margin: 0 auto;
}

.card-label {
  display: inline-block;
  margin-top: 1rem;
  padding: 0.3rem 1rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 20px;
  font-size: 0.85rem;
  color: rgba(255, 255, 255, 0.4);
  font-style: italic;
}

/* WhatsApp Buttons */
.whatsapp-buttons {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
}

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
  box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
}

.whatsapp-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
  color: white;
}

.wa-icon {
  font-size: 1.1rem;
}

.wa-text {
  font-size: 1rem;
}

.wa-arrow {
  transition: transform 0.3s ease;
}

.whatsapp-btn:hover .wa-arrow {
  transform: translateX(5px);
}

@media (max-width: 768px) {
  .status-features {
    gap: 1rem;
  }
  
  .status-feature {
    padding: 0.5rem 1rem;
  }
}
</style>
