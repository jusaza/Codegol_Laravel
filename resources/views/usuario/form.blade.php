{{-- usuario/form.blade.php --}}
{{-- Este formulario sirve para create y edit --}}
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Acción y método dinámicos --}}
    <form action="{{ isset($usuario) ? route('usuarios.update', $usuario->id_usuario) : route('usuarios.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        @if(isset($usuario))
            @method('PATCH')
        @endif

         {{-- id Usuario --}}
        <div class="Formgrupo">
            <label for="id_usuario">ID Usuario</label>
            <input type="hidden" name="id_usuario" id="id_usuario" class="form-control"
                   value="{{ old('id_usuario', $usuario?->id_usuario) }}" required>
        </div>

        {{-- Correo --}}
        <div class="Formgrupo">
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" class="form-control"
                   value="{{ old('correo', $usuario?->correo) }}" required>
        </div>

        {{-- Contraseña --}}
        <div class="Formgrupo">
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control"
                   {{ isset($usuario) ? '' : 'required' }}>
            @if(isset($usuario))
                <small>Dejar vacío para no cambiar la contraseña</small>
            @endif
        </div>

        {{-- Nombre completo --}}
        <div class="Formgrupo">
            <label for="nombre_completo">Nombre Completo</label>
            <input type="text" name="nombre_completo" id="nombre_completo" class="form-control"
                   value="{{ old('nombre_completo', $usuario?->nombre_completo) }}" required>
        </div>

        {{-- Número de identificación --}}
        <div class="Formgrupo">
            <label for="num_identificacion">Número de Identificación</label>
            <input type="number" name="num_identificacion" id="num_identificacion" class="form-control"
                   value="{{ old('num_identificacion', $usuario?->num_identificacion) }}" required>
        </div>

        {{-- Tipo de documento --}}
        <div class="Formgrupo">
            <label for="tipo_documento">Tipo Documento</label>
            <select name="tipo_documento" id="tipo_documento" class="form-control" required>
                @foreach(['cc','ti','ce','pa','rc','pep','nit','nuip','dni','ppt'] as $tipo)
                    <option value="{{ $tipo }}"
                        {{ old('tipo_documento', $usuario?->tipo_documento) == $tipo ? 'selected' : '' }}>
                        {{ strtoupper($tipo) }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Teléfonos --}}
        <div class="Formgrupo">
            <label for="telefono_1">Teléfono 1</label>
            <input type="number" name="telefono_1" id="telefono_1" class="form-control"
                   value="{{ old('telefono_1', $usuario?->telefono_1) }}" required>
        </div>

        <div class="Formgrupo">
            <label for="telefono_2">Teléfono 2</label>
            <input type="number" name="telefono_2" id="telefono_2" class="form-control"
                   value="{{ old('telefono_2', $usuario?->telefono_2) }}">
        </div>

        {{-- Dirección --}}
        <div class="Formgrupo">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control"
                   value="{{ old('direccion', $usuario?->direccion) }}">
        </div>

        {{-- Género --}}
        <div class="Formgrupo">
            <label for="genero">Género</label>
            <select name="genero" id="genero" class="form-control">
                <option value="m" {{ old('genero', $usuario?->genero) == 'm' ? 'selected' : '' }}>Masculino</option>
                <option value="f" {{ old('genero', $usuario?->genero) == 'f' ? 'selected' : '' }}>Femenino</option>
                <option value="otro" {{ old('genero', $usuario?->genero) == 'otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        {{-- Fecha de nacimiento --}}
        <div class="Formgrupo">
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                   value="{{ old('fecha_nacimiento', $usuario?->fecha_nacimiento) }}">
        </div>

        {{-- Lugar de nacimiento --}}
        <div class="Formgrupo">
            <label for="lugar_nacimiento">Lugar Nacimiento</label>
            <select name="lugar_nacimiento" id="lugar_nacimiento" class="form-control">
                @foreach(['Bogota','Medellin','Cali','Barranquilla','Cartagena','Otro'] as $ciudad)
                    <option value="{{ $ciudad }}"
                        {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == $ciudad ? 'selected' : '' }}>
                        {{ $ciudad }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Grupo sanguíneo --}}
        <div class="Formgrupo">
            <label for="grupo_sanguineo">Grupo Sanguíneo</label>
            <select name="grupo_sanguineo" id="grupo_sanguineo" class="form-control">
                @foreach(['a+','a-','b+','b-','ab+','ab-','o+','o-'] as $grupo)
                    <option value="{{ $grupo }}"
                        {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == $grupo ? 'selected' : '' }}>
                        {{ strtoupper($grupo) }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Foto de perfil --}}
        <div class="Formgrupo">
            <label for="foto_perfil">Foto Perfil</label>
            <input type="file" name="foto_perfil" id="foto_perfil" class="form-control">
            @if(isset($usuario) && $usuario->foto_perfil)
                <img src="{{ asset('storage/'.$usuario->foto_perfil) }}" alt="Foto Perfil" width="100">
            @endif
        </div>

        {{-- Estado --}}
        <div class="Formgrupo">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="1" {{ old('estado', $usuario?->estado) == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('estado', $usuario?->estado) == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        {{-- Roles --}}
        <div class="Formgrupo">
            <label for="roles">Roles</label>
            <select name="roles[]" id="roles" class="form-control" multiple>
                @foreach($rols as $rol)
                    <option value="{{ $rol->id_rol }}"
                        {{ isset($rolsSeleccionados) && in_array($rol->id_rol, $rolsSeleccionados) ? 'selected' : '' }}>
                        {{ $rol->rol_usuario }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Responsable --}}
        <div class="Formgrupo">
            <label for="id_responsable">Responsable</label>
            <select name="id_responsable" id="id_responsable" class="form-control">
                <option value="">Seleccionar Responsable</option>
                @foreach($responsables as $responsable)
                    <option value="{{ $responsable->id_usuario }}"
                        {{ old('id_responsable', $usuario?->id_responsable) == $responsable->id_usuario ? 'selected' : '' }}>
                        {{ $responsable->nombre_completo }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">
            {{ isset($usuario) ? 'Actualizar' : 'Guardar' }}
        </button>
    </form>
</div>
