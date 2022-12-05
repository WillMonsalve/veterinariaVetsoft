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
                    {!! Form::label('Nombre', 'Nombre') !!}
                    {!! Form::text('Nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la mascota']) !!}

                    @error('Nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('Raza', 'Raza') !!}
                    {!! Form::text('Raza', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la raza de la mascota']) !!}

                    @error('Raza')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('Color', 'Color') !!}
                    {!! Form::text('Color', null, ['class' => 'form-control', 'placeholder' => 'Ingrese color de la mascota']) !!}

                    @error('Color')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('Peso', 'Peso') !!}
                    {!! Form::number('Peso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese peso de la mascota']) !!}

                    @error('Peso')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('Especie', 'Especie') !!}
                    {!! Form::text('Especie', null, ['class' => 'form-control', 'placeholder' => 'Ingrese especie']) !!}

                    @error('Especie')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('Edad', 'Edad') !!}
                    {!! Form::number('Edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la edad']) !!}

                    @error('Edad')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('Sexo', 'Sexo') !!}
                    {!! Form::text('Sexo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el sexo']) !!}

                    @error('Sexo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('cliente_id', 'Propietario') !!}
                    {!! Form::select('cliente_id',$clientes, $mascota->cliente_id, ['class' => 'form-control', 'placeholder' => 'Ingrese el propietario']) !!}

                    @error('cliente_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>

                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!} 
                
                <a href="{{ route('admin.mascotas.show', $mascota)}}" class="btn btn-sm btn-success mr-3"> Volver </a>
                
            {!! Form::close() !!}
        </div>
    </div>

@stop