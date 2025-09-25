@extends('layouts.app')

@section('template_title')
    Detalles Utilizas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalles Utilizas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalles-utilizas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Utiliza</th>
									<th >Cantidad Usada</th>
									<th >Observaciones</th>
									<th >Devuelto</th>
									<th >Id Entrenamiento</th>
									<th >Id Inventario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesUtilizas as $detallesUtiliza)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $detallesUtiliza->id_utiliza }}</td>
										<td >{{ $detallesUtiliza->cantidad_usada }}</td>
										<td >{{ $detallesUtiliza->observaciones }}</td>
										<td >{{ $detallesUtiliza->devuelto }}</td>
										<td >{{ $detallesUtiliza->id_entrenamiento }}</td>
										<td >{{ $detallesUtiliza->id_inventario }}</td>

                                            <td>
                                                <form action="{{ route('detalles-utilizas.destroy', $detallesUtiliza->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalles-utilizas.show', $detallesUtiliza->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalles-utilizas.edit', $detallesUtiliza->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detallesUtilizas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
