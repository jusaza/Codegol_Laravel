@extends('layouts.form')

@section('template_title')
    {{ __('Update') }} Usuario
@endsection

@section('content')
     <div class="login-box" role="main" aria-label="Formulario de Usuario">
                        <h1>Matrícula</h1>
                        <form method="POST" action="{{ route('usuarios.update', $usuario->id_usuario) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('usuario.form')
                        </form>
                    </div>
@endsection
