@extends('layouts.admin')
@section('title', 'Inventario')
@section('content')

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
<@endsection
