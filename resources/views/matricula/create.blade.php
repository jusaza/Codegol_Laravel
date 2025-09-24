@extends('layouts.form')

@section('template_title')
    {{ __('Create') }} Matricula
@endsection

@section('content')
                    <div class="login-box" role="main" aria-label="Formulario de matrícula">
                        <h1>Matrícula</h1>
                        <form method="POST" action="{{ route('matriculas1.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('matricula.form')

                        </form>
                    </div>
@endsection
