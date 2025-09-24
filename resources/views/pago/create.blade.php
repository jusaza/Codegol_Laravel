@extends('layouts.form')
@section('title', 'Pago')
@section('template_title')
    {{ __('Create') }} Pago
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                    </div>
                    <div class="login-box" role="main" aria-label="Formulario de registro de pago">
                        <h1>Pago</h1>
                        <form method="POST" action="{{ route('pago.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pago.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

