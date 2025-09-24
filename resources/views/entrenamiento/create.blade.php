@extends('layouts.form')
@section('title', 'Entrenamiento')
@section('template_title')
    {{ __('Create') }} Entrenamiento
@endsection

@section('content')
                <div class="login-box" role="main" aria-label="Formulario de registro de entrenamiento">
                    <h1>Entrenamiento</h1>
                        <form method="POST" action="{{ route('entrenamientos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('entrenamiento.form')

                        </form>
                </div>

@endsection
