@extends('layouts.admin')
@section('title', 'Pago')
@section('content')

<div class="contenido">
    <br>
    <div class="barra-top">
        <div class="barra-busqueda">
            {{-- Formulario de búsqueda --}}
            <form method="GET" action="{{ route('pago.index') }}">
                <input type="text" name="nombre" placeholder="Buscar pago..." value="{{ request('nombre') }}">
            </form>
        </div>
        <a href="{{ route('pago.create') }}" class="boton-registrar">Registrar pago</a>
    </div>

    {{-- Mensaje de éxito --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success m-4">
            <p>{{ $message }}</p>
        </div> 
    @endif

    <table>
        <thead>
            <tr>
                <th>ID Pago</th>
                <th>Concepto</th>
                <th>Fecha Pago</th>
                <th>Método Pago</th>
                <th>Valor Total</th>
                <th>Observaciones</th>
                <th>Registrado por</th>
                <th>Responsable</th>
                <th>Matrícula</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pagos as $pago)
                <tr>
                    <td>{{ $pago->id_pago }}</td>
                    <td>{{ $pago->concepto_pago }}</td>
                    <td>{{ optional($pago->fecha_pago)->format('Y-m-d') }}</td>
                    <td>{{ $pago->metodo_pago ?? '—' }}</td>
                    <td>${{ number_format($pago->valor_total, 0, ',', '.') }}</td>
                    <td>{{ $pago->observaciones ?? '—' }}</td>
                    <td>{{ $pago->usuario->nombre ?? $pago->id_usuario }}</td>
                    <td>{{ $pago->usuario_responsable->nombre ?? $pago->id_responsable }}</td>
                    <td>{{ $pago->matricula->id_matricula ?? '—' }}</td>
                    <td>{{ $pago->estado == 1 ? 'Activo' : 'Inactivo' }}</td>
                    <td class="acciones">
                        <a href="{{ route('pago.edit', $pago->id_pago) }}" style="text-decoration:none;">
                            <button class="actualizar">Actualizar</button>
                        </a>

                        <form action="{{ route('pago.destroy', $pago->id_pago) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="eliminar"
                                onclick="event.preventDefault(); confirm('¿Seguro que deseas eliminar este pago?') ? this.closest('form').submit() : false;">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" style="text-align:center;">No se encontraron pagos.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Paginación --}}
    <div style="margin-top: 15px;">
       {!! $pagos->appends(['nombre' => request('busqueda')])->links() !!}
    </div>
</div>
@endsection
