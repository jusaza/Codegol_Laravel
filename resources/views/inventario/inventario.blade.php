@extends('layouts.form')
@section('title', 'Inventario')
@section('content')

  <div class="login-box" role="main" aria-label="Formulario de registro de inventario">
    <h1>Inventario</h1>

    <form>
      <div class="Formgrupo">
        <label for="id_inventario">ID Inventario</label>
        <input type="number" id="id_inventario" name="id_inventario" placeholder="Ingrese el ID" required>
      </div>

      <div class="Formgrupo">
        <label for="nombre_articulo">Nombre del artículo</label>
        <input type="text" id="nombre_articulo" name="nombre_articulo" placeholder="Ingrese el nombre del artículo" required>
      </div>

      <div class="Formgrupo">
        <label for="cantidad_total">Cantidad total</label>
        <input type="number" id="cantidad_total" name="cantidad_total" placeholder="Ingrese la cantidad total" required>
      </div>

      <div class="Formgrupo">
        <label for="descripcion">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese una descripción" required>
      </div>

      <div class="Formgrupo">
        <label for="fecha_ingreso">Fecha de ingreso</label>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" required>
      </div>

      <div class="Formgrupo">
        <label for="estado">Estado</label>
        <select id="estado" name="estado" required>
          <option value="">Seleccione estado</option>
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>

      <button type="submit">Guardar artículo</button>
    </form>
  </div>
@endsection
