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
                    {!! Form::label('Nombre', 'Nombre') !!}
                    {!! Form::text('Nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la mascota']) !!}                    
                </div>

                @error('Nombre')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('Raza', 'Raza') !!}
                    {!! Form::text('Raza', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el raza de la mascota']) !!}                    
                </div>

                @error('Raza')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('Color', 'Color') !!}
                    {!! Form::text('Color', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el color de la mascota']) !!}                    
                </div>

                @error('Color')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('Peso', 'Peso') !!}
                    {!! Form::text('Peso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el peso de la mascota']) !!}                    
                </div>

                @error('Peso')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('Especie', 'Especie') !!}
                    {!! Form::text('Especie', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la especie de la mascota']) !!}                    
                </div>

                @error('Especie')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('Edad', 'Edad') !!}
                    {!! Form::text('Edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la edad de la mascota']) !!}                    
                </div>

                @error('Edad')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">                    
                    {!! Form::label('Sexo', 'Sexo') !!}
                    {!! Form::text('Sexo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el sexo de la mascota']) !!}  
                    
                    @error('Sexo')
                    <small class="text-danger">{{$message}}</small>
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
                        
                {!! Form::submit('Crear mascota', ['class' => 'btn btn-primary mt-2']) !!}
                <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.mascotas.index')}}" >Volver</a>

            {!! Form::close() !!}

        </div>
    </div>
@stop