@extends('adminlte::page')

@section('title', 'Editar cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')

<div class="card">
        <div class="card-body">
            {!! Form::model($horarios, ['route' => ['admin.horario_agenda.update', $horarios], 'method' => 'put']) !!}
            <div class="form-group col-md-4">  
                    <label for="Estado">Estado</label>
                    <select class="form-control" name="Estado" id="Estado">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>

                </div>



                <div class="form-group col-md-4">
                        <label for="">Servicio</label>
                <select class="form-control" name="id_servi" id="">
                    @foreach($servicios as $key =>$value)
                         <option value="{{$value->id}}">{{$value->nombre_servicio}} </option>
                    @endforeach
                    </select>


                </div>




                             <div class="form-group col-md-4">
                             <label for="">Fecha</label>
                            <input type="date" class="form-control" name="Fecha" id="Fecha" aria-describedby="Fecha" placeholder="">

                            </div>

                    @error('Fecha')
                        <span class="text-danger">{{$message}}</span>
                    @enderror


                <div class="form-group col-md-4">
                            <small id="Hora_ini" class="form-text text-muted">Hora inicio</small>
                            <input type="time" class="form-control" name="Hora_ini" id="Hora_ini" aria-describedby="Hora_ini" placeholder="">
                            </div>



                            <div class="form-group col-md-4">
                            <small id="Hora_fin" class="form-text text-muted">Hora Final</small>
                            <input type="time" class="form-control" name="Hora_fin" id="Hora_fin" aria-describedby="Hora_fin" placeholder="">
                            </div>


            <div class="form-group col-md-4">
                <label for="name">Usuarios</label>
                <select class="form-control" name="id_user" id="" >
                @foreach ($users as $key =>$value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
                </select>
         </div>

</div>


{!! Form::close() !!}


@stop
