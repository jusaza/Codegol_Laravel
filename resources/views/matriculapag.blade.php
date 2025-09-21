<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Matrículas - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="css/style_pag_prin.css">
  <link rel="stylesheet" href="css/stylepag.css">
</head>
<body>
  <aside class="menu">
    <a href="./pagina_original" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
      <img src="imagenes/logo.jpg" alt="Logo Escuela de Fútbol Pinze" />
    </a>

    <h2>⚽ Menú ⚽</h2>
   <ul>
      <li>
        <a href="./registropag">Usuarios</a>
      <li>
        <a href="./entrenopag">Entrenamiento</a>
      <li>
        <a href="./inventariopag">Inventario</a>
      </li>
      <li>
        <a href="./rendimientopag">Rendimiento</a>
      </li>
      <li>
        <a href="./matriculapag">Matrícula</a>
      <li>
        <a href="./pagopag">Pago</a>
      </li>
    </ul>
    <a href="./index" class="cerrar-sesion">Cerrar sesión</a>
  </aside>

  <div class="contenido">
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar matrícula...">
      </div>
      <a href="./formularios/matricula" class="boton-registrar">Registrar matrícula</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID Matrícula</th>
          <th>Fecha Matrícula</th>
          <th>Fecha Inicio</th>
          <th>Fecha Fin</th>
          <th>Estado</th>
          <th>Observaciones</th>
          <th>ID Jugador</th>
          <th>Registrado por</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2</td>
          <td>2025-03-15</td>
          <td>2025-04-01</td>
          <td>2025-10-30</td>
          <td>Inactivo</td>
          <td>Pago pendiente</td>
          <td>102</td>
          <td>202</td>
          <td class="acciones">
            <button class="actualizar" onclick="location.href='./formularios_actualizacion/matricula_actualizar'">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>