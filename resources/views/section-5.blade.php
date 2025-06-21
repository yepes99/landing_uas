<!-- Incluye en el <head> esta fuente de Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet" />

<style>
  .team-section {
  font-family: var(--font-base);
  font-size: var(--font-size-base);
  font-weight: var(--font-weight-normal);
}

/* Sin bordes redondeados en todo */
.team-section .team-item,
.team-section .team-img,
.team-section .team-img img,
.team-section .team-social .btn-square {
  border-radius: var(--border-radius-none) !important;
}

.team-section .team-img {
  position: relative;
  overflow: hidden;
  height: 350px;
}

.team-section .team-img img {
  width: 100%;
  height: 100%;    /* ocupar todo el contenedor */
  object-fit: cover;  /* recortar y mantener proporción */
  display: block;
  transition: transform 0.3s ease;
}

/* Cortina amarilla desde izquierda y derecha */
.team-section .team-img::before,
.team-section .team-img::after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  width: 0;
  background-color: rgba(78, 78, 77, 0.15); /* Más transparente */
  transition: width 0.4s ease;
  z-index: 1;
  pointer-events: none;
}


/* Pseudo-elemento izquierdo */
.team-section .team-img::before {
  left: 0;
}

/* Pseudo-elemento derecho */
.team-section .team-img::after {
  right: 0;
}

/* Al hacer hover, los dos pseudo-elementos se expanden hasta cubrir el 50% cada uno */
.team-section .team-img:hover::before,
.team-section .team-img:hover::after {
  width: 50%;
}

.team-section .team-img img {
  filter: grayscale(100%);
  transition: transform 0.3s ease, filter 0.3s ease;
}

/* Al hacer hover: vuelve a color y se aplica zoom */
.team-section .team-img:hover img {
  filter: grayscale(0%);
  transform: scale(1.1);
}


/* Iconos sociales ocultos inicialmente */
.team-section .team-social {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  display: flex;
  gap: var(--spacing-medium);
  z-index: 2;
  transition: opacity 0.4s ease;
}

/* Iconos visibles al hacer hover */
.team-section .team-img:hover .team-social {
  opacity: 1;
}

/* Botones sociales estilo básico */
.team-section .team-social .btn-square {
  background-color: var(--color-dark);
  color: var(--color-primary);
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  text-decoration: none;
}

.team-section .team-social .btn-square:hover {
  background-color: gold;
  color: var(--color-dark);
}

/* Textos de la sección */
.team-section p.d-inline-block.bg-secondary {
  background-color: var(--color-dark) !important;
  color: var(--color-primary) !important;
}

.team-section h1.text-uppercase {
  color: var(--color-primary);
}

.team-section .text-primary {
  color: var(--color-primary) !important;
}

/* Estilo del texto del curso */
.team-section .course-text {
  max-width: 600px;
  margin: 0 auto var(--spacing-large) auto;
  font-size: 1.1rem;
  color: var(--color-white);
  text-align: center;
  line-height: 1.5;
  font-weight: 500;
}

/* ESTILO ESPECÍFICO team-info: fondo negro y texto amarillo */
.team-info {
  background-color: var(--color-dark) !important; /* fondo negro */
  color: var(--color-primary) !important;          /* texto amarillo dorado */
  padding: 1rem;
  transition: background-color 0.3s ease;
}

.team-info h5 {
  font-weight: var(--font-weight-bold);
  letter-spacing: 1px;
  margin-bottom: 0.5rem;
  color: var(--color-primary) !important;
}

.team-info span {
  font-size: 0.9rem;
  font-style: italic;
  color: var(--color-primary) !important;
}
</style>

<!-- Team Start -->
<div id="nuestro-equipo" class="container-xxl py-5 team-section">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Team</p>
      <h1 class="text-uppercase">Conoce a Nuestro Equipo Creativo</h1>


      <!-- Texto añadido -->
      <p class="course-text">
        Descubre las técnicas y herramientas más avanzadas del arte digital en nuestro curso especializado. Aprende a crear ilustraciones, diseños y animaciones digitales desde cero, con proyectos prácticos que potenciarán tu creatividad y habilidades técnicas. Perfecto para artistas, diseñadores y entusiastas que quieren llevar su talento al siguiente nivel.
      </p>
    </div>
    <div class="row g-4">
  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="team-item">
      <div class="team-img position-relative overflow-hidden">
        <img class="img-fluid" src="{{ asset('images/section-5/ana_perez.avif') }}" alt="Artista Digital Ana Pérez" />
        <div class="team-social">
          <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="bg-secondary text-center team-info p-4">
        <h5 class="text-uppercase">Ana Pérez</h5>
        <span class="text-primary">Ilustradora Senior</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="team-item">
      <div class="team-img position-relative overflow-hidden">
        <img class="img-fluid" src="{{ asset('images/section-5/carlos_ruiz.avif') }}" alt="Artista Digital Carlos Ruiz" />
        <div class="team-social">
          <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="bg-secondary text-center team-info p-4">
        <h5 class="text-uppercase">Carlos Ruiz</h5>
        <span class="text-primary">Especialista en Animación</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <div class="team-item">
      <div class="team-img position-relative overflow-hidden">
        <img class="img-fluid" src="{{ asset('images/section-5/laura_gomez.avif') }}" alt="Artista Digital Laura Gómez" />
        <div class="team-social">
          <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="bg-secondary text-center team-info p-4">
        <h5 class="text-uppercase">Laura Gómez</h5>
        <span class="text-primary">Diseñadora Digital</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
    <div class="team-item">
      <div class="team-img position-relative overflow-hidden">
        <img class="img-fluid" src="{{ asset('images/section-5/juan_martinez.avif') }}" alt="Artista Digital Juan Martínez" />
        <div class="team-social">
          <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="bg-secondary text-center team-info p-4">
        <h5 class="text-uppercase">Juan Martínez</h5>
        <span class="text-primary">Especialista en Efectos Visuales</span>
      </div>
    </div>
  </div>
</div>

  </div>
</div>
<!-- Team End -->
