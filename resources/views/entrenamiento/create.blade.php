@extends('layouts.form')
@section('title', 'Entrenamiento')
@section('template_title')
    {{ __('Create') }} Entrenamiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Entrenamiento</span>
                    </div>
                    <div class="login-box" role="main" aria-label="Formulario de registro de entrenamiento">
                        <h1>Entrenamiento</h1>
                        <form method="POST" action="{{ route('entrenamientos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('entrenamiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
