@extends('adminlte::page')

@section('title', 'usuarios')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($horarios, ['route' => ['admin.horarios.update', $horarios], 'autocomplete' => 'off', 'method' => 'put']) !!}

                

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

                <div class="form-group col-md-4">
                            <small id="Hora_ini" class="form-text text-muted">Hora inicio</small>
                            <input type="time" class="form-control" name="Hora_ini" id="Hora_ini" aria-describedby="Hora_ini" placeholder="">
                </div>

                <div class="form-group col-md-4">
                            <small id="Hora_fin" class="form-text text-muted">Hora Final</small>
                            <input type="time" class="form-control" name="Hora_fin" id="Hora_fin" aria-describedby="Hora_fin" placeholder="">
                 </div>

                 <div class="form-group col-md-4">
                <label for="name">Responsable</label>
                <select class="form-control" name="rol" id="" >
                @foreach ($roles as $key =>$value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
                </select>
                  </div>

         
             
                

                           


                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary mt-2']) !!}
              {!! Form::close() !!}

        </div>
    </div>
@stop
