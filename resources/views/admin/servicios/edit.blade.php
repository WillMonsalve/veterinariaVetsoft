@extends('adminlte::page')

@section('title', 'Vetsoft')

@section('content_header')
    <h1>Editar Servicios</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($servicio, ['route' => ['admin.servicios.update', $servicio], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del servicio']) !!}

                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción de servicio']) !!}

                    @error('descripcion')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('duracion', 'Duracion') !!}
                    {!! Form::time('duracion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la duración del servicio']) !!}

                    @error('duracion')
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

                {!! Form::submit('Actualizar Servicio', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop
