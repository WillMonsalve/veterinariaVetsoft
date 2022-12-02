@extends('adminlte::page')

@section('title', 'Editar cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($cita, ['route' => ['admin.citas.update', $cita], 'method' => 'put']) !!}

            <div class="form-group">
                <label for="cliente">Cliente</label>
                <select name="" id="" class="form-control">
                    @foreach ($cliente as $clientes)
                        <option value="{{ $clientes->cliente_id }}">{{ $clientes->nombre }}</option>
                    @endforeach
                </select>

                @error('cliente')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                </div>

                <div class="form-group">
                <label for="name">Servicios</label>
                <select name="" id="" class="form-control">
                    @foreach ($servicios as $servicio)
                        <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                    @endforeach
                </select>

                @error('servicio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('fecha', 'Fecha') !!}
                    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}

                    @error('fecha')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                @error('fecha')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('hora', 'Hora') !!}
                    {!! Form::time('hora', null, ['class' => 'form-control']) !!}

                    @error('hora')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="1">Activo</option>
                        <option value="2">Cancelada</option>
                    </select>
                </div>


                {!! Form::submit('Actualizar Cita', ['class' => 'btn btn-primary']) !!}

                <td>
                    <a class="btn btn-danger" href="{{route('admin.citas.index')}}">Regresar</a>
                </td>
            {!! Form::close() !!}
        </div>
    </div>

@stop

