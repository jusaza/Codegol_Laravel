<div class="Formgrupo">
    <label for="fecha_evaluacion" class="form-label">{{ __('Fecha Evaluacion') }}</label>
    <input type="date" name="fecha_evaluacion" class="form-control" 
        value="{{ old('fecha_evaluacion', $rendimiento?->fecha_evaluacion) }}" 
        id="fecha_evaluacion" placeholder="Fecha Evaluacion" required>
</div>

<div class="Formgrupo">
    <label for="posicion" class="form-label">{{ __('Posicion') }}</label>
    <input type="text" name="posicion" class="form-control" 
        value="{{ old('posicion', $rendimiento?->posicion) }}" 
        id="posicion" placeholder="Posicion" required>
</div>

<div class="Formgrupo">
    <label for="velocidad" class="form-label">{{ __('Velocidad') }}</label>
    <input type="number" name="velocidad" class="form-control" 
        value="{{ old('velocidad', $rendimiento?->velocidad) }}" 
        id="velocidad" placeholder="Velocidad" required>
</div>

<div class="Formgrupo">
    <label for="potencia_tiro" class="form-label">{{ __('Potencia Tiro') }}</label>
    <input type="number" name="potencia_tiro" class="form-control" 
        value="{{ old('potencia_tiro', $rendimiento?->potencia_tiro) }}" 
        id="potencia_tiro" placeholder="Potencia Tiro" required>
</div>

<div class="Formgrupo">
    <label for="defensa" class="form-label">{{ __('Defensa') }}</label>
    <input type="number" name="defensa" class="form-control" 
        value="{{ old('defensa', $rendimiento?->defensa) }}" 
        id="defensa" placeholder="Defensa" required>
</div>

<div class="Formgrupo">
    <label for="regate" class="form-label">{{ __('Regate') }}</label>
    <input type="number" name="regate" class="form-control" 
        value="{{ old('regate', $rendimiento?->regate) }}" 
        id="regate" placeholder="Regate" required>
</div>

<div class="Formgrupo">
    <label for="pase" class="form-label">{{ __('Pase') }}</label>
    <input type="number" name="pase" class="form-control" 
        value="{{ old('pase', $rendimiento?->pase) }}" 
        id="pase" placeholder="Pase" required>
</div>

<div class="Formgrupo">
    <label for="tecnica" class="form-label">{{ __('Tecnica') }}</label>
    <input type="number" name="tecnica" class="form-control" 
        value="{{ old('tecnica', $rendimiento?->tecnica) }}" 
        id="tecnica" placeholder="Tecnica" required>
</div>

<div class="Formgrupo">
    <label for="promedio" class="form-label">{{ __('Promedio') }}</label>
    <input type="number" name="promedio" class="form-control" 
        value="{{ old('promedio', $rendimiento?->promedio) }}" 
        id="promedio" placeholder="Este lo calcula el sistema" disabled>
</div>

<div class="Formgrupo">
    <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
    <input type="text" name="observaciones" class="form-control" 
        value="{{ old('observaciones', $rendimiento?->observaciones) }}" 
        id="observaciones" placeholder="Observaciones" required>
</div>
<div class="form-group mb-3">
    <label for="estado">Estado</label>
    <select name="estado" id="estado" 
            class="form-control @error('estado') is-invalid @enderror" required>
        <option value="" disabled selected>Seleccione un estado</option>
        <option value="1" {{ old('estado', $pago->estado ?? '') == 1 ? 'selected' : '' }}>Activo</option>
        <option value="0" {{ old('estado', $pago->estado ?? '') == 0 ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>


<div class="Formgrupo">
    <label for="id_matricula" class="form-label">{{ __('Id Matricula') }}</label>
    <input type="text" name="id_matricula" class="form-control" 
        value="{{ old('id_matricula', $rendimiento?->id_matricula) }}" 
        id="id_matricula" placeholder="Id Matricula" required>
</div>

<div class="Formgrupo">
    <label for="id_entrenamiento" class="form-label">{{ __('Id Entrenamiento') }}</label>
    <input type="text" name="id_entrenamiento" class="form-control" 
        value="{{ old('id_entrenamiento', $rendimiento?->id_entrenamiento) }}" 
        id="id_entrenamiento" placeholder="Id Entrenamiento" required>
</div>

<div class="Formgrupo">
    <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
    <input type="text" name="id_usuario" class="form-control" 
        value="{{ old('id_usuario', $rendimiento?->id_usuario) }}" 
        id="id_usuario" placeholder="Id Usuario" required>
</div>

<button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
