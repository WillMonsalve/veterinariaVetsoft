@extends('adminlte::page')

@section('title', 'usuarios')


@section('content_header')
    <h1>Crear Cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.clientes.store']) !!}

                <div class="form-group">
                    {!! Form::label('nombre_cliente', 'Nombre') !!}
                    {!! Form::text('nombre_cliente', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del cliente']) !!}
                </div>

                @error('nombre_cliente')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    {!! Form::label('apellido', 'Apellido') !!}
                    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido del cliente']) !!}
                </div>

                @error('apellido')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    {!! Form::label('direccion', 'Direccion') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la direccion del cliente']) !!}
                </div>

                @error('direccion')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    {!! Form::label('cedula', 'Cedula') !!}
                    {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cedula del cliente']) !!}
                </div>

                @error('cedula')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    {!! Form::label('edad', 'Edad') !!}
                    {!! Form::text('edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la edad del cliente']) !!}
                </div>

                @error('edad')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    {!! Form::label('telefono', 'Telefono') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del cliente']) !!}
                </div>

                @error('telefono')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el coreeo electronico del cliente']) !!}

                    @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                </div>



                 {!! Form::submit('Crear cliente', ['class' => 'btn btn-primary mt-2']) !!}
                 <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.clientes.index')}}" >Volver</a>

            {!! Form::close() !!}

        </div>
    </div>
@stop

