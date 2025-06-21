
<style>
      
.contact-section {
  color: var(--color-white);
  padding: 5rem 1.5rem;
  text-align: center;
  background: linear-gradient(135deg, #1a1a1a, var(--color-dark));
  font-family: var(--font-base);
}

.section-title {
  color: var(--color-primary);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-weight: var(--font-weight-bold);
  margin-bottom: 2.5rem;
  font-size: 2.5rem;

}

.contact-wrapper {
  display: flex;
  flex-wrap: wrap;
  gap: 2.5rem;
  max-width: 1260px;
  margin: 0 auto;
  justify-content: center;
}

.contact-column {
  flex: 1 1 420px;
  background: #2e2e2e;
  border: none;
  box-shadow: inset 0 0 10px rgba(240, 184, 14, 0.05);
  padding: 2rem;
  transition: box-shadow 0.4s ease;
  cursor: default;
  border-radius: 0;
}

.contact-column:hover {
  box-shadow: inset 0 0 15px rgba(240, 184, 14, 0.15);
}

.contact-info h3,
.contact-column h3 {
  font-size: 1.8rem;
  margin-bottom: 1.8rem;
  color: var(--color-primary);
  font-weight: var(--font-weight-bold);
  letter-spacing: 0.03em;
  text-transform: uppercase;
  text-shadow: 0 0 6px #f0b80e80;
}

.contact-info ul {
  list-style: none;
  padding: 0;
  font-size: 1rem;
  line-height: 2;
  color: #ddd;
  user-select: none;
}

.contact-info li {
  margin-bottom: 1.2rem;
  display: flex;
  align-items: center;
  gap: 0.7rem;
}

.contact-info i {
  color: var(--color-primary);
  font-size: 1.2rem;
  width: 22px;
  flex-shrink: 0;
}

.contact-info a {
  color: var(--color-primary);
  text-decoration: none;
  transition: color 0.3s ease;
}

.contact-info a:hover {
  color: var(--color-white);
  text-decoration: underline;
}

.social-icons {
  margin-top: 1.8rem;
}

.social-icons a {
  margin-right: 1.2rem;
  font-size: 1.5rem;
  color: var(--color-primary);
  transition: color 0.4s ease;
  display: inline-block;
}

.social-icons a:hover {
  color: var(--color-white);
}

form.contact-form {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

form.contact-form input,
form.contact-form textarea {
  background: #1e1e1e;
  border: none;
  padding: 1rem 1.2rem;
  border-radius: 0;
  color: #eee;
  font-size: 1rem;
  font-weight: 500;
  box-shadow: inset 0 0 6px #000;
  transition: box-shadow 0.3s ease, background 0.3s ease;
  resize: vertical;
}

form.contact-form input:focus,
form.contact-form textarea:focus {
  outline: none;
  background: #282828;
  box-shadow: 0 0 10px var(--color-primary);
  color: var(--color-white);
}

form.contact-form textarea {
  min-height: 140px;
}



</style>


 

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
      <form action="#" method="POST" class="contact-form">
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <textarea name="message" placeholder="Mensaje" required></textarea>
        <button type="submit" class="btn-gold">Enviar</button>
      </form>
    </div>

  </div>
</section>
