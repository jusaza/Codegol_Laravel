@extends('layouts.admin')
@section('title', 'Rendimiento')
@section('content')

@section('template_title')
    {{ $rendimiento->name ?? __('Show') . " " . __('Rendimiento') }}
@endsection

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
  < class="ventana-flotante" id="detalle-usuario-1">
    <div class="info">
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Rendimiento:</strong>
                                    {{ $rendimiento->id_rendimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Evaluacion:</strong>
                                    {{ $rendimiento->fecha_evaluacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Posicion:</strong>
                                    {{ $rendimiento->posicion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Velocidad:</strong>
                                    {{ $rendimiento->velocidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Potencia Tiro:</strong>
                                    {{ $rendimiento->potencia_tiro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Defensa:</strong>
                                    {{ $rendimiento->defensa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Regate:</strong>
                                    {{ $rendimiento->regate }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pase:</strong>
                                    {{ $rendimiento->pase }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tecnica:</strong>
                                    {{ $rendimiento->tecnica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Promedio:</strong>
                                    {{ $rendimiento->promedio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $rendimiento->observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $rendimiento->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Matricula:</strong>
                                    {{ $rendimiento->id_matricula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Entrenamiento:</strong>
                                    {{ $rendimiento->id_entrenamiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $rendimiento->id_usuario }}
                                </div>
    </div> 
    <div class="grafico">
      <canvas id="graficaRadarDetalle" width="250" height="250"></canvas>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset('js/rendimiento.js') }}"></script>
@endsection
