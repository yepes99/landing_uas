<style>


</style>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg  py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
       <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="me-3" style="height: 80px;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
           <a href="#inicio" class="nav-item nav-link active">inicio</a>
            <a href="#sobre-nosotros" class="nav-item nav-link"> Nosotros</a>
            <a href="#cursos" class="nav-item nav-link">cursos</a>
            <a href="#nuestro-equipo" class="nav-item nav-link">equipo</a>
            <a href="#contacto" class="nav-item nav-link">Contacto</a>
        </div>
        <a  href="#contacto" class="btn btn-gold rounded-0 py-2 px-lg-4 d-none d-lg-block">
            Contáctanos <i class="fa fa-arrow-right ms-3"></i>
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
