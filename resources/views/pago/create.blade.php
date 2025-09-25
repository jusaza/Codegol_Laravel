@extends('layouts.form')

@section('template_title')
    {{ __('Create') }} Pago
@endsection

@section('content')
                    <div class="login-box" role="main" aria-label="Formulario de registro de pago">
                        <h1>Pago</h1>
                        <form method="POST" action="{{ route('pago.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pago.form')

                        </form>
                    </div>
@endsection

