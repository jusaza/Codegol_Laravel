<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Entrenamiento - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="../css/style_forms.css">
</head>
<body>

<header>
  <a href="../entrenopag.html" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
    <img src="../imagenes/logo.jpg" alt="Logo Escuela de Fútbol Pinze">
  </a>
  <a href="../entrenopag.html" class="volver">Volver</a>
</header>

<div class="login-box" role="main" aria-label="Formulario de registro de entrenamiento">
  <h1>Entrenamiento</h1>
  <form action="../entrenopag.html" method="GET">
    <div>
      <label for="descripcion">Descripción</label>
      <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese la Descripción" required>
    </div>
    <div class="Formgrupo">
      <label for="fecha">Fecha</label>
      <input type="date" id="fecha" name="fecha" required>
    </div>
    <div class="Formgrupo">
      <label for="hora_inicio">Hora inicio</label>
      <input type="time" id="hora_inicio" name="hora_inicio" required>
    </div>
    <div class="Formgrupo">
      <label for="hora_fin">Hora fin</label>
      <input type="time" id="hora_fin" name="hora_fin" required>
    </div>
    <div class="Formgrupo">
      <label for="lugar">Lugar</label>
      <input type="text" id="lugar" name="lugar" placeholder="Ingrese el lugar" required>
    </div>
    <div>
      <label for="registrado_por"></label>
      <input type="hidden" name="registrado_por" id="registrado_por" placeholder="Ingresa la persona que hizo el registro" readonly>
    </div>  
    <div class="Formgrupo">
      <label for="id"></label>
      <input type="hidden" id="id" name="id" placeholder="El sistema genera el id" readonly>
    </div>  
 
            <button type="submit">Guardar entrenamiento</button>
  </form>
</div>

</body>
</html>
