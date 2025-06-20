<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap');

header {
  position: relative;
  min-height: 100vh;
  background: url('/images/hero/hero.png') center center/cover no-repeat;
  font-family: 'Poppins', sans-serif;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.7), rgba(30, 30, 30, 0.5));
  z-index: 0;
}

.hero {
  position: relative;
  z-index: 1;
  max-width: 900px;
  padding: 2rem;
  text-align: center;
  color: #fff200;
  animation: fadeInUp 1s ease-out forwards;
}

.hero-message {
  font-size: 3.5rem;
  font-weight: 700;
  margin: 0;
  line-height: 1.2;
  text-shadow: 2px 2px 8px #000;
}

.hero-message strong {
  color: #f5d742;
  text-shadow: 0 0 10px #f5d742aa;
}

.hero-under {
  margin: 1.5rem 0 2rem;
  font-size: 1.2rem;
  color: #f5d742cc;
  text-shadow: 1px 1px 4px #000;
}

.hero-button-list {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
}

.hero-button {
  padding: 0.9rem 2.2rem;
  border: 2px solid #fff200;
  color: #fff200;
  background: transparent;
  font-size: 1.125rem;
  font-weight: 700;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 0 12px #fff20066;
  position: relative;
  overflow: hidden;
}

.hero-button.primary {
  background: #fff200;
  color: #000;
  box-shadow: 0 0 16px #fff200aa;
}

.hero-button::after {
  content: '';
  position: absolute;
  width: 0%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(255, 255, 0, 0.2);
  transition: width 0.4s ease;
  z-index: -1;
}

.hero-button:hover::after {
  width: 100%;
}

.hero-button:hover {
  transform: scale(1.08);
  box-shadow: 0 0 24px #fff200dd;
}

.hero-button.primary:hover {
  background: #f5d742;
  box-shadow: 0 0 24px #f5d742dd;
  color: #000;
}

/* Animación de entrada */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsive */
@media (max-width: 768px) {
  .hero-message {
    font-size: 2.5rem;
  }
  .hero-under {
    font-size: 1rem;
  }
  .hero {
    padding: 1.5rem;
  }
}



</style>

<header>
  <div class="hero-overlay"></div>
  <section class="hero">
    <h1 class="hero-message">
      <span>Domina el <strong>Arte Digital</strong></span>
    </h1>
    <p class="hero-under">
      Aprende técnicas modernas y crea obras digitales impactantes desde cero. Únete a nuestra comunidad y transforma tu creatividad en arte profesional.
    </p>
    <div class="hero-button-list">
      <button class="hero-button primary">Inscribirme</button>
      <button class="hero-button">Ver demo</button>
    </div>
  </section>
</header>
