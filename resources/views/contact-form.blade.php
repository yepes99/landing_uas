<section id="contacto" class="contact-section">
  <h2 class="section-title">Contacto</h2>
  <div class="contact-wrapper">

    <div class="contact-column contact-info">
      <h3>Información de contacto</h3>
      <ul>
        <li><i class="fas fa-map-marker-alt"></i> Calle Falsa 123, Ciudad</li>
        <li><i class="fas fa-phone"></i> <a href="tel:+34123456789">+34 123 456 789</a></li>
        <li><i class="fas fa-envelope"></i> <a href="mailto:info@arte-digital.com">info@arte-digital.com</a></li>
        <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/34123456789" target="_blank" rel="noopener">WhatsApp +34 123 456 789</a></li>
        <li><i class="far fa-clock"></i> Lun - Vie 9:00 - 18:00</li>
        <li><i class="fas fa-globe"></i> <a href="https://goo.gl/maps/xyz" target="_blank" rel="noopener">Google Maps</a></li>
      </ul>
      <div class="social-icons">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>

    <div class="contact-column">
      <h3>Escríbenos</h3>
      <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
        @csrf
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <textarea name="message" placeholder="Mensaje" required></textarea>
        <button type="submit" class="btn-gold">Enviar</button>
      </form>
    </div>

  </div>
</section>

<!-- Modal de mensaje -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-content-no-radius">
      <div class="modal-header modal-header-gold">
        <h5 class="modal-title" id="contactModalLabel">Mensaje</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body modal-body-standard">
        <p id="contactModalBody" class="modal-message-text"></p>
      </div>
      <div class="modal-footer modal-footer-gold">
        <button type="button" class="btn modal-btn-gold" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    @if(session('success'))
      var message = "{{ session('success') }}";
      var modalBody = document.getElementById('contactModalBody');
      modalBody.textContent = message;
      var contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
      contactModal.show();
    @elseif(session('error'))
      var message = "{{ session('error') }}";
      var modalBody = document.getElementById('contactModalBody');
      modalBody.textContent = message;
      var contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
      contactModal.show();
    @endif
  });
</script>


