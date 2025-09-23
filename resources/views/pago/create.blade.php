@extends('layouts.form')
@section('title', 'Pago')
@section('content')

  <div class="login-box" role="main" aria-label="Formulario de pago">
    <h1>Pago</h1>

    <form>
      <div class="Formgrupo">
        <label for="id_pago">ID Pago</label>
        <input type="number" id="id_pago" name="id_pago" placeholder="Ingrese el ID de pago" required>
      </div>

      <div class="Formgrupo">
        <label for="concepto_pago">Concepto de Pago</label>
        <input type="text" id="concepto_pago" name="concepto_pago" placeholder="Ej: Inscripción, mensualidad, etc." required>
      </div>

      <div class="Formgrupo">
        <label for="fecha_pago">Fecha de Pago</label>
        <input type="date" id="fecha_pago" name="fecha_pago" required>
      </div>

      <div class="Formgrupo">
        <label for="metodo_pago">Método de Pago</label>
        <select id="metodo_pago" name="metodo_pago" required>
          <option value="">Seleccione método</option>
          <option value="Efectivo">Efectivo</option>
          <option value="Transferencia">Transferencia</option>
          <option value="Tarjeta">Tarjeta</option>
          <option value="Otro">Otro</option>
        </select>
      </div>

      <div class="Formgrupo">
        <label for="valor_total">Valor Total</label>
        <input type="number" step="0.01" id="valor_total" name="valor_total" placeholder="Ingrese el valor total" required>
      </div>

      <div class="Formgrupo">
        <label for="observaciones">Observaciones</label>
        <input type="text" id="observaciones" name="observaciones" placeholder="Observaciones adicionales">
      </div>

      <div class="Formgrupo">
        <label for="pago_por">Pago por (FK)</label>
        <input type="number" id="pago_por" name="pago_por" placeholder="ID del responsable del pago" required>
      </div>

      <div class="Formgrupo">
        <label for="id_matricula">ID Matrícula (FK)</label>
        <input type="number" id="id_matricula" name="id_matricula" placeholder="Ingrese el ID de matrícula" required>
      </div>

      <button type="submit">Guardar pago</button>
    </form>
  </div>

@endsection
