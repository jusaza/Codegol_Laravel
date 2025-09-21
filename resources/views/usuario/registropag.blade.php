<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Usuarios - Escuela de Fútbol Pinze</title>
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
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar usuario...">
      </div>
      <a href="{{ url('/usuario/actregistro') }}" class="boton-registrar">Registrar nuevo usuario</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>Correo</th>
          <th>Nombre completo</th>
          <th>Identificación</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
         <td>juan.perez@example.com</td>
          <td>Juan Pérez</td>
          <td>12345678</td>
          <td class="acciones">
            <button class="ver-mas" data-id="1">Ver más</button>
            <button class="actualizar" onclick="location.href='#'">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="ventana-flotante" id="detalle-usuario-1">
    <ul>
      <li><strong>ID Usuario:</strong> 1</li>
      <li><strong>Correo:</strong> juan.perez@example.com</li>
      <li><strong>Nombre completo:</strong> Juan Pérez</li>
      <li><strong>Identificación:</strong> 12345678</li>
      <li><strong>Tipo Doc.:</strong> Cédula</li>
      <li><strong>Teléfono 1:</strong> 3012345678</li>
      <li><strong>Teléfono 2:</strong> 3001234567</li>
      <li><strong>Dirección:</strong> Calle 123 #45-67</li>
      <li><strong>Género:</strong> Masculino</li>
      <li><strong>Fecha Nac.:</strong> 2005-04-10</li>
      <li><strong>Lugar Nac.:</strong> Bogotá</li>
      <li><strong>Grupo Sanguíneo:</strong> O+</li>
      <li><strong>Estado:</strong> Activo</li>
      <li><strong>Registrado por:</strong> 4</li>
      <li><strong>ID Responsable:</strong> 5</li>
    </ul>
  </div>

  <script src="{{ asset('js/usuarios.js') }}"></script>
</body>
</html>
