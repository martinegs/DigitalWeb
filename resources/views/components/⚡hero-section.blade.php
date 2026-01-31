<?php

use Livewire\Component;

new class extends Component {
    //
};

?>

<div>
  <section id="inicio" class="hero-section position-relative min-vh-100 d-flex align-items-center justify-content-center overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="hero-bg-shapes">
      <div class="shape shape-1"></div>
      <div class="shape shape-2"></div>
      <div class="shape shape-3"></div>
      <div class="grid-pattern"></div>
    </div>
    
    <!-- Floating orbs -->
    <div class="floating-orb orb-1"></div>
    <div class="floating-orb orb-2"></div>
    <div class="floating-orb orb-3"></div>
    
    <div class="container position-relative" style="z-index: 10;">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 text-center">
          <!-- Badge -->
          <div class="hero-badge mb-4">
            <span class="badge-glow"></span>
            <span class="badge-text">🚀 Líder en Sublimación Textil Argentina</span>
          </div>

          <!-- Titular Principal -->
          <h1 class="hero-title mb-4">
            <span class="title-line">Sublimación</span>
            <span class="title-gradient">por Metro</span>
          </h1>

          <!-- Subtítulo -->
          <p class="hero-subtitle mx-auto mb-5">
            El método más eficiente, rápido y confiable para estampar grandes volúmenes de tela con calidad profesional.
          </p>

          <!-- CTA Buttons -->
          <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center mb-5">
            <button onclick="scrollToSection('contacto')" class="btn-primary-glow">
              <span class="btn-shine"></span>
              <span class="btn-content">Solicitar Presupuesto</span>
            </button>
            <button onclick="scrollToSection('dtf')" class="btn-secondary-glass">
              <span class="btn-content">Ver Precios DTF</span>
            </button>
          </div>

          <!-- Stats -->
          <div class="row g-4 mt-5">
            <div class="col-12 col-md-4">
              <div class="stat-card">
                <div class="stat-number">500+</div>
                <div class="stat-label">Clientes Activos</div>
                <div class="stat-bar"></div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="stat-card">
                <div class="stat-number">10K+</div>
                <div class="stat-label">Metros Mensuales</div>
                <div class="stat-bar"></div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="stat-card">
                <div class="stat-number">100%</div>
                <div class="stat-label">Garantía de Calidad</div>
                <div class="stat-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@push('scripts')
<script>
function scrollToSection(id) {
  const element = document.getElementById(id);
  if (element) {
    const offset = 80;
    const elementPosition = element.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - offset;

    window.scrollTo({
      top: offsetPosition,
      behavior: 'smooth'
    });
  }
}
</script>
@endpush

@push('styles')
<style>
.hero-section {
  background: transparent;
  padding: 120px 0 80px;
}

/* Background Shapes */
.hero-bg-shapes {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
}

.shape {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  opacity: 0.5;
}

.shape-1 {
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(6, 182, 212, 0.3) 0%, transparent 70%);
  top: -200px;
  left: -200px;
  animation: float-slow 15s ease-in-out infinite;
}

.shape-2 {
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(139, 92, 246, 0.25) 0%, transparent 70%);
  bottom: -150px;
  right: -150px;
  animation: float-slow 18s ease-in-out infinite reverse;
}

.shape-3 {
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(236, 72, 153, 0.2) 0%, transparent 70%);
  top: 40%;
  right: 20%;
  animation: float-slow 12s ease-in-out infinite;
}

.grid-pattern {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: 
    linear-gradient(rgba(6, 182, 212, 0.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(6, 182, 212, 0.03) 1px, transparent 1px);
  background-size: 60px 60px;
}

/* Floating orbs */
.floating-orb {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
}

.orb-1 {
  width: 8px;
  height: 8px;
  background: #06b6d4;
  box-shadow: 0 0 20px #06b6d4;
  top: 20%;
  left: 15%;
  animation: float-orb 8s ease-in-out infinite;
}

.orb-2 {
  width: 6px;
  height: 6px;
  background: #8b5cf6;
  box-shadow: 0 0 15px #8b5cf6;
  top: 60%;
  right: 20%;
  animation: float-orb 10s ease-in-out infinite reverse;
}

.orb-3 {
  width: 10px;
  height: 10px;
  background: #ec4899;
  box-shadow: 0 0 25px #ec4899;
  bottom: 30%;
  left: 25%;
  animation: float-orb 12s ease-in-out infinite;
}

@keyframes float-slow {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(30px, -30px) rotate(5deg); }
  66% { transform: translate(-20px, 20px) rotate(-5deg); }
}

@keyframes float-orb {
  0%, 100% { transform: translateY(0) scale(1); opacity: 0.8; }
  50% { transform: translateY(-30px) scale(1.2); opacity: 1; }
}

