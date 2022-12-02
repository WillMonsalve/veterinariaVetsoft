@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Editar Mascotas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($mascota, ['route' => ['admin.mascotas.update', $mascota], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la mascota']) !!}

                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('raza', 'Raza') !!}
                    {!! Form::text('raza', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la raza de la mascota']) !!}

                    @error('raza')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('color', 'Color') !!}
                    {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Ingrese color de la mascota']) !!}

                    @error('color')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('peso', 'Peso') !!}
                    {!! Form::number('peso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese peso de la mascota']) !!}

                    @error('peso')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('especie', 'Especie') !!}
                    {!! Form::text('especie', null, ['class' => 'form-control', 'placeholder' => 'Ingrese especie']) !!}

                    @error('especie')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('edad', 'Edad') !!}
                    {!! Form::number('edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la edad']) !!}

                    @error('edad')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('sexo', 'Sexo') !!}
                    {!! Form::text('sexo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el sexo']) !!}

                    @error('sexo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('cliente_id', 'Propietario') !!}
                    {!! Form::text('cliente_id', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el propietario']) !!}

                    @error('cliente_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!} 
                
                <a href="{{ route('admin.mascotas.show', $mascota)}}" class="btn btn-sm btn-success mr-3"> Volver </a>
                
            {!! Form::close() !!}
        </div>
    </div>

@stop