<template>
  <section id="contacto" class="contact-section text-white py-5">
    <div class="container py-4 position-relative">
      <!-- Floating Elements -->
      <div class="contact-orb contact-orb-1"></div>
      <div class="contact-orb contact-orb-2"></div>
      
      <!-- Header -->
      <div class="text-center mb-5">
        <div class="contact-badge mb-4">
          <span>💬 CONTACTANOS</span>
        </div>
        <h2 class="contact-title mb-4">¿Querés estampar tus propias telas?</h2>
        <p class="contact-subtitle mx-auto">Hablá directamente con nuestras sucursales para recibir atención personalizada, asesoramiento y presupuestos al instante.</p>
      </div>
      
      <!-- WhatsApp Buttons -->
      <div class="text-center mb-5">
        <a
          href="https://wa.me/5492616945791?text=Hola%20Digitaltex%2C%20quiero%20pedir%20presupuesto%20de%20sublimaci%C3%B3n%20en%20Mendoza"
          target="_blank"
          class="whatsapp-btn m-2"
        >
          <span class="whatsapp-icon">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
            </svg>
          </span>
          <span class="whatsapp-text">
            <span class="location">📍 Mendoza</span>
            <span class="action">Chatear ahora</span>
          </span>
          <span class="whatsapp-arrow">→</span>
        </a>
        <a
          href="https://wa.me/5491141700467?text=Hola%20Digitaltex%2C%20quiero%20pedir%20presupuesto%20de%20sublimaci%C3%B3n%20en%20Buenos%20Aires"
          target="_blank"
          class="whatsapp-btn m-2"
        >
          <span class="whatsapp-icon">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
            </svg>
          </span>
          <span class="whatsapp-text">
            <span class="location">📍 Buenos Aires</span>
            <span class="action">Chatear ahora</span>
          </span>
          <span class="whatsapp-arrow">→</span>
        </a>
      </div>

      <!-- Benefits Cards -->
      <div class="row g-4 mt-4">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="benefit-card">
            <div class="benefit-icon">⚡</div>
            <h4 class="benefit-title">Atención Rápida</h4>
            <p class="benefit-text">Respondemos en minutos, sin demoras.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="benefit-card">
            <div class="benefit-icon">🛍️</div>
            <h4 class="benefit-title">Comprás en el acto</h4>
            <p class="benefit-text">Pasás por el local y te lo llevás al instante.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="benefit-card">
            <div class="benefit-icon">✅</div>
            <h4 class="benefit-title">Asesoramiento real</h4>
            <p class="benefit-text">Te ayudamos a elegir lo mejor para tu producción.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="benefit-card">
            <div class="benefit-icon">💬</div>
            <h4 class="benefit-title">Contacto directo</h4>
            <p class="benefit-text">Sin intermediarios, hablamos directo con vos.</p>
            <div class="benefit-glow"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.contact-section {
  background: transparent;
  position: relative;
  overflow: hidden;
}

.contact-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  opacity: 0.15;
  pointer-events: none;
}

.contact-orb-1 {
  width: 400px;
  height: 400px;
  background: #06b6d4;
  top: -100px;
  right: -100px;
  animation: float 8s ease-in-out infinite;
}

.contact-orb-2 {
  width: 300px;
  height: 300px;
  background: #2563eb;
  bottom: -50px;
  left: -50px;
  animation: float 10s ease-in-out infinite reverse;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0); }
  50% { transform: translate(30px, -30px); }
}

.contact-badge {
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

.contact-title {
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 800;
  background: linear-gradient(135deg, #fff 0%, #06b6d4 50%, #22d3ee 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.contact-subtitle {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.7);
  max-width: 700px;
  line-height: 1.6;
}

/* WhatsApp Buttons */
.whatsapp-btn {
  display: inline-flex;
  align-items: center;
  gap: 1rem;
  padding: 1rem 2rem;
  background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
  border-radius: 16px;
  text-decoration: none;
  color: white;
  font-weight: 600;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  position: relative;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(37, 211, 102, 0.3);
}

.whatsapp-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: left 0.5s ease;
}

.whatsapp-btn:hover::before {
  left: 100%;
}

.whatsapp-btn:hover {
  transform: translateY(-5px) scale(1.02);
  box-shadow: 0 8px 30px rgba(37, 211, 102, 0.5);
}

.whatsapp-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  background: rgba(255,255,255,0.2);
  border-radius: 12px;
}

.whatsapp-text {
  display: flex;
  flex-direction: column;
  text-align: left;
}

.whatsapp-text .location {
  font-size: 1.1rem;
  font-weight: 700;
}

.whatsapp-text .action {
  font-size: 0.8rem;
  opacity: 0.9;
}

.whatsapp-arrow {
  font-size: 1.5rem;
  transition: transform 0.3s ease;
}

.whatsapp-btn:hover .whatsapp-arrow {
  transform: translateX(5px);
}

/* Benefit Cards */
.benefit-card {
  position: relative;
  text-align: center;
  padding: 2rem 1.5rem;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  backdrop-filter: blur(10px);
  transition: all 0.4s ease;
  overflow: hidden;
}

.benefit-card:hover {
  transform: translateY(-8px);
  border-color: rgba(6, 182, 212, 0.4);
  background: rgba(6, 182, 212, 0.05);
}

.benefit-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 150px;
  height: 150px;
  background: radial-gradient(circle, rgba(6, 182, 212, 0.3), transparent);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: opacity 0.4s ease;
  pointer-events: none;
}

.benefit-card:hover .benefit-glow {
  opacity: 1;
}

.benefit-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
  filter: drop-shadow(0 0 10px rgba(6, 182, 212, 0.5));
}

.benefit-title {
  font-size: 1.1rem;
  font-weight: 700;
  color: white;
  margin-bottom: 0.5rem;
}

.benefit-text {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: 0;
  line-height: 1.5;
}

/* Responsive */
@media (max-width: 768px) {
  .whatsapp-btn {
    width: 100%;
    max-width: 300px;
  }
}
</style>
