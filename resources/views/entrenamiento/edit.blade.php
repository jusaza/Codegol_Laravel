@extends('layouts.form')

@section('template_title')
    {{ __('Update') }} Entrenamiento
@endsection

@section('content')
                <div class="login-box" role="main" aria-label="Formulario de registro de entrenamiento">
                    <h1>Entrenamiento</h1>
                        <form method="POST" action="{{ route('entrenamientos.update', $entrenamiento->id_entrenamiento) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('entrenamiento.form')

                        </form>
                </div>

@endsection
