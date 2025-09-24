

        <div class="Formgrupo">
            <label for="id_matricula" class="form-label">{{ __('') }}</label>
            <input type="hidden" name="id_matricula" class="form-control @error('id_matricula') is-invalid @enderror" value="{{ old('id_matricula', $matricula?->id_matricula) }}" id="id_matricula" placeholder="Id Matricula">
            </div>
        <div class="Formgrupo">
            <label for="fecha_matricula" class="form-label">{{ __('') }}</label>
            <input type="hidden" name="fecha_matricula" class="form-control @error('fecha_matricula') is-invalid @enderror" value="{{ old('fecha_matricula', $matricula?->fecha_matricula) }}" id="fecha_matricula" placeholder="Fecha Matricula" required>
            </div>
        <div class="Formgrupo>
            <label for="fecha_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
            <input type="date" name="fecha_inicio" class="form-control @error('fecha_inicio') is-invalid @enderror" value="{{ old('fecha_inicio', $matricula?->fecha_inicio) }}" id="fecha_inicio" placeholder="Fecha Inicio" required>
             </div>
        <div class="Formgrupo">
            <label for="fecha_fin" class="form-label">{{ __('Fecha Fin') }}</label>
            <input type="date" name="fecha_fin" class="form-control @error('fecha_fin') is-invalid @enderror" value="{{ old('fecha_fin', $matricula?->fecha_fin) }}" id="fecha_fin" placeholder="Fecha Fin" required>
           </div>
        <div class="Formgrupo">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $matricula?->observaciones) }}" id="observaciones" placeholder="Observaciones" required>
            </div>
        <div class="Formgrupo">
            <label for="categoria" class="form-label">{{ __('Categoria') }}</label>
            <input type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" value="{{ old('categoria', $matricula?->categoria) }}" id="categoria" placeholder="Categoria" required>
            </div>
        <div class="Formgrupo">
            <label for="nivel" class="form-label">{{ __('Nivel') }}</label>
            <input type="text" name="nivel" class="form-control @error('nivel') is-invalid @enderror" value="{{ old('nivel', $matricula?->nivel) }}" id="nivel" placeholder="Nivel" required>
             </div>
        <div class="Formgrupo">
            <label for="id_jugador" class="form-label">{{ __('Id Jugador') }}</label>
            <input type="text" name="id_jugador" class="form-control @error('id_jugador') is-invalid @enderror" value="{{ old('id_jugador', $matricula?->id_jugador) }}" id="id_jugador" placeholder="Id Jugador" required>
             </div>
        <div class="Formgrupo">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $matricula?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario" required>
            </div>

        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>

