@extends('layouts.app')

@section('template_title')
    {{ $matricula->name ?? __('Show') . " " . __('Matricula') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Matricula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('matriculas1.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Matricula:</strong>
                                    {{ $matricula->id_matricula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Matricula:</strong>
                                    {{ $matricula->fecha_matricula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Inicio:</strong>
                                    {{ $matricula->fecha_inicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Fin:</strong>
                                    {{ $matricula->fecha_fin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $matricula->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $matricula->observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Categoria:</strong>
                                    {{ $matricula->categoria }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel:</strong>
                                    {{ $matricula->nivel }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Jugador:</strong>
                                    {{ $matricula->id_jugador }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Usuario:</strong>
                                    {{ $matricula->id_usuario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
