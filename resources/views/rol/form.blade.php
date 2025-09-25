<div class="Formgrupo">
            <label for="id_rol" class="form-label">{{ __('Id Rol') }}</label>
            <input type="text" name="id_rol" class="form-control @error('id_rol') is-invalid @enderror" value="{{ old('id_rol', $rol?->id_rol) }}" id="id_rol" placeholder="Id Rol">
            {!! $errors->first('id_rol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="Formgrupo">
            <label for="rol_usuario" class="form-label">{{ __('Rol Usuario') }}</label>
            <input type="text" name="rol_usuario" class="form-control @error('rol_usuario') is-invalid @enderror" value="{{ old('rol_usuario', $rol?->rol_usuario) }}" id="rol_usuario" placeholder="Rol Usuario">
            {!! $errors->first('rol_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>