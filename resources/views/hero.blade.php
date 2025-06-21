<style>
.banner-hero {
    font-family: var(--font-base);
    position: relative;
    overflow: hidden;
}

/* Imagen */
.banner-hero img {
    width: 100%;
    max-height: 800px;
    object-fit: cover;
    display: block;
}

/* Overlay oscuro sutil */
.banner-hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.35); /* ajuste de opacidad aquí */
    z-index: 1;
}

/* Caption encima del overlay */
.banner-caption {
    position: absolute;
    top: 50%;
    left: 39%;
    transform: translate(-50%, -50%);
    padding: 2rem 0.5rem;
    max-width: 900px;
    color: #fff;
    text-align: left;
    z-index: 2;
}

/* Título principal con gradiente */
.banner-caption h2 {
    font-size: 3.5rem;
    font-weight: 700;
    background: linear-gradient(90deg, #fff200, #f0b80e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    text-shadow: 0 0 20px rgba(255, 242, 0, 0.4);
}

/* Subtítulos */
.banner-caption .subtitle {
    font-size: 1.5rem;
    font-weight: 400;
    color: #fff;
    margin-bottom: 1rem;
}

.icon-gold {
    color: #f0b80e;
    font-size: 1.3em;
}

/* Botón destacado */


/* Responsive */
@media (max-width: 768px) {
    .banner-caption {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 1.5rem 1.5rem;
        max-width: 90%;
    }

    .banner-caption h2 {
        font-size: 2.2rem;
    }

    .banner-caption .subtitle {
        font-size: 1.1rem;
    }

    .btn-gold {
        font-size: 0.95rem;
        padding: 0.6rem 1.2rem;
    }
}
</style>

<section  id="inicio" class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s" aria-label="Banner del curso de arte digital" role="region">
    <div class="banner-hero">
        <img src="{{ asset('images/hero/hero_carusel_1.jpg') }}" alt="Clases online de arte digital para principiantes y avanzados">

        <div class="banner-caption">
            <h2 class="text-uppercase mb-4">Domina el arte digital <br>desde cero</h2>
            <p class="subtitle text-uppercase mb-4">
                <i class="fa-solid fa-laptop me-3 icon-gold" aria-hidden="true"></i>Clases online en vivo y grabadas
            </p>
            <p class="subtitle text-uppercase mb-4">
                <i class="fa-solid fa-clock me-3 icon-gold" aria-hidden="true"></i>Acceso 24/7 a la plataforma
            </p>
            <a href="#contacto" class="btn btn-gold mt-3" aria-label="Inscribirse al curso de arte digital">Inscríbete ahora</a>
        </div>
    </div>
</section>
