<div class="Formgrupo">
    <label for="id_matricula" class="form-label">{{ __('') }}</label>
    <input type="hidden" name="id_matricula" class="form-control @error('id_matricula') is-invalid @enderror" value="{{ old('id_matricula', $matricula?->id_matricula) }}" id="id_matricula" placeholder="Ingresa el ID de la matrícula">
</div>

<div class="Formgrupo">
    <label for="fecha_matricula" class="form-label">{{ __('') }}</label>
    <input type="hidden" name="fecha_matricula" class="form-control @error('fecha_matricula') is-invalid @enderror" value="{{ old('fecha_matricula', $matricula?->fecha_matricula) }}" id="fecha_matricula" placeholder="Ingresa la fecha de matrícula" required>
</div>

<div class="Formgrupo">
    <label for="fecha_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
    <input type="date" name="fecha_inicio" class="form-control @error('fecha_inicio') is-invalid @enderror" value="{{ old('fecha_inicio', $matricula?->fecha_inicio) }}" id="fecha_inicio" placeholder="Ingresa la fecha de inicio" required>
</div>

<div class="Formgrupo">
    <label for="fecha_fin" class="form-label">{{ __('Fecha Fin') }}</label>
    <input type="date" name="fecha_fin" class="form-control @error('fecha_fin') is-invalid @enderror" value="{{ old('fecha_fin', $matricula?->fecha_fin) }}" id="fecha_fin" placeholder="Ingresa la fecha de fin" required>
</div>

<div class="Formgrupo">
    <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
    <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $matricula?->observaciones) }}" id="observaciones" placeholder="Ingresa observaciones" required>
</div>

<div class="Formgrupo">
    <label for="categoria" class="form-label">{{ __('Categoria') }}</label>
    <select name="categoria" id="categoria" class="form-control @error('categoria') is-invalid @enderror" required>
        <option value="" disabled selected>Selecciona una categoría</option>
        <option value="5" {{ old('categoria', $matricula?->categoria) == 5 ? 'selected' : '' }}>Sub-5</option>
        <option value="7" {{ old('categoria', $matricula?->categoria) == 7 ? 'selected' : '' }}>Sub-7</option>
        <option value="10" {{ old('categoria', $matricula?->categoria) == 10 ? 'selected' : '' }}>Sub-10</option>
        <option value="12" {{ old('categoria', $matricula?->categoria) == 12 ? 'selected' : '' }}>Sub-12</option>
        <option value="15" {{ old('categoria', $matricula?->categoria) == 15 ? 'selected' : '' }}>Sub-15</option>
        <option value="16" {{ old('categoria', $matricula?->categoria) == 16 ? 'selected' : '' }}>Sub-16</option>
        <option value="17" {{ old('categoria', $matricula?->categoria) == 17 ? 'selected' : '' }}>Sub-17</option>
        <option value="20" {{ old('categoria', $matricula?->categoria) == 20 ? 'selected' : '' }}>Sub-20</option>
        <option value="99" {{ old('categoria', $matricula?->categoria) == 99 ? 'selected' : '' }}>Mayores</option>
    </select>
</div>


<div class="Formgrupo">
    <label for="nivel" class="form-label">{{ __('Nivel') }}</label>
    <select name="nivel" id="nivel" 
            class="form-control @error('nivel') is-invalid @enderror" required>
        <option value="">Seleccione el nivel</option>
        <option value="bajo" {{ old('nivel', $matricula?->nivel) == 'Bajo' ? 'selected' : '' }}>Bajo</option>
        <option value="medio" {{ old('nivel', $matricula?->nivel) == 'Medio' ? 'selected' : '' }}>Medio</option>
        <option value="alto" {{ old('nivel', $matricula?->nivel) == 'Alto' ? 'selected' : '' }}>Alto</option>
    </select>
    @error('nivel') 
        <div class="invalid-feedback">{{ $message }}</div> 
    @enderror
</div>


<div class="Formgrupo">
    <label for="id_jugador" class="form-label">{{ __('Id Jugador') }}</label>
    <input type="text" name="id_jugador" class="form-control @error('id_jugador') is-invalid @enderror" value="{{ old('id_jugador', $matricula?->id_jugador) }}" id="id_jugador" placeholder="Ingresa el ID del jugador" required>
</div>

<div class="Formgrupo">
    <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
    <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $matricula?->id_usuario) }}" id="id_usuario" placeholder="Ingresa el ID del usuario" required>
</div>

<button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
