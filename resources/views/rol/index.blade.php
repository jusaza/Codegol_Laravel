@extends('layouts.admin')

@section('template_title')
    Rols
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Rols') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rols.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                <!-- Botones de exportación -->
                                <button id="exportarCSV" class="btn btn-sm btn-secondary">Exportar CSV</button>
                                <button id="exportarXLSX" class="btn btn-sm btn-secondary">Exportar XLSX</button>
                                <button id="exportarPDF" class="btn btn-sm btn-secondary">Exportar PDF</button>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tablaRols">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Id Rol</th>
                                        <th>Rol Usuario</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rols as $rol)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $rol->id_rol }}</td>
                                            <td>{{ $rol->rol_usuario }}</td>
                                            <td>
                                                <form action="{{ route('rols.destroy', $rol->id_rol) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rols.show', $rol->id_rol) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rols.edit', $rol->id_rol) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rols->withQueryString()->links() !!}
            </div>
        </div>
    </div>

    <!-- Librerías necesarias -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script>
    // CSV
    document.getElementById('exportarCSV').addEventListener('click', function() {
        let tabla = document.getElementById('tablaRols');
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
        link.download = 'rols.csv';
        link.click();
    });

    // XLSX
    document.getElementById('exportarXLSX').addEventListener('click', function() {
        let tabla = document.getElementById('tablaRols');
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
        XLSX.utils.book_append_sheet(wb, ws, 'Rols');
        XLSX.writeFile(wb, 'rols.xlsx');
    });

    // PDF
    document.getElementById('exportarPDF').addEventListener('click', function() {
        const { jsPDF } = window.jspdf;
        let doc = new jsPDF();
        let tabla = document.getElementById('tablaRols');
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

        doc.save('rols.pdf');
    });
    </script>

@endsection
