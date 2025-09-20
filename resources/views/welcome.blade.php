<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inicio - CodeGol</title>
  <link rel="stylesheet" href="{{ asset('css/style_pag_prin.css') }}">
  @stack('styles')
</head>
<body>
  <aside class="menu">
    <a href="{{ route('home') }}" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
      <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo Escuela de Fútbol Pinze" />
    </a>

    <h2>⚽ Menú ⚽</h2>
    <ul>
      <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
      <li><a href="./entrenopag.html">Entrenamiento</a></li>
      <li><a href="./inventariopag.html">Inventario</a></li>
      <li><a href="./rendimientopag.html">Rendimiento</a></li>
      <li><a href="./matriculapag.html">Matrícula</a></li>
      <li><a href="./pagopag.html">Pago</a></li>
    </ul>

    <a href="./index.html" class="cerrar-sesion">Cerrar sesión</a>
  </aside>

  <div class="contenido">
    <header>
      <h1>Escuela de Fútbol Pinze</h1>
    </header>

    <main>
      <div class="bienvenida">
        <h2>Bienvenidos a la escuela de fútbol Pinze</h2>
        <p>Explora el mundo del equipo más grande de Bogotá. Aquí encontrarás noticias, estadísticas, plantel oficial, partidos recientes y mucho más.</p>
      </div>
      <div class="barrita">
        <h2>⚽ GALERÍA ⚽</h2>
        <hr>
        <br>
        <p>Mira un poco de nosotros</p>
      </div>

      <div class="galeria">
        <div class="tarjeta" tabindex="0">
          <img src="{{ asset('imagenes/servicio1.PNG') }}" alt="Imagen 1" />
          <div class="info">Nuestro mayor orgullo son los más pequeños, a quienes guiamos con paciencia y alegría para que crezcan felices y apasionados por el fútbol.</div>
        </div>
        <div class="tarjeta" tabindex="0">
          <img src="{{ asset('imagenes/servicio2.PNG') }}" alt="Imagen 2" />
          <div class="info">Fomentamos la disciplina, el respeto y el liderazgo, para que cada jugador sea un ejemplo dentro y fuera de la cancha.</div>
        </div>
        <div class="tarjeta" tabindex="0">
          <img src="{{ asset('imagenes/servicio4.PNG') }}" alt="Imagen 3" />
          <div class="info">Apoyamos el talento y esfuerzo de cada jugador para que alcance su mejor versión.</div>
        </div>
      </div>
    </main>

    <footer>
      Todos los derechos reservados 2025 Escuela de Fútbol Pinze
    </footer>
  </div>
</body>
</html>
