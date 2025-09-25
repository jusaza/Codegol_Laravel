@extends('layouts.app')
@section('content')

<div class="login-box" role="main" aria-label="Formulario de inicio de sesión">
  <h1>Escuela de Fútbol Pinze</h1>
  <!--<form action="{{ url('/pagina_original') }}" method="get" class="form-solo">-->
    <form method="POST" action="{{ route('login') }}">
  @csrf  
  <div class="Formgrupo">
      <label for="num_identificacion">Documento</label>
      <input id="num_identificacion" type="number" placeholder="Ingrese su documento" name="txt" required>
      
      <label for="contrasena">Contraseña</label>
      <input id="contrasena" type="password" placeholder="Ingrese su Contraseña" name="txt_" required>
    </div>

    <button type="submit">Iniciar sesión</button>
  </form>
  @if ($errors->any())
    <div class="error-messages" role="alert" aria-live="assertive">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <div class="extra-links">
    <a href="#">¿Olvidaste tu contraseña?</a>
    
  </div>
</div>

</body>
</html>
