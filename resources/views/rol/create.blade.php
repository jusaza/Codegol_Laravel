@extends('layouts.form')
@section('title', 'Rol')
@section('template_title')
    {{ __('Create') }} Rol
@endsection

@section('content')
    <div class="login-box" role="main" aria-label="Formulario de registro de Roles de Usuarios">
                    <h1>Roles de Usuario</h1>
                        <form method="POST" action="{{ route('rols.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('rol.form')
                        </form>
                </div>
@endsection
