@extends('layouts.admin')
@section('title', 'Usuarios')
@section('content')

<div class="contenido">
    <br>
    <div class="barra-top">
        <div class="barra-busqueda">
            <form method="GET" action="{{ route('usuarios.index') }}">
                <input
                    type="search"
                    name="busqueda"
                    placeholder="Buscar por nombre, correo o identificación..."
                    value="{{ request('busqueda') }}"
                />
            </form>
        </div>

        <a href="{{ route('usuarios.create') }}" class="boton-registrar">Registrar usuario</a>

        <!-- Botones de exportación sin cambiar nada -->
        <button id="exportarCSV" class="boton-registrar">Exportar CSV</button>
        <button id="exportarXLSX" class="boton-registrar">Exportar XLSX</button>
        <button id="exportarPDF" class="boton-registrar">Exportar PDF</button>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success m-4">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="tablaUsuarios">
        <thead>
            <tr>
                <th>No</th>
                <th>Correo</th>
                <th>Nombre Completo</th>
                <th>Num Identificación</th>
                <th>Teléfono 1</th>
                <th>Género</th>
                <th>Foto Perfil</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <body>
            @forelse ($usuarios as $usuario)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td>{{ $usuario->nombre_completo }}</td>
                    <td>{{ $usuario->num_identificacion }}</td>
                    <td>{{ $usuario->telefono_1 }}</td>
                    <td>{{ $usuario->genero === 'm' ? 'Masculino' : ($usuario->genero === 'f' ? 'Femenino' : 'No especificado') }}</td>
                    <td>{{ $usuario->foto_perfil }}</td>
                    <td>{{ $usuario->roles->pluck('rol_usuario')->implode(', ') }}</td>
                    <td>{{ $usuario->estado==1 ? "Activo" : "Inactivo" }}</td>  
                    <td class="acciones">
                        <a href="{{ route('usuarios.show', $usuario->id_usuario) }}" style="text-decoration:none;">
                            <button class="actualizar">Ver</button>
                        </a>

                        <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" style="text-decoration:none;">
                            <button class="actualizar">Actualizar</button>
                        </a>

                        <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="eliminar" onclick="event.preventDefault(); confirm('¿Seguro que deseas eliminar este usuario?') ? this.closest('form').submit() : false;">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="19" style="text-align: center;">No se encontraron usuarios.</td>
                </tr>
            @endforelse
        </body>
    </table>

    <div style="margin-top: 15px;">
        {!! $usuarios->withQueryString()->links() !!}
    </div>
</div>

<!-- Librerías necesarias -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script>
// CSV
document.getElementById('exportarCSV').addEventListener('click', function() {
    let tabla = document.getElementById('tablaUsuarios');
    let filas = tabla.querySelectorAll('tr');
    let csv = [];
    filas.forEach(fila => {
        let celdas = fila.querySelectorAll('th, td');
        let filaCSV = [];
        celdas.forEach((celda, index) => {
            if(index < celdas.length - 1) filaCSV.push(celda.innerText.replace(/,/g, ''));
        });
        csv.push(filaCSV.join(','));
    });
    let blob = new Blob([csv.join('\n')], { type: 'text/csv;charset=utf-8;' });
    let link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'usuarios.csv';
    link.click();
});

// XLSX
document.getElementById('exportarXLSX').addEventListener('click', function() {
    let tabla = document.getElementById('tablaUsuarios');
    let wb = XLSX.utils.book_new();
    let ws_data = [];
    tabla.querySelectorAll('tr').forEach(tr => {
        let fila = [];
        tr.querySelectorAll('th, td').forEach((td, index) => {
            if(index < tr.querySelectorAll('th, td').length -1) fila.push(td.innerText);
        });
        ws_data.push(fila);
    });
    let ws = XLSX.utils.aoa_to_sheet(ws_data);
    XLSX.utils.book_append_sheet(wb, ws, 'Usuarios');
    XLSX.writeFile(wb, 'usuarios.xlsx');
});

// PDF
document.getElementById('exportarPDF').addEventListener('click', function() {
    const { jsPDF } = window.jspdf;
    let doc = new jsPDF();
    let tabla = document.getElementById('tablaUsuarios');
    let filas = [];
    tabla.querySelectorAll('tr').forEach(tr => {
        let fila = [];
        tr.querySelectorAll('th, td').forEach((td, index) => {
            if(index < tr.querySelectorAll('th, td').length -1) fila.push(td.innerText);
        });
        filas.push(fila);
    });

    let y = 10;
    filas.forEach((fila) => {
        doc.text(fila.join(' | '), 10, y);
        y += 8;
        if(y > 280){ doc.addPage(); y=10; }
    });

    doc.save('usuarios.pdf');
});
</script>

@endsection
