@extends('layouts.admin')
@section('title', 'Matricula')
@section('content')


  <div class="contenido">
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar matrícula...">
      </div>
      <a href="{{ url('/matricula') }}" class="boton-registrar">Registrar matrícula</a>

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
          <td>1</td>
          <td>2025-01-10</td>
          <td>2025-02-01</td>
          <td>2025-12-31</td>
          <td>Activo</td>
          <td>Ninguna</td>
          <td>101</td>
          <td>201</td>
          <td class="acciones">
            <button class="actualizar">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
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
            <button class="actualizar">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
