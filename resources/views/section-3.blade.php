<style>
    .service-section .service-item {
    background-color: var(--color-dark) !important;
    color: var(--color-white);
    font-family: 'Oswald', sans-serif;
    position: relative;
  }

  .service-section .service-item:hover {
    box-shadow: 0 4px 15px rgba(240, 184, 14, 0.6); /* rgba del amarillo principal */
  }

  .service-section .service-item h3 {
    color: var(--color-white) !important;
  }

  .service-section .service-item p {
    color: var(--color-white) !important;
  }

  .service-section .service-item span {
    color: var(--color-primary) !important;
  }

  .service-section .service-item .btn {
    position: absolute;
    right: -50px;
    bottom: -50px;
    width: 50px;
    height: 50px;
    background: var(--color-primary);
    color: var(--color-dark);
    border-radius: 0;
    border: none;
    opacity: 0;
    transition: 0.5s;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .service-section .service-item .btn i {
    color: var(--color-dark);
    font-size: 18px;
  }

  .service-section .service-item:hover .btn {
    right: 0;
    bottom: 0;
    opacity: 1;
  }

  .service-section .service-item .btn:hover {
    background-color: var(--color-dark);
    color: var(--color-primary);
  }

  .service-section .service-item .btn:hover i {
    color: var(--color-primary);
  }

  .service-section .service-item .bg-dark {
    background-color: var(--color-primary) !important;
  }

  .service-section .service-item .bg-dark i {
    font-size: 28px;
    color: var(--color-dark);
  }

  /* Estilos reutilizables */
  .service-section .text-yellow {
    color: var(--color-primary) !important;
  }

  .service-section .bg-yellow {
    background-color: var(--color-primary) !important;
  }

  .service-section .text-black {
    color: var(--color-dark) !important;
  }

  .service-section .bg-black {
    background-color: var(--color-dark) !important;
  }
</style>

<!-- Service Start -->
<div id="cursos" class="service-section container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <p class="d-inline-block bg-black text-yellow py-1 px-4">CURSOS</p>
      <h1 class="text-uppercase text-yellow">¿Qué ofrecemos en arte digital?</h1>
    </div>
    <div class="row g-4">
      <!-- Diseño Gráfico -->
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
          <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
            <i class="fas fa-paint-brush fa-2x text-black"></i>
          </div>
          <div class="ps-4">
            <h3 class="text-uppercase mb-3">Diseño Gráfico</h3>
            <p>Aprende a crear piezas visuales impactantes con Photoshop e Illustrator desde cero.</p>
            <span class="text-uppercase">Desde $49</span>
          </div>
          <a class="btn btn-square" href=""><i class="fa fa-plus"></i></a>
        </div>
      </div>

      <!-- Ilustración Digital -->
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
          <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
            <i class="fas fa-pen-nib fa-2x text-black"></i>
          </div>
          <div class="ps-4">
            <h3 class="text-uppercase mb-3">Ilustración Digital</h3>
            <p>Domina Procreate y otras herramientas para crear personajes y entornos únicos.</p>
            <span class="text-uppercase">Desde $59</span>
          </div>
          <a class="btn btn-square" href=""><i class="fa fa-plus"></i></a>
        </div>
      </div>

      <!-- Modelado 3D -->
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
          <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
            <i class="fas fa-cube fa-2x text-black"></i>
          </div>
          <div class="ps-4">
            <h3 class="text-uppercase mb-3">Modelado 3D</h3>
            <p>Crea objetos y escenarios en Blender y ZBrush para videojuegos y animación.</p>
            <span class="text-uppercase">Desde $69</span>
          </div>
          <a class="btn btn-square" href=""><i class="fa fa-plus"></i></a>
        </div>
      </div>

      <!-- Edición de Video -->
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
          <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
            <i class="fas fa-video fa-2x text-black"></i>
          </div>
          <div class="ps-4">
            <h3 class="text-uppercase mb-3">Edición de Video</h3>
            <p>Aprende Premiere Pro y After Effects para producir contenido visual profesional.</p>
            <span class="text-uppercase">Desde $55</span>
          </div>
          <a class="btn btn-square" href=""><i class="fa fa-plus"></i></a>
        </div>
      </div>

      <!-- Animación 2D -->
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
          <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
            <i class="fas fa-film fa-2x text-black"></i>
          </div>
          <div class="ps-4">
            <h3 class="text-uppercase mb-3">Animación 2D</h3>
            <p>Domina la animación cuadro a cuadro y motion graphics con herramientas actuales.</p>
            <span class="text-uppercase">Desde $65</span>
          </div>
          <a class="btn btn-square" href=""><i class="fa fa-plus"></i></a>
        </div>
      </div>

      <!-- Arte Conceptual -->
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
          <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
            <i class="fas fa-lightbulb fa-2x text-black"></i>
          </div>
          <div class="ps-4">
            <h3 class="text-uppercase mb-3">Arte Conceptual</h3>
            <p>Diseña mundos, personajes y criaturas para videojuegos, cine y narrativa visual.</p>
            <span class="text-uppercase">Desde $75</span>
          </div>
          <a class="btn btn-square" href=""><i class="fa fa-plus"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->