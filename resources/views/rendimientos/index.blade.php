@extends('layouts.app')

@section('template_title')
    Rendimientos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Rendimientos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rendimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Id Rendimiento</th>
									<th >Fecha Evaluacion</th>
									<th >Posicion</th>
									<th >Velocidad</th>
									<th >Potencia Tiro</th>
									<th >Defensa</th>
									<th >Regate</th>
									<th >Pase</th>
									<th >Tecnica</th>
									<th >Promedio</th>
									<th >Observaciones</th>
									<th >Estado</th>
									<th >Id Matricula</th>
									<th >Id Entrenamiento</th>
									<th >Id Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rendimientos as $rendimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $rendimiento->id_rendimiento }}</td>
										<td >{{ $rendimiento->fecha_evaluacion }}</td>
										<td >{{ $rendimiento->posicion }}</td>
										<td >{{ $rendimiento->velocidad }}</td>
										<td >{{ $rendimiento->potencia_tiro }}</td>
										<td >{{ $rendimiento->defensa }}</td>
										<td >{{ $rendimiento->regate }}</td>
										<td >{{ $rendimiento->pase }}</td>
										<td >{{ $rendimiento->tecnica }}</td>
										<td >{{ $rendimiento->promedio }}</td>
										<td >{{ $rendimiento->observaciones }}</td>
										<td >{{ $rendimiento->estado }}</td>
										<td >{{ $rendimiento->id_matricula }}</td>
										<td >{{ $rendimiento->id_entrenamiento }}</td>
										<td >{{ $rendimiento->id_usuario }}</td>

                                            <td>
                                                <form action="{{ route('rendimientos.destroy', $rendimiento->id_rendimiento) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rendimientos.show', $rendimiento->id_rendimiento) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rendimientos.edit', $rendimiento->id_rendimiento) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $rendimientos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
