        <div>
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $entrenamiento?->descripcion) }}" id="descripcion" placeholder="Descripcion" required>
        </div>
        <div class="Formgrupo">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $entrenamiento?->fecha) }}" id="fecha" placeholder="Fecha" required>

        </div>
        <div class="Formgrupo">
            <label for="hora_inicio" class="form-label">{{ __('Hora Inicio') }}</label>
            <input type="time" name="hora_inicio" class="form-control @error('hora_inicio') is-invalid @enderror" value="{{ old('hora_inicio', $entrenamiento?->hora_inicio) }}" id="hora_inicio" placeholder="Hora Inicio" required>
        </div>
        <div class="Formgrupo">
            <label for="hora_fin" class="form-label">{{ __('Hora Fin') }}</label>
            <input type="time" name="hora_fin" class="form-control @error('hora_fin') is-invalid @enderror" value="{{ old('hora_fin', $entrenamiento?->hora_fin) }}" id="hora_fin" placeholder="Hora Fin" required>
        </div>
        <div class="Formgrupo">
            <label for="lugar" class="form-label">{{ __('Lugar') }}</label>
            <input type="text" name="lugar" class="form-control @error('lugar') is-invalid @enderror" value="{{ old('lugar', $entrenamiento?->lugar) }}" id="lugar" placeholder="Lugar" required>
        </div>
        <div class="Formgrupo">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $entrenamiento?->observaciones) }}" id="observaciones" placeholder="Observaciones" required>
        </div>
        <div class="Formgrupo">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="number" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $entrenamiento?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Guardar entrenamiento') }}</button>
</div>