/* Hero Badge */
.hero-badge {
  display: inline-flex;
  align-items: center;
  position: relative;
  padding: 10px 24px;
  background: rgba(6, 182, 212, 0.1);
  border: 1px solid rgba(6, 182, 212, 0.3);
  border-radius: 50px;
  animation: pulse-badge 3s ease-in-out infinite;
}

.badge-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(6, 182, 212, 0.2) 0%, transparent 70%);
  border-radius: 50px;
  filter: blur(10px);
}

.badge-text {
  position: relative;
  color: #22d3ee;
  font-size: 0.9rem;
  font-weight: 500;
  letter-spacing: 0.5px;
}

@keyframes pulse-badge {
  0%, 100% { box-shadow: 0 0 20px rgba(6, 182, 212, 0.2); }
  50% { box-shadow: 0 0 40px rgba(6, 182, 212, 0.4); }
}

/* Hero Title */
.hero-title {
  font-family: 'Space Grotesk', sans-serif;
  font-size: clamp(2.5rem, 8vw, 5rem);
  font-weight: 700;
  line-height: 1.1;
  margin-bottom: 1.5rem;
}

.title-line {
  display: block;
  color: #f8fafc;
}

.title-gradient {
  display: block;
  background: linear-gradient(135deg, #06b6d4 0%, #8b5cf6 50%, #ec4899 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: gradient-shift 8s ease infinite;
  background-size: 200% 200%;
}

@keyframes gradient-shift {
  0%, 100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}

/* Hero Subtitle */
.hero-subtitle {
  font-size: 1.25rem;
  color: #94a3b8;
  max-width: 600px;
  line-height: 1.7;
}

/* Buttons */
.btn-primary-glow {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 18px 36px;
  background: linear-gradient(135deg, #06b6d4 0%, #8b5cf6 100%);
  border: none;
  border-radius: 50px;
  color: white;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  overflow: hidden;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 4px 20px rgba(6, 182, 212, 0.4);
}

.btn-primary-glow:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 30px rgba(6, 182, 212, 0.6);
}

.btn-shine {
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.6s ease;
}

.btn-primary-glow:hover .btn-shine {
  left: 100%;
}

.btn-content {
  position: relative;
  z-index: 1;
}

.btn-secondary-glass {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 18px 36px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 50px;
  color: #f8fafc;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.btn-secondary-glass:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: rgba(6, 182, 212, 0.5);
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

/* Stat Cards */
.stat-card {
  padding: 30px 20px;
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: 20px;
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

.stat-card:hover {
  border-color: rgba(6, 182, 212, 0.3);
  background: rgba(6, 182, 212, 0.05);
  transform: translateY(-5px);
}

.stat-card .stat-number {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 3rem;
  font-weight: 700;
  background: linear-gradient(135deg, #06b6d4, #8b5cf6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  line-height: 1;
  margin-bottom: 0.5rem;
}

.stat-card .stat-label {
  color: #64748b;
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.stat-bar {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(90deg, #06b6d4, #8b5cf6, #ec4899);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.5s ease;
}

.stat-card:hover .stat-bar {
  transform: scaleX(1);
}

/* Scroll Indicator */
.scroll-indicator {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
  opacity: 0.6;
  transition: opacity 0.3s ease;
  cursor: pointer;
}

.scroll-indicator:hover {
  opacity: 1;
}

.mouse {
  width: 26px;
  height: 40px;
  border: 2px solid #64748b;
  border-radius: 20px;
  position: relative;
}

.wheel {
  width: 4px;
  height: 8px;
  background: #06b6d4;
  border-radius: 2px;
  position: absolute;
  top: 8px;
  left: 50%;
  transform: translateX(-50%);
  animation: scroll-wheel 2s ease-in-out infinite;
}

@keyframes scroll-wheel {
  0%, 100% { transform: translateX(-50%) translateY(0); opacity: 1; }
  50% { transform: translateX(-50%) translateY(10px); opacity: 0.3; }
}

.scroll-indicator span {
  font-size: 0.75rem;
  color: #64748b;
  letter-spacing: 1px;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-section {
    padding: 100px 0 60px;
  }
  
  .hero-badge {
    padding: 8px 16px;
  }
  
  .badge-text {
    font-size: 0.8rem;
  }
  
  .hero-subtitle {
    font-size: 1rem;
  }
  
  .btn-primary-glow,
  .btn-secondary-glass {
    padding: 14px 28px;
    font-size: 0.9rem;
  }
  
  .stat-card .stat-number {
    font-size: 2.2rem;
  }
  
  .scroll-indicator {
    display: none;
  }
}
</style>
@endpush
