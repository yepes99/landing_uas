<style>

.aboutus-lead {
  font-size: 1.15rem;
  color: var(--color-light) !important;
}

.aboutus-experience-badge {
  width: 160px;
  border-radius: var(--border-radius-none);
  background: var(--color-dark);
  color: var(--color-primary);
  box-shadow: 0 8px 20px rgba(240, 184, 14, 0.6);
  font-family: var(--font-base);
  position: absolute;
  bottom: -80px;
  left: 0;
  text-align: center;
  padding: 1rem;
  z-index: 10;
}

.aboutus-experience-badge h1 {
  font-size: 4rem;
  line-height: 1;
  color: var(--color-primary);
  margin: 0;
}

.aboutus-experience-badge h3 {
  font-size: 1.2rem;
  line-height: 1.1;
  margin: 0;
}

.aboutus-text p {
  color: var(--color-white) !important;
  margin-bottom: 1rem;
}

.aboutus-badge-warning {
  border-radius: var(--border-radius-none) !important;
  color: var(--color-dark) !important;
  background-color: var(--color-primary) !important;
}

.aboutus-img-fluid {
  border-radius: var(--border-radius-none);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
  max-width: 100%;
  height: auto;
  display: block;
}

.aboutus-text h1,
.aboutus-text h3 {
  font-family: var(--font-base);
  color: var(--color-primary);
  margin-top: 0;
}

/* Animación fadeIn */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.aboutus-wow-fadein {
  opacity: 0;
}

.aboutus-fadein-active {
  animation-name: fadeIn;
  animation-duration: 1.2s;
  animation-fill-mode: both;
  opacity: 1;
}

/* Responsive */
@media (max-width: 992px) {
  .aboutus-experience-badge {
    position: static !important;
    width: 100%;
    margin-top: 1.5rem;
    box-shadow: none;
    text-align: center;
    border-radius: var(--border-radius-none);
    background: var(--color-dark);
    color: var(--color-primary);
  }

  .aboutus-text h1 {
    font-size: 2rem;
  }

  .aboutus-text h3 {
    font-size: 1.1rem;
  }

  .aboutus-lead {
    font-size: 1rem;
  }

  .aboutus-text p {
    font-size: 0.95rem;
  }

  .aboutus-badge-warning {
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
  }
}

@media (max-width: 576px) {
  .aboutus-text {
    text-align: left;
  }

  .aboutus-text h1 {
    font-size: 1.8rem;
  }

  .aboutus-text h3 {
    font-size: 1rem;
  }

  .aboutus-lead {
    font-size: 0.95rem;
  }

  .aboutus-text p {
    font-size: 0.9rem;
  }

  .aboutus-experience-badge h1 {
    font-size: 3rem;
  }

  .aboutus-experience-badge h3 {
    font-size: 1rem;
  }
}

</style>

<!-- Div arriba para altura extra -->


<!-- About Start -->
<div id="sobre-nosotros" class="container-fluid py-5 aboutus-container">
  <div class="container">
    <div class="row g-5 align-items-center">

      <!-- Imagen con cuadro experiencia -->
      <div class="col-lg-6 aboutus-wow-fadein aboutus-position-relative d-flex flex-column align-items-end" data-wow-delay="0.1s" style="position: relative;">
        <img class="aboutus-img-fluid w-100 shadow-lg" src="{{ asset('images/section-2/section-2.jpg') }}" alt="Imagen Principal">
        <div class="aboutus-experience-badge shadow-lg position-absolute">
          <h1 class="display-4 fw-bold mb-1">25</h1>
          <h3 class="text-uppercase fw-semibold mb-0">Años<br>de Experiencia</h3>
        </div>
      </div>

      <!-- Texto About -->
      <div class="col-lg-6 aboutus-wow-fadein aboutus-text" data-wow-delay="0.5s">
        <span class="badge aboutus-badge-warning text-dark fw-bold py-2 px-4 mb-4">Sobre Nosotros</span>
        <h1 class="text-uppercase fw-bold mb-4 display-5">¡Desbloquea Tu Creatividad Con Nuestro Curso de Arte Digital!</h1>
        <p class="aboutus-lead mb-4">Nuestro completo programa de arte digital te enseña las herramientas y técnicas más recientes en diseño gráfico, modelado 3D, animación y arte conceptual. Ya seas principiante o artista experimentado, nuestro plan práctico te guía para desarrollar un estilo artístico único en el mundo digital.</p>
        <p class="mb-5">Con 25 años de experiencia en educación artística, hemos ayudado a miles de estudiantes a convertir su pasión en una carrera. Nuestros instructores expertos brindan retroalimentación personalizada y conocimientos de la industria para prepararte para el éxito en el mundo creativo.</p>

        <div class="row g-4">
          <div class="col-md-6">
            <h3 class="text-uppercase fw-semibold text-warning mb-3">Desde 1990</h3>
            <p class="mb-0">Construyendo habilidades artísticas con métodos innovadores y tecnología integrada.</p>
          </div>
          <div class="col-md-6">
            <h3 class="text-uppercase fw-semibold text-warning mb-3">Más de 1000 Graduados</h3>
            <p class="mb-0">Nuestros alumnos prosperan en campos como animación, diseño de juegos, ilustración digital y más.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- About End -->

<!-- Div abajo para altura extra -->


<script>
  // Detectar cuando un elemento entra en viewport
  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85
    );
  }

  // Agregar clase para animar
  function fadeInOnScroll() {
    const elements = document.querySelectorAll('.aboutus-wow-fadein');
    elements.forEach(el => {
      if (isInViewport(el)) {
        el.classList.add('aboutus-fadein-active');
      }
    });
  }

  // Ejecutar al cargar y al hacer scroll
  window.addEventListener('scroll', fadeInOnScroll);
  window.addEventListener('load', fadeInOnScroll);
</script>
