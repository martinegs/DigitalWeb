<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
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
            <div class="main-card-inner">
              <div class="row align-items-center">
                <div class="col-12 col-md-5 p-0">
                  <div class="main-card-image">
                    <img src="{{ asset('storage/img/moldes/Camiseta de Futbol.webp') }}" alt="Molde Camiseta de Fútbol" onclick="openImageModal(this)" style="cursor: pointer;" loading="lazy" />
                  </div>
                </div>
                <div class="col-12 col-md-7 p-4 p-md-5">
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
                </div>
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
            <div class="mold-card-image">
              <img src="{{ asset('storage/img/moldes/Top Deportivo.webp') }}" alt="Top Deportivo" onclick="openImageModal(this)" style="cursor: pointer;" loading="lazy" />
            </div>
            <div class="mold-card-content">
              <h4 class="mold-title">Top Deportivo</h4>
              <p class="mold-subtitle">Top deportivo</p>
            </div>
            <div class="mold-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="mold-card">
            <div class="mold-card-image">
              <img src="{{ asset('storage/img/moldes/Campera Manga Ranglar.webp') }}" alt="Campera Manga Ranglan" onclick="openImageModal(this)" style="cursor: pointer;" loading="lazy" />
            </div>
            <div class="mold-card-content">
              <h4 class="mold-title">Campera Manga Ranglan</h4>
              <p class="mold-subtitle">Campera Ranglan</p>
            </div>
            <div class="mold-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="mold-card">
            <div class="mold-card-image">
              <img src="{{ asset('storage/img/moldes/Remera Manga Corta.webp') }}" alt="Remera Manga Corta" onclick="openImageModal(this)" style="cursor: pointer;" loading="lazy" />
            </div>
            <div class="mold-card-content">
              <h4 class="mold-title">Remera Mangas Cortas</h4>
              <p class="mold-subtitle">Remera manga corta</p>
            </div>
            <div class="mold-glow"></div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="mold-card">
            <div class="mold-card-image">
              <img src="{{ asset('storage/img/moldes/Calza Larga.webp') }}" alt="Calza Larga" onclick="openImageModal(this)" style="cursor: pointer;" loading="lazy" />
            </div>
            <div class="mold-card-content">
              <h4 class="mold-title">Calzas Largas</h4>
              <p class="mold-subtitle">Calza deportiva</p>
            </div>
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
          <div class="prep-card">
            <div class="prep-card-image mb-4">
              <img src="{{ asset('storage/img/moldes/Preparacion de archivo para impresion.webp') }}" alt="Preparación de Archivos" onclick="openImageModal(this)" style="cursor: pointer;" loading="lazy" />
            </div>
            <div class="tips-card-inner p-4 p-md-5">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal para ampliar imágenes -->
  <div id="imageModal" class="image-modal" onclick="window.closeImageModal()">
    <span class="modal-close">&times;</span>
    <img class="modal-content" id="modalImage" onclick="event.stopPropagation()">
    <div id="modalCaption" class="modal-caption"></div>
  </div>
</div>

<script>
window.openImageModal = function(imgElement) {
  const modal = document.getElementById('imageModal');
  const modalImg = document.getElementById('modalImage');
  const caption = document.getElementById('modalCaption');
  
  modal.style.display = 'flex';
  modalImg.src = imgElement.src;
  caption.textContent = imgElement.alt;
  document.body.style.overflow = 'hidden';
}

window.closeImageModal = function() {
  const modal = document.getElementById('imageModal');
  modal.style.display = 'none';
  document.body.style.overflow = 'auto';
}

// Cerrar con tecla ESC
document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    window.closeImageModal();
  }
});
</script>

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
  overflow: hidden;
}

.main-card-image {
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.main-card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  min-height: 400px;
}

@media (max-width: 768px) {
  .main-card-image img {
    min-height: 300px;
  }
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
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  overflow: hidden;
  height: 100%;
  display: flex;
  flex-direction: column;
}

.mold-card:hover {
  transform: translateY(-10px);
  border-color: rgba(6, 182, 212, 0.5);
  background: rgba(6, 182, 212, 0.05);
}

.mold-card-image {
  width: 100%;
  height: 250px;
  overflow: hidden;
  position: relative;
}

.mold-card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.mold-card:hover .mold-card-image img {
  transform: scale(1.05);
}

.mold-card-content {
  padding: 1.5rem;
  text-align: center;
  flex: 1;
}

.mold-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 150px;
  height: 150px;
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
.tips-card,
.prep-card {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
}

.prep-card-image {
  width: 100%;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
}

.prep-card-image img {
  width: 100%;
  height: auto;
  display: block;
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

/* Modal de imágenes */
.image-modal {
  display: none;
  position: fixed;
  z-index: 10000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.95);
  justify-content: center;
  align-items: center;
  animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.modal-close {
  position: absolute;
  top: 30px;
  right: 50px;
  color: #fff;
  font-size: 50px;
  font-weight: 300;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 10001;
}

.modal-close:hover {
  color: #06b6d4;
  transform: scale(1.1);
}

.modal-content {
  max-width: 90%;
  max-height: 85vh;
  object-fit: contain;
  border-radius: 12px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8);
  animation: zoomIn 0.3s ease;
}

@keyframes zoomIn {
  from { 
    transform: scale(0.8);
    opacity: 0;
  }
  to { 
    transform: scale(1);
    opacity: 1;
  }
}

.modal-caption {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  color: #fff;
  font-size: 1.2rem;
  font-weight: 600;
  text-align: center;
  padding: 1rem 2rem;
  background: rgba(0, 0, 0, 0.7);
  border-radius: 50px;
  backdrop-filter: blur(10px);
}

@media (max-width: 768px) {
  .modal-close {
    top: 20px;
    right: 20px;
    font-size: 40px;
  }
  
  .modal-content {
    max-width: 95%;
    max-height: 80vh;
  }
  
  .modal-caption {
    bottom: 20px;
    font-size: 1rem;
    padding: 0.75rem 1.5rem;
  }
}
</style>
@endpush
