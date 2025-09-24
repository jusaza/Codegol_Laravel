@extends('layouts.form')
@section('title', 'Rendimiento')
@section('content')

  <div class="login-box" role="main" aria-label="Formulario de rendimiento">
    <h1>Rendimiento</h1>

    <form>
      <div class="Formgrupo">
        <label for="fecha_evaluacion">Fecha Evaluación</label>
        <input type="date" id="fecha_evaluacion" name="fecha_evaluacion" required>
      </div>

      <div class="Formgrupo">
        <label for="posicion">Posición</label>
        <input type="text" id="posicion" name="posicion" placeholder="Ingrese la posición del jugador" required>
      </div>

      <div class="Formgrupo">
        <label for="unidad_medida">Unidad de medida</label>
        <input type="number" id="unidad_medida" name="unidad_medida" placeholder="Ingrese la unidad de medida" required>
      </div>

      <div class="Formgrupo">
        <label for="velocidad">Velocidad</label>
        <input type="number" id="velocidad" name="velocidad" placeholder="Ingrese la velocidad" required>
      </div>

      <div class="Formgrupo">
        <label for="potencia_tiro">Potencia tiro</label>
        <input type="number" id="potencia_tiro" name="potencia_tiro" placeholder="Ingrese la potencia del tiro" required>
      </div>

      <div class="Formgrupo">
        <label for="defensa">Defensa</label>
        <input type="number" id="defensa" name="defensa" placeholder="Ingrese la defensa (0-100)" required>
      </div>

      <div class="Formgrupo">
        <label for="regate">Regate</label>
        <input type="number" id="regate" name="regate" placeholder="Ingrese el regate (0-100)">
      </div>

      <div class="Formgrupo">
        <label for="pase">Pase</label>
        <input type="number" id="pase" name="pase" placeholder="Ingrese la fuerza del pase" required>
      </div>

      <div class="Formgrupo">
        <label for="tecnica">Técnica</label>
        <input type="number" id="tecnica" name="tecnica" placeholder="Ingrese la técnica utilizada" required>
      </div>

      <div>
        <label for="promedio">Promedio</label>
        <input type="text" name="promedio" id="promedio" placeholder="Ingrese el promedio" required>
      </div>

      <div>
        <label for="Observaciones">Observaciones</label>
        <input type="text" name="Observaciones" id="Observaciones" placeholder="Ingrese las observaciones que tenga" required>
      </div>
    
      <div class="Formgrupo">
        <label for="estado">Estado</label>
        <select name="estado" id="estado">
          <option value="">Seleccione estado</option>
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>
      <button type="submit">Guardar rendimiento</button>
    </form>
  </div>

</body>
</html>
