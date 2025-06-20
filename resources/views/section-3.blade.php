<style>
  .services-section {
    padding: 8rem 2rem; /* Más alto */
    text-align: center;
    color: #fff;
    background-size: 40px 40px;
  }

  .services-section .section-title-service {
    font-size: 3rem;
    font-weight: 800;
    font-family: 'Oxanium', sans-serif;
    background: linear-gradient(90deg, #fff200, #f0b80e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 0 6px rgba(255, 242, 0, 0.7);
    margin-bottom: 4rem;
    letter-spacing: 1.2px;
  }

  .services-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2.5rem;
  }

  .service-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(240, 184, 14, 0.08);
    border-radius: 0; /* Sin bordes redondeados */
    padding: 2.5rem;
    width: 100%;
    max-width: 360px;
    text-align: left;
    backdrop-filter: blur(8px);
    box-shadow: 0 2px 10px rgba(240, 184, 14, 0.1); /* sombra más suave */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    opacity: 0;             /* Inicialmente invisible */
    transform: translateY(40px); /* Desplazado hacia abajo */
  }

  /* Estado activo cuando está visible */
  .service-card.visible {
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }

  .service-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 24px rgba(240, 184, 14, 0.18);
  }

  .icon-wrapper {
    background-color: rgba(240, 184, 14, 0.07);
    color: #f0b80e;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    border-radius: 0; /* sin redondear */
    font-size: 18px;
    margin-bottom: 1.2rem;
  }

  .service-card h3 {
    font-size: 1.3rem;
    margin-bottom: 0.7rem;
    color: #fff;
    font-weight: 600;
  }

  .service-card p {
    font-size: 1rem;
    color: #ddd;
    line-height: 1.6;
    margin-bottom: 1.2rem;
  }

  .service-card a {
    font-size: 0.95rem;
    color: #f0b80e;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-weight: 600;
    transition: color 0.3s ease;
  }

  .service-card a:hover {
    text-decoration: underline;
    color: #fff200;
  }
</style>

<section class="services-section">
  <h2 class="section-title-service">Servicios</h2>
  <div class="services-cards">
    <div class="service-card">
      <div class="icon-wrapper">
        <i class="fas fa-paint-brush"></i>
      </div>
      <h3>Diseño gráfico</h3>
      <p>Creación de ilustraciones, logos y material visual para tu marca.</p>
      <a href="#">Ver más <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="service-card">
      <div class="icon-wrapper">
        <i class="fas fa-video"></i>
      </div>
      <h3>Animación 2D</h3>
      <p>Producción de animaciones para videos explicativos y publicidad.</p>
      <a href="#">Ver más <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="service-card">
      <div class="icon-wrapper">
        <i class="fas fa-camera-retro"></i>
      </div>
      <h3>Edición de video</h3>
      <p>Montaje y postproducción para proyectos audiovisuales.</p>
      <a href="#">Ver más <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.service-card');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if(entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.2
    });

    cards.forEach(card => {
      observer.observe(card);
    });
  });
</script>
