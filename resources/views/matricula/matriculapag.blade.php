@extends('layouts.admin')
@section('title', 'Matricula')

@section('content')
  <div class="contenido">
    <div class="barra-top">
      <div class="barra-busqueda">
        <form method="GET" action="{{ route('matriculas1.index') }}">
          <input type="search" name="search" placeholder="Buscar matrícula por fecha de inicio o la observacion..." value="{{ request('search') }}">
        </form>
      </div>
      <a href="{{ route('matriculas1.create') }}" class="boton-registrar">Registrar matrícula</a>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success m-4">
        <p>{{ $message }}</p>
      </div>
    @endif

    <table>
      <thead>
        <tr>
          <th>ID Matrícula</th>
          <th>Fecha Matrícula</th>
          <th>Fecha Inicio</th>
          <th>Fecha Fin</th>
          <th>Observaciones</th>
          <th>Categoria</th>
          <th>Nivel</th>
          <th>ID Jugador</th>
          <th>Registrado por</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($matriculas as $matricula)
          <tr>
            <td>{{ $matricula->id_matricula }}</td>
            <td>{{ $matricula->fecha_matricula }}</td>
            <td>{{ $matricula->fecha_inicio }}</td>
            <td>{{ $matricula->fecha_fin }}</td>
            <td>{{ $matricula->observaciones }}</td>
            <td>{{ $matricula->categoria }}</td>
            <td>{{ $matricula->nivel }}</td>
            <td>{{ $matricula->id_jugador }}</td>
            <td>{{ $matricula->id_usuario }}</td>
            <td class="acciones">
              <button class="actualizar"><a href="{{ route('matriculas1.edit', $matricula->id_matricula) }}"  style= "color:white; text-decoration:none;">Actualizar</a></button>

              <form action="{{ route('matriculas1.destroy', $matricula->id_matricula) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="eliminar"
                  onclick="return confirm('¿Seguro que deseas eliminar esta matrícula?')">Eliminar</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="9">No hay matrículas registradas.</td>
          </tr>
        @endforelse
      </tbody>
    </table>

    <div style="margin-top: 20px;">
      {!! $matriculas->withQueryString()->links() !!}
    </div>
  </div>
@endsection
