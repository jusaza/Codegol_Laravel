@extends('layouts.form')

@section('template_title')
    {{ $rendimiento->name ?? __('Show') . " " . __('Rendimiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rendimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rendimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Rendimiento:</strong>
                                    {{ $rendimiento->id_rendimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Evaluacion:</strong>
                                    {{ $rendimiento->fecha_evaluacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Posicion:</strong>
                                    {{ $rendimiento->posicion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Velocidad:</strong>
                                    {{ $rendimiento->velocidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Potencia Tiro:</strong>
                                    {{ $rendimiento->potencia_tiro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Defensa:</strong>
                                    {{ $rendimiento->defensa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Regate:</strong>
                                    {{ $rendimiento->regate }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pase:</strong>
                                    {{ $rendimiento->pase }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tecnica:</strong>
                                    {{ $rendimiento->tecnica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Promedio:</strong>
                                    {{ $rendimiento->promedio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $rendimiento->observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $rendimiento->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Matricula:</strong>
                                    {{ $rendimiento->id_matricula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Entrenamiento:</strong>
                                    {{ $rendimiento->id_entrenamiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $rendimiento->id_usuario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
