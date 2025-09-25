@if(isset($usuario) && $usuario->id_usuario)
<div class="Formgrupo">
    <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
    <input type="hidden" name="id_usuario"
           class="form-control"
           value="{{ old('id_usuario', $usuario->id_usuario) }}"
           id="id_usuario"
           placeholder="Id Usuario">
</div>
@endif

<div class="Formgrupo">
    <label for="correo" class="form-label">{{ __('Correo') }}</label>
    <input type="email" name="correo" required
           class="form-control"
           value="{{ old('correo', $usuario?->correo) }}"
           id="correo" placeholder="Correo">
</div>

<div class="Formgrupo">
    <label for="contrasena" class="form-label">{{ __('Contraseña') }}</label>
    <input type="password" required name="contrasena"
           class="form-control"
           value="{{ old('contrasena', $usuario?->contrasena) }}"
           id="contrasena" placeholder="Contraseña">
</div>

<div class="Formgrupo">
    <label for="nombre_completo" class="form-label">{{ __('Nombre Completo') }}</label>
    <input type="text" name="nombre_completo" required
           class="form-control"
           value="{{ old('nombre_completo', $usuario?->nombre_completo) }}"
           id="nombre_completo" placeholder="Nombre Completo">
</div>

<div class="Formgrupo">
    <label for="num_identificacion" class="form-label">{{ __('Num Identificación') }}</label>
    <input type="number" name="num_identificacion" required
           min="1000000000" max="9999999999"
           class="form-control"
           value="{{ old('num_identificacion', $usuario?->num_identificacion) }}"
           id="num_identificacion" placeholder="Num Identificación">
</div>

<div class="Formgrupo">
    <label for="tipo_documento" class="form-label">{{ __('Tipo Documento') }}</label>
    <select name="tipo_documento" required class="form-control" id="tipo_documento">
        <option value="cc"  {{ old('tipo_documento', $usuario?->tipo_documento) == 'cc' ? 'selected' : '' }}>CC</option>
        <option value="ti"  {{ old('tipo_documento', $usuario?->tipo_documento) == 'ti' ? 'selected' : '' }}>TI</option>
        <option value="ce"  {{ old('tipo_documento', $usuario?->tipo_documento) == 'ce' ? 'selected' : '' }}>CE</option>
        <option value="pa"  {{ old('tipo_documento', $usuario?->tipo_documento) == 'pa' ? 'selected' : '' }}>PA</option>
        <option value="rc"  {{ old('tipo_documento', $usuario?->tipo_documento) == 'rc' ? 'selected' : '' }}>RC</option>
        <option value="pep" {{ old('tipo_documento', $usuario?->tipo_documento) == 'pep' ? 'selected' : '' }}>PEP</option>
        <option value="nit" {{ old('tipo_documento', $usuario?->tipo_documento) == 'nit' ? 'selected' : '' }}>NIT</option>
        <option value="nuip"{{ old('tipo_documento', $usuario?->tipo_documento) == 'nuip' ? 'selected' : '' }}>NUIP</option>
        <option value="dni" {{ old('tipo_documento', $usuario?->tipo_documento) == 'dni' ? 'selected' : '' }}>DNI</option>
        <option value="ppt" {{ old('tipo_documento', $usuario?->tipo_documento) == 'ppt' ? 'selected' : '' }}>PPT</option>
    </select>
</div>

<div class="Formgrupo">
    <label for="telefono_1" class="form-label">{{ __('Teléfono 1') }}</label>
    <input type="number" name="telefono_1" required
           min="1000000000" max="9999999999"
           class="form-control"
           value="{{ old('telefono_1', $usuario?->telefono_1) }}"
           id="telefono_1" placeholder="Teléfono 1">
</div>

<div class="Formgrupo">
    <label for="telefono_2" class="form-label">{{ __('Teléfono 2') }}</label>
    <input type="number" name="telefono_2"
           min="1000000000" max="9999999999"
           class="form-control"
           value="{{ old('telefono_2', $usuario?->telefono_2) }}"
           id="telefono_2" placeholder="Teléfono 2">
</div>

