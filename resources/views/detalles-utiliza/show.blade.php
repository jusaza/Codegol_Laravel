@extends('layouts.app')

@section('template_title')
    {{ $detallesUtiliza->name ?? __('Show') . " " . __('Detalles Utiliza') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalles Utiliza</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('detalles-utilizas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Utiliza:</strong>
                                    {{ $detallesUtiliza->id_utiliza }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad Usada:</strong>
                                    {{ $detallesUtiliza->cantidad_usada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $detallesUtiliza->observaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Devuelto:</strong>
                                    {{ $detallesUtiliza->devuelto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Entrenamiento:</strong>
                                    {{ $detallesUtiliza->id_entrenamiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Inventario:</strong>
                                    {{ $detallesUtiliza->id_inventario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
