@extends('layouts.app')
@section('content')

<div class="login-box" role="main" aria-label="Formulario de inicio de sesión">
  <h1>Escuela de Fútbol Pinze</h1>
  <form action="{{ url('/pagina_original') }}" method="get" class="form-solo">
  @csrf  
  <div class="Formgrupo">
      <label for="documento">Documento</label>
      <input id="do cumento" type="number" placeholder="Ingrese su documento" name="txt" required>
      
      <label for="contraseña">Contraseña</label>
      <input id="contraseña" type="password" placeholder="Ingrese su Contraseña" name="txt_" required>
    </div>

    <button type="submit">Iniciar sesión</button>
  </form>

  <div class="extra-links">
    <a href="#">¿Olvidaste tu contraseña?</a>
    
  </div>
</div>

</body>
</html>
