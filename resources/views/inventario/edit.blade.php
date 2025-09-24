@extends('layouts.form')

@section('template_title')
    {{ __('Update') }} Inventario
@endsection

@section('content')
                    <div class="login-box" role="main" aria-label="Formulario de registro de inventario">
                        <h1>Inventario</h1>
                        <form method="POST" action="{{ route('inventarios.update', $inventario->id_inventario) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('inventario.form')

                        </form>
                    </div>
@endsection
