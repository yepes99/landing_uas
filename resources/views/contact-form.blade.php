
<style>
      

  .contact-section {
 
    color: #fff;
    padding: 6rem 2rem;
    text-align: center;
    overflow: hidden;
  }

  .contact-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 3rem;
    max-width: 1100px;
    margin: auto;
    justify-content: center;
  }

  .contact-column {
    flex: 1 1 450px;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease;
  }

  .contact-column:hover {
    transform: translateY(-4px);
  }

  .contact-info h3,
  .contact-form h3 {
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
    color: #f0b80e;
  }

  .contact-info ul {
    list-style: none;
    padding: 0;
    font-size: 0.95rem;
    line-height: 1.8;
  }

  .contact-info li {
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.6rem;
  }

  .contact-info i {
    color: #f0b80e;
    font-size: 1rem;
    width: 20px;
  }

  .contact-info a {
    color: #f0b80e;
    text-decoration: none;
  }

  .contact-info a:hover {
    text-decoration: underline;
  }

  .social-icons a {
    margin-right: 1rem;
    font-size: 1.2rem;
    color: #f0b80e;
    transition: color 0.3s ease;
  }

  .social-icons a:hover {
    color: #fff;
  }

  form.contact-form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }

  form.contact-form input,
  form.contact-form textarea {
    background: rgba(255, 255, 255, 0.1);
    border: none;
    padding: 0.85rem 1rem;
    border-radius: 8px;
    color: #fff;
    font-size: 1rem;
    transition: background 0.3s ease;
  }

  form.contact-form input:focus,
  form.contact-form textarea:focus {
    outline: none;
    background: rgba(240, 184, 14, 0.15);
  }

  form.contact-form textarea {
    min-height: 120px;
    resize: vertical;
  }

  .btn-glow {
    padding: 0.9rem 2rem;
    font-size: 1rem;
    font-weight: bold;
    color: #000;
    background: linear-gradient(135deg, #f0b80e, #e4a700);
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    box-shadow: 0 0 12px rgba(240, 184, 14, 0.8);
  }

  .btn-glow:hover {
    transform: scale(1.1);
    box-shadow: 0 0 18px rgba(240, 184, 14, 1);
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
        </ul>
        <div class="social-icons">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
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