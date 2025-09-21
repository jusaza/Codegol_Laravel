<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Entrenamientos - Escuela de Fútbol Pinze</title>
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
    <li><a href="./registropag">Usuarios</a></li>
    <li><a href="./entrenopag">Entrenamiento</a></li>
    <li><a href="./inventariopag">Inventario</a></li>
    <li><a href="./rendimientopag">Rendimiento</a></li>
    <li><a href="./matriculapag">Matrícula</a></li>
    <li><a href="./pagopag">Pago</a></li>
  </ul>

    <a href="./index" class="cerrar-sesion">Cerrar sesión</a>
  </aside>
 
  <div class="contenido">
     
    <br>
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar entrenamiento...">
      </div>
      <a href="./formularios/entrenamiento" class="boton-registrar">Registrar entrenamiento</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Fecha</th>
          <th>Lugar</th>
          <th>Hora Inicio</th>
          <th>Hora Fin</th>
          <th>Tipo</th>
          <th>Registrado por</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2025-06-29</td>
          <td>Cancha Central</td>
          <td>08:00</td>
          <td>10:00</td>
          <td>Técnico</td>
          <td>Acudiente</td>
          <td class="acciones">
            <button class="actualizar" onclick="location.href='./formularios_acualizacion/entrenamiento_actualizar'">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>