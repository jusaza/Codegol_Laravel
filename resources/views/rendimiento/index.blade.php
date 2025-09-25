@extends('layouts.admin')

@section('template_title')
    Rendimientos
@endsection

@section('content')

<div class="contenido">
    <br>

    <!-- Barra superior: búsqueda y botón crear -->
    <div class="barra-top">
        <div class="barra-busqueda">
            <form method="GET" action="{{ route('rendimientos.index') }}">
                <input 
                    type="search" 
                    name="busqueda" 
                    placeholder="Buscar por fecha, posición o estado..." 
                    value="{{ request('busqueda') }}" 
                />
            </form>
        </div>
        <a href="{{ route('rendimientos.pdf', ['busqueda' => request('busqueda')]) }}" class="boton-registrar" target="_blank">Exportar a PDF</a>
        <a href="{{ route('rendimientos.create') }}" class="boton-registrar">Registrar Rendimiento</a>
    </div>

    <!-- Mensaje de éxito -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success m-4">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Tabla de rendimientos -->
    <table>
        <thead>
            <tr>
                <th>Id Rendimiento</th>
                <th>Fecha Evaluacion</th>
                <th>Posicion</th>
                <th>Promedio</th>
                <th>Observaciones</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rendimientos as $i => $rendimiento)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $rendimiento->fecha_evaluacion }}</td>
                    <td>{{ $rendimiento->posicion }}</td>
                    <td>{{ $rendimiento->promedio }}</td>
                    <td>{{ $rendimiento->observaciones }}</td>
                    <td>{{ $rendimiento->estado == 1 ? 'Activo' : 'Inactivo' }}</td>
                    <td class="acciones">
                        <button class="ver-mas" data-id="{{ $rendimiento->id_rendimiento }}">Ver más</button>
                        <a href="{{ route('rendimientos.edit', $rendimiento->id_rendimiento) }}">
                            <button class="actualizar">Actualizar</button>
                        </a>
                        <form action="{{ route('rendimientos.destroy', $rendimiento->id_rendimiento) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="eliminar" onclick="event.preventDefault(); confirm('¿Seguro que deseas eliminar este rendimiento?') ? this.closest('form').submit() : false;">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align: center;">No se encontraron rendimientos.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 15px;">
        {!! $rendimientos->withQueryString()->links() !!}
    </div>
</div>

<!-- Ventanas flotantes de detalle con gráfico radar -->
@foreach ($rendimientos as $rendimiento)
<div class="ventana-flotante" id="detalle-usuario-{{ $rendimiento->id_rendimiento }}">
    <div class="contenido-ventana">
        <div class="info">
            <ul>
                <li><strong>ID Rendimiento:</strong> {{ $rendimiento->id_rendimiento }}</li>
                <li><strong>Fecha Evaluación:</strong> {{ $rendimiento->fecha_evaluacion }}</li>
                <li><strong>Posición:</strong> {{ $rendimiento->posicion }}</li>
                <li><strong>Velocidad:</strong> {{ $rendimiento->velocidad }}</li>
                <li><strong>Potencia Tiro:</strong> {{ $rendimiento->potencia_tiro }}</li>
                <li><strong>Defensa:</strong> {{ $rendimiento->defensa }}</li>
                <li><strong>Regate:</strong> {{ $rendimiento->regate }}</li>
                <li><strong>Pase:</strong> {{ $rendimiento->pase }}</li>
                <li><strong>Técnica:</strong> {{ $rendimiento->tecnica }}</li>
                <li><strong>Promedio:</strong> {{ $rendimiento->promedio }}</li>
                <li><strong>Observaciones:</strong> {{ $rendimiento->observaciones }}</li>
                <li><strong>Estado:</strong> {{ $rendimiento->estado == 1 ? 'Activo' : 'Inactivo' }}</li>
            </ul>
        </div>
        <div class="grafico">
            <canvas id="graficaRadarDetalle-{{ $rendimiento->id_rendimiento }}"></canvas>
        </div>
    </div>
</div>
@endforeach

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Crear gráficos radar para cada rendimiento
    @foreach ($rendimientos as $rendimiento)
    const ctx{{ $rendimiento->id_rendimiento }} = document.getElementById('graficaRadarDetalle-{{ $rendimiento->id_rendimiento }}').getContext('2d');
    new Chart(ctx{{ $rendimiento->id_rendimiento }}, {
        type: 'radar',
        data: {
            labels: ['Velocidad', 'Potencia Tiro', 'Defensa', 'Regate', 'Pase', 'Técnica'],
            datasets: [{
                label: 'Rendimiento',
                data: [
                    {{ $rendimiento->velocidad }},
                    {{ $rendimiento->potencia_tiro }},
                    {{ $rendimiento->defensa }},
                    {{ $rendimiento->regate }},
                    {{ $rendimiento->pase }},
                    {{ $rendimiento->tecnica }}
                ],
                backgroundColor: 'rgba(15, 88, 151, 0.2)',
                borderColor: '#0f5897',
                borderWidth: 2,
                pointBackgroundColor: '#0f5897'
            }]
        },
        options: {
            responsive: true,
            scales: { r: { min: 0, max: 100, ticks: { stepSize: 20 } } }
        }
    });
    @endforeach

    // Botones "Ver más"
    document.querySelectorAll('.ver-mas').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.id;
            document.getElementById('detalle-usuario-' + id).classList.add('active');
        });
    });

    // Cerrar ventana al hacer clic fuera
    window.addEventListener('click', e => {
        if (!e.target.classList.contains('ver-mas') && !e.target.closest('.ventana-flotante')) {
            document.querySelectorAll('.ventana-flotante').forEach(v => v.classList.remove('active'));
        }
    });
</script>

<style>
/* Ventana cuadrada y centrada */
.ventana-flotante {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    z-index: 1000;
    width: 600px;
    height: 400px;
    box-shadow: 0 0 15px rgba(0,0,0,0.4);
    border-radius: 10px;
}

/* Mostrar ventana */
.ventana-flotante.active { display: block; }

/* Contenido dividido: info a la izquierda, gráfico a la derecha */
.contenido-ventana {
    display: flex;
    justify-content: space-between;
    height: 100%;
}

/* Lista de datos a la izquierda */
.ventana-flotante .info {
    width: 50%;
    overflow-y: auto;
    padding-right: 10px;
}

/* Gráfico a la derecha */
.ventana-flotante .grafico {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Canvas del gráfico ocupa todo el contenedor */
.ventana-flotante .grafico canvas {
    max-width: 100%;
    max-height: 100%;
}

/* Estilos de tabla y botones ya existentes */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

.acciones button, .acciones a button {
    margin-right: 5px;
}

.barra-top {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.barra-busqueda input {
    padding: 5px 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.boton-registrar {
    background-color: #0f5897;
    color: #fff;
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
}
</style>

@endsection
