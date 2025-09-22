@extends('layouts.admin')
@section('title', 'Pago')
@section('content')

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
@endsection
