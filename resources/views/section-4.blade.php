<style>
  /* Estilo general para la sección Price & Plan */
  .price-plan-section .bg-secondary {
    background-color: #494949 !important; /* fondo negro */
    color: #FFFFFF !important;
    font-family: 'Oswald', sans-serif !important;
    padding: 3rem 3rem !important;
    transition: box-shadow 0.3s ease;
  }


  /* Etiqueta Price & Plan */
  .price-plan-section .bg-dark.text-primary {
    background-color: #FFD700 !important; /* amarillo */
    color: #000000 !important;
    font-family: 'Oswald', sans-serif !important;
    padding: 0.25rem 1.5rem;
    border-radius: 0; /* sin bordes redondeados */
    display: inline-block;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 1rem;
    letter-spacing: 0.05em;
  }

  /* Título principal */
  .price-plan-section h1.text-uppercase {
    color: #FFD700 !important; /* amarillo */
    font-weight: 700;
    font-family: 'Oswald', sans-serif !important;
    margin-bottom: 2rem;
  }

  /* Contenedor de precios */
  .price-plan-section .d-flex.justify-content-between {
    border-color: #FFD700 !important; /* bordes amarillo */
    font-family: 'Oswald', sans-serif !important;
  }

  /* Nombres de servicios */
  .price-plan-section .d-flex.justify-content-between h6.text-uppercase {
    color: #FFFFFF !important;
    font-weight: 600;
    font-family: 'Oswald', sans-serif !important;
  }

  /* Precios */
  .price-plan-section .d-flex.justify-content-between span.text-primary {
    color: #FFD700 !important; /* amarillo */
    font-weight: 700;
    font-family: 'Oswald', sans-serif !important;
  }
</style>

<!-- Price & Plan Section -->
<div class="container-xxl py-5 price-plan-section">
  <div class="container">
    <div class="row g-0">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
          <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Cursos</p>
          <h1 class="text-uppercase mb-4">Nuestros Cursos de Arte Digital y Precios</h1>
          <div>
            <div class="d-flex justify-content-between border-bottom py-2">
              <h6 class="text-uppercase mb-0">Diseño Gráfico con Photoshop</h6>
              <span class="text-uppercase text-primary">$49.00</span>
            </div>
            <div class="d-flex justify-content-between border-bottom py-2">
              <h6 class="text-uppercase mb-0">Ilustración Digital con Procreate</h6>
              <span class="text-uppercase text-primary">$59.00</span>
            </div>
            <div class="d-flex justify-content-between border-bottom py-2">
              <h6 class="text-uppercase mb-0">Modelado 3D en Blender</h6>
              <span class="text-uppercase text-primary">$69.00</span>
            </div>
            <div class="d-flex justify-content-between border-bottom py-2">
              <h6 class="text-uppercase mb-0">Edición de Video con Premiere Pro</h6>
              <span class="text-uppercase text-primary">$55.00</span>
            </div>
            <div class="d-flex justify-content-between border-bottom py-2">
              <h6 class="text-uppercase mb-0">Animación 2D y Motion Graphics</h6>
              <span class="text-uppercase text-primary">$65.00</span>
            </div>
            <div class="d-flex justify-content-between py-2">
              <h6 class="text-uppercase mb-0">Arte Conceptual para Videojuegos</h6>
              <span class="text-uppercase text-primary">$75.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="h-100">
          <img class="img-fluid h-100" src="img/price.jpg" alt="Cursos de Arte Digital">
        </div>
      </div>
    </div>
  </div>
</div>
