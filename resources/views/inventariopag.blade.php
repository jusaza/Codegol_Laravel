<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inventario - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="css/style_pag_prin.css" />
  <link rel="stylesheet" href="css/stylepag.css" />
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
        <input type="text" placeholder="Buscar artículo..." />
      </div>
      <a href="./formularios/inventario" class="boton-registrar">Agregar artículo</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID Inventario</th>
          <th>Nombre del artículo</th>
          <th>Cantidad total</th>
          <th>Descripción</th>
          <th>Fecha de ingreso</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Balón Oficial</td>
          <td>15</td>
          <td>Balones de fútbol tamaño oficial</td>
          <td>2025-05-10</td>
          <td>Activo</td>
          <td class="acciones">
            <button class="actualizar" onclick="location.href='./formularios_actualizacion/inventario_actualizar'">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>