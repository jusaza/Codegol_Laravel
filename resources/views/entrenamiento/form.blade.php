<div>
        <div>
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $entrenamiento?->descripcion) }}" id="descripcion" placeholder="Descripción del entrenamiento" required>
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
            <input type="text" name="lugar" class="form-control @error('lugar') is-invalid @enderror" value="{{ old('lugar', $entrenamiento?->lugar) }}" id="lugar" placeholder="Lugar del entrenamiento" required>
        </div>
        <div class="Formgrupo">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $entrenamiento?->observaciones) }}" id="observaciones" placeholder="Observaciones" required>
        </div>
        <div class="Formgrupo">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="number" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $entrenamiento?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario" required>
        </div>

        
{{-- ...campos principales... --}}

    <hr>
    <h4>Detalles de artículos utilizados</h4>
    <div>
        <table class="table" id="detalles-utiliza-table">
            <thead>
                <tr>
                    <th>Artículo</th>
                    <th>Cantidad usada</th>
                    <th>Observaciones</th>
                    <th>Devuelto</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                {{-- Si es edición, cargar los detalles existentes --}}
                @if(isset($entrenamiento) && $entrenamiento->id_entrenamiento && $entrenamiento->detallesUtilizas)
                    @foreach($entrenamiento->detallesUtilizas as $i => $detalle)
                        <tr>
                            <td>
                                <select name="detalles[{{$i}}][id_inventario]" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    @foreach($inventarios as $inv)
                                        <option value="{{ $inv->id_inventario }}" {{ $detalle->id_inventario == $inv->id_inventario ? 'selected' : '' }}>
                                            {{ $inv->nombre_articulo }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" name="detalles[{{$i}}][cantidad_usada]" class="form-control" value="{{ $detalle->cantidad_usada }}" min="1" required>
                            </td>
                            <td>
                                <input type="text" name="detalles[{{$i}}][observaciones]" class="form-control" value="{{ $detalle->observaciones }}">
                            </td>
                            <td>
                                <input type="checkbox" name="detalles[{{$i}}][devuelto]" value="1" {{ $detalle->devuelto ? 'checked' : '' }}>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm remove-detalle">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <button type="button" class="btn btn-secondary" id="add-detalle">Agregar artículo</button>
    </div>
    <hr>
<h4>Asistencia de jugadores</h4>
<div>
    <table class="table" id="detalles-asiste-table">
        <thead>
            <tr>
                <th>Jugador</th>
                <th>Tipo asistencia</th>
                <th>Justificación</th>
                <th>Observaciones</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($entrenamiento) && $entrenamiento->id_entrenamiento && $entrenamiento->detallesAsistes)
                @foreach($entrenamiento->detallesAsistes as $i => $asiste)
                    <tr>
                        <td>
                            <select name="asistencias[{{$i}}][id_matricula]" class="form-control" required>
                                <option value="">Seleccione</option>
                                <?php
                                // Asegúrate de que $matriculas esté definido y disponible en la vista
                                var_dump($matriculas);
                                ?>
                                @foreach($matriculas as $mat)
                                    <option value="{{ $mat->id_matricula }}">
    {{ $mat->jugador->nombre_completo }} - {{ $mat->jugador->num_identificacion }}
</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="asistencias[{{$i}}][tipo_asistencia]" class="form-control" required>
                                <option value="asiste" {{ $asiste->tipo_asistencia == 'asiste' ? 'selected' : '' }}>Asiste</option>
                                <option value="inasiste" {{ $asiste->tipo_asistencia == 'inasiste' ? 'selected' : '' }}>Inasiste</option>
                                <option value="llegada tarde" {{ $asiste->tipo_asistencia == 'llegada tarde' ? 'selected' : '' }}>Llegada tarde</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="asistencias[{{$i}}][justificacion]" class="form-control" value="{{ $asiste->justificacion }}">
                        </td>
                        <td>
                            <input type="text" name="asistencias[{{$i}}][observaciones]" class="form-control" value="{{ $asiste->observaciones }}">
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm remove-asiste">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <button type="button" class="btn btn-secondary" id="add-asiste">Agregar asistencia</button>
</div>
    {{-- ...botón submit... --}}
<script id="inventarios-data" type="application/json">
    @json($inventarios)
</script>
<script id="matriculas-data" type="application/json">
    @json($matriculas)
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    let asisteTable = document.getElementById('detalles-asiste-table').getElementsByTagName('tbody')[0];
    let addAsisteBtn = document.getElementById('add-asiste');
    let matriculas = JSON.parse(document.getElementById('matriculas-data').textContent);
    let asisteIndex = asisteTable.rows.length;

    addAsisteBtn.addEventListener('click', function () {
        let row = asisteTable.insertRow();
        row.innerHTML = `
            <td>
                <select name="asistencias[${asisteIndex}][id_matricula]" class="form-control" required>
                    <option value="">Seleccione</option>
                    ${matriculas.map(mat => `<option value="${mat.id_matricula}">${mat.jugador.nombre_completo} - ${mat.jugador.numero_documento}</option>`).join('')}
                </select>
            </td>
            <td>
                <select name="asistencias[${asisteIndex}][tipo_asistencia]" class="form-control" required>
                    <option value="asiste">Asiste</option>
                    <option value="inasiste">Inasiste</option>
                    <option value="llegada tarde">Llegada tarde</option>
                </select>
            </td>
            <td>
                <input type="text" name="asistencias[${asisteIndex}][justificacion]" class="form-control">
            </td>
            <td>
                <input type="text" name="asistencias[${asisteIndex}][observaciones]" class="form-control">
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm remove-asiste">Eliminar</button>
            </td>
        `;
        asisteIndex++;
    });

    asisteTable.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-asiste')) {
            e.target.closest('tr').remove();
        }
    });
});
</script>

<script src="{{ asset('js/entrenamientos.js') }}"></script>
<button type="submit" class="btn btn-primary">{{ __('Guardar entrenamiento') }}</button>