@extends('layouts.form')

@section('template_title')
    {{ __('Update') }} Rendimiento
@endsection

@section('content')
        <div class="login-box" role="main" aria-label="Formulario de rendimiento">
             <h1>Rendimiento</h1>
                   
                        <form method="POST" action="{{ route('rendimientos.update', $rendimiento->id_rendimiento) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('rendimiento.form')

                        </form>
        </div>
@endsection
