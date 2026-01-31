<div class="floating-whatsapp">
  <a href="https://wa.me/5492616945791" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Mendoza">
    <div class="fw-icon">💬</div>
    <div class="fw-text">Escribinos</div>
  </a>
</div>

@push('styles')
<style>
.floating-whatsapp {
  position: fixed;
  right: 18px;
  bottom: 20px;
  z-index: 100000;
}
.floating-whatsapp a {
  display: flex;
  align-items: center;
  gap: 10px;
  background: linear-gradient(135deg,#25D366 0%,#128C7E 100%);
  color: #fff;
  padding: 10px 14px;
  border-radius: 50px;
  box-shadow: 0 10px 30px rgba(18,140,126,0.25);
  text-decoration: none;
  font-weight: 700;
}
.fw-icon { font-size: 1.25rem; }
.fw-text { font-size: 0.95rem; }
@media (max-width: 576px) {
  .floating-whatsapp { right: 12px; bottom: 14px; }
  .floating-whatsapp a { padding: 10px 12px; }
}
</style>
@endpush