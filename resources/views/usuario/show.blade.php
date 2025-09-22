@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? __('Show') . " " . __('Usuario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $usuario->id_usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correo:</strong>
                                    {{ $usuario->correo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contrasena:</strong>
                                    {{ $usuario->contrasena }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Completo:</strong>
                                    {{ $usuario->nombre_completo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Identificacion:</strong>
                                    {{ $usuario->num_identificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Documento:</strong>
                                    {{ $usuario->tipo_documento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono 1:</strong>
                                    {{ $usuario->telefono_1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono 2:</strong>
                                    {{ $usuario->telefono_2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $usuario->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Genero:</strong>
                                    {{ $usuario->genero }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $usuario->fecha_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugar Nacimiento:</strong>
                                    {{ $usuario->lugar_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Grupo Sanguineo:</strong>
                                    {{ $usuario->grupo_sanguineo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Foto Perfil:</strong>
                                    {{ $usuario->foto_perfil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $usuario->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario Registro:</strong>
                                    {{ $usuario->id_usuario_registro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Responsable:</strong>
                                    {{ $usuario->id_responsable }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
