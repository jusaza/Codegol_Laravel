
        <div class="Formgrupo">
            <label for="nombre_articulo" class="form-label">{{ __('Nombre Articulo') }}</label>
            <input type="text" name="nombre_articulo" class="form-control @error('nombre_articulo') is-invalid @enderror" value="{{ old('nombre_articulo', $inventario?->nombre_articulo) }}" id="nombre_articulo" placeholder="Ingresa el nombre del artículo" required>
        </div>
        <div class="Formgrupo">
            <label for="cantidad_total" class="form-label">{{ __('Cantidad Total') }}</label>
            <input type="number" name="cantidad_total" class="form-control @error('cantidad_total') is-invalid @enderror" value="{{ old('cantidad_total', $inventario?->cantidad_total) }}" id="cantidad_total" placeholder="Ingresa la cantidad total" min = "0" max = "15000" required>
        </div>
        <div class="Formgrupo">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $inventario?->descripcion) }}" id="descripcion" placeholder="Ingresa una breve descripción" required>
        </div>

<div class="Formgrupo">
    <label for="id_usuario" class="form-label">{{ __('Usuario') }}</label>
    <select name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" id="id_usuario" required>
        <option value="" disabled {{ old('id_usuario', $inventario?->id_usuario) == '' ? 'selected' : '' }}>Seleccione un usuario</option>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id_usuario }}" {{ old('id_usuario', $inventario?->id_usuario) == $usuario->id_usuario ? 'selected' : '' }}>
                {{ $usuario->nombre_completo }} - {{ $usuario->num_identificacion }}
            </option>
        @endforeach
    </select>
</div>

        <button type="submit" class="btn btn-primary">{{ __('Guardar Inventario') }}</button>

