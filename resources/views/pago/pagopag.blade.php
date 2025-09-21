<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pagos - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="{{ asset('css/style_pag_prin.css') }}">
<link rel="stylesheet" href="{{ asset('css/stylepag.css') }}">
</head>
<body>
  <aside class="menu">
    <a href="{{ url('/pagina_original') }}" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
      <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo Escuela de Fútbol Pinze">
    </a>

    <h2>⚽ Menú ⚽</h2>
    <ul>
      <li>
        <a href="{{ url('/usuario/registropag') }}">Usuarios</a>
      <li>
        <a href="{{ url('/entrenamientopag') }}">Entrenamiento</a>
      <li>
        <a href="{{ url('/inventariopag') }}">Inventario</a>
      </li>
      <li>
        <a href="{{ url('/rendimientopag') }}">Rendimiento</a>
      </li>
      <li>
        <a href="{{ url('/matriculapag') }}">Matrícula</a>
      <li>
        <a href="{{ url('/pagoregistro') }}">Pago</a>
      </li>
    </ul>
    <a href="{{ url('/') }}" class="cerrar-sesion">Cerrar sesión</a>
  </aside>

  <div class="contenido">
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar pago...">
      </div>
      <a href="{{ url('/pago') }}" class="boton-registrar">Registrar pago</a>
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
            <button class="actualizar">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Mensualidad</td>
          <td>2025-06-30</td>
          <td>Tarjeta</td>
          <td>50.00</td>
          <td>Pago parcial</td>
          <td>102</td>
          <td>206</td>
          <td class="acciones">
            <button class="actualizar">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
