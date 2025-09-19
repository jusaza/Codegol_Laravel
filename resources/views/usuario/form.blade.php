<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $usuario?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="correo" class="form-label">{{ __('Correo') }}</label>
            <input type="text" name="correo" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo', $usuario?->correo) }}" id="correo" placeholder="Correo">
            {!! $errors->first('correo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contrasena" class="form-label">{{ __('Contrasena') }}</label>
            <input type="text" name="contrasena" class="form-control @error('contrasena') is-invalid @enderror" value="{{ old('contrasena', $usuario?->contrasena) }}" id="contrasena" placeholder="Contrasena">
            {!! $errors->first('contrasena', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_completo" class="form-label">{{ __('Nombre Completo') }}</label>
            <input type="text" name="nombre_completo" class="form-control @error('nombre_completo') is-invalid @enderror" value="{{ old('nombre_completo', $usuario?->nombre_completo) }}" id="nombre_completo" placeholder="Nombre Completo">
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_identificacion" class="form-label">{{ __('Num Identificacion') }}</label>
            <input type="text" name="num_identificacion" class="form-control @error('num_identificacion') is-invalid @enderror" value="{{ old('num_identificacion', $usuario?->num_identificacion) }}" id="num_identificacion" placeholder="Num Identificacion">
            {!! $errors->first('num_identificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_documento" class="form-label">{{ __('Tipo Documento') }}</label>
            <input type="text" name="tipo_documento" class="form-control @error('tipo_documento') is-invalid @enderror" value="{{ old('tipo_documento', $usuario?->tipo_documento) }}" id="tipo_documento" placeholder="Tipo Documento">
            {!! $errors->first('tipo_documento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono_1" class="form-label">{{ __('Telefono 1') }}</label>
            <input type="text" name="telefono_1" class="form-control @error('telefono_1') is-invalid @enderror" value="{{ old('telefono_1', $usuario?->telefono_1) }}" id="telefono_1" placeholder="Telefono 1">
            {!! $errors->first('telefono_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono_2" class="form-label">{{ __('Telefono 2') }}</label>
            <input type="text" name="telefono_2" class="form-control @error('telefono_2') is-invalid @enderror" value="{{ old('telefono_2', $usuario?->telefono_2) }}" id="telefono_2" placeholder="Telefono 2">
            {!! $errors->first('telefono_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $usuario?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="genero" class="form-label">{{ __('Genero') }}</label>
            <input type="text" name="genero" class="form-control @error('genero') is-invalid @enderror" value="{{ old('genero', $usuario?->genero) }}" id="genero" placeholder="Genero">
            {!! $errors->first('genero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
            <input type="text" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento', $usuario?->fecha_nacimiento) }}" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugar_nacimiento" class="form-label">{{ __('Lugar Nacimiento') }}</label>
            <input type="text" name="lugar_nacimiento" class="form-control @error('lugar_nacimiento') is-invalid @enderror" value="{{ old('lugar_nacimiento', $usuario?->lugar_nacimiento) }}" id="lugar_nacimiento" placeholder="Lugar Nacimiento">
            {!! $errors->first('lugar_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="grupo_sanguineo" class="form-label">{{ __('Grupo Sanguineo') }}</label>
            <input type="text" name="grupo_sanguineo" class="form-control @error('grupo_sanguineo') is-invalid @enderror" value="{{ old('grupo_sanguineo', $usuario?->grupo_sanguineo) }}" id="grupo_sanguineo" placeholder="Grupo Sanguineo">
            {!! $errors->first('grupo_sanguineo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="foto_perfil" class="form-label">{{ __('Foto Perfil') }}</label>
            <input type="text" name="foto_perfil" class="form-control @error('foto_perfil') is-invalid @enderror" value="{{ old('foto_perfil', $usuario?->foto_perfil) }}" id="foto_perfil" placeholder="Foto Perfil">
            {!! $errors->first('foto_perfil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $usuario?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_usuario_registro" class="form-label">{{ __('Id Usuario Registro') }}</label>
            <input type="text" name="id_usuario_registro" class="form-control @error('id_usuario_registro') is-invalid @enderror" value="{{ old('id_usuario_registro', $usuario?->id_usuario_registro) }}" id="id_usuario_registro" placeholder="Id Usuario Registro">
            {!! $errors->first('id_usuario_registro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_responsable" class="form-label">{{ __('Id Responsable') }}</label>
            <input type="text" name="id_responsable" class="form-control @error('id_responsable') is-invalid @enderror" value="{{ old('id_responsable', $usuario?->id_responsable) }}" id="id_responsable" placeholder="Id Responsable">
            {!! $errors->first('id_responsable', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>