<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inicio de sesión - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="{{ asset('css/styles_inicio_sesion.css') }}">
</head>
<body>

  <header>
    <a href="{{ url('/') }}" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
      <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo Escuela de Fútbol Pinze" />
    </a>
    <a href="{{ url('/') }}" class="volver">Volver</a>
  </header>

<div class="login-box" role="main" aria-label="Formulario de inicio de sesión">
  <h1>Escuela de Fútbol Pinze</h1>
  <form action="{{ route('usuario.login') }}" method="POST" class="form-solo">
    @csrf
    <div class="Formgrupo">
        <label for="documento">Documento</label>
        <input type="number" placeholder="Ingrese su documento" name="num_identificacion" required>

        <label for="contraseña">Contraseña</label>
        <input type="password" placeholder="Ingrese su contraseña" name="contrasena" required>
    </div>

    <button type="submit">Iniciar sesión</button>
</form>


  <div class="extra-links">
    <a href="#">¿Olvidaste tu contraseña?</a>
    
  </div>
</div>

</body>
</html>
