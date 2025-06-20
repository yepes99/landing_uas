<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Curso Arte Digital')</title>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Poppins:wght@400;500;600;700&family=Roboto&display=swap" rel="stylesheet" />

  <!-- Fuente personalizada -->
  <style>
    @font-face {
      font-family: 'grinddemolished';
      src: url('../fonts/grind_demolished-webfont.woff2') format('woff2'),
           url('../fonts/grind_demolished-webfont.woff') format('woff');
      font-weight: normal;
      font-style: normal;
    }
  </style>

  <!-- Estilos generales -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #1a1a1a;
      color: #f0b80e;
      font-family: 'Poppins', 'Roboto', 'Oxanium', sans-serif;
      line-height: 1.4;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #111;
      padding: 1rem 3rem;
      border-bottom: 2px solid #f0b80e;
      flex-wrap: wrap;
    }

    nav .logo {
      font-family: 'grinddemolished', 'Oxanium', sans-serif;
      font-size: 2rem;
      color: #f0b80e;
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
    }

    nav ul li {
      position: relative;
    }

    nav ul li a {
      color: #f0b80e;
      text-decoration: none;
      font-weight: 600;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 0.5rem 0;
      transition: color 0.3s ease;
      position: relative;
      display: inline-block;
    }

    /* Solo subrayado inferior */
    nav ul li a::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0%;
      height: 2px;
      background-color: #f0b80e;
      transition: width 0.3s ease;
    }

    nav ul li a:hover::after,
    nav ul li a:focus::after {
      width: 100%;
    }

    nav ul li a:hover,
    nav ul li a:focus {
      color: #fff;
    }

    main {
      padding: 3rem 4rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    @media (max-width: 768px) {
      nav {
        padding: 1rem 1.5rem;
      }

      nav ul {
        justify-content: center;
        gap: 1.2rem;
      }

      main {
        padding: 2rem 1.5rem;
      }
    }
  </style>
</head>
<body>
  <nav>
    <a href="/" class="logo">Arte Digital</a>
    <ul>
      <li><a href="#curso">Curso</a></li>
      <li><a href="#temario">Temario</a></li>
      <li><a href="#instructor">Instructor</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </nav>

  <main>
    @yield('content')
  </main>
</body>
</html>
