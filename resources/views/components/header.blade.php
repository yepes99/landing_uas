<style>
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1030; /* un valor alto para que esté sobre otros elementos */
  background: rgba(15, 15, 15, 0.5); /* ya tienes este fondo semitransparente */
  backdrop-filter: saturate(180%) blur(10px); /* opcional: para efecto blur en el fondo */
}

.navbar h1{
    color: var(--color-primary);
}

/* Links */
.navbar .navbar-nav .nav-link {
  position: relative;
  color: var(--color-white);
  margin-right: 30px;
  padding: 40px 0;
  font-family: var(--font-primary);
  font-size: var(--font-size-base);
  font-weight: var(--font-weight-semibold);
  text-transform: uppercase;
  outline: none;
  transition: color 0.3s ease;
}

/* Línea debajo en hover */
.navbar .navbar-nav .nav-link::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 30px;
  width: 0;
  height: 2px;
  background-color: var(--color-primary);
  transition: width 0.3s ease;
}

.navbar .navbar-nav .nav-link:hover::after,
.navbar .navbar-nav .nav-link.active::after {
  width: 100%;
}

/* Hover color texto */
.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active {
  color: var(--color-primary);
}

/* Ícono del dropdown personalizado */
.navbar .dropdown-toggle::after {
  border: none;
  content: "\f107";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  vertical-align: middle;
  margin-left: 8px;
  color: var(--color-primary);
}

/* Responsive ajustes para móviles */
@media (max-width: 991.98px) {
  .navbar .navbar-nav .nav-link {
    margin-right: 0;
    padding: 10px 0;
  }
  .navbar .navbar-nav {
    margin-top: 8px;
    border-top: 1px solid var(--color-primary);
  }
}

/* Título dorado con variable */
.text-title {
  color: var(--color-primary);
  font-family: var(--font-primary);
}

/* Ícono amarillo dentro del título */
.text-title i {
  color: var(--color-primary);
}


</style>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg  py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="mb-0 text-title text-uppercase"><i class="fa fa-cut me-3"></i>UAS</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
           <a href="#inicio" class="nav-item nav-link active">inicio</a>
            <a href="#sobre-nosotros" class="nav-item nav-link">Sobre Nosotros</a>
            <a href="#cursos" class="nav-item nav-link">cursos</a>
            <a href="#nuestro-equipo" class="nav-item nav-link">nuestro equipo</a>
            <a href="#contacto" class="nav-item nav-link">Contacto</a>
        </div>
        <a href="#" class="btn btn-gold rounded-0 py-2 px-lg-4 d-none d-lg-block">
            Appointment <i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

  let manualActiveId = null; // Id marcado por click (ignora scroll)

  function activateLink(id) {
    navLinks.forEach(link => {
      link.classList.toggle("active", link.getAttribute("href") === `#${id}`);
    });
  }

  function onScroll() {
    if(manualActiveId) return; // Ignorar scroll si está activo manualmente

    let scrollPos = window.scrollY || window.pageYOffset;
    let currentSectionId = null;

    sections.forEach(section => {
      const top = section.offsetTop - 70; // Ajusta según navbar
      const bottom = top + section.offsetHeight;

      if(scrollPos >= top && scrollPos < bottom) {
        currentSectionId = section.getAttribute("id");
      }
    });

    if(currentSectionId) {
      activateLink(currentSectionId);
    }
  }

  navLinks.forEach(link => {
    link.addEventListener("click", (e) => {
      const href = link.getAttribute("href");
      if(href.startsWith("#")) {
        manualActiveId = href.substring(1);
        activateLink(manualActiveId);
        
        // Opcional: remover el bloqueo manual tras 2 segundos para volver a scroll automático
        setTimeout(() => {
          manualActiveId = null;
          onScroll();
        }, 2000);
      }
    });
  });

  window.addEventListener("scroll", onScroll);

  onScroll();
});

</script>
