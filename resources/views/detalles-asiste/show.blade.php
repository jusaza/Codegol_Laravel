@extends('layouts.app')

@section('template_title')
    {{ $detallesAsiste->name ?? __('Show') . " " . __('Detalles Asiste') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalles Asiste</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('detalles-asistes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Asiste:</strong>
                                    {{ $detallesAsiste->id_asiste }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Asistencia:</strong>
                                    {{ $detallesAsiste->tipo_asistencia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Justificacion:</strong>
                                    {{ $detallesAsiste->justificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $detallesAsiste->observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Matricula:</strong>
                                    {{ $detallesAsiste->id_matricula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Entrenamiento:</strong>
                                    {{ $detallesAsiste->id_entrenamiento }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
