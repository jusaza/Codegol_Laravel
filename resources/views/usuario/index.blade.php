@extends('layouts.app')

@section('template_title')
    Usuarios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Usuario</th>
									<th >Correo</th>
									<th >Contrasena</th>
									<th >Nombre Completo</th>
									<th >Num Identificacion</th>
									<th >Tipo Documento</th>
									<th >Telefono 1</th>
									<th >Telefono 2</th>
									<th >Direccion</th>
									<th >Genero</th>
									<th >Fecha Nacimiento</th>
									<th >Lugar Nacimiento</th>
									<th >Grupo Sanguineo</th>
									<th >Foto Perfil</th>
									<th >Estado</th>
									<th >Id Usuario Registro</th>
									<th >Id Responsable</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $usuario->id_usuario }}</td>
										<td >{{ $usuario->correo }}</td>
										<td >{{ $usuario->contrasena }}</td>
										<td >{{ $usuario->nombre_completo }}</td>
										<td >{{ $usuario->num_identificacion }}</td>
										<td >{{ $usuario->tipo_documento }}</td>
										<td >{{ $usuario->telefono_1 }}</td>
										<td >{{ $usuario->telefono_2 }}</td>
										<td >{{ $usuario->direccion }}</td>
										<td >{{ $usuario->genero }}</td>
										<td >{{ $usuario->fecha_nacimiento }}</td>
										<td >{{ $usuario->lugar_nacimiento }}</td>
										<td >{{ $usuario->grupo_sanguineo }}</td>
										<td >{{ $usuario->foto_perfil }}</td>
										<td >{{ $usuario->estado }}</td>
										<td >{{ $usuario->id_usuario_registro }}</td>
										<td >{{ $usuario->id_responsable }}</td>

                                            <td>
                                                <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usuarios.show', $usuario->id_usuario) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usuarios.edit', $usuario->id_usuario) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">
                                                        <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
