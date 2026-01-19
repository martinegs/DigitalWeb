<template>
  <footer class="premium-footer text-white py-5">
    <div class="container py-4 position-relative">
      <!-- Social Media Section -->
      <div class="social-section text-center my-5 py-4">
        <h3 class="social-title mb-4">Seguinos en Redes Sociales</h3>
        <div class="d-flex gap-4 justify-content-center align-items-center flex-wrap">
          <a 
            href="https://www.facebook.com/estampadosdigital" 
            target="_blank"
            class="social-link social-facebook"
          >
            <span class="social-icon-wrapper">
              <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </span>
            <span class="social-name">Facebook</span>
          </a>
          
          <a 
            href="https://www.instagram.com/digitaltex.sublimacion/" 
            target="_blank"
            class="social-link social-instagram"
          >
            <span class="social-icon-wrapper">
              <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </span>
            <span class="social-name">Instagram</span>
          </a>
          
          <a 
            href="https://www.tiktok.com/@dtf.stamp" 
            target="_blank"
            class="social-link social-tiktok"
          >
            <span class="social-icon-wrapper">
              <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
              </svg>
            </span>
            <span class="social-name">TikTok</span>
          </a>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom pt-4 mt-4">
        <div class="row g-3 align-items-center">
          <div class="col-12 col-md-6 text-center text-md-start">
            <p class="mb-0 small copyright-text">
              &copy; {{ currentYear }} <span class="brand-name">DIGITALTEX</span>. Todos los derechos reservados.
            </p>
          </div>
          <div class="col-12 col-md-6">
            <div class="d-flex gap-4 justify-content-center justify-content-md-end small">
              <a href="#" class="footer-link">Términos</a>
              <a href="#" class="footer-link">Privacidad</a>
              <a href="#" class="footer-link">FAQ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>

<style scoped>
.premium-footer {
  background: transparent;
  position: relative;
  overflow: hidden;
}

/* Social Section */
.social-section {
  position: relative;
}

.social-title {
  font-size: 1.3rem;
  font-weight: 700;
  color: white;
}

.social-link {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  padding: 0.75rem 1.5rem;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 50px;
  text-decoration: none;
  color: white;
  transition: all 0.3s ease;
}

.social-icon-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.3s ease;
}

.social-name {
  font-weight: 600;
  font-size: 0.95rem;
}

.social-facebook:hover {
  background: rgba(24, 119, 242, 0.2);
  border-color: #1877F2;
  color: #1877F2;
  transform: translateY(-3px);
  box-shadow: 0 5px 20px rgba(24, 119, 242, 0.3);
}

.social-instagram:hover {
  background: linear-gradient(135deg, rgba(131, 58, 180, 0.2), rgba(253, 29, 29, 0.2));
  border-color: #E4405F;
  color: #E4405F;
  transform: translateY(-3px);
  box-shadow: 0 5px 20px rgba(228, 64, 95, 0.3);
}

.social-tiktok:hover {
  background: rgba(0, 242, 234, 0.2);
  border-color: #00f2ea;
  color: #00f2ea;
  transform: translateY(-3px);
  box-shadow: 0 5px 20px rgba(0, 242, 234, 0.3);
}

.social-link:hover .social-icon-wrapper {
  transform: scale(1.1);
}

/* Footer Bottom */
.footer-bottom {
  position: relative;
}

.copyright-text {
  color: rgba(255, 255, 255, 0.5);
}

.brand-name {
  font-weight: 800;
  background: linear-gradient(135deg, #06b6d4, #22d3ee);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.footer-link {
  color: rgba(255, 255, 255, 0.5);
  text-decoration: none;
  transition: all 0.3s ease;
  position: relative;
}

.footer-link::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 1px;
  background: #06b6d4;
  transition: width 0.3s ease;
}

.footer-link:hover {
  color: #06b6d4;
}

.footer-link:hover::after {
  width: 100%;
}

/* Responsive */
@media (max-width: 768px) {
  .social-link {
    padding: 0.6rem 1rem;
  }
}
</style>
