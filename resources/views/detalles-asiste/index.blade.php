@extends('layouts.app')

@section('template_title')
    Detalles Asistes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalles Asistes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalles-asistes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Asiste</th>
									<th >Tipo Asistencia</th>
									<th >Justificacion</th>
									<th >Observaciones</th>
									<th >Id Matricula</th>
									<th >Id Entrenamiento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesAsistes as $detallesAsiste)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $detallesAsiste->id_asiste }}</td>
										<td >{{ $detallesAsiste->tipo_asistencia }}</td>
										<td >{{ $detallesAsiste->justificacion }}</td>
										<td >{{ $detallesAsiste->observaciones }}</td>
										<td >{{ $detallesAsiste->id_matricula }}</td>
										<td >{{ $detallesAsiste->id_entrenamiento }}</td>

                                            <td>
                                                <form action="{{ route('detalles-asistes.destroy', $detallesAsiste->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalles-asistes.show', $detallesAsiste->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalles-asistes.edit', $detallesAsiste->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detallesAsistes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
