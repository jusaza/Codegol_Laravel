<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Pagos</title>
    <style>
        body   { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table  { width:100%; border-collapse: collapse; margin-top:20px; }
        th, td { border:1px solid #000; padding:5px; text-align:left; }
        th     { background:#f0f0f0; }
        h2     { text-align:center; margin-bottom:10px; }
    </style>
</head>
<body>
    <h2>Listado de Pagos</h2>
    <p>Generado: {{ now()->format('d/m/Y H:i') }}</p>

    <table>
        <thead>
            <tr>
                <th>ID Pago</th>
                <th>Concepto</th>
                <th>Fecha Pago</th>
                <th>Método</th>
                <th>Valor Total</th>
                <th>Observaciones</th>
                <th>Registrado por</th>
                <th>Responsable</th>
                <th>Matrícula</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        @forelse($pagos as $pago)
            <tr>
                <td>{{ $pago->id_pago }}</td>
                <td>{{ $pago->concepto_pago }}</td>
                <td>{{ optional($pago->fecha_pago)->format('Y-m-d') }}</td>
                <td>{{ $pago->metodo_pago ?? '—' }}</td>
                <td>${{ number_format($pago->valor_total, 0, ',', '.') }}</td>
                <td>{{ $pago->observaciones ?? '—' }}</td>
                <td>{{ $pago->usuario->nombre ?? $pago->id_usuario }}</td>
                <td>{{ $pago->usuario_responsable->nombre ?? $pago->id_responsable }}</td>
                <td>{{ $pago->matricula->id_matricula ?? '—' }}</td>
                <td>{{ $pago->estado == 1 ? 'Activo' : 'Inactivo' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="10" style="text-align:center;">No se encontraron pagos.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>