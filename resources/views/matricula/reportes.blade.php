<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Matrículas</title>
    <style>
        body   { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table  { width:100%; border-collapse: collapse; margin-top:20px; }
        th, td { border:1px solid #000; padding:5px; text-align:left; }
        th     { background:#f0f0f0; }
        h2     { text-align:center; margin-bottom:10px; }
    </style>
</head>
<body>
    <h2>Listado de Matrículas</h2>
    <p>Generado: {{ now()->format('d/m/Y H:i') }}</p>

    @if($search)
        <p><strong>Filtro aplicado:</strong> "{{ $search }}"</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID Matrícula</th>
                <th>Fecha Matrícula</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Observaciones</th>
                <th>Categoría Sub</th>
                <th>Nivel</th>
                <th>Jugador</th>
                <th>Registrado por</th>
            </tr>
        </thead>
        <tbody>
        @forelse($matriculas as $matricula)
            <tr>
                <td>{{ $matricula->id_matricula }}</td>
                <td>{{ optional($matricula->fecha_matricula)->format('Y-m-d') }}</td>
                <td>{{ optional($matricula->fecha_inicio)->format('Y-m-d') }}</td>
                <td>{{ optional($matricula->fecha_fin)->format('Y-m-d') }}</td>
                <td>{{ $matricula->observaciones ?? '—' }}</td>
                <td>{{ $matricula->categoria ?? '—' }}</td>
                <td>{{ $matricula->nivel ?? '—' }}</td>
                <td>{{ $matricula->jugador->nombre ?? $matricula->id_jugador }}</td>
                <td>{{ $matricula->usuario->nombre ?? $matricula->id_usuario }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="9" style="text-align:center;">No se encontraron matrículas.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>
