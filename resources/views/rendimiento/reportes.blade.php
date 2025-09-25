<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Rendimientos</title>
    <style>
        body   { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table  { width:100%; border-collapse: collapse; margin-top:20px; }
        th, td { border:1px solid #000; padding:5px; text-align:left; }
        th     { background:#f0f0f0; }
        h2     { text-align:center; margin-bottom:10px; }
    </style>
</head>
<body>
    <h2>Listado de Rendimientos</h2>
    <p>Generado: {{ now()->format('d/m/Y H:i') }}</p>

    @if($busqueda)
        <p><strong>Filtro aplicado:</strong> "{{ $busqueda }}"</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID Rendimiento</th>
                <th>Fecha Evaluación</th>
                <th>Posición</th>
                <th>Velocidad</th>
                <th>Potencia Tiro</th>
                <th>Defensa</th>
                <th>Regate</th>
                <th>Pase</th>
                <th>Técnica</th>
                <th>Promedio</th>
                <th>Observaciones</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        @forelse($rendimientos as $rendimiento)
            <tr>
                <td>{{ $rendimiento->id_rendimiento }}</td>
                <td>{{ optional($rendimiento->fecha_evaluacion)->format('Y-m-d') }}</td>
                <td>{{ $rendimiento->posicion ?? '—' }}</td>
                <td>{{ $rendimiento->velocidad ?? '—' }}</td>
                <td>{{ $rendimiento->potencia_tiro ?? '—' }}</td>
                <td>{{ $rendimiento->defensa ?? '—' }}</td>
                <td>{{ $rendimiento->regate ?? '—' }}</td>
                <td>{{ $rendimiento->pase ?? '—' }}</td>
                <td>{{ $rendimiento->tecnica ?? '—' }}</td>
                <td>{{ $rendimiento->promedio ?? '—' }}</td>
                <td>{{ $rendimiento->observaciones ?? '—' }}</td>
                <td>{{ $rendimiento->estado == 1 ? 'Activo' : 'Inactivo' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="12" style="text-align:center;">No se encontraron rendimientos.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>

