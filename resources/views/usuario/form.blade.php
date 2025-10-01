{{-- resources/views/usuario/form.blade.php --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ $usuario->exists ? route('usuarios.update', $usuario->id_usuario) : route('usuarios.store') }}"
      method="POST"
      enctype="multipart/form-data">
    @csrf
    @if($usuario->exists)
        @method('PATCH')
    @endif

    {{-- Correo --}}
    <div class="Formgrupo">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" name="correo" required class="form-control"
               value="{{ old('correo', $usuario->correo) }}" id="correo">
    </div>

    {{-- Contraseña --}}
    <div class="Formgrupo">
        <label for="contrasena" class="form-label">
            {{ $usuario->exists ? 'Nueva Contraseña (opcional)' : 'Contraseña' }}
        </label>
        <input type="password" name="contrasena" class="form-control"
               value="" id="contrasena">
    </div>

    {{-- Nombre completo --}}
    <div class="Formgrupo">
        <label for="nombre_completo" class="form-label">Nombre Completo</label>
        <input type="text" name="nombre_completo" required class="form-control"
               value="{{ old('nombre_completo', $usuario->nombre_completo) }}" id="nombre_completo">
    </div>

    {{-- Número de identificación --}}
    <div class="Formgrupo">
        <label for="num_identificacion" class="form-label">Num Identificación</label>
        <input type="number" name="num_identificacion" required class="form-control"
               value="{{ old('num_identificacion', $usuario->num_identificacion) }}" id="num_identificacion">
    </div>

    {{-- Tipo documento --}}
    <div class="Formgrupo">
        <label for="tipo_documento" class="form-label">Tipo Documento</label>
        <select name="tipo_documento" required class="form-control" id="tipo_documento">
            @foreach(['cc','ti','ce','pa','rc','pep','nit','nuip','dni','ppt'] as $tipo)
                <option value="{{ $tipo }}" 
                    {{ old('tipo_documento', $usuario->tipo_documento) == $tipo ? 'selected' : '' }}>
                    {{ strtoupper($tipo) }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Teléfonos --}}
    <div class="Formgrupo">
        <label for="telefono_1" class="form-label">Teléfono 1</label>
        <input type="number" name="telefono_1" required class="form-control"
               value="{{ old('telefono_1', $usuario->telefono_1) }}" id="telefono_1">
    </div>

    <div class="Formgrupo">
        <label for="telefono_2" class="form-label">Teléfono 2</label>
        <input type="number" name="telefono_2" class="form-control"
               value="{{ old('telefono_2', $usuario->telefono_2) }}" id="telefono_2">
    </div>

    {{-- Dirección --}}
    <div class="Formgrupo">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" name="direccion" required class="form-control"
               value="{{ old('direccion', $usuario->direccion) }}" id="direccion">
    </div>

    {{-- Género --}}
    <div class="Formgrupo">
        <label for="genero" class="form-label">Género</label>
        <select name="genero" required class="form-control" id="genero">
            <option value="m" {{ old('genero', $usuario->genero) == 'm' ? 'selected' : '' }}>Masculino</option>
            <option value="f" {{ old('genero', $usuario->genero) == 'f' ? 'selected' : '' }}>Femenino</option>
            <option value="otro" {{ old('genero', $usuario->genero) == 'otro' ? 'selected' : '' }}>Otro</option>
        </select>
    </div>

    {{-- Fecha de nacimiento --}}
    <div class="Formgrupo">
        <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento" required class="form-control"
               value="{{ old('fecha_nacimiento', $usuario->fecha_nacimiento) }}" id="fecha_nacimiento">
    </div>

    {{-- Lugar de nacimiento --}}
    <div class="Formgrupo">
        <label for="lugar_nacimiento" class="form-label">Lugar Nacimiento</label>
        <select name="lugar_nacimiento" class="form-control" id="lugar_nacimiento">
            @foreach(['Bogota','Medellin','Cali','Barranquilla','Cartagena','Otro'] as $ciudad)
                <option value="{{ $ciudad }}" 
                    {{ old('lugar_nacimiento', $usuario->lugar_nacimiento) == $ciudad ? 'selected' : '' }}>
                    {{ $ciudad }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Grupo sanguíneo --}}
    <div class="Formgrupo">
        <label for="grupo_sanguineo" class="form-label">Grupo Sanguíneo</label>
        <select name="grupo_sanguineo" required class="form-control" id="grupo_sanguineo">
            @foreach(['a+','a-','b+','b-','ab+','ab-','o+','o-'] as $grupo)
                <option value="{{ $grupo }}" 
                    {{ old('grupo_sanguineo', $usuario->grupo_sanguineo) == $grupo ? 'selected' : '' }}>
                    {{ strtoupper($grupo) }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Foto perfil --}}
    <div class="Formgrupo">
        <label for="foto_perfil" class="form-label">Foto Perfil</label>
        <input type="file" name="foto_perfil" class="form-control" id="foto_perfil">
    </div>

    {{-- Estado --}}
    <div class="Formgrupo">
        <label for="estado" class="form-label">Estado</label>
        <select name="estado" required class="form-control" id="estado">
            <option value="1" {{ old('estado', $usuario->estado) == '1' ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ old('estado', $usuario->estado) == '0' ? 'selected' : '' }}>Inactivo</option>
        </select>
    </div>

    {{-- Roles --}}
    <div class="Formgrupo">
        <label for="roles" class="form-label">Roles</label>
        <select name="roles[]" class="form-control" id="roles" multiple>
            @foreach($rols as $rol)
                <option value="{{ $rol->id_rol }}" 
                    {{ in_array($rol->id_rol, $rolsSeleccionados) ? 'selected' : '' }}>
                    {{ $rol->rol_usuario }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Responsable --}}
    <div class="Formgrupo">
        <label for="id_responsable" class="form-label">Responsable</label>
        <select name="id_responsable" class="form-control" id="id_responsable">
            <option value="">Seleccionar Responsable</option>
            @foreach($responsables as $responsable)
                <option value="{{ $responsable->id_usuario }}"
                    {{ old('id_responsable', $usuario->id_responsable) == $responsable->id_usuario ? 'selected' : '' }}>
                    {{ $responsable->nombre_completo }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary mt-3">
        {{ $usuario->exists ? 'Actualizar' : 'Guardar' }}
    </button>
</form>
