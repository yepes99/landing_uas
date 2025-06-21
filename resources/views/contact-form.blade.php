
<style>
      
.contact-section {
  color: #fff;
  padding: 5rem 1.5rem;
  text-align: center;
  background: linear-gradient(135deg, #1a1a1a, #222222);
  font-family: 'Oswald', sans-serif !important;
}

.section-title {
  color: #f0b80e;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-weight: 700;
  margin-bottom: 2.5rem;
  font-size: 2.5rem;
  text-shadow: 
    0 0 3px rgba(240, 184, 14, 0.7), 
    0 0 6px rgba(240, 184, 14, 0.5), 
    0 0 10px rgba(240, 184, 14, 0.3);
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
  border-radius: 0; /* Sin bordes redondeados */
}

.contact-column:hover {
  box-shadow: inset 0 0 15px rgba(240, 184, 14, 0.15);
}

.contact-info h3,
.contact-column h3 {
  font-size: 1.8rem;
  margin-bottom: 1.8rem;
  color: #f0b80e;
  font-weight: 700;
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
  color: #f0b80e;
  font-size: 1.2rem;
  width: 22px;
  flex-shrink: 0;

}

.contact-info a {
  color: #f0b80e;
  text-decoration: none;
  transition: color 0.3s ease;
}

.contact-info a:hover {
  color: #fff;
  text-decoration: underline;
}

.social-icons {
  margin-top: 1.8rem;
}

.social-icons a {
  margin-right: 1.2rem;
  font-size: 1.5rem;
  color: #f0b80e;
  transition: color 0.4s ease;
  display: inline-block;
}

.social-icons a:hover {
  color: #fff;
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
  box-shadow: 0 0 10px #f0b80e;
  color: #fff;
}

form.contact-form textarea {
  min-height: 140px;
}

.btn-glow {
  padding: 1rem 2.5rem;
  font-size: 1.1rem;
  font-weight: 700;
  color: #000;
  background: #f0b80e;
  border: none;
  border-radius: 0;
  cursor: pointer;
  transition: background 0.3s ease;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  box-shadow: none;
}

.btn-glow:hover {
  background: #e4a700;
  box-shadow: none;
}


</style>


 

 <section class="contact-section">
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
        <button type="submit" class="btn-glow">Enviar</button>
      </form>
    </div>

  </div>
</section>
