@extends('layouts.admin')
@section('title', 'Rendimiento')
@section('content')

  <div class="contenido">
    <div class="barra-top">
      <div class="barra-busqueda">
        <input type="text" placeholder="Buscar rendimiento..." />
      </div>
      <a href="{{ url('/rendimiento') }}" class="boton-registrar">Registrar rendimiento</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Fecha</th>
          <th>Posición</th>
          <th>Velocidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2025-06-15</td>
          <td>Delantero</td>
          <td>80</td>
          <td class="acciones">
            <button class="ver-mas" data-id="1">Ver más</button>
            <button class="actualizar">Actualizar</button>
            <button class="eliminar">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Ventana flotante con gráfica radar -->
  <div class="ventana-flotante" id="detalle-usuario-1">
    <div class="info">
      <ul>
        <li><strong>ID Rendimiento:</strong> 1</li>
        <li><strong>Fecha Evaluación:</strong> 2025-06-15</li>
        <li><strong>Posición:</strong> Delantero</li>
        <li><strong>Velocidad:</strong> 80</li>
        <li><strong>Potencia Tiro:</strong> 75</li>
        <li><strong>Defensa:</strong> 70</li>
        <li><strong>Regate:</strong> 65</li>
        <li><strong>Pase:</strong> 85</li>
        <li><strong>Técnica:</strong> 90</li>
        <li><strong>Promedio:</strong> 77.5</li>
        <li><strong>Observaciones:</strong> Buen rendimiento general</li>
        <li><strong>Estado:</strong> Activo</li>
      </ul>
    </div>
    <div class="grafico">
      <canvas id="graficaRadarDetalle" width="250" height="250"></canvas>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset('js/rendimiento.js') }}"></script>
@endsection
