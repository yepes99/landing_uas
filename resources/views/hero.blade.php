<style>
/* carousel.css */

/* Fuente principal del carrusel */
#header-carousel {
    font-family: var(--font-base);
}

/* Contenedor de caption más compacto y centrado verticalmente */
.carousel-caption {
    position: absolute;
    top: 50%;
    left: 39%;
    transform: translate(-50%, -50%);
    padding: 2rem 0.5rem;
    max-width: 900px;
    z-index: 1;
    color: #fff;
    text-align: left;
    border-radius: 0; /* opcional */
}

/* El contenedor interno no necesita border rojo, lo quito */
.carousel-caption-info {
    /* Puedes añadir padding si quieres */
}

#header-carousel .carousel-item img {
    max-height: 800px; /* Ajusta según tu diseño */
    object-fit: cover;
    width: 100%;
    height: auto;
}


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

.carousel-caption .subtitle {
    font-size: 1.5rem;
    font-weight: 400;
    color: #fff;
    margin-bottom: 1rem;
}

.icon-gold {
    color: #f0b80e;
    font-size: 1.3em;
}

.btn-gold {
    background: linear-gradient(90deg, #fff200, #f0b80e);
    color: #000;
    font-weight: bold;
    padding: 0.75rem 1.5rem;
    border-radius: 0 !important;
    text-transform: uppercase;
    box-shadow: 0 0 15px rgba(255, 242, 0, 0.4);
    transition: all 0.3s ease-in-out;
    font-size: 1rem;
}

.btn-gold:hover {
    background: linear-gradient(90deg, #f0b80e, #fff200);
    color: #111;
    box-shadow: 0 0 25px rgba(255, 242, 0, 0.7);
}

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

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-image: none;
    width: 24px;
    height: 24px;
    display: inline-block;
    fill: white;
}

.carousel-control-prev-icon::after {
    content: '';
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url("data:image/svg+xml,%3csvg fill='white' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M11 1L5 8l6 7' stroke='white' stroke-width='2' fill='none'/%3e%3c/svg%3e") no-repeat center center;
}

.carousel-control-next-icon::after {
    content: '';
    display: inline-block;
    width: 24px;
    height: 24px;
    background: url("data:image/svg+xml,%3csvg fill='white' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath d='M5 1l6 7-6 7' stroke='white' stroke-width='2' fill='none'/%3e%3c/svg%3e") no-repeat center center;
}

/* Responsive */
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

    .carousel-caption {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 1.5rem 1.5rem;
        max-width: 90%;
    }

    .carousel-caption h2 {
        font-size: 2.2rem;
    }

    .carousel-caption .subtitle {
        font-size: 1.1rem;
    }

    .btn-gold {
        font-size: 0.95rem;
        padding: 0.6rem 1.2rem;
    }
}


</style>


<section class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s" aria-label="Carrusel de promoción del curso de arte digital" role="region">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

           <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('images/hero/hero_carusel_1.jpg') }}" alt="Clases online de arte digital para principiantes y avanzados">
                <div class="carousel-caption">
                    <h2 class="text-uppercase mb-4">Domina el arte digital desde cero</h2>
                    <p class="subtitle text-uppercase mb-4">
                        <i class="fa-solid fa-laptop me-3 icon-gold" aria-hidden="true"></i>Clases online en vivo y grabadas
                    </p>
                    <p class="subtitle text-uppercase mb-4">
                        <i class="fa-solid fa-clock me-3 icon-gold" aria-hidden="true"></i>Acceso 24/7 a la plataforma
                    </p>
                    <a href="#contacto" class="btn btn-gold mt-3" aria-label="Inscribirse al curso de arte digital">Inscríbete ahora</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('images/hero/hero_carusel_2.jpg') }}" alt="Curso profesional de arte digital con mentores y certificado final">
                <div class="carousel-caption">
                    <h2 class="text-uppercase mb-4">Conviértete en artista digital profesional</h2>
                    <p class="subtitle text-uppercase mb-4">
                        <i class="fa-solid fa-user-graduate me-3 icon-gold" aria-hidden="true"></i>Mentores con experiencia real
                    </p>
                    <p class="subtitle text-uppercase mb-4">
                        <i class="fa-solid fa-certificate me-3 icon-gold" aria-hidden="true"></i>Certificación al finalizar
                    </p>
                    <a href="#contacto" class="btn btn-gold mt-3" aria-label="Comenzar curso de arte digital certificado">Comienza hoy</a>
                </div>
            </div>

        </div>

        <!-- Controles accesibles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" aria-label="Anterior">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" aria-label="Siguiente">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>
