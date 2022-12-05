@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Editar Clientes</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($cliente, ['route' => ['admin.clientes.update', $cliente], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('nombre_cliente', 'Nombre') !!}
                    {!! Form::text('nombre_cliente', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del servicio']) !!}

                    @error('nombre_cliente')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('apellido', 'Apellido') !!}
                    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido del cliente']) !!}

                    @error('apellido')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('direccion', 'Dirección') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la direccion']) !!}

                    @error('direccion')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('cedula', 'cédula') !!}
                    {!! Form::number('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cédula']) !!}

                    @error('cedula')
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
                    {!! Form::label('telefono', 'Telefono') !!}
                    {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono']) !!}

                    @error('telefono')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico']) !!}

                    @error('email')
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

                <a href="{{ route('admin.clientes.show', $cliente)}}" class="btn btn-sm btn-success mr-3"> Volver </a>

            {!! Form::close() !!}
        </div>
    </div>

@stop
