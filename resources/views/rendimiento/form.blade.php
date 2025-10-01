<div class="form-group mb-3">
    <label for="fecha_evaluacion" class="form-label">{{ __('Fecha Evaluación') }}</label>
    <input type="date" name="fecha_evaluacion" class="form-control" 
        value="{{ old('fecha_evaluacion', $rendimiento?->fecha_evaluacion) }}" 
        id="fecha_evaluacion" placeholder="Fecha Evaluación" required>
</div>

<div class="form-group mb-3">
    <label for="posicion" class="form-label">{{ __('Posición') }}</label>
    <input type="text" name="posicion" class="form-control" 
        value="{{ old('posicion', $rendimiento?->posicion) }}" 
        id="posicion" placeholder="Posición" required>
</div>

<div class="form-group mb-3">
    <label for="velocidad" class="form-label">{{ __('Velocidad') }}</label>
    <input type="number" name="velocidad" class="form-control" 
        value="{{ old('velocidad', $rendimiento?->velocidad) }}" 
        id="velocidad" placeholder="Velocidad" required>
</div>

<div class="form-group mb-3">
    <label for="potencia_tiro" class="form-label">{{ __('Potencia Tiro') }}</label>
    <input type="number" name="potencia_tiro" class="form-control" 
        value="{{ old('potencia_tiro', $rendimiento?->potencia_tiro) }}" 
        id="potencia_tiro" placeholder="Potencia Tiro" required>
</div>

<div class="form-group mb-3">
    <label for="defensa" class="form-label">{{ __('Defensa') }}</label>
    <input type="number" name="defensa" class="form-control" 
        value="{{ old('defensa', $rendimiento?->defensa) }}" 
        id="defensa" placeholder="Defensa" required>
</div>

<div class="form-group mb-3">
    <label for="regate" class="form-label">{{ __('Regate') }}</label>
    <input type="number" name="regate" class="form-control" 
        value="{{ old('regate', $rendimiento?->regate) }}" 
        id="regate" placeholder="Regate" required>
</div>

<div class="form-group mb-3">
    <label for="pase" class="form-label">{{ __('Pase') }}</label>
    <input type="number" name="pase" class="form-control" 
        value="{{ old('pase', $rendimiento?->pase) }}" 
        id="pase" placeholder="Pase" required>
</div>

<div class="form-group mb-3">
    <label for="tecnica" class="form-label">{{ __('Técnica') }}</label>
    <input type="number" name="tecnica" class="form-control" 
        value="{{ old('tecnica', $rendimiento?->tecnica) }}" 
        id="tecnica" placeholder="Técnica" required>
</div>

<div class="form-group mb-3">
    <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
    <textarea name="observaciones" id="observaciones" 
              class="form-control"
              placeholder="Observaciones adicionales">{{ old('observaciones', $rendimiento?->observaciones) }}</textarea>
</div>

<!-- Campo select para el id_usuario -->
<div class="form-group mb-3">
    <label for="id_usuario" class="form-label">{{ __('Usuario') }}</label>
    <select name="id_usuario" class="form-control" id="id_usuario" required>
        <option value="" disabled {{ old('id_usuario', $rendimiento?->id_usuario) == '' ? 'selected' : '' }}>Seleccione un usuario</option>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id_usuario }}" 
                {{ old('id_usuario', $rendimiento?->id_usuario) == $usuario->id_usuario ? 'selected' : '' }}>
                {{ $usuario->nombre_completo }}
            </option>
        @endforeach
    </select>
</div>

<!-- Campo select para el id_responsable -->
<div class="form-group mb-3">
    <label for="id_responsable" class="form-label">{{ __('Responsable') }}</label>
    <select name="id_responsable" class="form-control" id="id_responsable" required>
        <option value="">Seleccionar Responsable</option>
        @foreach($responsables as $responsable)
            <option value="{{ $responsable->id_usuario }}"
                {{ old('id_responsable', $rendimiento?->id_responsable) == $responsable->id_usuario ? 'selected' : '' }}>
                {{ $responsable->nombre_completo }}
            </option>
        @endforeach
    </select>
</div>



<!-- Campo select para el id_matricula -->
<div class="form-group mb-3">
    <label for="id_matricula" class="form-label">{{ __('Matrícula') }}</label>
    <select name="id_matricula" id="id_matricula" class="form-control" required>
        <option value="" disabled {{ old('id_matricula', $rendimiento?->id_matricula) == '' ? 'selected' : '' }}>Seleccione una matrícula</option>
        @foreach($matriculas as $matricula)
            <option value="{{ $matricula->id_matricula }}" 
                {{ old('id_matricula', $rendimiento?->id_matricula) == $matricula->id_matricula ? 'selected' : '' }}>
                Matrícula #{{ $matricula->id_matricula }}
            </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>

