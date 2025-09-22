
@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

<main>
  <section class="hero" id="sobre" role="banner" aria-label="Sobre nosotros">
    <h1>Conoce a la Escuela Pinze</h1>
    <hr>
    <p>Somos una comunidad apasionada por el fútbol. Desde niños hasta adultos, trabajamos cada día para formar atletas íntegros, promoviendo valores de esfuerzo, respeto y compañerismo.</p>
  </section>

  <section class="servicio-container">
    <div class="servicio-texto">
      <h2>📅 Nuestra Historia</h2>
      <p>Fundada en 2022 en Bogotá, la Escuela de Fútbol Pinze nació con el sueño de brindar oportunidades a jóvenes talentos. Comenzamos con un solo equipo y hoy contamos con más de 200 alumnos y programas para todas las edades.</p>
    </div>
    <div class="servicio-imagen">
      <img src="{{ asset('imagenes/nosotros1.PNG') }}" alt="Foto histórica de los primeros alumnos" />
    </div>
  </section>

  <section class="servicio-container orden-invertido">
    <div class="servicio-texto">
      <h2>🏆 Misión</h2>
      <p>Desarrollar el potencial de cada jugador a través de un entrenamiento de calidad, inculcando valores de honestidad, trabajo en equipo y disciplina, para formar no solo atletas, sino también ciudadanos ejemplares.</p>
    </div>
    <div class="servicio-imagen">
      <img src="{{ asset('imagenes/nosotros2.PNG') }}" alt="Entrenador guiando a niños" />
    </div>
  </section>

  <section class="servicio-container">
    <div class="servicio-texto">
      <h2>💹 Visión</h2>
      <p>Ser reconocidos como la mejor escuela de formación en la región, exportando talentos al profesionalismo y construyendo un legado de campeones íntegros, comprometidos con su comunidad.</p>
    </div>
    <div class="servicio-imagen">
      <img src="{{ asset('imagenes/nosotros3.PNG') }}" alt="Equipo celebrando un gol" />
    </div>
  </section>

  <section class="servicio-container orden-invertido">
    <div class="servicio-texto">
      <h2>🔝 Valores</h2>
      <p>En Pinze valoramos el respeto y la disciplina, que nos mantienen unidos y enfocados; 
         promovemos el trabajo en equipo y la pasión, que nos impulsan a dar siempre lo mejor; 
         y practicamos la humildad, aprendiendo de cada triunfo y desafío.</p>
    </div>
    <div class="servicio-imagen">
      <img src="{{ asset('imagenes/nosotros4.PNG') }}" alt="Jugadores estrechando manos" />
    </div>
  </section>
</main>

@endsection

