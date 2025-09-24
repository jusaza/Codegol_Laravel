@extends('layouts.form')

@section('template_title')
    {{ __('Update') }} Pago
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                    </div>
                    <div class="login-box" role="main" aria-label="Formulario de Modificacion de pago">
                        <h1>Pago</h1>
                        <form method="POST" action="{{ route('pago.update', $pago->id_pago) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pago.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

