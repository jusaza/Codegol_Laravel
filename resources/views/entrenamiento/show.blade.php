@extends('layouts.form')

@section('template_title')
    {{ $entrenamiento->name ?? __('Show') . " " . __('Entrenamiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Entrenamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('entrenamientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Entrenamiento:</strong>
                                    {{ $entrenamiento->id_entrenamiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $entrenamiento->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $entrenamiento->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora Inicio:</strong>
                                    {{ $entrenamiento->hora_inicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora Fin:</strong>
                                    {{ $entrenamiento->hora_fin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugar:</strong>
                                    {{ $entrenamiento->lugar }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $entrenamiento->observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $entrenamiento->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $entrenamiento->id_usuario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
