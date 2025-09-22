@extends('layouts.app')

@section('title', 'Servicios')

@section('content')

<main>
    <section class="hero" id="sobre" role="banner" aria-label="Sobre nosotros">
      <h1>Servicios que ofrecemos</h1>
      <hr>
      <p>Descubre todo lo que Pinze tiene para ti: entrenamientos a tu medida, emocionantes torneos, evaluaciones de rendimiento y formación en valores para convertirte en un jugador completo.</p>
    </section>
  <section class="servicio-container">
    <div class="servicio-texto">
      <h2>Entrenamientos Personalizados
      </h2>
      <p>Brindamos entrenamientos adaptados a cada edad y nivel, con entrenadores expertos que fomentan técnica, táctica y condición física. Nuestro objetivo es que cada jugador mejore día a día en un ambiente motivador y seguro.<br>🏃🏼‍♀️</p>
    </div>
    <div class="servicio-imagen">
      <img src="{{ asset('imagenes/servicio1.PNG') }}" alt="Entrenamiento personalizado en cancha" />
    </div>
  </section>

  <section class="servicio-container orden-invertido">
    <div class="servicio-texto">
      <h2>Torneos y Competencias</h2>
      <p>Organizamos torneos internos y participamos en competencias regionales para que los jugadores experimenten la emoción del juego competitivo, aprendiendo valores como la disciplina, el respeto y el trabajo en equipo.<br>🏆</p>
    </div>
    <div class="servicio-imagen">
      <img src="{{ asset('imagenes/servicio2.PNG') }}" alt="Jugadores en torneo" />
    </div>
  </section>

  <section class="servicio-container">
    <div class="servicio-texto">
      <h2>Evaluación de Rendimiento</h2>
      <p>Realizamos evaluaciones periódicas para medir habilidades técnicas, físicas y mentales. Esto nos permite personalizar el entrenamiento y potenciar el desarrollo de cada jugador.<br>📊</p>
    </div>
    <div class="servicio-imagen">
      <img src="{{ asset('imagenes/servicio3.PNG') }}" alt="Evaluación de rendimiento deportivo" />
    </div>
  </section>

  <section class="servicio-container orden-invertido">
    <div class="servicio-texto">
      <h2>Formación en Valores y Liderazgo</h2>
      <p>Además de la formación deportiva, fomentamos valores como el respeto, la responsabilidad y el trabajo en equipo, preparando a los jugadores para ser líderes dentro y fuera del campo<br>🤝🏻</p>
    </div>
    <div class="servicio-imagen">
      <img src="{{ asset('imagenes/servicio4.PNG') }}" alt="Formación en liderazgo deportivo" />
    </div>
  </section>
</main>

@endsection
