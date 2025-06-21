<style>
.price-plan-section .bg-secondary {
  background-color: var(--color-dark) !important;
  color: var(--color-white) !important;
  font-family: var(--font-oswald) !important;
  padding: 3rem 3rem !important;
  transition: box-shadow 0.3s ease;
}

.price-plan-section .bg-dark.text-primary {
  background-color: var(--color-primary) !important;
  color: #000000 !important;
  font-family: var(--font-oswald) !important;
  padding: 0.25rem 1.5rem;
  border-radius: 0;
  display: inline-block;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 1rem;
  letter-spacing: 0.05em;
}

.price-plan-section .col-lg-6 img.img-fluid {
  width: 100%;
  height: auto;
  object-fit: cover; /* opcional: para recortar si la imagen no tiene el mismo ratio que el contenedor */
}


.price-plan-section h1.text-uppercase {
  color: var(--color-primary) !important;
  font-weight: 700;
  font-family: var(--font-oswald) !important;
  margin-bottom: 2rem;
}

.price-plan-section .d-flex.justify-content-between {
  border-color: var(--color-primary) !important;
  font-family: var(--font-oswald) !important;
}

.price-plan-section .d-flex.justify-content-between h6.text-uppercase {
  color: var(--color-white) !important;
  font-weight: 600;
  font-family: var(--font-oswald) !important;
}

.price-plan-section .d-flex.justify-content-between span.text-primary {
  color: var(--color-primary) !important;
  font-weight: 700;
  font-family: var(--font-oswald) !important;
}
</style>

<!-- Price & Plan Section -->
<div class="container-xxl py-5 price-plan-section">
  <div class="container">
    <div class="row g-0">
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
          <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">CURSOS</p>
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
          <img class="img-fluid h-100" src="{{ asset('images/section-4/section-4.jpg') }}" alt="Cursos de Arte Digital">
        </div>
      </div>
    </div>
  </div>
</div>
