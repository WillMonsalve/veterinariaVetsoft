@extends('adminlte::page')

@section('title', 'Citas')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

@section('content_header')
    <h1>Registrar Nueva Cita</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.citas.store', 'method' => 'post']) !!}


                <div class="form-group">
                <label for="text">Cliente</label>
                <select class="form-control" name="cliente_id" id="">
                    @foreach($cliente as $key =>$value)
                         <option value="{{$value->id}}">{{$value->nombre_cliente}} </option>
                    @endforeach
                    </select>

                @error('cliente')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                </div>

                <div class="form-group">
                <label>Servicios</label>

                <select class="form-control" name="servicio_id" id="">
                    @foreach($servicios as $key =>$value)
                         <option value="{{$value->id}}">{{$value->nombre_servicio}} </option>
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

                {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}

                <td>

                <a  class="bi bi-backspace-fill btn btn-danger"  href="{{route('admin.citas.index')}}" >Regresar</a>
                </td>
            {!! Form::close() !!}
        </div>
    </div>

@stop






