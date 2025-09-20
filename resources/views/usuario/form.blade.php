<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        @if(isset($usuario) && $usuario->id_usuario)
        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="hidden" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $usuario->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
            <input type="text" class="form-control" value="{{ $usuario->id_usuario }}" readonly>
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        @endif
        <div class="form-group mb-2 mb20">
            <label for="correo" class="form-label">{{ __('Correo') }}</label>
            <input type="email" name="correo" required class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo', $usuario?->correo) }}" id="correo" placeholder="Correo">
            {!! $errors->first('correo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contrasena" class="form-label">{{ __('Contrasena') }}</label>
            <input type="password" required name="contrasena" class="form-control @error('contrasena') is-invalid @enderror" value="{{ old('contrasena', $usuario?->contrasena) }}" id="contrasena" placeholder="Contrasena">
            {!! $errors->first('contrasena', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_completo" class="form-label">{{ __('Nombre Completo') }}</label>
            <input type="text" name="nombre_completo" required class="form-control @error('nombre_completo') is-invalid @enderror" value="{{ old('nombre_completo', $usuario?->nombre_completo) }}" id="nombre_completo" placeholder="Nombre Completo">
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_identificacion" class="form-label">{{ __('Num Identificacion') }}</label>
            <input type="number" name="num_identificacion" min="1000000000" max="9999999999" required class="form-control @error('num_identificacion') is-invalid @enderror" value="{{ old('num_identificacion', $usuario?->num_identificacion) }}" id="num_identificacion" placeholder="Num Identificacion">
            {!! $errors->first('num_identificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_documento" class="form-label">{{ __('Tipo Documento') }}</label>
            <select name="tipo_documento" required class="form-control @error('tipo_documento') is-invalid @enderror">
                <option value="cc" {{ old('tipo_documento', $usuario?->tipo_documento) == 'cc' ? 'selected' : '' }}>CC</option>
                <option value="ti" {{ old('tipo_documento', $usuario?->tipo_documento) == 'ti' ? 'selected' : '' }}>TI</option>
                <option value="ce" {{ old('tipo_documento', $usuario?->tipo_documento) == 'ce' ? 'selected' : '' }}>CE</option>
                <option value="pa" {{ old('tipo_documento', $usuario?->tipo_documento) == 'pa' ? 'selected' : '' }}>PA</option>
                <option value="rc" {{ old('tipo_documento', $usuario?->tipo_documento) == 'rc' ? 'selected' : '' }}>RC</option>
                <option value="pep" {{ old('tipo_documento', $usuario?->tipo_documento) == 'pep' ? 'selected' : '' }}>PEP</option>
                <option value="nit" {{ old('tipo_documento', $usuario?->tipo_documento) == 'nit' ? 'selected' : '' }}>NIT</option>
                <option value="nuip" {{ old('tipo_documento', $usuario?->tipo_documento) == 'nuip' ? 'selected' : '' }}>NUIP</option>
                <option value="dni" {{ old('tipo_documento', $usuario?->tipo_documento) == 'dni' ? 'selected' : '' }}>DNI</option>
                <option value="ppt" {{ old('tipo_documento', $usuario?->tipo_documento) == 'ppt' ? 'selected' : '' }}>PPT</option>
            </select>
            {!! $errors->first('tipo_documento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono_1" class="form-label">{{ __('Telefono 1') }}</label>
            <input type="number" name="telefono_1" min="1000000000" max="9999999999" required class="form-control @error('telefono_1') is-invalid @enderror" value="{{ old('telefono_1', $usuario?->telefono_1) }}" id="telefono_1" placeholder="Telefono 1">
            {!! $errors->first('telefono_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono_2" class="form-label">{{ __('Telefono 2') }}</label>
            <input type="number" name="telefono_2" min="1000000000" max="9999999999" class="form-control @error('telefono_2') is-invalid @enderror" value="{{ old('telefono_2', $usuario?->telefono_2) }}" id="telefono_2" placeholder="Telefono 2">
            {!! $errors->first('telefono_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" required class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $usuario?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="genero" class="form-label">{{ __('Genero') }}</label>
            <select name="genero" required class="form-control @error('genero') is-invalid @enderror">
                <option value="m" {{ old('genero', $usuario?->genero) == 'm' ? 'selected' : '' }}>Masculino</option>
                <option value="f" {{ old('genero', $usuario?->genero) == 'f' ? 'selected' : '' }}>Femenino</option>
                <option value="otro" {{ old('genero', $usuario?->genero) == 'otro' ? 'selected' : '' }}>Otro</option>
            </select>
            {!! $errors->first('genero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
            <input type="date" name="fecha_nacimiento" required class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento', $usuario?->fecha_nacimiento) }}" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugar_nacimiento" class="form-label">{{ __('Lugar Nacimiento') }}</label>
            <select name="lugar_nacimiento" class="form-control @error('lugar_nacimiento') is-invalid @enderror">
                <option value="Bogota" {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Bogota' ? 'selected' : '' }}>Bogota</option>
                <option value="Medellin" {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Medellin' ? 'selected' : '' }}>Medellin</option>
                <option value="Cali" {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Cali' ? 'selected' : '' }}>Cali</option>
                <option value="Barranquilla" {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Barranquilla' ? 'selected' : '' }}>Barranquilla</option>
                <option value="Cartagena" {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Cartagena' ? 'selected' : '' }}>Cartagena</option>
                <option value="Otro" {{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
            {!! $errors->first('lugar_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="grupo_sanguineo" class="form-label">{{ __('Grupo Sanguineo') }}</label>
            <select name="grupo_sanguineo" required class="form-control @error('grupo_sanguineo') is-invalid @enderror">
                <option value="a+" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == 'a+' ? 'selected' : '' }}>A+</option>
                <option value="a-" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == 'a-' ? 'selected' : '' }}>A-</option>
                <option value="b+" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == 'b+' ? 'selected' : '' }}>B+</option>
                <option value="b-" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == 'b-' ? 'selected' : '' }}>B-</option>
                <option value="ab+" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == 'ab+' ? 'selected' : '' }}>AB+</option>
                <option value="ab-" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == 'ab-' ? 'selected' : '' }}>AB-</option>
                <option value="o+" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == 'o+' ? 'selected' : '' }}>O+</option>
                <option value="o-" {{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) == 'o-' ? 'selected' : '' }}>O-</option>
            </select>
            {!! $errors->first('grupo_sanguineo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="foto_perfil" class="form-label">{{ __('Foto Perfil') }}</label>
            <input type="file" name="foto_perfil" class="form-control @error('foto_perfil') is-invalid @enderror" value="{{ old('foto_perfil', $usuario?->foto_perfil) }}" id="foto_perfil" placeholder="Foto Perfil">
            {!! $errors->first('foto_perfil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <select name="estado" required class="form-control @error('estado') is-invalid @enderror">
                <option value="1" {{ old('estado', $usuario?->estado) == '1' ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('estado', $usuario?->estado) == '0' ? 'selected' : '' }}>Inactivo</option>
            </select>
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="roles" class="form-label">{{ __('Roles') }}</label>
            <select name="roles[]" class="form-control @error('roles') is-invalid @enderror" multiple>
                @foreach($rols as $rol)
                    <option value="{{ $rol->id_rol }}" {{ in_array($rol->id_rol, $rolsSeleccionados) ? 'selected' : '' }}>{{ $rol->rol_usuario }}</option>
                @endforeach
            </select>
            {!! $errors->first('roles', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_usuario_registro" class="form-label">{{ __('Id Usuario Registro') }}</label>
            <input type="number" name="id_usuario_registro" value="{{ auth()->user()?->id }}" class="form-control @error('id_usuario_registro') is-invalid @enderror" id="id_usuario_registro" placeholder="Id Usuario Registro">
            {!! $errors->first('id_usuario_registro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_responsable" class="form-label">{{ __('Responsable') }}</label>
            <select name="id_responsable" class="form-control @error('id_responsable') is-invalid @enderror" id="id_responsable">
                <option value="">Seleccionar Responsable</option>
                @foreach($responsables as $responsable)
                    <option value="{{ $responsable->id_usuario }}" {{ old('id_responsable', $usuario?->id_responsable) == $responsable->id_usuario ? 'selected' : '' }}>
                        {{ $responsable->nombre_completo }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_responsable', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
