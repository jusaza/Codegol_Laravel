@extends('layouts.form')

@section('template_title')
    {{ __('Create') }} Rendimiento
@endsection

@section('content')
    
      <div class="login-box" role="main" aria-label="Formulario de rendimiento">
            <h1>Rendimiento</h1>
                        <form method="POST" action="{{ route('rendimientos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('rendimiento.form')

                        </form>
                    </div>

@endsection
