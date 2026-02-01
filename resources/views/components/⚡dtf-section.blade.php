<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section id="dtf" class="premium-section py-5">
  <div class="container py-4 position-relative">
      <!-- Decorative Elements -->
      <div class="section-orb section-orb-1"></div>
      <div class="section-orb section-orb-2"></div>
      <div class="grid-pattern"></div>
      
      <!-- Header -->
      <div class="text-center mb-5 position-relative">
        <div class="section-badge mb-4">
          <span>🔥 IMPRESIÓN PROFESIONAL</span>
        </div>
        <h2 class="section-title mb-3">DTF</h2>
        <h3 class="section-subtitle mb-4">Impresión DTF por Metro</h3>
        <p class="section-description mx-auto">
          Conocé todo sobre nuestra impresión DTF profesional por metro lineal. Ideal para negocios, marcas y confección textil con calidad garantizada.
        </p>
      </div>

      <!-- Servicio DTF -->
      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="main-card">
            <div class="main-card-inner p-5">
              <div class="card-header-icon">🚀</div>
              <h3 class="card-title-center">¿Qué incluye nuestro servicio de impresiones DTF?</h3>
              <p class="card-text-center">
                Realizamos impresión DTF por metro lineal en láminas de 58cm de ancho. Nuestra técnica permite estampar en algodón, poliéster o mezclas, tanto claras como oscuras. Alta definición, colores brillantes y máxima durabilidad.
              </p>
            </div>
            <div class="main-card-glow"></div>
          </div>
        </div>
      </div>

      <!-- Precios Mayoristas -->
      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="price-card">
            <div class="price-card-inner p-5">
              <div class="price-icon">💰</div>
              <h3 class="price-title">Precios Especiales para Mayoristas</h3>
              <p class="price-text">
                Contamos con precios exclusivos por cantidad para quienes realizan pedidos constantes. Mantené tu nivel mensual y accedé a tarifas preferenciales. Desde 10 metros ya podés escalar tu producción.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Beneficios -->
      <div class="text-center mb-4">
        <h3 class="gallery-title">🛠️ Beneficios para Clientes Frecuentes</h3>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-8">
          <div class="benefits-card p-5">
            <div class="benefits-list">
              <div class="benefit-item">
                <span class="benefit-check">✔️</span>
                <span>Atención directa los 7 días</span>
              </div>
              <div class="benefit-item">
                <span class="benefit-check">✔️</span>
                <span>Carga de archivos los fines de semana</span>
              </div>
              <div class="benefit-item">
                <span class="benefit-check">✔️</span>
                <span>Pagos con adelantos desde el sistema</span>
              </div>
              <div class="benefit-item">
                <span class="benefit-check">✔️</span>
                <span>Producción prioritaria</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tips -->
      <div class="text-center mb-4">
        <h3 class="gallery-title">🧠 Tips para optimizar tus impresiones DTF</h3>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="tips-card p-5">
            <div class="tips-list">
              <div class="tip-item">
                <span class="tip-dot"></span>
                <span>Enviá tus archivos en PNG sin fondo o PDF vectorial</span>
              </div>
              <div class="tip-item">
                <span class="tip-dot"></span>
                <span>Armá tus diseños en láminas de 58cm de ancho para aprovechar al máximo el metro lineal</span>
              </div>
              <div class="tip-item">
                <span class="tip-dot"></span>
                <span>Usá resolución de 300dpi para resultados nítidos y profesionales</span>
              </div>
              <div class="tip-item">
                <span class="tip-dot"></span>
                <span>¡Consultanos antes si tenés dudas! Nuestro equipo te asesora gratis</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Producto -->
      <div class="product-cta text-center mb-5">
        <h3 class="cta-title">Comprá tu Lámina DTF por Metro</h3>
        <p class="cta-description">
          Accedé directo al producto más vendido por talleres y marcas: impresión DTF a medida, con entrega ágil y soporte técnico incluido.
        </p>
        <a href="https://dtf.ar" target="_blank" class="product-btn">
          <span>Ver producto DTF</span>
          <span class="star-icon">⭐</span>
        </a>
      </div>

      <!-- FAQ -->
      <div class="text-center mb-4">
        <h3 class="gallery-title">📌 Preguntas Frecuentes sobre el Servicio DTF</h3>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-10">
          <div class="faq-section">
            <div class="faq-item">
              <div class="faq-question">¿Se puede estampar cualquier diseño?</div>
              <div class="faq-answer">Sí, siempre que sea en buena calidad y formato correcto.</div>
            </div>
            <div class="faq-item">
              <div class="faq-question">¿Cuánto tarda?</div>
              <div class="faq-answer">Generalmente 24/48hs hábiles.</div>
            </div>
            <div class="faq-item">
              <div class="faq-question">¿Qué telas acepta?</div>
              <div class="faq-answer">Cualquier tela, incluso las oscuras.</div>
            </div>
            <div class="faq-item">
              <div class="faq-question">¿Puedo enviar pedidos los domingos?</div>
              <div class="faq-answer">Sí, si sos cliente mayorista, tenés acceso 24/7 a nuestro sistema.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

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
  background: #ec4899;
  top: 5%;
  right: -15%;
  animation: float 12s ease-in-out infinite;
}

