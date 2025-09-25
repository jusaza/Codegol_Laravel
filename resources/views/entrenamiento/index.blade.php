@extends('layouts.admin')
@section('title', 'Entrenamiento')
@section('content')

<div class="contenido">
    <br>
    <div class="barra-top">
<div class="barra-busqueda">
    <form method="GET" action="{{ route('entrenamientos.index') }}">
        <input 
            type="search" 
            name="busqueda" 
            placeholder="Buscar por fecha o descripcion..." 
            value="{{ request('busqueda') }}" 
        />
    </form>
</div>

        <a href="{{ route('entrenamientos.create') }}" class="boton-registrar">Registrar entrenamiento</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success m-4">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Observaciones</th>
                <th>Registrado por</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <body>
            @forelse ($entrenamientos as $entrenamiento)
                <tr>
                    <td>{{ $entrenamiento->id_entrenamiento }}</td>
                    <td>{{ $entrenamiento->descripcion }}</td>
                    <td>{{ $entrenamiento->fecha }}</td>
                    <td>{{ $entrenamiento->lugar }}</td>
                    <td>{{ $entrenamiento->hora_inicio }}</td>
                    <td>{{ $entrenamiento->hora_fin }}</td>
                    <td>{{ $entrenamiento->observaciones}}</td>
                    <td>{{ $entrenamiento->id_usuario }}</td>
                    <td class="acciones">
                        <a href="{{ route('entrenamientos.edit', $entrenamiento->id_entrenamiento) }}" style= "text-decoration:none;">
                            <button class="actualizar">Actualizar</button>
                        </a>
                        <form action="{{ route('entrenamientos.destroy', $entrenamiento->id_entrenamiento) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="eliminar" onclick="event.preventDefault(); confirm('¿Seguro que deseas eliminar este entrenamiento?') ? this.closest('form').submit() : false;">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align: center;">No se encontraron entrenamientos.</td>
                </tr>
            @endforelse
        </body>
    </table>

    <div style="margin-top: 15px;">
        {!! $entrenamientos->withQueryString()->links() !!}
    </div>
</div>
@endsection

