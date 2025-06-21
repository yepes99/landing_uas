<style>
.banner-hero {
  font-family: var(--font-base);
  position: relative;
  overflow: hidden;
}

.banner-hero img {
  width: 100%;
  height: 100%;
  max-height: 800px;
  object-fit: cover;
  display: block;
}

.banner-hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.35);
  z-index: 1;
}

.banner-caption {
  position: absolute;
  top: 50%;
  left:15%;
  transform: translateY(-50%);
  padding: 2rem;
  width: 100%;
  max-width: 900px;
  color: #fff;
  text-align: left;
  z-index: 2;
}

/* Título */
.banner-caption h2 {
  font-size: clamp(2rem, 5vw, 3.8rem);
  font-weight: 700;
  background: linear-gradient(90deg, #fff200, #f0b80e);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-fill-color: transparent;
  text-shadow: 0 0 20px rgba(255, 242, 0, 0.4);
  margin-bottom: 1.5rem;
}

/* Subtítulo */
.banner-caption .subtitle {
  font-size: clamp(1rem, 2.5vw, 1.5rem);
  font-weight: 400;
  color: #fff;
  margin-bottom: 1rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  text-align: left;
  flex-wrap: wrap;
}

/* Íconos */
.icon-gold {
  color: #f0b80e;
  font-size: 1.3em;
}

/* Botón */
.btn-gold {
  font-size: 1rem;
  padding: 0.75rem 1.5rem;
  background-color: #f0b80e;
  color: #1a1a1a;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  transition: background-color 0.3s ease;
  text-decoration: none;
  display: inline-block;
}

.btn-gold:hover {
  background-color: #fff200;
}

/* Responsive: móviles */
@media (max-width: 576px) {
  .banner-caption {
    left: 5%;
    right: 5%;
    padding: 1.5rem;
    transform: translateY(-50%);
  }

  .banner-caption h2 {
    font-size: 2rem;
    line-height: 1.3;
  }

  .banner-caption .subtitle {
    flex-direction: row;
    align-items: flex-start;
    text-align: left;
  }

  .btn-gold {
    width: auto;
    font-size: 1rem;
    padding: 0.8rem 1rem;
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
