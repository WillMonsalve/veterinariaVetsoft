@extends('adminlte::page')

@section('title', 'usuarios')

@section('content_header')
    <h1>Editar Horario</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($horario, ['route' => ['admin.horarios.update', $horario], 'autocomplete' => 'off', 'method' => 'put']) !!}



             <div class="form-group col-md-4">
                    <label for="Estado">Estado</label>
                    <select class="form-control" name="Estado" id="Estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>

                </div>

                <div class="form-group col-md-4">
                    {!! Form::label('servicio_id', 'Servicio') !!}
                    {!! Form::select('servicio_id',$servicios, $horario->id_servi, ['class' => 'form-control']) !!}

                    @error('servicio_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group col-md-4">
                             <label for="">Fecha</label>
                            <input type="date" class="form-control" name="Fecha" id="Fecha" aria-describedby="Fecha" placeholder="">

                </div>

                <div class="form-group col-md-4">
                            <small id="Hora_ini" class="form-text text-muted">Hora inicio</small>
                            <input type="time" class="form-control" name="Hora_ini" id="Hora_ini" aria-describedby="Hora_ini" placeholder="">
                </div>

                <div class="form-group col-md-4">
                            <small id="Hora_fin" class="form-text text-muted">Hora Final</small>
                            <input type="time" class="form-control" name="Hora_fin" id="Hora_fin" aria-describedby="Hora_fin" placeholder="">
                 </div>

                 <div class="form-group">
                    {!! Form::label('rol', 'Servicio') !!}
                    {!! Form::select('rol',$roles, $horario->rol, ['class' => 'form-control']) !!}

                    @error('rol')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>









            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

            <td>
                <a  class="bi bi-arrow-bar-left btn btn-outline-success"  href="{{route('admin.horarios.index')}}" >Volver</a>

            </td>
            {!! Form::close() !!}


        </div>
    </div>
@stop
