@extends('layouts.app')

@section('title', 'Curso Arte Digital')

<style>
  .hero {
    text-align: center;
    padding: 5rem 2rem;
    background-color: #1a1a1a;
    background-image: radial-gradient(rgba(240, 184, 14, 0.05) 1px, transparent 1px);
    background-size: 40px 40px;
    color: #f0b80e;
  }

  .hero h1 {
    font-family: 'Oxanium', 'Poppins', sans-serif;
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
    background: linear-gradient(90deg, #f0b80e, #fff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .hero p {
    font-size: 1.2rem;
    color: #ccc;
    margin-bottom: 2rem;
    max-width: 600px;
    margin-inline: auto;
  }

  .hero-buttons {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    flex-wrap: wrap;
  }

  .btn-primary {
    background: linear-gradient(135deg, #f0b80e, #e4a700);
    padding: 0.75rem 1.5rem;
    color: #000;
    font-weight: 600;
    text-decoration: none;
    border-radius: 8px;
    box-shadow: 0 4px 14px rgba(240, 184, 14, 0.3);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(240, 184, 14, 0.4);
  }

  .btn-secondary {
    padding: 0.75rem 1.5rem;
    color: #f0b80e;
    border: 2px solid #f0b80e;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.2s ease, color 0.2s ease;
  }

  .btn-secondary:hover {
    background: #f0b80e;
    color: #1a1a1a;
  }
  .tech-section {
    background-color: #1a1a1a;
    padding: 6rem 2rem;
    text-align: center;
    color: #fff;
    background-image: radial-gradient(rgba(240, 184, 14, 0.04) 1px, transparent 1px);
    background-size: 40px 40px;
  }

  .section-subtitle {
    color: #f0b80e;
    letter-spacing: 1px;
    font-size: 0.85rem;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
  }

  .section-title {
    font-size: 2.5rem;
    background: linear-gradient(90deg, #f0b80e, #ffffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: 'Oxanium', sans-serif;
    margin-bottom: 3rem;
    font-weight: 700;
  }

  .tech-cards {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
  }

  .card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(240, 184, 14, 0.1);
    border-radius: 12px;
    padding: 2rem;
    width: 100%;
    max-width: 500px;
    backdrop-filter: blur(6px);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
    text-align: left;
  }

  .card h3 {
    font-size: 1.3rem;
    color: #fff;
    margin-bottom: 0.75rem;
  }

  .card p {
    color: #ccc;
    font-size: 1rem;
    line-height: 1.5;
  }

  @media (max-width: 768px) {
    .section-title {
      font-size: 2rem;
    }
    .card {
      padding: 1.5rem;
    }
  }

  @media (max-width: 640px) {
    .hero h1 {
      font-size: 2.2rem;
    }
    .hero p {
      font-size: 1rem;
    }
  }

  <style>
  .services-section {
    background-color: #1a1a1a;
    padding: 6rem 2rem;
    text-align: center;
    color: #fff;
    background-image: radial-gradient(rgba(240, 184, 14, 0.04) 1px, transparent 1px);
    background-size: 40px 40px;
  }

  .section-subtitle {
    color: #f0b80e;
    font-size: 0.85rem;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
    letter-spacing: 1px;
  }

  .section-title {
    font-size: 2.5rem;
    background: linear-gradient(90deg, #f0b80e, #ffffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    font-family: 'Oxanium', sans-serif;
    margin-bottom: 3rem;
  }

  .services-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
  }

  .service-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(240, 184, 14, 0.1);
    border-radius: 12px;
    padding: 2rem;
    width: 100%;
    max-width: 360px;
    text-align: left;
    backdrop-filter: blur(6px);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(240, 184, 14, 0.2);
  }

  .icon-wrapper {
    background-color: rgba(240, 184, 14, 0.1);
    color: #f0b80e;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    border-radius: 8px;
    font-size: 18px;
    margin-bottom: 1rem;
  }

  .service-card h3 {
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
    color: #fff;
  }

  .service-card p {
    font-size: 0.95rem;
    color: #ccc;
    line-height: 1.5;
    margin-bottom: 1rem;
  }

  .service-card a {
    font-size: 0.9rem;
    color: #f0b80e;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
  }

  .service-card a:hover {
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    .section-title {
      font-size: 2rem;
    }

    .service-card {
      padding: 1.5rem;
    }
  }
</style>

@section('content')
<div class="container" style="max-width: 960px; padding: 2rem;">
    <section class="hero">
  <h1>Descubre el Arte Digital</h1>
  <p>Componentes y técnicas para la nueva generación de artistas visuales.</p>
  <div class="hero-buttons">
    <a href="#curso" class="btn-primary">Empezar ahora</a>
    <a href="#temario" class="btn-secondary">Ver temario</a>
  </div>
</section>


<section class="tech-section">
  <p class="section-subtitle">NUESTRA TECNOLOGÍA</p>
  <h2 class="section-title">Interfaces de Próxima Generación</h2>
  <div class="tech-cards">
    <div class="card">
      <h3>Diseño Futurista</h3>
      <p>Nuestro sistema aplica técnicas modernas como glassmorphism, gradientes sutiles y acentos vibrantes para lograr interfaces visualmente impactantes.</p>
    </div>
    <div class="card">
      <h3>Experiencia Avanzada</h3>
      <p>Cada interacción está diseñada para ofrecer transiciones fluidas, retroalimentación intuitiva y una navegación impecable en todos los dispositivos.</p>
    </div>
  </div>
</section>

<section class="services-section">
  <p class="section-subtitle">NUESTROS SERVICIOS</p>
  <h2 class="section-title">¿Qué ofrecemos?</h2>

  <div class="services-cards">
    <div class="service-card">
      <div class="icon-wrapper">
        <i class="fas fa-paint-brush"></i>
      </div>
      <h3>Diseño UI</h3>
      <p>Creamos interfaces impresionantes con componentes visuales modernos y adaptados a tu marca.</p>
      <a href="#">Saber más <i class="fas fa-arrow-right"></i></a>
    </div>

    <div class="service-card">
      <div class="icon-wrapper">
        <i class="fas fa-code"></i>
      </div>
      <h3>Desarrollo</h3>
      <p>Transformamos diseños en sitios funcionales, limpios y optimizados para todo tipo de dispositivos.</p>
      <a href="#">Saber más <i class="fas fa-arrow-right"></i></a>
    </div>

    <div class="service-card">
      <div class="icon-wrapper">
        <i class="fas fa-vial"></i>
      </div>
      <h3>UX Research</h3>
      <p>Mejoramos la experiencia de usuario mediante pruebas, análisis e investigación centrada en datos.</p>
      <a href="#">Saber más <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>





  
</div>
@endsection
