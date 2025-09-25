@extends('layouts.app')

@section('template_title')
    Matriculas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Matriculas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('matriculas1.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Matricula</th>
									<th >Fecha Matricula</th>
									<th >Fecha Inicio</th>
									<th >Fecha Fin</th>
                                    <th >Estado</th>
                                    <th >Observaciones</th>
									<th >Categoria Sub</th>
									<th >Nivel</th>
									<th >Id Jugador</th>
									<th >Id Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matriculas as $matricula)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $matricula->id_matricula }}</td>
										<td >{{ $matricula->fecha_matricula }}</td>
										<td >{{ $matricula->fecha_inicio }}</td>
										<td >{{ $matricula->fecha_fin }}</td>
                                        <td >{{ $matricula->estado==1?"Activo":"Inactivo" }}</td>  
										<td >{{ $matricula->observaciones }}</td>
										<td >{{ $matricula->categoria }}</td>
										<td >{{ $matricula->nivel }}</td>
										<td >{{ $matricula->id_jugador }}</td>
										<td >{{ $matricula->id_usuario }}</td>

                                            <td>
                                                <form action="{{ route('matriculas1.destroy', $matricula->id_matricula) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('matriculas1.show', $matricula->id_matricula) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('matriculas1.edit', $matricula->id_matricula) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $matriculas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
