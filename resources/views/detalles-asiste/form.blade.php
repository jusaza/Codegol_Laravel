<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_asiste" class="form-label">{{ __('Id Asiste') }}</label>
            <input type="text" name="id_asiste" class="form-control @error('id_asiste') is-invalid @enderror" value="{{ old('id_asiste', $detallesAsiste?->id_asiste) }}" id="id_asiste" placeholder="Id Asiste">
            {!! $errors->first('id_asiste', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_asistencia" class="form-label">{{ __('Tipo Asistencia') }}</label>
            <input type="text" name="tipo_asistencia" class="form-control @error('tipo_asistencia') is-invalid @enderror" value="{{ old('tipo_asistencia', $detallesAsiste?->tipo_asistencia) }}" id="tipo_asistencia" placeholder="Tipo Asistencia">
            {!! $errors->first('tipo_asistencia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="justificacion" class="form-label">{{ __('Justificacion') }}</label>
            <input type="text" name="justificacion" class="form-control @error('justificacion') is-invalid @enderror" value="{{ old('justificacion', $detallesAsiste?->justificacion) }}" id="justificacion" placeholder="Justificacion">
            {!! $errors->first('justificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $detallesAsiste?->observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_matricula" class="form-label">{{ __('Id Matricula') }}</label>
            <input type="text" name="id_matricula" class="form-control @error('id_matricula') is-invalid @enderror" value="{{ old('id_matricula', $detallesAsiste?->id_matricula) }}" id="id_matricula" placeholder="Id Matricula">
            {!! $errors->first('id_matricula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_entrenamiento" class="form-label">{{ __('Id Entrenamiento') }}</label>
            <input type="text" name="id_entrenamiento" class="form-control @error('id_entrenamiento') is-invalid @enderror" value="{{ old('id_entrenamiento', $detallesAsiste?->id_entrenamiento) }}" id="id_entrenamiento" placeholder="Id Entrenamiento">
            {!! $errors->first('id_entrenamiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>