<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<header>
  <div class="logo" tabindex="0" aria-label="Logo Escuela de Fútbol Pinze">
    <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo Escuela de Fútbol Pinze" />
    <h2>Escuela de Fútbol Pinze</h2>
  </div>
  <nav>
    <a href="#inicio">⚽ Inicio</a>
    <a href="{{ url('/servicios') }}">🥅 Servicios</a>
    <a href="{{ url('/nosotros') }}">🏆 Nosotros</a>
    <a href="{{ url('/login') }}" class="iniciar-sesion">Iniciar sesión</a>
  </nav>
</header>

<section class="hero" id="inicio" role="banner" aria-label="Bienvenida">
  <h1>Bienvenido a la Escuela de Fútbol Pinze</h1>
  <hr class="hero-separator">
  <p>¡Formamos campeones dentro y fuera de la cancha! <br> Nuestra misión es fomentar la pasión por el fútbol, el trabajo en equipo y los valores en cada uno de nuestros jugadores, desde los más pequeños hasta los grandes.</p>
  <div class="hero-gallery" aria-label="Imágenes de la escuela">
    <img src="{{ asset('imagenes/bienvenida1.PNG') }}" alt="Niños entrenando en cancha" />
    <img src="{{ asset('imagenes/bienvenida2.PNG') }}" alt="Equipo celebrando gol" />
    <img src="{{ asset('imagenes/bienvenida3.PNG') }}" alt="Torneo escolar" />
  </div>
</section>

<section class="galeria" aria-label="Galería de imágenes">
  <div class="item" data-imgs="{{ asset('imagenes/ubicación.jpg') }}" data-text="Ubicación">
    <img src="{{ asset('imagenes/letrap.PNG') }}" alt="Ubicación" />
    <p>Ubicación</p>
  </div>
  <div class="item" data-imgs="{{ asset('imagenes/entrenamiento1.PNG') }},{{ asset('imagenes/entrenamiento2.PNG') }},{{ asset('imagenes/entrenamiento3.PNG') }}" data-text="Entrenamientos">
    <img src="{{ asset('imagenes/I.PNG') }}" alt="Entrenamientos" />
    <p>Entrenamientos</p>
  </div>
  <div class="item" data-imgs="{{ asset('imagenes/destacados.PNG') }}" data-text="Destacados">
    <img src="{{ asset('imagenes/n.PNG') }}" alt="Destacados" />
    <p>Destacados</p>
  </div>
  <div class="item" data-imgs="{{ asset('imagenes/anuncio.PNG') }}" data-text="Anuncios">
    <img src="{{ asset('imagenes/Z.PNG') }}" alt="Anuncios" />
    <p>Anuncios</p>
  </div>
  <div class="item" data-imgs="{{ asset('imagenes/esperamos.PNG') }}" data-text="Te esperamos!">
    <img src="{{ asset('imagenes/E.PNG') }}" alt="Te esperamos!" />
    <p>Te esperamos!</p>
  </div>
</section>

<section class="info-box">
  <h3>Nuestro Compromiso</h3>
  <p>En la Escuela de Fútbol Pinze trabajamos cada día para formar no solo grandes jugadores, sino también excelentes personas. Creemos en el juego limpio, la amistad y el respeto dentro y fuera de la cancha.</p>

<div class="galeria-tarjetas">
  <div class="tarjeta" tabindex="0">
    <img src="{{ asset('imagenes/compromiso4.PNG') }}" alt="Compromiso con los pequeños">
    <div class="info">Nuestro mayor orgullo son los más pequeños, a quienes guiamos con paciencia y alegría para que crezcan felices y apasionados por el fútbol.</div>
  </div>
  <div class="tarjeta" tabindex="0">
    <img src="{{ asset('imagenes/compromiso5.PNG') }}" alt="Compromiso de disciplina">
    <div class="info">Fomentamos la disciplina, el respeto y el liderazgo, para que cada jugador sea un ejemplo dentro y fuera de la cancha.</div>
  </div>
  <div class="tarjeta" tabindex="0">
    <img src="{{ asset('imagenes/comrpromiso6.PNG') }}" alt="Compromiso de campeones">
    <div class="info">Entrenamos con pasión y entrega: trabajamos duro para salir campeones y enorgullecer nuestro escudo.</div>
  </div>
  <div class="tarjeta" tabindex="0">
    <img src="{{ asset('imagenes/compromiso8.PNG') }}" alt="Compromiso de apoyo">
    <div class="info">Apoyamos el talento y esfuerzo de cada jugador para que alcance su mejor versión.</div>
  </div>
</div>

  <hr>

  <div class="galeria-tarjetas">
    <div class="tarjeta" tabindex="0">
      <img src="{{ asset('imagenes/compromiso1.PNG') }}" alt="Respeto y humildad">
      <div class="info">Formamos jugadores con respeto, disciplina y humildad, dentro y fuera del campo.</div>
    </div>
    <div class="tarjeta" tabindex="0">
      <img src="{{ asset('imagenes/compromiso2.PNG') }}" alt="Crecimiento en equipo">
      <div class="info">Creamos un ambiente donde cada niño se supera y aprende a trabajar en equipo.</div>
    </div>
    <div class="tarjeta" tabindex="0">
      <img src="{{ asset('imagenes/compromiso3.PNG') }}" alt="Pasión por el fútbol">
      <div class="info">Nuestra pasión impulsa el esfuerzo diario, formando futuros campeones.</div>
    </div>
    <div class="tarjeta" tabindex="0">
      <img src="{{ asset('imagenes/compromiso7.PNG') }}" alt="Fomento de jugadoras">
      <div class="info">Fomentamos el talento de nuestras jugadoras, impulsando la igualdad y el respeto en cada entrenamiento.</div>
  </div>
</div>
</section>

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

<!-- Modal -->
<div class="modal" role="dialog" aria-modal="true">
  <div class="modal-content">
    <button class="modal-close" aria-label="Cerrar">&times;</button>
    <button class="modal-prev" aria-label="Anterior">&#10094;</button>
    <img id="modal-img" src="" alt="" />
    <button class="modal-next" aria-label="Siguiente">&#10095;</button>
    <p id="modal-desc"></p>
  </div>
</div>

<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
