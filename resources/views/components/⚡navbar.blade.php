<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<nav class="custom-navbar fixed-top">
    <div class="nav-container">
        <a class="nav-logo" href="#inicio" onclick="scrollToSection('inicio'); return false;">
            <img src="{{ asset('storage/img/logo.png') }}" alt="DigitalTex" style="max-height: 50px; width: auto; object-fit: contain;" loading="eager" />
            <span class="logo-glow"></span>
        </a>
        
        <div class="nav-links">
            @foreach([
                ['id' => 'sublimacion', 'label' => 'Sublimación'],
                ['id' => 'diseno', 'label' => 'Diseño'],
                ['id' => 'sistema', 'label' => 'Sistema'],
                ['id' => 'telas', 'label' => 'Telas'],
                ['id' => 'papel', 'label' => 'Papel'],
                ['id' => 'dtf', 'label' => 'DTF'],
                ['id' => 'dtf-mayor', 'label' => 'Mayorista'],
                ['id' => 'remeras', 'label' => 'Remeras'],
            ] as $link)
                <a 
                    href="#{{ $link['id'] }}"
                    onclick="scrollToSection('{{ $link['id'] }}'); return false;"
                    class="nav-link"
                >
                    <span class="link-text">{{ $link['label'] }}</span>
                    <span class="link-indicator"></span>
                </a>
            @endforeach
        </div>

        <button class="nav-cta" onclick="scrollToSection('contacto')">
            Contactar
        </button>
    </div>
</nav>

@push('styles')
<style>
/* Reset para evitar conflictos con Bootstrap */
html, body {
  margin: 0 !important;
  padding: 0 !important;
}

nav.custom-navbar.fixed-top {
  background-color: #000000 !important;
  background-image: none !important;
  background: #000000 !important;
  border-bottom: 2px solid #0080ff !important;
  height: 70px;
  display: flex;
  align-items: center;
  z-index: 99999 !important;
  box-shadow: 0 4px 20px rgba(0, 128, 255, 0.3) !important;
}

nav.custom-navbar.fixed-top:hover {
  background-color: #000000 !important;
  background: #000000 !important;
}

.nav-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 48px;
}

.nav-logo {
  position: relative;
  display: flex;
  align-items: center;
  text-decoration: none;
  z-index: 2;
}

.nav-logo img {
  height: 40px;
  width: auto;
  filter: brightness(1.1);
  transition: all 0.3s ease;
}

.nav-logo:hover img {
  filter: brightness(1.3) drop-shadow(0 0 20px rgba(0, 255, 255, 0.5));
  transform: scale(1.05);
}

.logo-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  background: radial-gradient(circle, rgba(0, 255, 255, 0.2) 0%, transparent 70%);
  border-radius: 50%;
  opacity: 0;
  transition: opacity 0.3s ease;
  pointer-events: none;
}

.nav-logo:hover .logo-glow {
  opacity: 1;
}

.nav-links {
  display: flex;
  gap: 8px;
  flex: 1;
  justify-content: center;
}

.nav-link {
  position: relative;
  padding: 10px 16px;
  color: rgba(255, 255, 255, 0.7);
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
  border-radius: 8px;
  transition: all 0.3s ease;
  overflow: hidden;
}

.nav-link::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 8px;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.nav-link:hover {
  color: #fff;
  transform: translateY(-1px);
}

.nav-link:hover::before {
  opacity: 1;
}

.link-indicator {
  position: absolute;
  bottom: 6px;
  left: 50%;
  transform: translateX(-50%) scaleX(0);
  width: 20px;
  height: 2px;
  background: linear-gradient(90deg, #00ffff, #0080ff);
  border-radius: 2px;
  transition: transform 0.3s ease;
}

.nav-link:hover .link-indicator,
.nav-link.active .link-indicator {
  transform: translateX(-50%) scaleX(1);
}

.nav-link.active {
  color: #00ffff;
}

.nav-cta {
  padding: 8px 18px;
  margin-left: 20px;
  background: linear-gradient(135deg, #0080ff 0%, #00ffff 100%);
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(0, 128, 255, 0.3);
}

.nav-cta:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0, 128, 255, 0.5);
}

@media (max-width: 992px) {
  .nav-links {
    display: none;
  }
  
  .nav-container {
    justify-content: space-between;
  }
}
</style>
@endpush

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

// Manejar scroll para resaltar sección activa
window.addEventListener('scroll', function() {
    const sections = ['sublimacion', 'diseno', 'sistema', 'telas', 'papel', 'dtf', 'dtf-mayor', 'remeras', 'productos'];
    const scrollPos = window.scrollY + 150;
    
    sections.forEach(section => {
        const element = document.getElementById(section);
        const link = document.querySelector(`a[href="#${section}"]`);
        
        if (element && link) {
            if (element.offsetTop <= scrollPos && element.offsetTop + element.offsetHeight > scrollPos) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        }
    });
});
</script>
@endpush