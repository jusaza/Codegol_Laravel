<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inventario - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="{{ asset('css/style_pag_prin.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/stylepag.css') }}" />
</head>
<body>
  <aside class="menu">
    <a href="{{ url('/pagina_original') }}" class="logo" aria-label="Logo Escuela de Fútbol Pinze">
      <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo Escuela de Fútbol Pinze" />
    </a>

    <h2>⚽ Menú ⚽</h2>
    <ul>
      <li><a href="{{ url('/usuario/registropag') }}">Usuarios</a></li>
      <li><a href="{{ url('/entrenamientopag') }}">Entrenamiento</a></li>
      <li><a href="{{ url('/inventariopag') }}">Inventario</a></li>
      <li><a href="{{ url('/rendimientopag') }}">Rendimiento</a></li>
      <li><a href="{{ url('/matriculapag') }}">Matrícula</a></li>
      <li><a href="{{ url('/pagoregistro') }}">Pago</a></li>
    </ul>
    <a href="{{ url('/') }}" class="cerrar-sesion">Cerrar sesión</a>
  </aside>

  <div class="contenido">
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar artículo..." />
      </div>
      <a href="{{ url('/inventario') }}" class="boton-registrar">Agregar artículo</a>
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
            <button class="actualizar">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Conos de entrenamiento</td>
          <td>30</td>
          <td>Conos plásticos para ejercicios</td>
          <td>2025-04-15</td>
          <td>Activo</td>
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
