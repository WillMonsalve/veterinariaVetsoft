@extends('adminlte::page')

@section('title', 'Mascotas')


@section('content_header')
    <h1>Crear Mascotas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.mascotas.store']) !!}
            
                <div class="form-group">                    
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la mascota']) !!}                    
                </div>

                @error('nombre')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('raza', 'Raza') !!}
                    {!! Form::text('raza', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el raza de la mascota']) !!}                    
                </div>

                @error('raza')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('color', 'Color') !!}
                    {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el color de la mascota']) !!}                    
                </div>

                @error('color')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('peso', 'Peso') !!}
                    {!! Form::text('peso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el peso de la mascota']) !!}                    
                </div>

                @error('peso')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('especie', 'Especie') !!}
                    {!! Form::text('especie', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la especie de la mascota']) !!}                    
                </div>

                @error('especie')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('edad', 'Edad') !!}
                    {!! Form::text('edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la edad de la mascota']) !!}                    
                </div>

                @error('edad')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('sexo', 'Sexo') !!}
                    {!! Form::text('sexo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el sexo de la mascota']) !!}  
                    
                    @error('sexo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('cliente_id', 'Propietario') !!}
                    {!! Form::text('cliente_id', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el propietario']) !!}
                    
                    <select name="" id="" class="form-control">
                         @foreach ($clientes as $cliente)
                   <option value="{{$cliente->cliente_id}}">{{$cliente->nombre}}</option>
                         @endforeach
                    </select>

                    @error('cliente_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                        
                {!! Form::submit('Crear mascota', ['class' => 'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@stop