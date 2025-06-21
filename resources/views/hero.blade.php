<style>
/* Fuente principal del carrusel */
#header-carousel {
    font-family: 'Oswald', sans-serif;
}

/* Fondo oscuro translúcido para las captions */
.carousel-caption {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.85);
    padding: 3rem 2rem;
    z-index: 1;
}

/* Títulos grandes con efecto degradado dorado */
.carousel-caption h1,
.carousel-caption h2 {
    font-size: 3.5rem;
    font-weight: 700;
    background: linear-gradient(90deg, #fff200, #f0b80e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    text-shadow: 0 0 20px rgba(255, 242, 0, 0.4);
}

/* Subtítulo */
.carousel-caption h4,
.carousel-caption p.h4 {
    font-size: 1.5rem;
    font-weight: 400;
    color: #fff;
}

/* Estilo para íconos dorados */
.icon-gold {
    color: #f0b80e;
    font-size: 1.3em;
}

/* Botón personalizado con estilo dorado */
.btn-gold {
    background: linear-gradient(90deg, #fff200, #f0b80e);
    color: #000;
    font-weight: bold;
    padding: 0.75rem 1.5rem;
    border-radius: 0 !important;
    text-transform: uppercase;
    box-shadow: 0 0 15px rgba(255, 242, 0, 0.4);
    transition: all 0.3s ease-in-out;
}

.btn-gold:hover {
    background: linear-gradient(90deg, #f0b80e, #fff200);
    color: #111;
    box-shadow: 0 0 25px rgba(255, 242, 0, 0.7);
}

/* Estilos para botones de control del carrusel */
.carousel-control-prev,
.carousel-control-next {
    width: 60px;
    height: 60px;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 0 !important;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    transition: background-color 0.3s ease;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    background-color: rgba(0, 0, 0, 0.9);
}

/* Elimina los íconos por defecto */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-image: none;
    width: 24px;
    height: 24px;
    display: inline-block;
    fill: white;
}

/* Ícono SVG flecha izquierda */
.carousel-control-prev-icon::after {
    content: '';
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url("data:image/svg+xml,%3csvg fill='white' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M11 1L5 8l6 7' stroke='white' stroke-width='2' fill='none'/%3e%3c/svg%3e") no-repeat center center;
}

/* Ícono SVG flecha derecha */
.carousel-control-next-icon::after {
    content: '';
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url("data:image/svg+xml,%3csvg fill='white' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M5 1l6 7-6 7' stroke='white' stroke-width='2' fill='none'/%3e%3c/svg%3e") no-repeat center center;
}

/* Responsive: ajustes para móviles */
@media (max-width: 768px) {
    #header-carousel .carousel-item {
        position: relative;
        min-height: 450px;
    }

    #header-carousel .carousel-item img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .carousel-caption h1,
    .carousel-caption h2 {
        font-size: 2.2rem;
    }

    .carousel-caption h4,
    .carousel-caption p.h4 {
        font-size: 1.1rem;
    }

    .btn-gold {
        font-size: 0.95rem;
        padding: 0.6rem 1.2rem;
    }
}
</style>

<!-- Carousel Start -->
<section class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s" aria-label="Carrusel de promoción del curso">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Curso online de arte digital en vivo y grabado">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-uppercase mb-4 animated slideInDown">Domina el Arte Digital desde Cero</h1>
                        <p class="h4 text-uppercase mb-4 animated slideInDown">
                            <i class="fa-solid fa-laptop me-3 icon-gold"></i>Clases Online en Vivo y Grabadas
                        </p>
                        <p class="h4 text-uppercase mb-4 animated slideInDown">
                            <i class="fa-solid fa-clock me-3 icon-gold"></i>Acceso 24/7 a la Plataforma
                        </p>
                        <a href="#contacto" class="btn btn-gold mt-3 animated fadeInUp" aria-label="Inscribirse al curso">Inscríbete Ahora</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Formación profesional en diseño digital con certificación">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h2 class="display-2 text-uppercase mb-4 animated slideInDown">Conviértete en Artista Digital Profesional</h2>
                        <p class="h4 text-uppercase mb-4 animated slideInDown">
                            <i class="fa-solid fa-user-graduate me-3 icon-gold"></i>Mentores con Experiencia Real
                        </p>
                        <p class="h4 text-uppercase mb-4 animated slideInDown">
                            <i class="fa-solid fa-certificate me-3 icon-gold"></i>Certificación al Finalizar
                        </p>
                        <a href="#contacto" class="btn btn-gold mt-3 animated fadeInUp" aria-label="Comenzar curso de arte digital">Comienza Hoy</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botones de control accesibles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Anterior">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Siguiente">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

<!-- Carousel End -->
