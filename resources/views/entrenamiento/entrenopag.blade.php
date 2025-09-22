@extends('layouts.admin')
@section('title', 'Entrenamiento')
@section('content')
 
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
@endsection
