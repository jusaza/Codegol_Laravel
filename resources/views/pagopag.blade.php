<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pagos - Escuela de Fútbol Pinze</title>
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
        <input type="text" placeholder="Buscar pago...">
      </div>
      <a href="./formularios/pago" class="boton-registrar">Registrar pago</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID Pago</th>
          <th>Concepto</th>
          <th>Fecha Pago</th>
          <th>Método Pago</th>
          <th>Valor Total</th>
          <th>Observaciones</th>
          <th>Pago por (ID)</th>
          <th>ID Matrícula</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Inscripción</td>
          <td>2025-06-20</td>
          <td>Efectivo</td>
          <td>150.00</td>
          <td>Pago completo</td>
          <td>101</td>
          <td>205</td>
          <td class="acciones">
            <button class="actualizar" onclick="location.href='./formularios_actualizacion/pago_actualizar'">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
