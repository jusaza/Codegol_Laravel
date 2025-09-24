<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_rendimiento" class="form-label">{{ __('Id Rendimiento') }}</label>
            <input type="text" name="id_rendimiento" class="form-control @error('id_rendimiento') is-invalid @enderror" value="{{ old('id_rendimiento', $rendimiento?->id_rendimiento) }}" id="id_rendimiento" placeholder="Id Rendimiento" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_evaluacion" class="form-label">{{ __('Fecha Evaluacion') }}</label>
            <input type="text" name="fecha_evaluacion" class="form-control @error('fecha_evaluacion') is-invalid @enderror" value="{{ old('fecha_evaluacion', $rendimiento?->fecha_evaluacion) }}" id="fecha_evaluacion" placeholder="Fecha Evaluacion" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="posicion" class="form-label">{{ __('Posicion') }}</label>
            <input type="text" name="posicion" class="form-control @error('posicion') is-invalid @enderror" value="{{ old('posicion', $rendimiento?->posicion) }}" id="posicion" placeholder="Posicion" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="velocidad" class="form-label">{{ __('Velocidad') }}</label>
            <input type="text" name="velocidad" class="form-control @error('velocidad') is-invalid @enderror" value="{{ old('velocidad', $rendimiento?->velocidad) }}" id="velocidad" placeholder="Velocidad" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="potencia_tiro" class="form-label">{{ __('Potencia Tiro') }}</label>
            <input type="text" name="potencia_tiro" class="form-control @error('potencia_tiro') is-invalid @enderror" value="{{ old('potencia_tiro', $rendimiento?->potencia_tiro) }}" id="potencia_tiro" placeholder="Potencia Tiro" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="defensa" class="form-label">{{ __('Defensa') }}</label>
            <input type="text" name="defensa" class="form-control @error('defensa') is-invalid @enderror" value="{{ old('defensa', $rendimiento?->defensa) }}" id="defensa" placeholder="Defensa" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="regate" class="form-label">{{ __('Regate') }}</label>
            <input type="text" name="regate" class="form-control @error('regate') is-invalid @enderror" value="{{ old('regate', $rendimiento?->regate) }}" id="regate" placeholder="Regate" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="pase" class="form-label">{{ __('Pase') }}</label>
            <input type="text" name="pase" class="form-control @error('pase') is-invalid @enderror" value="{{ old('pase', $rendimiento?->pase) }}" id="pase" placeholder="Pase" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="tecnica" class="form-label">{{ __('Tecnica') }}</label>
            <input type="text" name="tecnica" class="form-control @error('tecnica') is-invalid @enderror" value="{{ old('tecnica', $rendimiento?->tecnica) }}" id="tecnica" placeholder="Tecnica" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="promedio" class="form-label">{{ __('Promedio') }}</label>
            <input type="text" name="promedio" class="form-control @error('promedio') is-invalid @enderror" value="{{ old('promedio', $rendimiento?->promedio) }}" id="promedio" placeholder="Promedio" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $rendimiento?->observaciones) }}" id="observaciones" placeholder="Observaciones" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $rendimiento?->estado) }}" id="estado" placeholder="Estado" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="id_matricula" class="form-label">{{ __('Id Matricula') }}</label>
            <input type="text" name="id_matricula" class="form-control @error('id_matricula') is-invalid @enderror" value="{{ old('id_matricula', $rendimiento?->id_matricula) }}" id="id_matricula" placeholder="Id Matricula" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="id_entrenamiento" class="form-label">{{ __('Id Entrenamiento') }}</label>
            <input type="text" name="id_entrenamiento" class="form-control @error('id_entrenamiento') is-invalid @enderror" value="{{ old('id_entrenamiento', $rendimiento?->id_entrenamiento) }}" id="id_entrenamiento" placeholder="Id Entrenamiento" required>
            </div>
        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $rendimiento?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario"required>
             </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>