.section-orb-2 {
  width: 400px;
  height: 400px;
  background: #06b6d4;
  bottom: 10%;
  left: -10%;
  animation: float 15s ease-in-out infinite reverse;
}

.grid-pattern {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: radial-gradient(circle, rgba(255,255,255,0.05) 1px, transparent 1px);
  background-size: 40px 40px;
  pointer-events: none;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0); }
  50% { transform: translate(30px, -30px); }
}

.section-badge {
  display: inline-block;
  padding: 0.5rem 1.5rem;
  background: rgba(236, 72, 153, 0.1);
  border: 1px solid rgba(236, 72, 153, 0.3);
  border-radius: 50px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #f472b6;
  letter-spacing: 1px;
}

.section-title {
  font-size: clamp(2.5rem, 6vw, 4rem);
  font-weight: 900;
  background: linear-gradient(135deg, #fff 0%, #ec4899 50%, #f472b6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.section-subtitle {
  font-size: 1.5rem;
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
}

/* Main Card */
.main-card {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
}

.main-card-inner {
  background: linear-gradient(135deg, rgba(236, 72, 153, 0.1), rgba(6, 182, 212, 0.05));
  border: 1px solid rgba(236, 72, 153, 0.3);
  border-radius: 24px;
  backdrop-filter: blur(20px);
  text-align: center;
  position: relative;
  z-index: 1;
}

.main-card-glow {
  position: absolute;
  inset: -2px;
  background: linear-gradient(135deg, #ec4899, #06b6d4);
  border-radius: 24px;
  z-index: 0;
  opacity: 0.2;
  filter: blur(15px);
}

.card-header-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.card-title-center {
  font-size: 1.5rem;
  font-weight: 800;
  color: white;
  margin-bottom: 1rem;
}

.card-text-center {
  color: rgba(255, 255, 255, 0.7);
  max-width: 700px;
  margin: 0 auto;
  line-height: 1.7;
}

/* Price Card */
.price-card {
  border-radius: 20px;
  overflow: hidden;
}

.price-card-inner {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  text-align: center;
}

.price-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.price-title {
  font-size: 1.5rem;
  font-weight: 800;
  color: white;
  margin-bottom: 1rem;
}

.price-text {
  color: rgba(255, 255, 255, 0.6);
  max-width: 700px;
  margin: 0 auto;
}

/* Benefits Card */
.benefits-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
}

.benefits-list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.benefit-item {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1rem 1.5rem;
  background: rgba(34, 197, 94, 0.05);
  border: 1px solid rgba(34, 197, 94, 0.2);
  border-radius: 12px;
  color: rgba(255, 255, 255, 0.8);
  transition: all 0.3s ease;
}

.benefit-item:hover {
  background: rgba(34, 197, 94, 0.1);
  transform: translateX(5px);
}

.benefit-check {
  font-size: 1.2rem;
}

/* Tips Card */
.tips-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
}

.tips-list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.tip-item {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  color: rgba(255, 255, 255, 0.7);
  padding: 0.75rem 0;
}

.tip-dot {
  width: 8px;
  height: 8px;
  background: linear-gradient(135deg, #06b6d4, #22d3ee);
  border-radius: 50%;
  margin-top: 8px;
  flex-shrink: 0;
}

/* Product CTA */
.product-cta {
  padding: 3rem;
  background: linear-gradient(135deg, rgba(236, 72, 153, 0.1), rgba(6, 182, 212, 0.05));
  border: 1px solid rgba(236, 72, 153, 0.2);
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

.product-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 1rem 2.5rem;
  background: white;
  border-radius: 50px;
  font-size: 1.1rem;
  font-weight: 700;
  color: #0891b2;
  text-decoration: none;
  transition: all 0.4s ease;
  box-shadow: 0 4px 20px rgba(255, 255, 255, 0.2);
}

.product-btn:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 8px 30px rgba(255, 255, 255, 0.3);
}

.star-icon {
  animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.2); }
}

/* FAQ Section */
.faq-section {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.faq-item {
  padding: 1.5rem;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 16px;
  transition: all 0.3s ease;
}

.faq-item:hover {
  border-color: rgba(236, 72, 153, 0.3);
  background: rgba(236, 72, 153, 0.05);
}

.faq-question {
  font-size: 1rem;
  font-weight: 700;
  color: white;
  margin-bottom: 0.5rem;
}

.faq-answer {
  color: rgba(255, 255, 255, 0.6);
  font-size: 0.95rem;
}

/* Final CTA */
.final-cta {
  padding: 3rem;
  background: linear-gradient(135deg, rgba(37, 211, 102, 0.1), rgba(6, 182, 212, 0.05));
  border: 1px solid rgba(37, 211, 102, 0.2);
  border-radius: 24px;
}

.final-title {
  font-size: 1.75rem;
  font-weight: 800;
  color: white;
  margin-bottom: 0.75rem;
}

.final-description {
  color: rgba(255, 255, 255, 0.6);
  margin-bottom: 1.5rem;
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
</style>
@endpush
