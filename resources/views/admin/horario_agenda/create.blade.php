@extends('adminlte::page')

@section('title', 'CREAR')

@section('content_header')
    <h1>Crear</h1>
@stop
@section('content')

<div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.horario_agenda.store']) !!}
            {!! Form::submit('Crear horario', ['class' => 'btn btn-dark']) !!}
            <br>
            <br>
             <div class="form-group">
                <div class="col-md-6">
                    <label for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>

                </div>
              </div>
              <div class="form-group">
                <label>Servicios</label>

                <select class="form-control" name="id_servi" id="">
                    @foreach($servicios as $key =>$value)
                         <option value="{{$value->id}}">{{$value->nombre_servicio}} </option>
                    @endforeach
                    </select>
                @error('servicio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                </div>



                  <div class="row">
                            <div class="form-group col-md-6">
                            <small id="Fecha" class="form-text text-muted-success">Fecha Inicio</small>
                            <input type="date" class="form-control" name="Fecha" id="Fecha" aria-describedby="Fecha" placeholder="">

                            </div>

                    @error('Fecha')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                            <div class="row">
                            <div class="col-md-12">
                            <small id="Hora_ini" class="form-text text-muted">Hora inicio</small>
                            <input type="time" class="form-control" name="Hora_ini" id="Hora_ini" aria-describedby="Hora_ini" placeholder="">
                            </div>

                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <small id="Hora_fin" class="form-text text-muted">Hora Final</small>
                            <input type="time" class="form-control" name="Hora_fin" id="Hora_fin" aria-describedby="Hora_fin" placeholder="">
                            </div>
                        <hr>


{!! Form::close() !!}


@stop
