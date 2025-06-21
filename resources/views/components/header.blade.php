<style>
.navbar {
  background: rgba(15, 15, 15, 0.5); /* negro semitransparente */
  backdrop-filter: var(--glass-effect);
  -webkit-backdrop-filter: var(--glass-effect);
  box-shadow: var(--neon-shadow);
  transition: var(--transition-normal);
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

/* Botón personalizado dorado */
.btn-gold {
  background-color: var(--color-primary);
  border: 2px solid var(--color-primary);
  color: black;
  font-weight: var(--font-weight-bold);
  transition: all 0.3s ease;
  font-family: var(--font-primary);
}

.btn-gold:hover {
  background-color: transparent;
  color: var(--color-primary);
  border-color: var(--color-primary);
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
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="price.html" class="dropdown-item">Pricing Plan</a>
                    <a href="team.html" class="dropdown-item">Our Barber</a>
                    <a href="open.html" class="dropdown-item">Working Hours</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="#" class="btn btn-gold rounded-0 py-2 px-lg-4 d-none d-lg-block">
            Appointment <i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>
