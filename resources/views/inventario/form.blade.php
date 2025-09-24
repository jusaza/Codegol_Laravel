
        <div class="Formgrupo">
            <label for="nombre_articulo" class="form-label">{{ __('Nombre Articulo') }}</label>
            <input type="text" name="nombre_articulo" class="form-control @error('nombre_articulo') is-invalid @enderror" value="{{ old('nombre_articulo', $inventario?->nombre_articulo) }}" id="nombre_articulo" placeholder="Nombre Articulo" required>
        </div>
        <div class="Formgrupo">
            <label for="cantidad_total" class="form-label">{{ __('Cantidad Total') }}</label>
            <input type="number" name="cantidad_total" class="form-control @error('cantidad_total') is-invalid @enderror" value="{{ old('cantidad_total', $inventario?->cantidad_total) }}" id="cantidad_total" placeholder="Cantidad Total" required>
        </div>
        <div class="Formgrupo">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $inventario?->descripcion) }}" id="descripcion" placeholder="Descripcion" required>
        </div>
        <div class="Formgrupo">
            <label for="fecha_ingreso" class="form-label">{{ __('Fecha Ingreso') }}</label>
            <input type="date" name="fecha_ingreso" class="form-control @error('fecha_ingreso') is-invalid @enderror" value="{{ old('fecha_ingreso', $inventario?->fecha_ingreso) }}" id="fecha_ingreso" placeholder="Fecha Ingreso" required>
        </div>
        <div class="Formgrupo">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="number" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $inventario?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Guardar Inventario') }}</button>

