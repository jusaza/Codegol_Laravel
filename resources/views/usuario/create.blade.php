@extends('layouts.form')
@section('title', 'Usuario')
@section('template_title')
    {{ __('Create') }} Usuario
@endsection

@section('content')
    <div class="login-box" role="main" aria-label="Formulario de registro de Usuarios">
                    <h1>Usuario</h1>
                        <form method="POST" action="{{ route('usuarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('usuario.form')
                        </form>
                </div>
@endsection
