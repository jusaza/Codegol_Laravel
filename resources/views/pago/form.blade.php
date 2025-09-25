<div class="form-group mb-3">
    <label for="concepto_pago">Concepto de Pago</label>
    <input type="text" name="concepto_pago" id="concepto_pago" 
           class="form-control @error('concepto_pago') is-invalid @enderror"
           value="{{ old('concepto_pago', $pago->concepto_pago ?? '') }}" required>

</div>

<div class="form-group mb-3">
    <label for="fecha_pago">Fecha de Pago</label>
    <input type="date" name="fecha_pago" id="fecha_pago" 
           class="form-control @error('fecha_pago') is-invalid @enderror"
           value="{{ old('fecha_pago', $pago->fecha_pago ?? '') }}" required>
    @error('fecha_pago') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-group mb-3">
    <label for="metodo_pago">Método de Pago</label>
    <input type="text" name="metodo_pago" id="metodo_pago" 
           class="form-control @error('metodo_pago') is-invalid @enderror"
           value="{{ old('metodo_pago', $pago->metodo_pago ?? '') }}" required>
    @error('metodo_pago') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-group mb-3">
    <label for="valor_total">Valor Total</label>
    <input type="number" name="valor_total" id="valor_total" 
           class="form-control @error('valor_total') is-invalid @enderror"
           value="{{ old('valor_total', $pago->valor_total ?? '') }}" required>
    @error('valor_total') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-group mb-3">
    <label for="observaciones">Observaciones</label>
    <textarea name="observaciones" id="observaciones" 
              class="form-control @error('observaciones') is-invalid @enderror">{{ old('observaciones', $pago->observaciones ?? '') }}</textarea>
    @error('observaciones') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-group mb-3">
    <label for="estado">Estado</label>
    <select name="estado" id="estado" 
            class="form-control @error('estado') is-invalid @enderror" required>
        <option value="1" {{ old('estado', $pago->estado ?? '') == 1 ? 'selected' : '' }}>Activo</option>
        <option value="0" {{ old('estado', $pago->estado ?? '') == 0 ? 'selected' : '' }}>Inactivo</option>
    </select>
    @error('estado') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="form-group mb-3">
    <label for="id_usuario">Usuario</label>
    <select name="id_usuario" id="id_usuario" class="form-control" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id_usuario }}" {{ old('id_usuario', $pago->id_usuario ?? '') == $usuario->id_usuario ? 'selected' : '' }}>
                {{ $usuario->nombre }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="id_responsable">Responsable</label>
    <select name="id_responsable" id="id_responsable" class="form-control" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id_usuario }}" {{ old('id_responsable', $pago->id_responsable ?? '') == $usuario->id_usuario ? 'selected' : '' }}>
                {{ $usuario->nombre }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="id_matricula">Matrícula</label>
    <select name="id_matricula" id="id_matricula" class="form-control" required>
        @foreach($matriculas as $matricula)
            <option value="{{ $matricula->id_matricula }}" {{ old('id_matricula', $pago->id_matricula ?? '') == $matricula->id_matricula ? 'selected' : '' }}>
                Matrícula #{{ $matricula->id_matricula }}
            </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary">Guardar Pago</button>


