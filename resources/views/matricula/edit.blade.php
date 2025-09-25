@extends('layouts.form')

@section('template_title')
    {{ __('Update') }} Matricula
@endsection

@section('content')
                    <div class="login-box" role="main" aria-label="Formulario de matrícula">
                        <h1>Matrícula</h1>
                        <form method="POST" action="{{ route('matriculas1.update', $matricula->id_matricula) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('matricula.form')
                        </form>
                    </div>
@endsection
