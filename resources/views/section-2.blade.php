
<!-- About Start -->
<section id="sobre-nosotros" class="container-fluid py-5 aboutus-container">
  <div class="container">
    <div class="row g-5 align-items-center">

      <!-- Imagen con cuadro experiencia -->
      <div class="col-lg-6 aboutus-wow-fadein aboutus-position-relative d-flex flex-column align-items-end" data-wow-delay="0.1s" style="position: relative;">
        <img class="aboutus-img-fluid w-100 shadow-lg" src="{{ asset('images/section-2/section-2.jpg') }}" alt="Imagen Principal">
        <div class="aboutus-experience-badge shadow-lg position-absolute">
          <h2 class="display-4 fw-bold mb-1">25</h2>
          <h3 class="text-uppercase fw-semibold mb-0">Años<br>de Experiencia</h3>
        </div>
      </div>

      <!-- Texto About -->
      <div class="col-lg-6 aboutus-wow-fadein aboutus-text" data-wow-delay="0.5s">
        <span class="badge aboutus-badge-warning text-dark fw-bold py-2 px-4 mb-4">SOBRE NOSOTROS</span>
        <h3 class="text-uppercase fw-bold mb-4 display-5">¡Desbloquea Tu Creatividad Con Nuestro Curso de Arte Digital!</h3>
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
</section>
<!-- About End -->




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
