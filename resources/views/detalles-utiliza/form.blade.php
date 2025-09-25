<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_utiliza" class="form-label">{{ __('Id Utiliza') }}</label>
            <input type="text" name="id_utiliza" class="form-control @error('id_utiliza') is-invalid @enderror" value="{{ old('id_utiliza', $detallesUtiliza?->id_utiliza) }}" id="id_utiliza" placeholder="Id Utiliza">
            {!! $errors->first('id_utiliza', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_usada" class="form-label">{{ __('Cantidad Usada') }}</label>
            <input type="text" name="cantidad_usada" class="form-control @error('cantidad_usada') is-invalid @enderror" value="{{ old('cantidad_usada', $detallesUtiliza?->cantidad_usada) }}" id="cantidad_usada" placeholder="Cantidad Usada">
            {!! $errors->first('cantidad_usada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $detallesUtiliza?->observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="devuelto" class="form-label">{{ __('Devuelto') }}</label>
            <input type="text" name="devuelto" class="form-control @error('devuelto') is-invalid @enderror" value="{{ old('devuelto', $detallesUtiliza?->devuelto) }}" id="devuelto" placeholder="Devuelto">
            {!! $errors->first('devuelto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_entrenamiento" class="form-label">{{ __('Id Entrenamiento') }}</label>
            <input type="text" name="id_entrenamiento" class="form-control @error('id_entrenamiento') is-invalid @enderror" value="{{ old('id_entrenamiento', $detallesUtiliza?->id_entrenamiento) }}" id="id_entrenamiento" placeholder="Id Entrenamiento">
            {!! $errors->first('id_entrenamiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_inventario" class="form-label">{{ __('Id Inventario') }}</label>
            <input type="text" name="id_inventario" class="form-control @error('id_inventario') is-invalid @enderror" value="{{ old('id_inventario', $detallesUtiliza?->id_inventario) }}" id="id_inventario" placeholder="Id Inventario">
            {!! $errors->first('id_inventario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>