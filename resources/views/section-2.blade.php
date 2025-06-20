<style>
  .tech-section {
    background-color: #0f0f0f;
    padding: 2rem 2rem 10rem;
    text-align: center;
    color: #fff;
    background-image: radial-gradient(rgba(240, 184, 14, 0.04) 1px, transparent 1px);
    background-size: 40px 40px;
    position: relative;
    overflow: hidden;
    height: 150vh;
  }

  .section-title {
    font-size: 3.2rem;
    background: linear-gradient(90deg, #fff200, #f0b80e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: 'Oxanium', sans-serif;
    font-weight: 800;
    margin-bottom: 5rem;
    text-shadow: 0 0 8px rgba(255, 255, 0, 0.25);
    letter-spacing: 1px;

    /* Inicial estado fade-in desde abajo */
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }

  .section-title.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .tech-cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 3rem;
  }

  .card {
    background: linear-gradient(145deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.01));
    border: 1.5px solid rgba(240, 184, 14, 0.15);
    padding: 3rem 2.5rem;
    max-width: 400px;
    width: 100%;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 25px rgba(240, 184, 14, 0.06);
    transition:
      transform 0.6s ease,
      box-shadow 0.4s ease,
      border-color 0.4s ease,
      opacity 0.6s ease;

    text-align: center;

    /* Inicial estado: invisible y desplazado a la izquierda */
    opacity: 0;
    transform: translateX(-40px);
  }

  /* Al estar visible: en posición y opaco */
  .card.visible {
    opacity: 1;
    transform: translateX(0);
  }

  .card:hover {
    transform: translateY(-12px) scale(1.015);
    box-shadow: 0 0 30px rgba(240, 184, 14, 0.3);
    border-color: #fff200;
  }

  .card-icon {
    font-size: 2.8rem;
    margin-bottom: 1.2rem;
    color: #f0b80e;
    text-shadow: 0 0 6px rgba(240, 184, 14, 0.5);
  }

  .card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 1rem;
    font-family: 'Oxanium', sans-serif;
  }

  .card p {
    color: #ccc;
    font-size: 1rem;
    line-height: 1.6;
  }

  @media (max-width: 768px) {
    .section-title {
      font-size: 2.3rem;
    }

    .card {
      padding: 2rem;
    }

    .card-icon {
      font-size: 2.2rem;
    }
  }
</style>

<section class="tech-section">
  <div style="height: 50vh; background: linear-gradient(to bottom, transparent, #0f0f0f);"></div>

  <h2 class="section-title">Tecnologías que usamos</h2>

  <div class="tech-cards">
    <div class="card">
      <div class="card-icon"><i class="fas fa-pencil-ruler"></i></div>
      <h3>Illustrator</h3>
      <p>Diseño vectorial profesional para crear gráficos escalables y precisos.</p>
    </div>
    <div class="card">
      <div class="card-icon"><i class="fas fa-image"></i></div>
      <h3>Photoshop</h3>
      <p>Edición de imágenes avanzada para retoques y creación de composiciones.</p>
    </div>
    <div class="card">
      <div class="card-icon"><i class="fas fa-paint-brush"></i></div>
      <h3>Procreate</h3>
      <p>Herramienta de dibujo digital intuitiva para iPad con pinceles personalizables.</p>
    </div>
    <div class="card">
      <div class="card-icon"><i class="fas fa-film"></i></div>
      <h3>After Effects</h3>
      <p>Animación y efectos visuales para dar vida a tus creaciones.</p>
    </div>
  </div>


</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
      threshold: 0.2
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          if(entry.target.classList.contains('section-title')) {
            // Mostrar título inmediatamente
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          } else if(entry.target.classList.contains('card')) {
            // Para las cards aplicamos delay progresivo según orden
            const cards = Array.from(document.querySelectorAll('.card'));
            const index = cards.indexOf(entry.target);
            setTimeout(() => {
              entry.target.classList.add('visible');
            }, index * 200); // delay de 200ms por tarjeta
            observer.unobserve(entry.target);
          }
        }
      });
    }, observerOptions);

    // Observar título
    const title = document.querySelector('.section-title');
    if (title) observer.observe(title);

    // Observar tarjetas
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => observer.observe(card));
  });
</script>
