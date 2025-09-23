<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Escuela de Fútbol Pinze')</title>
  <link rel="stylesheet" href="{{ asset('css/style_forms.css') }}">
</head>
<body>

<header>
  <a href="{{ url('/pagina_original') }}" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
    <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo Escuela de Fútbol Pinze">
  </a>
  <a href="{{ url('/pagina_original') }}" class="volver">Volver</a>
</header>

    @yield('content')

</body>
</html>