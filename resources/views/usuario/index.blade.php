@extends('layouts.admin')
@section('title', 'Usuarios')
@section('content')

<div class="contenido">
    <br>
    <div class="barra-top">
        <div class="barra-busqueda">
            <form method="GET" action="{{ route('usuarios.index') }}">
                <input
                    type="search"
                    name="busqueda"
                    placeholder="Buscar por nombre, correo o identificación..."
                    value="{{ request('busqueda') }}"
                />
            </form>
        </div>

        <a href="{{ route('usuarios.create') }}" class="boton-registrar">Registrar usuario</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success m-4">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Correo</th>
                <th>Nombre Completo</th>
                <th>Num Identificación</th>
                <th>Teléfono 1</th>
                <th>Género</th>
                <th>Foto Perfil</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <body>
            @forelse ($usuarios as $usuario)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td>{{ $usuario->nombre_completo }}</td>
                    <td>{{ $usuario->num_identificacion }}</td>
                    <td>{{ $usuario->telefono_1 }}</td>
                    <td>{{ $usuario->genero === 'm' ? 'Masculino' : ($usuario->genero === 'f' ? 'Femenino' : 'No especificado') }}</td>
                    <td>{{ $usuario->foto_perfil }}</td>
                    <td>{{ $usuario->roles->pluck('rol_usuario')->implode(', ') }}</td>
                    <td>{{ $usuario->estado==1 ? "Activo" : "Inactivo" }}</td>  
                    <td class="acciones">
                        <a href="{{ route('usuarios.show', $usuario->id_usuario) }}" style="text-decoration:none;">
                            <button class="actualizar">Ver</button>
                        </a>

                        <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" style="text-decoration:none;">
                            <button class="actualizar">Actualizar</button>
                        </a>

                        <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="eliminar" onclick="event.preventDefault(); confirm('¿Seguro que deseas eliminar este usuario?') ? this.closest('form').submit() : false;">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="19" style="text-align: center;">No se encontraron usuarios.</td>
                </tr>
            @endforelse
        </body>
    </table>

    <div style="margin-top: 15px;">
        {!! $usuarios->withQueryString()->links() !!}
    </div>
</div>
@endsection
