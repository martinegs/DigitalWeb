<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
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
              <a href="https://clientes.digitaltex.ar/" target="_blank" class="access-button">
                <span class="button-icon">→</span>
                Ir al Sistema
                <span class="button-shine"></span>
              </a>
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
              <div class="panel-preview mt-3">
                <img src="{{ asset('storage/img/Registro/Login.png') }}" alt="Panel General" class="panel-image" onclick="window.openImageModal(this)" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mapas de Sucursales -->
      <div class="row g-4 mt-5">
        <div class="col-12 col-md-6">
            <div class="map-card">
              <h4 class="map-title">Sucursal Mendoza</h4>
              <div class="map-container">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.8!2d-68.83019076857535!3d-32.87425745857911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDUyJzI3LjMiUyA2OMKwNDknNDguNyJX!5e0!3m2!1ses!2sar!4v1234567890"
                  width="100%"
                  height="300"
                  style="border:0; border-radius: 12px;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
                <a href="https://wa.me/5492616945791?text=Hola%20Digitaltex%20Mendoza%2C%20quiero%20consultar" target="_blank" class="map-card-link">
              <div class="map-contact-info">
                <div class="map-phone">📞 261 694-5791</div>
                <div class="map-cta">Click para contactar por WhatsApp</div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6">
            <div class="map-card">
              <h4 class="map-title">Sucursal Buenos Aires</h4>
              <div class="map-container">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0!2d-58.37835165955517!3d-34.62545067282422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDM3JzMxLjYiUyA1OMKwMjInNDIuMSJX!5e0!3m2!1ses!2sar!4v1234567890"
                  width="100%"
                  height="300"
                  style="border:0; border-radius: 12px;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
                        <a href="https://wa.me/5491141700467?text=Hola%20Digitaltex%20Buenos%20Aires%2C%20quiero%20consultar" target="_blank" class="map-card-link">

              <div class="map-contact-info">
                <div class="map-phone">📞 11 4170-0467</div>
                <div class="map-cta">Click para contactar por WhatsApp</div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

@push('styles')
<style>
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

/* Map Cards */
.map-card-link {
  text-decoration: none;
  display: block;
  height: 100%;
}

.map-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  padding: 1.5rem;
  transition: all 0.3s ease;
  cursor: pointer;
  height: 100%;
}

.map-card:hover {
  border-color: rgba(6, 182, 212, 0.5);
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(6, 182, 212, 0.3);
  background: rgba(6, 182, 212, 0.05);
}

.map-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: white;
  margin-bottom: 1rem;
  text-align: center;
}

.map-container {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
  pointer-events: none;
}

.map-container iframe {
  display: block;
}

.map-contact-info {
  margin-top: 1rem;
  padding: 1rem;
  background: rgba(6, 182, 212, 0.1);
  border: 1px solid rgba(6, 182, 212, 0.2);
  border-radius: 12px;
  text-align: center;
  transition: all 0.3s ease;
}

.map-card:hover .map-contact-info {
  background: rgba(6, 182, 212, 0.15);
  border-color: rgba(6, 182, 212, 0.4);
}

.map-phone {
  font-size: 1.1rem;
  font-weight: 700;
  color: #22d3ee;
  margin-bottom: 0.5rem;
}

.map-cta {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.7);
  font-weight: 500;
}

.map-card:hover .map-cta {
  color: #22d3ee;
}

/* Panel Preview Image */
.panel-preview {
  margin-top: 1rem;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.1);
  transition: all 0.3s ease;
}

.panel-preview:hover {
  transform: scale(1.02);
  box-shadow: 0 12px 35px rgba(37, 99, 235, 0.3);
  border-color: rgba(37, 99, 235, 0.4);
}

.panel-image {
  width: 100%;
  height: auto;
  display: block;
  cursor: pointer;
  transition: opacity 0.3s ease;
}

.panel-image:hover {
  opacity: 0.9;
}

@media (max-width: 768px) {
  .status-features {
    gap: 1rem;
  }
  
  .status-feature {
    padding: 0.5rem 1rem;
  }
  
  .map-container iframe {
    height: 250px;
  }
}
</style>
@endpush
