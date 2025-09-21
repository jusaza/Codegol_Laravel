<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Entrenamientos - Escuela de Fútbol Pinze</title>
  <link rel="stylesheet" href="{{ asset('css/style_pag_prin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/stylepag.css') }}">
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
    <br>
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar entrenamiento...">
      </div>
      <a href="{{ url('/entrenamiento') }}" class="boton-registrar">Registrar entrenamiento</a>
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
            <button class="actualizar">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>2025-06-30</td>
          <td>Cancha Norte</td>
          <td>09:00</td>
          <td>11:00</td>
          <td>Físico</td>
          <td>Acudiente</td>
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
