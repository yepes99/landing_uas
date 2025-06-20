<style>
  .our-work-section {
    padding: 6rem 2rem;
    text-align: center;
    color: #fff;
    background-image: radial-gradient(rgba(240, 184, 14, 0.03) 1px, transparent 1px);
    background-size: 40px 40px;
  }

 .section-title-work {
  font-size: 3rem;
  font-weight: 800;
  font-family: 'Oxanium', sans-serif;
  background: linear-gradient(90deg, #fff200, #f0b80e);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 6px rgba(255, 242, 0, 0.7);
  margin-bottom: 4rem;
  letter-spacing: 1.2px;
}


  .work-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    max-width: 2000px;
    margin: 0 auto;
    gap: 2rem;

  }

  .work-card {
    position: relative;
    width: 100%;
    height: 300px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.4);
    margin: 0 auto;
    transform: translateY(40px);
    opacity: 0;
    transition:
      transform 0.6s cubic-bezier(0.22, 1, 0.36, 1),
      opacity 0.6s cubic-bezier(0.22, 1, 0.36, 1),
      box-shadow 0.3s ease,
      transform 0.3s ease;
  }

  /* Cuando está visible */
  .work-card.visible {
    transform: translateY(0);
    opacity: 1;
  }

  /* Hover con zoom y sombra */
  .work-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(240, 184, 14, 0.6);
  }

  .card-overlay {
    position: absolute;
    inset: 0;
    background: rgba(26, 26, 26, 0.92);
    color: #fff;
    opacity: 0;
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    transform: translateY(20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
  }

  /* Overlay animado al hacer hover */
  .work-card:hover .card-overlay {
    opacity: 1;
    transform: translateY(0);
  }

  .card-overlay h3 {
    font-size: 1.4rem;
    color: #f0b80e;
    margin-bottom: 0.5rem;
    font-weight: 700;
  }

  .card-overlay p {
    font-size: 0.95rem;
    color: #ccc;
    margin-bottom: 1rem;
  }

  .btn-primary.small {
    font-size: 0.85rem;
    padding: 0.5rem 1rem;
    border-radius: 6px;
    background: #f0b80e;
    border: none;
    color: #1a1a1a;
    cursor: pointer;
    font-weight: 700;
    transition: background-color 0.3s ease;
  }

  .btn-primary.small:hover {
    background: #fff200;
  }
</style>

<section class="our-work-section">
  <h2 class="section-title-work">Nuestros trabajos</h2>
  <div class="work-cards">
    <div class="work-card">
      <div class="card-overlay">
        <h3>Proyecto A</h3>
        <p>Ilustración digital para campaña publicitaria.</p>
        <button class="btn-primary small">Contactar</button>
      </div>
    </div>
    <div class="work-card" >
      <div class="card-overlay">
        <h3>Proyecto B</h3>
        <p>Animación para video corporativo.</p>
        <button class="btn-primary small">Contactar</button>
      </div>
    </div>
    <div class="work-card" >
      <div class="card-overlay">
        <h3>Proyecto C</h3>
        <p>Diseño de personajes para videojuego.</p>
        <button class="btn-primary small">Contactar</button>
      </div>
    </div>
    <div class="work-card" >
      <div class="card-overlay">
        <h3>Proyecto C</h3>
        <p>Diseño de personajes para videojuego.</p>
        <button class="btn-primary small">Contactar</button>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.work-card');

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.3
    });

    cards.forEach((card, index) => {
      observer.observe(card);
      // Opcional: retraso escalonado para que aparezcan uno a uno
      card.style.transitionDelay = `${index * 0.2}s`;
    });
  });
</script>
