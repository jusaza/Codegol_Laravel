@extends('layouts.admin')
@section('title', 'Inventario')

@section('content')
  <div class="contenido">
    <div class="barra-top">
    <div class="barra-busqueda">
    <form action="{{ route('inventarios.index') }}" method="GET">
        <input 
          type="search" 
          name="nombre" 
          value="{{ $busqueda ?? '' }}" 
          placeholder="Buscar artículo..." 
        />
      </form>
    </div>
    <a href="{{ route('inventarios.create') }}" class="boton-registrar">Agregar artículo</a>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success m-4">
        <p>{{ $message }}</p>
      </div>
    @endif

    <table>
      <thead>
        <tr>
          <th>ID Inventario</th>
          <th>Nombre del artículo</th>
          <th>Cantidad total</th>
          <th>Descripción</th>
          <th>Fecha de ingreso</th>
          <th>Usuario</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($inventarios as $inventario)
          <tr>
            <td>{{ $inventario->id_inventario }}</td>
            <td>{{ $inventario->nombre_articulo }}</td>
            <td>{{ $inventario->cantidad_total }}</td>
            <td>{{ $inventario->descripcion }}</td>
            <td>{{ $inventario->fecha_ingreso }}</td>
            <td>{{ $inventario->id_usuario }}</td>
            <td class="acciones">
            <a href="{{ route('inventarios.edit', $inventario->id_inventario) }}"  style= "text-decoration:none;">
                <button class="actualizar">Actualizar</button>
            </a>
              <form action="{{ route('inventarios.destroy', $inventario->id_inventario) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="eliminar" onclick="return confirm('¿Seguro que deseas eliminar este artículo?')">Eliminar</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="8">No hay artículos en el inventario.</td>
          </tr>
        @endforelse
      </tbody>
    </table>

    <div class="paginacion">
      {!! $inventarios->withQueryString()->links() !!}
    </div>
  </div>
@endsection

