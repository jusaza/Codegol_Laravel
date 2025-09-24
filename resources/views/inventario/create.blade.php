@extends('layouts.form')

@section('template_title')
    {{ __('Create') }} Inventario
@endsection

@section('content')
                    <div class="login-box" role="main" aria-label="Formulario de registro de inventario">
                        <h1>Inventario</h1>
                        <form method="POST" action="{{ route('inventarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('inventario.form')

                        </form>
                    </div>
@endsection
