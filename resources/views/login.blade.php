@extends('layout')
@section('content')
    <div class="row h-100">
        <div class="col-sm-12 text-center align-self-center">
            {!! Form::open(['url' => 'validar']) !!}
            <div class="col-sm-12">
                <p class="h3">Ingresa a tu cuenta</p>
            </div>
            <div class="col-sm-12 form-group">
                {!! Form::label('Ingrese Su codigo', 'Ingrese Su codigo') !!}
                {!! Form::number('codigo', null, ['class' => 'form-control', 'min' => '0', 'required']) !!}
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary btn-lg btn-block mb-5">INGRESAR</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
