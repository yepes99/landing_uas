<style>
  /*** Footer ***/
  .footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: #f0b80e; /* amarillo */
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
    border-radius: 0; /* sin bordes redondeados */
  }

  .footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
    color: #f0b80e; /* iconos de flecha también amarillos */
  }

  .footer .btn.btn-link:hover {
    color: #e4a700; /* amarillo oscuro */
    letter-spacing: 1px;
    box-shadow: none;
  }

  .footer .copyright {
    padding: 1.5rem;
    font-size: 15px;
    background: #222222; /* fondo oscuro */
    border-radius: 0; /* sin bordes redondeados */
  }

  .footer .copyright a {
    color: #f0b80e;
    border-radius: 0; /* sin bordes redondeados */
  }

  .footer .copyright a:hover {
    color: #e4a700;
  }

  /* Sin bordes redondeados para botones, inputs y cuadrados */
  .btn,
  .btn-primary,
  .btn-lg-square,
  .form-control {
    border-radius: 0 !important;
  }

  /* Cambiar color de los iconos dentro de btn-square y botones sociales */
  .footer .btn-square span.fa,
  .footer .btn-lg-square i.fab {
    color: #f0b80e !important; /* iconos amarillos */
  }

  /* Para que los iconos no pierdan color al hacer hover, si quieres */
  .footer .btn-lg-square:hover i.fab {
    color: #e4a700 !important;
  }
</style>

    <!-- Footer Start -->
    <div class="container-fluid  text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Get In Touch</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>123 Street, New York, USA</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+012 345 67890</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>info@example.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Newsletter</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->