<div class="Formgrupo">
    <label for="direccion" class="form-label">{{ __('Dirección') }}</label>
    <input type="text" name="direccion" required
           class="form-control"
           value="{{ old('direccion', $usuario?->direccion) }}"
           id="direccion" placeholder="Dirección">
</div>

<div class="Formgrupo">
    <label for="genero" class="form-label">{{ __('Género') }}</label>
    <select name="genero" required class="form-control" id="genero">
        <option value="m"    {{ old('genero', $usuario?->genero) == 'm' ? 'selected' : '' }}>Masculino</option>
        <option value="f"    {{ old('genero', $usuario?->genero) == 'f' ? 'selected' : '' }}>Femenino</option>
        <option value="otro" {{ old('genero', $usuario?->genero) == 'otro' ? 'selected' : '' }}>Otro</option>
    </select>
</div>

<div class="Formgrupo">
    <label for="fecha_nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
    <input type="date" name="fecha_nacimiento" required
           class="form-control"
           value="{{ old('fecha_nacimiento', $usuario?->fecha_nacimiento) }}"
           id="fecha_nacimiento">
</div>

<div class="Formgrupo">
    <label for="lugar_nacimiento" class="form-label">{{ __('Lugar Nacimiento') }}</label>
    <select name="lugar_nacimiento" class="form-control" id="lugar_nacimiento">
        <option value="Bogota"      {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Bogota' ? 'selected' : '' }}>Bogotá</option>
        <option value="Medellin"    {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Medellin' ? 'selected' : '' }}>Medellín</option>
        <option value="Cali"        {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Cali' ? 'selected' : '' }}>Cali</option>
        <option value="Barranquilla"{{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Barranquilla' ? 'selected' : '' }}>Barranquilla</option>
        <option value="Cartagena"   {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Cartagena' ? 'selected' : '' }}>Cartagena</option>
        <option value="Otro"        {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Otro' ? 'selected' : '' }}>Otro</option>
    </select>
</div>

<div class="Formgrupo">
    <label for="grupo_sanguineo" class="form-label">{{ __('Grupo Sanguíneo') }}</label>
    <select name="grupo_sanguineo" required class="form-control" id="grupo_sanguineo">
        @foreach(['a+','a-','b+','b-','ab+','ab-','o+','o-'] as $grupo)
            <option value="{{ $grupo }}" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == $grupo ? 'selected' : '' }}>
                {{ strtoupper($grupo) }}
            </option>
        @endforeach
    </select>
</div>

<div class="Formgrupo">
    <label for="foto_perfil" class="form-label">{{ __('Foto Perfil') }}</label>
    <input type="file" name="foto_perfil"
           class="form-control"
           id="foto_perfil">
</div>

<div class="Formgrupo">
    <label for="estado" class="form-label">{{ __('Estado') }}</label>
    <select name="estado" required class="form-control" id="estado">
        <option value="1" {{ old('estado', $usuario?->estado) == '1' ? 'selected' : '' }}>Activo</option>
        <option value="0" {{ old('estado', $usuario?->estado) == '0' ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>

<div class="Formgrupo">
    <label for="roles" class="form-label">{{ __('Roles') }}</label>
    <select name="roles[]" class="form-control" id="roles" multiple>
        @foreach($rols as $rol)
            <option value="{{ $rol->id_rol }}" {{ in_array($rol->id_rol, $rolsSeleccionados) ? 'selected' : '' }}>
                {{ $rol->rol_usuario }}
            </option>
        @endforeach
    </select>
</div>

<div class="Formgrupo">
    <label for="id_usuario_registro" class="form-label">{{ __('Id Usuario Registro') }}</label>
    <input type="number" name="id_usuario_registro"
           value="{{ auth()->user()?->id }}"
           class="form-control"
           id="id_usuario_registro" placeholder="Id Usuario Registro">
</div>

<div class="Formgrupo">
    <label for="id_responsable" class="form-label">{{ __('Responsable') }}</label>
    <select name="id_responsable" class="form-control" id="id_responsable">
        <option value="">Seleccionar Responsable</option>
        @foreach($responsables as $responsable)
            <option value="{{ $responsable->id_usuario }}"
                {{ old('id_responsable', $usuario?->id_responsable) == $responsable->id_usuario ? 'selected' : '' }}>
                {{ $responsable->nombre_completo }}
            </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
