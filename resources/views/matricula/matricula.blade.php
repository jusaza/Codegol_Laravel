<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Matrícula - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="../css/style_forms.css" />
</head>
<body>

  <header>
    <a href="../matriculapag.html" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
      <img src="../imagenes/logo.jpg" alt="Logo Escuela de Fútbol Pinze" />
    </a>
    <a href="../matriculapag.html" class="volver">Volver</a>
  </header>

  <div class="login-box" role="main" aria-label="Formulario de matrícula">
    <h1>Matrícula</h1>

    <form>
      <div class="Formgrupo">
        <label for="id_matricula">ID Matrícula</label>
        <input type="number" id="id_matricula" name="id_matricula" placeholder="Ingrese el ID de matrícula" required>
      </div>

      <div class="Formgrupo">
        <label for="fecha_matricula">Fecha Matrícula</label>
        <input type="date" id="fecha_matricula" name="fecha_matricula" required>
      </div>

      <div class="Formgrupo">
        <label for="fecha_inicio">Fecha Inicio</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required>
      </div>

      <div class="Formgrupo">
        <label for="fecha_fin">Fecha Fin</label>
        <input type="date" id="fecha_fin" name="fecha_fin" required>
      </div>

      <div class="Formgrupo">
        <label for="estado">Estado</label>
        <select id="estado" name="estado" required>
          <option value="">Seleccione estado</option>
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>

      <div class="Formgrupo">
        <label for="observaciones">Observaciones</label>
        <input type="text" id="observaciones" name="observaciones" placeholder="Ingrese observaciones">
      </div>

      <div class="Formgrupo">
        <label for="id_jugador">ID Jugador (FK)</label>
        <input type="number" id="id_jugador" name="id_jugador" placeholder="Ingrese el ID del jugador" required>
      </div>

      <div class="Formgrupo">
        <label for="registrado_por">Registrado por (FK)</label>
        <input type="number" id="registrado_por" name="registrado_por" placeholder="Ingrese el ID del responsable" required>
      </div>

      <button type="submit">Guardar matrícula</button>
    </form>
  </div>

</body>
</html>
