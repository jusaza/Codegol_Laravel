<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Escuela de Fútbol Pinze')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

<header>
  <div class="logo" tabindex="0" aria-label="Logo Escuela de Fútbol Pinze">
    <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo Escuela de Fútbol Pinze" />
    <h2>Escuela de Fútbol Pinze</h2>
  </div>
  <nav>
    <a href="{{ url('/') }}">⚽ Inicio</a>
    <a href="{{ url('/servicios') }}">🥅 Servicios</a>
    <a href="{{ url('/nosotros') }}">🏆 Nosotros</a>
    <a href="{{ url('/login') }}" class="iniciar-sesion">Iniciar sesión</a>
  </nav>
</header>

  {{-- Aquí las vistas hijas insertan su contenido --}}
  @yield('content')


<footer>
  <p>&copy; 2025 Escuela de Fútbol Pinze. Todos los derechos reservados.</p>
  <nav class="redes" aria-label="Redes sociales">
    <a href="https://www.facebook.com/PinzeColombia/" target="_blank" rel="noopener">Facebook</a> 
    <a href="https://www.instagram.com/pinzecolombia/" target="_blank" rel="noopener">Instagram</a> 
    <a href="https://goo.gl/maps/sUog16biK1m6GBp16" target="_blank" rel="noopener">Ubicación</a>
    <br>
    <a href="#">Whatsapp</a>
    <a href="#">X</a>
    <a href="#">Youtube</a>
  </nav>
</footer>

</body>
</html>
